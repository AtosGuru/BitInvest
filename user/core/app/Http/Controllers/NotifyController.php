<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Auth;
use Hash;
use Session;

class NotifyController extends Controller
{
    //
     public function notification(){

    $notify=DB::table('notifications')->where('dashboard','=','user')->where('user_id',Auth::id())->get();

    echo $notify;
}
public function delete_notify($id)
{
	
	DB::table('notifications')->where('id',$id)->delete();
}


}
