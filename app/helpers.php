<?php

use \App\Models\Core\WebsiteConfiguration;
use App\Models\Core\WebsiteVisitor;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Request;
use \Psy\Util\Json;

if (!function_exists('detail_website')){
    function detail_website(){
        $data       = WebsiteConfiguration::find(1);
        return $data;
    }
}

if (!function_exists('logo_website')){
    function logo_website(){
        $data       = WebsiteConfiguration::find(1);
        return asset("storage/config/{$data->logo}");
    }
}

if (!function_exists('icon_website')){
    function icon_website(){
        $data       = WebsiteConfiguration::find(1);
        return asset("storage/config/{$data->icon}");
    }
}

if (!function_exists('record_visitor')){
    function record_visitor($blog = NULL){
        try {

            $visitor            = new WebsiteVisitor();
            $visitor->url       = Request::url();
            $visitor->ip        = Request::getClientIp();;
            $visitor->agent     = Request::header('User-Agent');

            if ($blog){
                $visitor->blog_id   = $blog->id;
            }

            $visitor->save();

        }catch (Exception $exception){
            insert_errorlog('Record Visitor', $exception->getMessage());
        }
    }
}

if (!function_exists('url_whatsapp')){
    function url_whatsapp($phone_number){
        $phone_number = strval(intval($phone_number));
        return "https://wa.me/62{$phone_number}";
    }
}

if (!function_exists('img_default')){
    function img_default(){
        return asset('storage/default-placeholder.png');
    }
}

if (!function_exists('insert_errorlog')){
    function insert_errorlog($menu, $message){
        Log::channel('system_log')->error("{$menu} :: {$message}");
    }
}


if (!function_exists('greeting_text')){
    function greeting_text(){
        $timeNow    = Carbon::now()->format('G');

        if ($timeNow >= 5 && $timeNow <= 11){
            $greetingText = 'Good Morning';
        }elseif ($timeNow >= 12 && $timeNow <= 15){
            $greetingText = 'Good Afternoon';
        }elseif ($timeNow >= 16 && $timeNow <= 18){
            $greetingText = 'Good Evening';
        }else{
            $greetingText = 'Good Night';
        }

        return $greetingText;
    }
}
