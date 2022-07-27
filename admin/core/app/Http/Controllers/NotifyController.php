<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\User;
use DB;


class NotifyController extends Controller
{
    //
    public function notification(){

    $notify=DB::table('notifications')->where('dashboard','=','admin')->where('status','=','0')->get();

    echo $notify;
}

public function delete_notify($id)
{
	
	DB::table('notifications')->where('id',$id)->delete();
}

 //    }  
	// public function users($id)
 //    {

	// DB::table('notifications')->where('id',$id)->delete();

 //    $users = User::where('user_type',2)->orderBy('id', 'desc')->paginate(10);

 //    	return view('admin.borrow.users', compact('users'));

 //    }

 //     public function borrow_user_translog($id)
 //    {
 //    	DB::table('notifications')->where('id',$id)->delete();
 //    	$trans=DB::table('users')
 //    	->join('borrow','borrow.user_id','users.id')->paginate(10);

 //    	return view('admin.borrow.translog', compact('trans'));

 //    }
 //    public function show_package($id)
 //    {
 //    	DB::table('notifications')->where('id',$id)->delete();
 //    	$package=DB::table('intrest')->get();

 //    	return view('admin.borrow.package', compact('package'));
 //    }

 //      public function requests($id)
 //    {

	// 	DB::table('notifications')->where('id',$id)->delete();

 //    	$data=DB::table('users')
 //    	->where('borrow.status',0)
 //    	->join('borrow','borrow.user_id','users.id')->get();
    	
    	 
 //    	 return view('admin.borrow.requests')->with('data',$data);
 //    }
 //     public function ongoing($id)
 //    {

	// 	DB::table('notifications')->where('id',$id)->delete();
 //    	$data=DB::table('users')
 //    	->where('borrow.status',1)
 //    	->join('borrow','borrow.user_id','users.id')->get();
    	 
 //    	 return view('admin.borrow.ongoing_borrows')->with('data',$data);
 //    }


}
