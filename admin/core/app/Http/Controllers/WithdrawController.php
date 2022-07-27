<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Withdraw;
use App\User;
use App\Translog;


class WithdrawController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
    
    public function index()
    {
    	$withdrws = Withdraw::where('status', 1)->orderBy('id', 'desc')->get();

    	return view('admin.withdraw.index', compact('withdrws'));
    }

    public function requests()
    {
    	$withdrws = Withdraw::where('status', 0)->orderBy('id', 'desc')->get();

    	return view('admin.withdraw.requests', compact('withdrws'));
    }

     public function approve(Request $request, $id)
    {
        $withdr = Withdraw::findorFail($id);

        $withdr['status'] = 1;
        $withdr->save();

        $user = User::find($withdr['user_id']);

        $msg =  'Your Withdraw Processed Successfully';
        send_email($user->email, $user->username, 'Purchase Processed', $msg);
        $sms =  'Your Withdraw Processed Successfully';
        send_sms($user->mobile, $sms);

         $message= 'Your Withdraw Processed <br> Successfully';

    DB::table('notifications')->insert(['user_id'=>$user->id,'message'=>$message,'dashboard'=>'user','link'=>'Deposit']);


        return back()->with('success', 'Withdraw Request Approved Successfully!');
    }

    public function destroy(Withdraw $withdraw)
    {
        $user = User::find($withdraw['user_id']);
        $user['balance'] = $user->balance + $withdraw['amount'];
        $user->save();

            $tlog['user_id'] = $user->id;
           $tlog['trxid'] = str_random(16);
           $tlog['amount'] =$withdraw['amount'];
           $tlog['balance'] = $user->balance;
           $tlog['type'] = 1;
           $tlog['details'] = 'Withdraw Request Canceled';
           Translog::create($tlog);
               

        $msg =  'Your Withdraw Request canceled by Admin';
        send_email($user->email, $user->username, 'Withdraw Canceled', $msg);
        $sms =  'Your Withdraw Request canceled by Admin';
        send_sms($user->mobile, $sms);

        $withdraw->delete();

        $message= 'Your Withdraw Request <br> canceled by Admin';

    DB::table('notifications')->insert(['user_id'=>$user->id,'message'=>$message,'dashboard'=>'user','link'=>'Deposit']);

        return back()->with('success', 'Deposit Canceled Successfully!');
    }
}
