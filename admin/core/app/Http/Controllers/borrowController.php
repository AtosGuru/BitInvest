<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Deposit;
use App\Investment;
use App\Translog;
use DB;
use Carbon\Carbon;

use App\Lib\CoinPaymentsAPI;

class borrowController extends Controller
{
    //

    public function users()
    {
    $users = User::where('user_type',2)->orderBy('id', 'desc')->paginate(10);

    	return view('admin.borrow.users', compact('users'));

    }
     public function single_user($id)
    {

    $users = User::where('id',$id)->first();
    $kyc=DB::table('kyc')->where('user_id',$id)->first();

      return view('admin.borrow.single')->with('user',$users)->with('kyc',$kyc);

    }

    public function borrow_user_translog()
    {
    	$trans=DB::table('users')
    	->join('borrow','borrow.user_id','users.id')->paginate(10);

    	return view('admin.borrow.translog', compact('trans'));

    }
    public function show_package()
    {
    	$package=DB::table('intrest')->get();

    	return view('admin.borrow.package', compact('package'));
    }
    public function update_package(Request $request)
    {
    	# code...
    	$i=0;
    	foreach($request->month as $month){

    		$j=$i+1;
    		DB::table('intrest')->where('id',$j)->update(['month'=>$month,'percentage'=>$request->percentage[$i]]);
    		$i++;
    	}	return back();
    	//print_r($request->all());exit;
    }
    public function requests()
    {


    	$data=DB::table('users')
    	->where('borrow.status',0)
    	->join('borrow','borrow.user_id','users.id')->get();
    	
    	 
    	 return view('admin.borrow.requests')->with('data',$data);
    }

     public function ongoing()
    {


        $data=DB::table('users')
        ->where('borrow.status',1)
        ->join('borrow','borrow.user_id','users.id')->get();
        
         
         return view('admin.borrow.ongoing_borrows')->with('data',$data);
    }

    public function verify($id)
    {
    	$trans=DB::table('users')
    	->where('borrow.id',$id)
    	->join('borrow','borrow.user_id','users.id')->get();
    	$kyc=DB::table('kyc')->where('user_id',$trans[0]->user_id)->first();

$user=DB::table('users')->where('id',$trans[0]->user_id)->first();


        return view('admin.borrow.verify_kyc')->with('data',$trans)->with('kyc',$kyc)->with('users',$user);
    }
    public function approve($id)
    {
    	DB::table('borrow')->where('id',$id)->update(['status'=>1]);

    	$user=DB::table('users')
    	->where('borrow.id',$id)
    	->join('borrow','borrow.user_id','users.id')->select('users.*')->get();

    
    	  $msg =  'Your borrow Processed Successfully';

        send_email($user[0]->email, $user[0]->username, 'borrow Processed', $msg);
        $sms =  'Your borrow Processed Successfully';
        send_sms($user[0]->mobile, $sms);


        $data=DB::table('users')
    	->where('borrow.status',0)
    	->join('borrow','borrow.user_id','users.id')->get();

    		 $message= "Admin has Approved your Borrow Request";

    DB::table('notifications')->insert(['user_id'=>$user[0]->id,'message'=>$message,'dashboard'=>'user','link'=>'borrow']);

    		return redirect()->route('borrow.requests')->with('data',$data)->with('success', 'Borrow Request Approved Successfully!');
    	 
    	// return view('')->with('data',$data)->
       // return back()->with('success', 'Borrow Request Approved Successfully!');
    }

    public function delete($id)
    {

    	$user=DB::table('users')
    	->where('borrow.id',$id)
    	->join('borrow','borrow.user_id','users.id')->select('users.*')->get();

		DB::table('borrow')->where('id',$id)->update(['status'=>2]);
        $msg =  'Your Borrow Request canceled by Admin';
        send_email($user[0]->email, $user[0]->username, 'Borrow Canceled', $msg);
        $sms =  'Your Borrow Request canceled by Admin';
        send_sms($user[0]->mobile, $sms);

	 	$data=DB::table('users')
    	->where('borrow.status',0)
    	->join('borrow','borrow.user_id','users.id')->get();

         $message= "Admin has Declined your Borrow Request";

    DB::table('notifications')->insert(['user_id'=>$user[0]->id,'message'=>$message,'dashboard'=>'user','link'=>'borrow']);

    		
    		return redirect()->route('borrow.requests')->with('data',$data)->with('success', 'Borrow Request Canceled Successfully!');
        
    }
     public function my_payments()
    {

        $start = Carbon::now()->startOfMonth();
        $end=Carbon::now()->endOfMonth();

        $data=DB::table('users')
        ->where('borrow.status',0)
        ->join('borrow','borrow.user_id','users.id')->get();
        
         $this_month=DB::table('payments')
          ->whereBetween('due_date', [$start, $end])
          ->where('payments.status',1)
          ->join('borrow','borrow.id','payments.borrow_id')
          ->join('users','users.id','borrow.user_id')
          ->select('borrow.*','payments.*','payments.id as payment_id','users.*')
             ->get();
        
         
         return view('admin.borrow.payments')->with('this_month',$this_month);
        
    }


    public function approve_payment($id)


    {
      $data=DB::table('payments')
      ->where('borrow.status',1)
      ->join('borrow','borrow.id','payments.borrow_id')->get();

    DB::table('payments')->where('id',$id)->update(['status'=>2]); // 2- approved

        $payments=DB::table('payments')->where('borrow_id',$data[0]->borrow_id)->where('status',2)->count();

        //echo $payments;exit;
        if($payments ==  $data[0]->installment){

          DB::table('borrow')->where('id',$data[0]->borrow_id)->update(['status'=>3]);

        }
       


        $message= "Borrow ID : " .$data[0]->borrow_id. " ". date("F", strtotime($data[0]->due_date))." Month's Payment <br> has been Approved by admin!";

    DB::table('notifications')->insert(['user_id'=>$data[0]->user_id,'message'=>$message,'dashboard'=>'user','link'=>'borrow']);
    

            return redirect()->route('borrow.payments')->with('success', 'Borrow Payments Approved Successfully!');
         
    }

    public function delete_payment($id)
    {

   
        DB::table('payments')->where('id',$id)->update(['status'=>3]); // 3 canceled

  $data=DB::table('payments')
      ->where('borrow.status',1)
      ->join('borrow','borrow.id','payments.borrow_id')->get();

$message= "Borrow ID : " .$data[0]->borrow_id. " ". date("F", strtotime($data[0]->due_date))." Month's Payment <br> has been Declined by admin!";

    DB::table('notifications')->insert(['user_id'=>$data[0]->user_id,'message'=>$message,'dashboard'=>'user','link'=>'borrow']);
            return redirect()->route('borrow.payments')->with('success', 'Borrow Payments Canceled Successfully!');
        
    }

 public function getTrxStatus(Request $request)
    {//
//     echo "hai";exit;
  $getPrivateKey=DB::table('settings')->where('keyname','private_key')->first();

  $getPublicKey=DB::table('settings')->where('keyname','public_key')->first();
 
  $cps = new CoinPaymentsAPI();

  $cps->Setup($getPrivateKey->value, $getPublicKey->value);
  
  $deposit=DB::table('deposits')->where('status','0')->get();


    foreach ($deposit as $dep){

      $req = array(
        'txid' => $dep->trxid,
        'full' => '1',
      );

      // See https://www.coinpayments.net/apidoc-create-transaction for all of the available fields
          
      $result = $cps->getTransactionStatus($req);
      $depo = Deposit::find($dep->id);
      $depo->status_text= $result['result']['status_text'];
      $depo->time_expires =$result['result']['time_expires'];
       $depo->time_created =$result['result']['time_created'];
       $depo->save();
    }

    $deposits = Deposit::where('deposits.status', 0)
                          ->join('users','users.id','=','deposits.user_id')
                          ->orderBy('deposits.id', 'desc')
                          ->select('deposits.id as cid','deposits.*','users.*')->get();

 echo $deposits;
  
    }


}
