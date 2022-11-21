<?php

namespace App\Http\Livewire;

use App\Models\Order;
use App\Models\OrderEditor;
use App\Models\OrderNote;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class OrderView extends Component
{
    use LivewireAlert;
    public $order;
    public $last_update_time = 'لم يتم التعديل على هذا الطلب بعد';
    public $last_update_note_time = 'لم يتم التعديل على هذا الطلب بعد';
    public $text = '';
    public $status_note = 1;
    public $order_id;

    public function mount($order_id)
    {
        $this->order_id = $order_id;
    }

    public function render()
    {
        $this->order = Order::find($this->order_id);
        $this->getLastUpateTime();
        return view('livewire.order-view', [
            'order' => $this->order,
        ]);
    }

    public function addNote()
    {
        OrderNote::create([
            'note' => $this->text,
            'status' => $this->status_note,
            'order_id' => $this->order->id,
            'user_id' => auth()->id(),
        ]);

        $this->alert('success', '', [
            'toast' => true,
            'position' => 'center',
            'timer' => 3000,
            'text' => '👍 تم إضافة الملاحظة بنجاح',
            'timerProgressBar' => true,
        ]);

        if ($this->status_note == 3) {
            $this->order->update([
                'closed_date' => now(),
                'who_cancel' => auth()->id(),
                'order_status_id' => 3
            ]);

            OrderEditor::create([
                'order_id' => $this->order->id,
                'user_id' => auth()->id(),
                'action' => 'cancel',
            ]);

            $this->alert('warning', '', [
                'toast' => true,
                'position' => 'center',
                'timer' => 3000,
                'text' => '👍 تم إغلاق الطلب',
                'timerProgressBar' => true,
            ]);
        }
    }

    public function getLastUpateTime()
    {
        if ($this->order->updated_at) {
            $last_update = $this->order->updated_at->toDateTimeString();
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
    }


    public function getLastUpateOrderEditTime($order_edit_id)
    {
        $order_edit_id = OrderEditor::find($order_edit_id);

        $last_update = $order_edit_id->created_at->toDateTimeString();

        if ($last_update) {
            $time_now = now();

            $datetime1 = strtotime($last_update);
            $datetime2 = strtotime($time_now);

            $secs = $datetime2 - $datetime1;
            $min = $secs / 60;
            $hour = $secs / 3600;
            $days = $secs / 86400;


            if ($days > 0.99) {
                return 'منذ ' . round($days, 0) . ' يوم';
            }

            if ($hour > 0.99) {
                return 'منذ ' . round($hour, 0) . ' ساعة';
            }

            if ($min > 0.99) {
                return 'منذ ' . round($min, 0)  . ' دقيقة';
            }

            return 'منذ ' . $secs . ' ثواني';
        }
    }
}
