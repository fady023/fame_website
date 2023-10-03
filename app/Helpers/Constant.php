<?php
namespace App\Helpers;

use Request;

final class Constant
{
    public const VerifyRequestPending = 0;
    public const VerifyRequestAccepted = 1;
    public const VerifyRequestRefused = 2;
    public const VerifyRequestClosed = 3;
    public const ServiceSliderType = 0;

    public const VerifyRequest = [
        ['id'=>'0' ,'title'=> 'قيد الموافقة'],
        ['id'=>'1' ,'title'=> 'موافقة'],
        ['id'=>'2' ,'title'=> 'رفض'],
        ['id'=>'3' ,'title'=> 'إغلاق'],
    ];

    public const SliderTypes = [
        ['id'=>'0' ,'title'=> ' الخدمات'],
        ['id'=>'1' ,'title'=> 'الموبايل'],
        ['id'=>'2' ,'title'=> 'الرئيسي'],
    ];

    public const Pages = [
        ['id'=>'0' ,'title'=> ' اتصل بنا'],
        ['id'=>'1' ,'title'=> 'المقالات'],
        ['id'=>'2' ,'title'=> 'من نحن'],
    ];
}