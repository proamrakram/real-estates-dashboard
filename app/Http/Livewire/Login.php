<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Login extends Component
{
    public $login_phone_email;
    public $login_password;
    public $method;

    public function render()
    {
        return view('livewire.login');
    }


    public function login()
    {
        $validatedData = $this->validate();

        $this->username();

        if ($this->method == 'phone') {
            $user = User::where('phone', $this->login_phone_email)->first();

            if ($user && Hash::check($this->login_password, $user->password)) {
                Auth::login($user);
                return redirect()->intended('panel/home');
            }
        } elseif ($this->method == 'email') {

            $user = User::where('email', $this->login_phone_email)->first();

            if ($user && Hash::check($this->login_password, $user->password)) {
                Auth::login($user);
                return redirect()->intended('panel/home');
            }
        } else {
            return back()->withErrors([
                'login_phone_email' => 'البيانات المتوفر  غير متطابقة',
            ])->onlyInput('login_phone_email');
        }
    }

    protected function rules()
    {
        $user_method_login =  $this->username();

        if ($user_method_login == 'phone') {

            $this->method = 'phone';
            return [
                'login_phone_email' => 'required|string|exists:users,phone',
                'login_password' => 'required|string',
            ];
        }

        if ($user_method_login == 'email') {

            $this->method = 'email';

            return [
                'login_phone_email' => 'required|string|email|exists:users,email',
                'login_password' => 'required|string',
            ];
        }
    }

    protected function messages()
    {
        $user_method_login =  $this->username();

        if ($user_method_login == 'phone') {

            $this->method = 'phone';
            return  [
                'login_phone_email.required' => 'يرجى إدخال رقم جوال او ايميل',
                'login_phone_email.exists' => 'رقم الجوال المدخل غير موجود',
                'login_password.required' => 'كلمة السر مطلوبة'
            ];
        }

        if ($user_method_login == 'email') {

            $this->method = 'email';

            return [
                'login_phone_email.required' => 'يرجى إدخال رقم جوال او ايميل',
                'login_phone_email.exists' => 'البريد الالكتروني المدخل غير موجود',
                'login_password.required' => 'كلمة السر مطلوبة'
            ];
        }
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function username()
    {
        $word = '@';

        if (strpos($this->login_phone_email, $word) !== false) {
            $this->method = 'email';
            return 'email';
        } else {
            $this->method = 'phone';
            return 'phone';
        }

        $this->method = 'email';
        return 'email';
    }
}
