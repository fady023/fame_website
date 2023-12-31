<?php
namespace App\Helpers;
use Request;
use App\Models\LogActivity;

class LogsActivity
{
    public static function addToLog($subject)
    {
    	$log = [];
    	$log['subject'] = $subject;
    	$log['url'] = Request::fullUrl();
    	$log['method'] = Request::method();
    	$log['ip'] = Request::ip();
    	$log['agent'] = Request::header('user-agent');
    	$log['user_id'] = auth()->check() ? auth()->user()->name : '';
    	LogActivity::create($log);
    }


    public static function logActivityLists()
    {
    	return LogActivity::latest()->get();
    }
}