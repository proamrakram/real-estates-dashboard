<?php

namespace App\Http\Livewire;

use App\Models\Order;
use App\Models\User;
use Livewire\Component;

class UserView extends Component
{
    public $user;
    public $last_update_time;

    public function mount($user_id)
    {
        $this->user = User::find($user_id);
    }

    public function render()
    {
        $this->getLastUpateTime();
        return view('livewire.user-view', [
            'user' => $this->user
        ]);
    }

    public function changeUserStatus()
    {
        if ($this->user->user_status == 'active') {
            $this->user->update(['user_status' => 'inactive']);
        } else {
            $this->user->update(['user_status' => 'active']);
        }
    }


    public function getLastUpateTime()
    {
        if ($this->user->updated_at) {
            $last_update = $this->user->updated_at->toDateTimeString();
            $time_now = now();

            $datetime1 = strtotime($last_update);
            $datetime2 = strtotime($time_now);

            $secs = $datetime2 - $datetime1; // == <seconds between the two times>
            $min = $secs / 60;
            $hour = $secs / 3600;
            $days = $secs / 86400;


            if ($days > 0.99) {
                $this->last_update_time = 'اخر تحديث منذ ' . round($days, 0) . ' يوم';
                return true;
            }

            if ($hour > 0.99) {
                $this->last_update_time = 'اخر تحديث منذ ' . round($hour, 0) . ' ساعة';
                return true;
            }

            if ($min > 0.99) {
                $this->last_update_time = 'اخر تحديث منذ ' . round($min, 0)  . ' دقيقة';
                return true;
            }

            $this->last_update_time = 'اخر تحديث منذ ' . $secs . ' ثواني';
            return true;
        }

        $this->last_update_time = 'لم يتم التعديل على هذا الطلب بعد';
    }
}
