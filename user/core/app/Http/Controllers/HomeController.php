<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input as input;
use App\Lib\GoogleAuthenticator;
use App\User;
use App\General;
use App\Withdraw;
use App\Deposit;
use App\Investment;
use App\Translog;
use Auth;
use Hash;
use Session;
use DB;
use Carbon\Carbon;


Define('URL','http://18.188.45.2/admin');

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','ckstatus']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 

       $last_start = new Carbon('first day of last month');
        $last_end = new Carbon('last day of last month');

         $start = Carbon::now()->startOfMonth();
        $end=Carbon::now()->endOfMonth();

           $next_start = new Carbon('first day of next month');
        $next_end = new Carbon('last day of next month');


        $actinv = Investment::where('user_id', Auth::id())->where('status', 1)->first();
        $totali = Investment::where('user_id', Auth::id())->sum('amount');
          $user = User::find(Auth::id());
          $user_type=$user->user_type;

          $current=DB::table('payments')->where('user_id',Auth::id())->whereBetween('due_date', [$start, $end])->first();  

            $last=DB::table('payments')->where('user_id',Auth::id())->whereBetween('due_date', [$last_start, $last_end])->where('status',2)->first();



             $next_due=DB::table('payments')->where('user_id',Auth::id())->whereBetween('due_date', [$next_start, $next_end])->first(); 

            $total_paid=DB::table('payments')->where('user_id',Auth::id())->where('status',2)->count();


        $borrow=DB::table('borrow')->where('status','1')->where('user_id',Auth::id())->first();
         $totol_borrow=DB::table('borrow')->where('status','3')->where('user_id',Auth::id())->sum('amount_in_btc');

        return view('user.home', compact('actinv','totali','user_type','borrow','current','last','total_paid','next_due','totol_borrow'));
    }


      public function google2fa()
    {
        $gnl = General::first();
        $ga = new GoogleAuthenticator();
        $secret = $ga->createSecret();
        $qrCodeUrl = $ga->getQRCodeGoogleUrl(Auth::user()->username.'@'.$gnl->title, $secret);

        $prevcode = Auth::user()->secretcode;
        $prevqr = $ga->getQRCodeGoogleUrl(Auth::user()->username.'@'.$gnl->title, $prevcode);

        return view('user.goauth.create', compact('secret','qrCodeUrl','prevcode','prevqr'));

    }

    public function create2fa(Request $request)
    {
        $user = User::find(Auth::id());
        
        $this->validate($request,
            [
                'key' => 'required',
            ]);

        $user['secretcode'] = $request->key;
        $user['tauth'] = 1;
        $user['tfver'] = 1;
        $user->save();

        $msg =  'Google Two Factor Authentication Enabled Successfully';
        send_email($user->email, $user->username, 'Google 2FA', $msg);
        $sms =  'Google Two Factor Authentication Enabled Successfully';
        send_sms($user->mobile, $sms);

        return back()->with('success', 'Google Authenticator Enabeled Successfully');
    }

    public function disable2fa()
    {
        $user = User::find(Auth::id());
        $user['tauth'] = 0;
        $user['tfver'] = 1;
        $user['secretcode'] = '0';
        $user->save();

        $msg =  'Google Two Factor Authentication Disabled Successfully';
        send_email($user->email, $user->username, 'Google 2FA', $msg);
        $sms =  'Google Two Factor Authentication Disabled Successfully';
        send_sms($user->mobile, $sms);

        return back()->with('success', 'Two Factor Authenticator Disable Successfully');
    }

    //Change password
    public function changepass()
    {
        $user = User::find(Auth::id());
        return view('auth.changepass', compact('user'));
    }

    public function chnpass()
    {
      $user = User::find(Auth::id());

      if(Hash::check(Input::get('passwordold'), $user['password']) && Input::get('password') == Input::get('password_confirmation'))
      {
        $user->password = bcrypt(Input::get('password'));
        $user->save();

        $msg =  'Password Changed Successfully';
        send_email($user->email, $user->username, 'Password Changed', $msg);
        $sms =  'Password Changed Successfully';
        send_sms($user->mobile, $sms);

        return back()->with('success', 'Password Changed');
      }
      else 
      {
          return back()->with('alert', 'Password Not Changed');
      }
    }

    public function deposit()
    {

   $user = User::find(Auth::id());
   
        return view('user.deposit.deposit')->with('user',$user);
    }

    public function withdraw()
    {

        $active = Investment::where('user_id', Auth::id())->where('status', 1)->first();

        if ($active == null) 
        {
            return view('user.deposit.withdraw');
        }
        else
        {
            return back()->with('alert', 'Lending Return Not Completed Yet');
        }
            
    }

    public function transLog()
    {
      $trans = Translog::where('user_id', Auth::id())->orderby('id', 'desc')->paginate(10);

      return view('user.trans', compact('trans'));
    }
    public function depositLog()
    {
      $depos = Deposit::where('user_id', Auth::id())->orderby('id', 'desc')->paginate(10);

      return view('user.deposit.deplog', compact('depos'));
    }
    public function withdrawLog()
    {
      $withds = Withdraw::where('user_id', Auth::id())->orderby('id', 'desc')->paginate(10);

      return view('user.deposit.withlog', compact('withds'));
    }
    public function refered()
        {
          $refers = User::where('refid', Auth::id())->paginate(10);

          return view('user.refer', compact('refers'));
        }


    public function wdconfirm(Request $request)
     {
        $this->validate($request,
            [
                'amount' => 'required',
            ]);
        $user = User::find(Auth::id());

        if ($request->amount <= 0 || $request->amount > $user->balance)
         {
             return back()->with('alert', 'Insufficient Balance');
         }
         else
         {

            $user['balance'] = $user->balance - $request->amount;
            $user->save();

               $tlog['user_id'] = $user->id;
               $tlog['trxid'] = str_random(16);
               $tlog['amount'] = $request->amount;
               $tlog['balance'] = $user->balance;
               $tlog['type'] = 0;
               $tlog['details'] = 'Withdraw Request Sent';
               Translog::create($tlog);

            $withd['user_id'] = Auth::id();
            $withd['wdid'] = str_random(16);
            $withd['amount'] = $request->amount;
            $withd['status'] = 0;
            Withdraw::create($withd);



        $message= $user->username. " has Placed a withdraw request. <br>  Please check and approve.";

    DB::table('notifications')->insert(['user_id'=>Auth::id(),'message'=>$message,'dashboard'=>'admin','link'=>URL.'/admin/withdraw/requests']);


            return back()->with('success', 'Withdraw Request Successfull');
         }
     }

     public function logout()
     {
       # code...
      Session::flush();


      $url = DB::table('settings')->where('keyname','site_url')->first();
    return redirect()->away($url->value);
     }


}
