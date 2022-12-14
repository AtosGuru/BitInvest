<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Deposit;
use App\Translog;
use App\User;
use App\Package;
use DB;

class DepositController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
    
      public function index()
    {
    	$deposits = Deposit::where('deposits.status', 1)
                          ->join('users','users.id','=','deposits.user_id')
                          ->orderBy('deposits.id', 'desc')
                          ->get();

    	return view('admin.deposit.deposits', compact('deposits'));
    }

    public function requests()
    {
    	$deposits = Deposit::where('deposits.status', 0)
                          ->join('users','users.id','=','deposits.user_id')
                          ->orderBy('deposits.id', 'desc')
                          ->select('deposits.id as cid','deposits.*','users.*')->get();

    	return view('admin.deposit.requests', compact('deposits'));
    }
      public function requestsAjax()
    {
      $deposits = Deposit::where('status', 1)->orderBy('id', 'desc')->get();

      return $deposits;
    }

    

     public function approve(Request $request, $id)
    {


        $deposit = Deposit::findorFail($id);

        $deposit['status'] = 1;
        $deposit->save();

        $user = User::find($deposit['user_id']);
        $user['balance'] = $user->balance + $deposit['amount'];
        $user->save();

        if ($user->refid != 0)
        {
            $pack = Package::first();

           $refer = User::find($user->refid);
           $coms = ($pack->fixcom*$deposit['amount'])/100;
           $refer['balance'] = $refer->balance + $coms;
           $refer->save();

            $rlog['user_id'] = $refer->id;
           $rlog['trxid'] = str_random(16);
           $rlog['amount'] = $coms;
           $rlog['balance'] = $refer->balance;
           $rlog['type'] = 1;
           $rlog['details'] = 'Referal Deposit Commision';
           Translog::create($rlog);
        }

        $tlog['user_id'] = $user->id;
       $tlog['trxid'] = str_random(16);
       $tlog['amount'] = $deposit['amount'];
       $tlog['balance'] = $user->balance;
       $tlog['type'] = 1;
       $tlog['details'] = 'Deposit Successfull';
       Translog::create($tlog);

        $msg =  'Your Deposit Processed Successfully';
        send_email($user->email, $user->firstname, 'Purchase Processed', $msg);
        $sms =  'Your Deposit Processed Successfully';
        send_sms($user->mobile, $sms);


         $message= "Your Deposit Processed Successfully<br> by admin";

        DB::table('notifications')->insert(['user_id'=>$user->id,'message'=>$message,'dashboard'=>'user','link'=>'Deposit']);
        
        return back()->with('success', 'Deposit Request Approved Successfully!');
    }

    public function destroy(Deposit $deposit)
    {
        $user = User::find($deposit['user_id']);

        $msg =  'Your Deposit Request canceled by Admin';
        send_email($user->email, $user->username, 'Deposit Canceled', $msg);
        $sms =  'Your Deposit Request canceled by Admin';
        send_sms($user->mobile, $sms);

        $deposit['status'] = 2;
        $deposit->save();

       $message= 'Your Deposit Request canceled<br> by Admin';

    DB::table('notifications')->insert(['user_id'=>$user->id,'message'=>$message,'dashboard'=>'user','link'=>'Deposit']);

        return back()->with('success', 'Deposit Canceled Successfully!');
    }
}
