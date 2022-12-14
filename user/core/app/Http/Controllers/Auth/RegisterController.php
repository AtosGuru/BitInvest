<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\General;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'username' => 'required|string|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'mobile' => 'required|string',
            'wallet' => 'required|string|unique:users',
            'user_type'=>'required',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $gnl = General::first();
        if(isset($data['refid']))
        {
            $refer = User::where('username', $data['refid'])->first();     
            $refuser = $refer->id;
        }
        else
        {
          $refuser = "0";
        }
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'username' => $data['username'],
            'password' => bcrypt($data['password']),
            'mobile' => $data['mobile'],
            'wallet' => $data['wallet'],
            'user_type' => $data['user_type'],
            'status' => 1,
            'refid' => $refuser,
            'tauth' => 0,
            'tfver' => 1,
            'emailv' =>  $gnl->emailver,
            'smsv' =>  $gnl->smsver,
        ]);
    }
}
