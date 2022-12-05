<?php

namespace App\Http\Livewire;

use App\Events\NewUser as EventsNewUser;
use App\Http\Controllers\Services\SmsService;
use App\Models\Permission;
use App\Models\User;
use App\Models\UserSettings;
use App\Notifications\NewUser;
use DateTime;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\RateLimiter;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class SmsVerification extends Component
{
    use LivewireAlert;
    public $name;
    public $phone;
    public $email;
    public $password;
    public $verification_code;

    public $user = null;

    public $time = 0;
    public $timer = 10;

    public function timer()
    {
        $this->timer = ($this->timer - 1);

        dd(date('i:s', mktime(0, 0, 300)));
        if ($this->timer == 0) {
            dd('end time');
        }
        $this->time = date('i:s', mktime(0, 0, $this->timer));
    }

    public function render()
    {
        return view('livewire.sms-verification');
    }

    protected function rules()
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'phone' => ['required', 'string', 'max:255', 'unique:users,phone'],
            'password' => ['required', 'string'],
        ];
    }

    protected function messages()
    {
        return [
            'name.required' => 'الاسم مطلوب',
            'email.required' => 'الايميل مطلوب',
            'phone.required' => 'رقم الهاتف مطلوب',
            'password.required' => 'كلمة السر مطلوبة',

            'email.unique' =>  'هذا الايميل مستخدم من قبل',
            'phone.unique' =>  'رقم الهاتف مستخدم من قبل',
        ];
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit(SmsService $smsService)
    {
        $this->validate();
        $code = random_int(111111, 999999);

        $user = User::create([
            'name' => $this->name,
            'phone' => $this->phone,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'user_type' => 'marketer',
            'verification_code' => $code,
            'user_status' => 'inactive',
        ]);

        Permission::create([
            'user_id' => $user->id,
            'can_add_offers' => 2,
            'can_edit_offers' => 2,
            'can_show_offers' => 2,
            'can_delete_offers' => 2,
            'can_cancel_offers' => 2,
            'can_add_orders' => 2,
            'can_edit_orders' => 2,
            'can_show_orders' => 2,
            'can_delete_orders' => 2,
            'can_cancel_orders' => 2,
            'can_add_vouchers' => 2,
            'can_edit_vouchers' => 2,
            'can_show_vouchers' => 2,
            'can_delete_vouchers' => 2,
            'can_cancel_vouchers' => 2,
            'can_add_sells' => 2,
            'can_edit_sells' => 2,
            'can_show_sells' => 2,
            'can_delete_sells' => 2,
            'can_cancel_sells' => 2,
            'can_booking' => 2,
            'can_send_sms' => 2,
        ]);

        UserSettings::create([
            'user_id' => $user->id,
            'website_mode' => ''
        ]);

        $admins = User::whereIn('user_type', ['superadmin', 'admin'])->get();
        Notification::send($admins, new NewUser($user));
        event(new EventsNewUser($user));

        // $result = $smsService->send($user);
        $result = 1;
        if ($result == '1') {
            $this->user = $user;

            $this->alert('warning', '', [
                'toast' => true,
                'position' => 'center',
                'timer' => 9000,
                'text' => 'يرجى إدخال كود التحقق المكون من 6 ارقام',
                'timerProgressBar' => true,
            ]);
        } else {
            $this->alert('warning', '', [
                'toast' => true,
                'position' => 'center',
                'timer' => 15000,
                'text' => 'يوجد خطأ ما يرجى التحقق من بياناتك',
                'timerProgressBar' => true,
            ]);
        }
    }

    public function sendSms()
    {
        if ($this->user->verification_code == $this->verification_code) {
            $this->user->update([
                'verification_code' => null,
                'email_verified_at' => now()
            ]);

            $this->alert('success', '', [
                'toast' => true,
                'position' => 'center',
                'timer' => 9000,
                'text' => 'شكرا لك، لقد تم التحقق من حالة الحساب الخاص بك بنجاح، انتظر الان تفعيل الإدارة لحسابك.',
                'timerProgressBar' => true,
            ]);

            return redirect()->route('login');
        }
    }

    public function resendSms()
    {
        $executed = RateLimiter::attempt(
            'send-sms-message-user-:' . $this->user->id,
            $perMinute = 5,
            function () {
                // Send message...
            }
        );

        if (!$executed) {
            return 'Too many messages sent!';
        }
    }
}
