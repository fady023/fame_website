<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

use App\Http\Controllers\RoutingController;
use Illuminate\Support\Facades\Auth;


///////////////////// Admin ///////////////////////////
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\ProjectsController;
use App\Http\Controllers\Admin\PortfolioController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/index', [IndexController::class, 'index'])->name('index');
Route::get('/services/web_mobile_services', [IndexController::class, 'web_mobile_services'])->name('web_mobile_services');
Route::get('/services/digital_marketing', [IndexController::class, 'digital_marketing'])->name('digital_marketing');
Route::get('/services/media_production', [IndexController::class, 'media_production'])->name('media_production');
Route::get('/services/prcommunications​', [IndexController::class, 'prcommunications​'])->name('prcommunications​');
Route::get('/services/display_design', [IndexController::class, 'display_design'])->name('display_design');
Route::get('/services/branding', [IndexController::class, 'branding'])->name('branding');
Route::get('/services/business_startup', [IndexController::class, 'business_startup'])->name('business_startup');


Route::get('/qoute', [IndexController::class, 'qoute'])->name('qoute');
Route::post('contact', [IndexController::class, 'contact'])->name('contact');



/*Route::get('/details/{name}', [IndexController::class, 'details'])->name('details');*/
Route::get('/list_blogs', [IndexController::class, 'listblogs'])->name('listblogs');
Route::get('/blog/{title}', [IndexController::class, 'blog'])->name('blog');


Auth::routes();

Route::group(['prefix'=>'dashboard','middleware'=>['auth','is_admin']],function (){
    //Route::get('admin_home', [RoutingController::class, 'home'])->name('admin_home');

// landing
//Route::get('', [RoutingController::class, 'index'])->name('index');

    Route::get('{first}/{second}/{third}', [RoutingController::class, 'thirdLevel'])->name('third');
    Route::get('{first}/{second}', [RoutingController::class, 'secondLevel'])->name('second');
    Route::get('{any}', [RoutingController::class, 'root'])->name('any');


     ////////////////// Projects ///////////////////
     Route::get('{first}/{second}/{third}/projects', [ProjectsController::class, 'index'])->name('projectsIndex');
     Route::get('{first}/{second}/{third}/projects/create', [ProjectsController::class, 'create'])->name('projectsCreate');
     Route::post('{first}/{second}/{third}/projects/store', [ProjectsController::class, 'store'])->name('projectsStore');
     Route::get('{first}/{second}/{third}/projects/show', [ProjectsController::class, 'show'])->name('projectsShow');
     Route::get('{first}/{second}/{third}/projects/edit/{id}', [ProjectsController::class, 'edit'])->name('projectsEdit');
     Route::POST('{first}/{second}/{third}/projects/update', [ProjectsController::class, 'update'])->name('projectsUpdate');
     Route::get('{first}/{second}/{third}/projects/destroy/{id}', [ProjectsController::class, 'destroy'])->name('projectsDestroy');
     
      ////////////////// Portfolio ///////////////////
      Route::get('{first}/{second}/{third}/portfolio', [PortfolioController::class, 'index'])->name('portfoliosIndex');
      Route::get('{first}/{second}/{third}/portfolio/create', [PortfolioController::class, 'create'])->name('portfoliosCreate');
      Route::post('{first}/{second}/{third}/portfolio/store', [PortfolioController::class, 'store'])->name('portfoliosStore');
      Route::get('{first}/{second}/{third}/portfolio/show', [PortfolioController::class, 'show'])->name('portfoliosShow');
      Route::get('{first}/{second}/{third}/portfolio/edit/{id}', [PortfolioController::class, 'edit'])->name('portfoliosEdit');
      Route::POST('{first}/{second}/{third}/portfolio/update', [PortfolioController::class, 'update'])->name('portfoliosUpdate');
      Route::get('{first}/{second}/{third}/portfolio/destroy/{id}', [PortfolioController::class, 'destroy'])->name('portfoliosDestroy');
      
     
         //////////////////  Blog ///////////////////
         Route::get('{first}/{second}/{third}/blogs', [BlogController::class, 'index'])->name('blogsIndex');
         Route::get('{first}/{second}/{third}/blogs/create', [BlogController::class, 'create'])->name('blogsCreate');
         Route::post('{first}/{second}/{third}/blogs/store', [BlogController::class, 'store'])->name('blogsStore');
         Route::get('{first}/{second}/{third}/blogs/show', [BlogController::class, 'show'])->name('blogsShow');
         Route::get('{first}/{second}/{third}/blogs/edit/{id}', [BlogController::class, 'edit'])->name('blogsEdit');
         Route::POST('{first}/{second}/{third}/blogs/update', [BlogController::class, 'update'])->name('blogsUpdate');
         Route::get('{first}/{second}/{third}/blogs/destroy/{id}', [BlogController::class, 'destroy'])->name('blogsDestroy');
         Route::get('{first}/{second}/{third}/blogs/del/{id}', [BlogController::class, 'del'])->name('blogsdel');

        ////////////////// settings ///////////////////
             Route::get('{first}/{second}/{third}/settings', [SettingController::class, 'index'])->name('settingsIndex');
             Route::get('{first}/{second}/{third}/settings/create', [SettingController::class, 'create'])->name('settingsCreate');
             Route::post('{first}/{second}/{third}/settings/store', [SettingController::class, 'store'])->name('settingsStore');
             Route::get('{first}/{second}/{third}/settings/show', [SettingController::class, 'show'])->name('settingsShow');
             Route::get('{first}/{second}/{third}/settings/edit/{id}', [SettingController::class, 'edit'])->name('settingsEdit');
             Route::POST('{first}/{second}/{third}/settings/update', [SettingController::class, 'update'])->name('settingsUpdate');
             Route::get('{first}/{second}/{third}/settings/destroy/{id}', [SettingController::class, 'destroy'])->name('settingsDestroy');   
});

//Auth::routes();

//Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('{first}/{second}', [RoutingController::class, 'secondLevel'])->name('home');
