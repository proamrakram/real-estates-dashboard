<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
    protected $redirectTo = RouteServiceProvider::HOME;

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
            'register_name' => ['required', 'string', 'max:255'],
            'register_email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'register_phone' => ['required', 'string', 'max:255', 'unique:users,phone'],
            'register_password' => ['required', 'string'],
        ], [
            'register_name.required' => 'الاسم مطلوب',
            'register_email.required' => 'الايميل مطلوب',
            'register_phone.required' => 'رقم الهاتف مطلوب',
            'register_password.required' => 'كلمة السر مطلوبة',

            'register_email.unique' =>  'هذا الايميل مستخدم من قبل',
            'register_phone.unique' =>  'رقم الهاتف مستخدم من قبل',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['register_name'],
            'phone' => $data['register_phone'],
            'email' => $data['register_email'],
            'password' => Hash::make($data['register_password']),
            'user_type' => 'admin',
            'user_status' => 'active',
            'can_add' => 1,
            'can_edit' => 1,
            'can_cancel' => 1,
            'can_show_all' => 1,
            'can_booking' => 1,
            'can_send_sms' => 1,
            // 'branch_ids',
            // 'hash_login',
            // 'hash_expire',
            // 'email_verified_at',
        ]);
    }
}
