<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Input as input;
use App\User;
use App\Borrow;
use Auth;
use Hash;
use Session;
use DB;
use App\Deposit;
use DateTime;
use Carbon\Carbon;
use App\Lib\CoinPaymentsAPI;

Define('URL','http://18.188.45.2/admin');

class borrowController extends Controller
{
  public function   wallet_edit(Request $request)
  {
      User::where('id',Auth::id())->update(['wallet'=>$request->wallet_address]);

      return back()->with('success','Wallet address has been Updated!');
  }
    public function index()
    {

   $user = User::find(Auth::id());
   $kyc= DB::table('kyc')->where('user_id',Auth::id())->first();
   
        // $track_borrow=DB::table('borrow')->where('user_id',Auth::id())->where('status','!=',3)->get();

        // if(count($track_borrow) > 0){
        //    return back()->with('alert', 'Sorry, You already have an ongoing borrow!');
        // }else{
            return view('borrow.borrow')->with('user',$user)->with('kyc',$kyc)->with('kyc_enable','disabled')->with('active','')->with('borrow','disabled')->with('active_pf','active')->with('active_kyc','disabled')->with('active_b','disabled');
        // }
    

       
    }

   public function profile()
    {
          $user = User::find(Auth::id());
          return view('borrow.profile')->with('user',$user);

    } 
    public function kyc()
    {
     $kyc= DB::table('kyc')->where('user_id',Auth::id())->first();
          return view('borrow.kyc')->with('kyc',$kyc);

    }
    public function my_borrow()
    {
        $borrow1= DB::table('borrow')->where('user_id',Auth::id())->get();
        return view('borrow.myborrow')->with('borrow',$borrow1);
    }
    public function transactions()
    {
        $borrow= DB::table('borrow')->where('user_id',Auth::id())->get();
        return view('borrow.trans')->with('borrow',$borrow);
    }
    
    public function update_userinfo(Request $request)
    {
        

        //print_r($request->all());
        //exit;
        $user = User::find(Auth::id());

        $user->name=$request->name;
        // $user->username=$request->username;
        $user->email=$request->email;
        $user->mobile=$request->phone;
        $user->country=$request->countries;
        $user->city=$request->city;
        $user->address=$request->address;
        $user->postal_code=$request->postal_code;

        $file=$request->file('avatar');

        
     $image_url="";

    if($file !==null ||
     $request->avatar_image ==""){
        $destinationPath = 'core/public/uploads';

        $file_name = rand(111111,999999).'.'.$file->getClientOriginalExtension();
        $file->move($destinationPath,$file_name);
     
        $image_url = $this->getBaseUrl().$destinationPath.'/'.$file_name;
       
    }else{
        $image_url=$request->avatar_image;
    }
        $user->avatar=$image_url;      

        $user->twitter_url=$request->twitter;

        $user->linkedin_url=$request->linkedin;

        $user->save();

    $user = User::find(Auth::id());
   $kyc= DB::table('kyc')->where('user_id',Auth::id())->first();
   
   $message= $user->username. " Borrow user has <br> updated his profile info";

    DB::table('notifications')->insert(['user_id'=>Auth::id(),'message'=>$message,'dashboard'=>'admin','link'=>URL.'/admin/admin/borrow_users']);


        return view('borrow.borrow')->with('user',$user)->with('kyc',$kyc)->with('kyc_enable','pill')->with('active','')->with('borrow','disabled')->with('active_pf','')->with('active_kyc','active')->with('active_b','disabled');
        
        # code...
    }

    public function update_userinfo1(Request $request)
    {


        //print_r($request->all());
        //exit;
        $user = User::find(Auth::id());

        $user->name=$request->name;
        // $user->username=$request->username;
        $user->email=$request->email;
        $user->mobile=$request->phone;
        $user->country=$request->countries;
        $user->city=$request->city;
        $user->address=$request->address;
        $user->postal_code=$request->postal_code;

        $file=$request->file('avatar');

        
     $image_url="";

    if($file !==null ||
     $request->avatar_image ==""){
        $destinationPath = 'core/public/uploads';

        $file_name = rand(111111,999999).'.'.$file->getClientOriginalExtension();
        $file->move($destinationPath,$file_name);
     
        $image_url =$this->getBaseUrl().$destinationPath.'/'.$file_name;
       
    }else{
        $image_url=$request->avatar_image;
    }
        $user->avatar=$image_url;      

        $user->twitter_url=$request->twitter;

        $user->linkedin_url=$request->linkedin;

        $user->save();

    $user = User::find(Auth::id());
   $kyc= DB::table('kyc')->where('user_id',Auth::id())->first();
   
    $message= $user->username. " Borrow user has <br> updated his Profile info";

    DB::table('notifications')->insert(['user_id'=>Auth::id(),'message'=>$message,'dashboard'=>'admin','link'=>URL.'/admin/admin/borrow_users']);

        return back()->with('success','Your Profile has been updated');
        
        # code...
    }
    public function kyc_update(Request $request)
    {
        
        
         $id_proof=$request->file('id_proof_url');

        
     $id_proof_url="";

    if($id_proof !==null ||
     $request->id_pf ==""){
        $destinationPath = 'core/public/uploads';

        $file_name = rand(111111,999999).'.'.$id_proof->getClientOriginalExtension();
        $id_proof->move($destinationPath,$file_name);
     
        $id_proof_url = $this->getBaseUrl().$destinationPath.'/'.$file_name;
       
    }else{
        $id_proof_url=$request->id_pf;
    }

     $address_proof=$request->file('address_proof_url');

        
     $address_proof_url="";

    if($address_proof !==null ||
     $request->address_pf ==""){
        $destinationPath = 'core/public/uploads';

        $file_name = rand(111111,999999).'.'.$address_proof->getClientOriginalExtension();
        $address_proof->move($destinationPath,$file_name);
     
        $address_proof_url = $this->getBaseUrl().$destinationPath.'/'.$file_name;
       
    }else{
        $address_proof_url=$request->address_pf;
    }


     $face_proof=$request->file('face_proof_url');

        
     $face_proof_url="";

    if($face_proof !==null ||
     $request->face_pf ==""){
        $destinationPath = 'core/public/uploads';

        $file_name = rand(111111,999999).'.'.$face_proof->getClientOriginalExtension();
        $face_proof->move($destinationPath,$file_name);
     
        $face_proof_url = $this->getBaseUrl().$destinationPath.'/'.$file_name;
       
    }else{
        $face_proof_url=$request->face_pf;
    }
    
    if(DB::table('kyc')->where('user_id',Auth::id())->count() ==0){

        DB::table('kyc')->insert(['user_id'=>Auth::id(),'id_proof_type'=> $request->id_proof,'id_proof'=>$id_proof_url,'address_proof_type'=>$request->address_proof,'address_proof'=>
            $address_proof_url,'face_proof_type'=>$request->face_proof,'face_proof'=>$face_proof_url]);

    }else{
        DB::table('kyc')->where('user_id',Auth::id())->update(['id_proof_type'=> $request->id_proof,'id_proof'=>$id_proof_url,'address_proof_type'=>$request->address_proof,'address_proof'=>$address_proof_url,'face_proof_type'=>$request->face_proof,'face_proof'=>$face_proof_url]);


    }

   $user = User::find(Auth::id());
   $kyc= DB::table('kyc')->where('user_id',Auth::id())->first();

   $message= $user->username. " Borrow user has  <br> updated his KYC";

    DB::table('notifications')->insert(['user_id'=>Auth::id(),'message'=>$message,'dashboard'=>'admin','link'=>URL.'/admin/admin/borrow_users']);

   
        return view('borrow.borrow')->with('user',$user)->with('kyc',$kyc)->with('kyc_enable','pill')->with('active','')->with('borrow','pill')->with('active_pf','')->with('active_kyc','')->with('active_b','active');

    }
public function kyc_update1(Request $request)
    {
       
        
         $id_proof=$request->file('id_proof_url');

        
     $id_proof_url="";

    if($id_proof !==null ||
     $request->id_pf ==""){
        $destinationPath = 'core/public/uploads';

        $file_name = rand(111111,999999).'.'.$id_proof->getClientOriginalExtension();
        $id_proof->move($destinationPath,$file_name);
     
        $id_proof_url = $this->getBaseUrl().$destinationPath.'/'.$file_name;
       
    }else{
        $id_proof_url=$request->id_pf;
    }

     $address_proof=$request->file('address_proof_url');

        
     $address_proof_url="";

    if($address_proof !==null ||
     $request->address_pf ==""){
        $destinationPath = 'core/public/uploads';

        $file_name = rand(111111,999999).'.'.$address_proof->getClientOriginalExtension();
        $address_proof->move($destinationPath,$file_name);
     
        $address_proof_url = $this->getBaseUrl().$destinationPath.'/'.$file_name;
       
    }else{
        $address_proof_url=$request->address_pf;
    }


     $face_proof=$request->file('face_proof_url');

        
     $face_proof_url="";

    if($face_proof !==null ||
     $request->face_pf ==""){
        $destinationPath = 'core/public/uploads';

        $file_name = rand(111111,999999).'.'.$face_proof->getClientOriginalExtension();
        $face_proof->move($destinationPath,$file_name);
     
        $face_proof_url = $this->getBaseUrl().$destinationPath.'/'.$file_name;
       
    }else{
        $face_proof_url=$request->face_pf;
    }
    
    if(DB::table('kyc')->where('user_id',Auth::id())->count() ==0){

        DB::table('kyc')->insert(['user_id'=>Auth::id(),'id_proof_type'=> $request->id_proof,'id_proof'=>$id_proof_url,'address_proof_type'=>$request->address_proof,'address_proof'=>
            $address_proof_url,'face_proof_type'=>$request->face_proof,'face_proof'=>$face_proof_url]);

    }else{
        DB::table('kyc')->where('user_id',Auth::id())->update(['id_proof_type'=> $request->id_proof,'id_proof'=>$id_proof_url,'address_proof_type'=>$request->address_proof,'address_proof'=>$address_proof_url,'face_proof_type'=>$request->face_proof,'face_proof'=>$face_proof_url]);


    }
$user = User::find(Auth::id());
  

   $message= $user->username. " Borrow user has  <br> updated his KYC";

    DB::table('notifications')->insert(['user_id'=>Auth::id(),'message'=>$message,'dashboard'=>'admin','link'=>URL.'/admin/admin/borrow_users']);

  
   
        return back()->with('success','Kyc has been updated');

    }

    public function apply_borrow(Request $request)
    {
    
    $borrow=new Borrow;
    $borrow->user_id=Auth::id();
    $borrow->monthly_payments=$request->monthly_payments;
    $borrow->amount_in_btc=$request->amount_in_btc;
    $borrow->monthly_payments_usd=$request->monthly_payments_usd;
    $borrow->repay=$request->repay;
    $borrow->repay_usd=$request->repay_usd;
    $borrow->intrest =$request->intrest;
    $borrow->reason=$request->reason;
    $borrow->installment=$request->installment;
    $borrow->terms_accept=$request->terms_conditions;

    //print_r($borrow);exit;

    $borrow->save();

    $borrow->id;

$date = date('Y-m-d');
    for($i=0;$i<$borrow->installment;$i++){

     

    $newdate = strtotime ( '+1 month' , strtotime ( $date ) ) ;
    $date = date ( 'Y-m-j' , $newdate );

    DB::table('payments')->insert(['user_id'=>Auth::id(),'borrow_id'=>$borrow->id,'amount'=>$borrow->monthly_payments,'due_date'=>$date]);

    }
        $borrow1= DB::table('borrow')->where('user_id',Auth::id())->get();
     $user = User::find(Auth::id());
    
    $message= $user->username. " Borrow user has <br> requested for borrowing";

    DB::table('notifications')->insert(['user_id'=>Auth::id(),'message'=>$message,'dashboard'=>'admin','link'=>URL.'/admin/admin/borrow_request']);

        return redirect()->route('myborrowings')->with('borrow',$borrow1);

    
    }
    public function getajaxMonth(Request $request)
    {

   
    $data=DB::table('intrest')->where('month',$request->month)->first();
    echo $data->percentage;


    }
    public function my_payments()
    {

          $user = User::find(Auth::id());

          $borrow=DB::table('borrow')->where('status','=',1)->where('user_id','=',Auth::id())->first();



        $last_start = new Carbon('first day of last month');
        $last_end = new Carbon('last day of last month');

        $next_start = new Carbon('first day of next month');
        $next_end = new Carbon('last day of next month');
       

        $start = Carbon::now()->startOfMonth();
        $end=Carbon::now()->endOfMonth();

      $this_month = $this_month_paid=$this_month_remaining= $lastMonth_remaining= $lastMonth_paid= $lastMonth =$upcomming=$upcomming_paid=$upcomming_remaining=$new_user=0;  

        if(count( $borrow) !=0){

            $new_user=1;
         $this_month=DB::table('payments')
         ->where('borrow.user_id',$borrow->user_id)
          ->whereBetween('due_date', [$start, $end])
          ->join('borrow','borrow.id','payments.borrow_id')
          ->select('borrow.*','payments.*','payments.id as payment_id','borrow.id as borrow_id')
             ->get();

             if(count($this_month)!=0){
          $this_month_paid=DB::table('payments')->where('borrow_id','=', $this_month[0]->borrow_id)->where('status','=','2')->sum('amount'); 

          $this_month_remaining=$this_month[0]->repay- $this_month_paid;  
      }

         $upcomming=DB::table('payments')
         ->where('borrow.user_id',$borrow->user_id)
          ->whereBetween('due_date', [$next_start, $next_end])
           ->join('borrow','borrow.id','payments.borrow_id')
           ->select('borrow.*','payments.*','payments.id as payment_id')
         ->get();
         $upcomming_paid = $upcomming_remaining =0;
         if(count($upcomming)!=0){
          $upcomming_paid=DB::table('payments')->where('borrow_id','=', $upcomming[0]->borrow_id)->where('status','=','2')->sum('amount'); 
            $upcomming_remaining=$upcomming[0]->repay- $upcomming_paid;  
}
        
         
        $lastMonth=DB::table('payments')
        ->where('borrow.user_id',$borrow->user_id)
          ->whereBetween('due_date', [$last_start, $last_end])
           ->join('borrow','borrow.id','payments.borrow_id')
             ->select('borrow.*','payments.*','payments.id as payment_id')
         ->get();
            $lastMonth_paid= $lastMonth_remaining=0;
        if(count($lastMonth)!=0){

        $lastMonth_paid=DB::table('payments')->where('borrow_id','=', $lastMonth[0]->borrow_id)->where('status','=','2')->sum('amount'); 
        
            $lastMonth_remaining=$lastMonth[0]->repay- $lastMonth_paid;  
}
}
    $Borrow_id=DB::table('borrow')->where('user_id','=',Auth::id())->get();

        return view('borrow.payments')->with('this_month',$this_month)->with('last_month',$lastMonth)->with('upcomming',$upcomming)->with('this_month_paid',$this_month_paid)->with('this_month_remaining',$this_month_remaining)->with('lastMonth_paid',$lastMonth_paid)->with('lastMonth_remaining',$lastMonth_remaining)->with('upcomming_paid',$upcomming_paid)->with('upcomming_remaining',$upcomming_remaining)->with('new_user',$new_user)->with('borrow_id',$Borrow_id)->with('history',0);
    }

    public function payment_by_id($id)
    {
       $payments=DB::table('payments')
         ->where('borrow.id',$id)
           ->join('borrow','borrow.id','payments.borrow_id')
           ->select('borrow.*','payments.*','payments.id as payment_id')
         ->get();

  $Borrow_id=DB::table('borrow')->where('user_id','=',Auth::id())->get();
          return view('borrow.payments')->with('payments',$payments)->with('history',1)->with('new_user',0)->with('borrow_id',$Borrow_id);
    }

    public function pay(Request $request)
    {


  $getPrivateKey=DB::table('settings')->where('keyname','private_key')->first();
  $getPublicKey=DB::table('settings')->where('keyname','public_key')->first();
 
  $cps = new CoinPaymentsAPI();

  $cps->Setup($getPrivateKey->value, $getPublicKey->value);
  $callbackUrl = route('ipn.coinPay');
  $req = array(
    'amount' => $request->amount,
    'currency1' => 'BTC',
    'currency2' => 'BTC',
    'address' => '', 
    'item_name' => 'Monthly payments',
    'ipn_url' => $callbackUrl,
  );

  // See https://www.coinpayments.net/apidoc-create-transaction for all of the available fields
      
  $result = $cps->CreateTransaction($req);
  
  if ($result['error'] == 'ok') {

    $trx_id=$result['result']['txn_id'];
    $status_url=$result['result']['status_url'];
    $qr_url=$result['result']['qrcode_url'];
      $sent_address=$result['result']['address'];

    DB::table('payments')->where('id',$request->id)->update(['trans_id'=>$trx_id,'status_url'=>$status_url,'qr_url'=>$qr_url,'status'=>1,'sent_to_address'=>$sent_address]);
    $payments=DB::table('payments')->where('id',$request->id)->first();

    $user = User::find(Auth::id());
        $message= $user->username. " Borrow user has  paid ".date("F", strtotime($payments->due_date))."'s <br> Payment.  Please verify.";

    DB::table('notifications')->insert(['user_id'=>Auth::id(),'message'=>$message,'dashboard'=>'admin','link'=>URL.'/admin/borrow/payments']);

   return redirect()->route('pay_status_monthly',$request->id)->with("good",'pay Status');

    return back()->with('success','your Monthly Payment has been paid successfully');
    
  } else {
   

    return back()->with('alert',$result['error']);
   
  }
      # code...
    }
    public function deposit_amount(Request $request)
    {
      



  $getPrivateKey=DB::table('settings')->where('keyname','private_key')->first();
  $getPublicKey=DB::table('settings')->where('keyname','public_key')->first();
 
  $cps = new CoinPaymentsAPI();

  $cps->Setup($getPrivateKey->value, $getPublicKey->value);
  
  $req = array(
    'amount' => $request->amountf,
    'currency1' => 'BTC',
    'currency2' => 'BTC',
    'address' => '', 
    'item_name' => 'Deposit',
    'ipn_url' => $request->ipn_url,
  );

  // See https://www.coinpayments.net/apidoc-create-transaction for all of the available fields
      
  $result = $cps->CreateTransaction($req);


  
  if ($result['error'] == 'ok') {

   // $le = php_sapi_name() == 'cli' ? "\n" : '<br />';
   // print 'Transaction created with ID: '.$result['result']['txn_id'].$le;
   // print 'Buyer should send '.sprintf('%.08f', $result['result']['amount']).' BTC'.$le;
   //   print 'Status URL: '.$result['result']['status_url'].$le;

   //  exit;
    $trx_id=$result['result']['txn_id'];
    $status_url=$result['result']['status_url'];
    $qr_url=$result['result']['qrcode_url'];
      $sent_to_address=$result['result']['address'];

      $depo= new Deposit;

      $depo->user_id= Auth::id();
      $depo->amount = $request->amountf;
       $depo->status = 0;
       $depo->trxid = $trx_id;
       $depo->status_url= $result['result']['status_url'];
       $depo->qr_url= $result['result']['qrcode_url'];
       $depo->sent_to_address= $result['result']['address'];
       $depo->save();


    $user = User::find(Auth::id());
        $message= $user->username. " has deposited ".$request->amountf . ' BTC <br> Please check and approve.';

    DB::table('notifications')->insert(['user_id'=>Auth::id(),'message'=>$message,'dashboard'=>'admin','link'=>URL.'/admin/deposits/requests']);


  
     return redirect()->route('pay_status',$depo->id)->with("good",'pay Status');
   
    
  } else {
   
   return view('user.deposit.deposit')->with('alert',$result['error']);
   
  }
    }


    public function getTrxStatus(Request $request)
    {//
     
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

 echo $deposit;
  
    }

    public function get_status($id)
    {


     
      $getPrivateKey=DB::table('settings')->where('keyname','private_key')->first();

  $getPublicKey=DB::table('settings')->where('keyname','public_key')->first();
 
  $cps = new CoinPaymentsAPI();

  $cps->Setup($getPrivateKey->value, $getPublicKey->value);
  

      $req = array(
        'txid' => $id,
        'full' => '1',
      );

      // See https://www.coinpayments.net/apidoc-create-transaction for all of the available fields
          
      $result = $cps->getTransactionStatus($req);


      if ($result['error'] == 'ok') {

  
        $res=$result['result'];

       

        return response()->json([$res]);   

  
    }

     
      
    }

    


     public function pay_status($id)
    {
      $deposit=DB::table('deposits')->where('id',$id)->first();

      //print_r($deposit);exit;
      return view('user.deposit.status')->with('status',$deposit);

      # code...
    }

     public function pay_status_monthly($id)
    {
      $payments=DB::table('payments')->where('id',$id)->first();

      //print_r($deposit);exit;
      return view('borrow.status')->with('status',$payments);

      # code...
    }


}

