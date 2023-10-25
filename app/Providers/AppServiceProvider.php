<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Setting;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */

    function getTitle(){
        $title=Setting::where(['key' => 'site.title'])->value('value');
        return $title;
    }

    function getdescription(){
        $description=Setting::where(['key' => 'site.description'])->value('value');
        return $description;
    }


    function getkeywords(){
        $keywords=Setting::where(['key' => 'site.keywords'])->value('value');
        return $keywords;
    }

    function getphone(){
        $phone = Setting::where('key','site.phone')->value('value');
        return $phone;
    }
    function getemail(){
        $email=Setting::where('key','site.email')->value('value');
        return $email;
    }
    function getaddress(){
        $address=Setting::where('key','site.address')->value('value');
        return $address;
    }

   
    public function boot()
    {
        try{ 
            view()->share('title',$this->getTitle());
            view()->share('description',$this->getdescription());
            view()->share('keywords',$this->getkeywords());

            view()->share('phone',$this->getphone());
            view()->share('email',$this->getemail());
            view()->share('address',$this->getaddress());
        } catch (\Exception $e) {
        }

    }
}
