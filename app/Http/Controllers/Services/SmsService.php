<?php

namespace App\Http\Controllers\Services;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SmsService extends Controller
{
    protected $url = 'https://mobile.net.sa/sms/gw/';
    protected $userName = 'MyUser';
    protected $userPassword = 'MyPass';
    protected $numbers = ['966555521658'];
    protected $userSender = 'Mobile.Sa';
    protected $msg = 'تجريب الإرسال';
    protected $by = 'standard';
    protected $infos = 'YES';
    protected $YesRepeat = 1;
    protected $dateTimeSendLater = '2014-12-30--23:59:00';
    protected $xml = '';

    public function getCredits()
    {
        $url = $this->url . 'Credits.php';
        $data = ['userName' => $this->userName, 'userPassword' => $this->userPassword, 'By' => "standard"];
        $response = $this->send($url, $data);

        if ($response == "0") {
            return "معلومات ناقصة .... اسم المستخدم او كلمة المرور";
        } elseif ($response == "00") {
            return "اسم المستخدم او كلمة المرور فارغة";
        } elseif ($response == "000") {
            return "بيانات الدخول خاطئة";
        } elseif ($response == "0000") {
            return "رصيدك 0";
        }
    }

    public function send($url, $data)
    {
        return  Http::post($url, $data);
    }

    public function collection($customers, $marketers, $officers, $message)
    {
        dd($customers, $marketers, $officers, $message);
        $data = [
            'userName' => $this->userName,
            'userPassword' => $this->userPassword,
            'userSender' => $this->userSender,
            'numbers' => $this->numbers,
            'msg' => $this->msg,
            'By' => "standard" . $this->infos . $this->xml
        ];

        return $this->send($this->url, $data);
    }

    public function getSenderNames()
    {
        $url = $this->url . 'Sender.php';
        $data = [
            'userName' => $this->userName,
            'userPassword' => $this->userPassword,
            'By' => $this->by,

        ];
        $response = $this->send($url, $data);

        if ($response == "1010") {
            return "معلومات ناقصة .... اسم المستخدم او كلمة المرور";
        } elseif ($response == "1020") {
            return "بيانات الدخول خاطئة";
        } elseif ($response == "1030") {
            return "قائمة أسماء المرسل لديك فارغة";
        };
    }

    public function errors($SendingResult)
    {
        if ($SendingResult == "1") {
            return "تم إرسال الرسالة بنجاح";
        } elseif ($SendingResult == "1010") {
            return "معلومات ناقصة.. اسم المستخدم أو كلمة المرور أو في محتوى الرسالة أو الرقم";
        } elseif ($SendingResult == "1020") {
            return "بيانات الدخول خاطئة";
        } elseif ($SendingResult == "1030") {
            return "نفس الرسالة مع نفس الاتجاه توجد في الملحق، انتظر عشر ثواني قبل إعادة إرسالها";
        } elseif ($SendingResult == "1040") {
            return "حروف غير معترف بها ";
        } elseif ($SendingResult == "1050") {
            return "الرسالة فارغة، السبب:الانتقاء قد سبب حذف محتوى الرسالة";
        } elseif ($SendingResult == "1060") {
            return "اعتماد غير كافي لعميلة الإرسال";
        } elseif ($SendingResult == "1070") {
            return "رصيدك 0 ، غير كافي لعملية الإرسال";
        } elseif ($SendingResult == "1080") {
            return "رسالة غير مرسلة ، خطأ في عملية إرسال رسالة";
        } elseif ($SendingResult == "1090") {
            return "تكرير عملية الانتقاء أنتج الرسالة";
        } elseif ($SendingResult == "1100") {
            return "عذرا ، لم يتم إرسال الرسالة. حاول في وقت لاحق";
        } elseif ($SendingResult == "1110") {
            return "عذرا، هناك اسم مرسل خاطئ ثم استعماله، حاول من جديد تصحيح الاسم";
        } elseif ($SendingResult == "1120") {
            return "عذرا ، هذا البلد الذي تحاول الإرسال له لا تشمله شبكتنا";
        } elseif ($SendingResult == "1130") {
            return "عذرا، راجع المشرف على شبكاتنا باعتبار الشبكة المحددة في حسابكم";
        } elseif ($SendingResult == "1140") {
            return "عذرا ، تجاوزت الحد الأقصى لأجزاء الرسائل. حاول إرسال عدد أقل من الأجزاء";
        } elseif ($SendingResult == "1150") {
            return "هذه الرسالة مكررة بنفس رقم الجوال واسم المرسل ونص الرسالة";
        } elseif ($SendingResult == "1160") {
            return "هناك مشكلة في مدخلات تاريخ وتوقيت الإرسال اللاحق";
        } else {
            return $SendingResult;
        }
    }
}
