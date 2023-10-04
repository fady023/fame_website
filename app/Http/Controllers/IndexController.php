<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Models\Setting;
use App\Models\Blog;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Carbon;
use App\Models\Project;
use App\Models\Portfolio;
class IndexController extends Controller
{
    public function index(){
        $phone  = Setting::where('key','site.phone')->value('value');
        $email  = Setting::where('key','site.email')->value('value');
        $address  = Setting::where('key','site.address')->value('value');
        $Portfolios = Portfolio::orderBy('id', 'DESC')->take(3)->get();

        return view('frontend.index', compact('phone','email','address','Portfolios'));
    }

    public function qoute(){
        $phone  = Setting::where('key','site.phone')->value('value');
        $email  = Setting::where('key','site.email')->value('value');
        $address  = Setting::where('key','site.address')->value('value');

        return view('frontend.qoute', compact('phone','email','address'));
    }

    
    public function web_mobile_services(){
        $phone  = Setting::where('key','site.phone')->value('value');
        $email  = Setting::where('key','site.email')->value('value');
        $address  = Setting::where('key','site.address')->value('value');
        $projects = Project::orderBy('id', 'DESC')->take(3)->get();

        return view('frontend.services.web_mobile_services', compact('phone','email','address','projects'));
    }

    public function digital_marketing(){
        $phone  = Setting::where('key','site.phone')->value('value');
        $email  = Setting::where('key','site.email')->value('value');
        $address  = Setting::where('key','site.address')->value('value');
        $projects = Project::orderBy('id', 'DESC')->take(3)->get();
        return view('frontend.services.digital_marketing', compact('phone','email','address','projects'));
    }

    public function media_production(){
        $phone  = Setting::where('key','site.phone')->value('value');
        $email  = Setting::where('key','site.email')->value('value');
        $address  = Setting::where('key','site.address')->value('value');
        $projects = Project::orderBy('id', 'DESC')->take(3)->get();
        return view('frontend.services.media_production', compact('phone','email','address','projects'));
    }

    public function prcommunications​(){
        $phone  = Setting::where('key','site.phone')->value('value');
        $email  = Setting::where('key','site.email')->value('value');
        $address  = Setting::where('key','site.address')->value('value');
        $projects = Project::orderBy('id', 'DESC')->take(3)->get();
        return view('frontend.services.prcommunications​', compact('phone','email','address','projects'));
    }

    public function display_design(){
        $phone  = Setting::where('key','site.phone')->value('value');
        $email  = Setting::where('key','site.email')->value('value');
        $address  = Setting::where('key','site.address')->value('value');
        $projects = Project::orderBy('id', 'DESC')->take(3)->get();
        return view('frontend.services.display_design', compact('phone','email','address','projects'));
    }

    public function branding(){
        $phone  = Setting::where('key','site.phone')->value('value');
        $email  = Setting::where('key','site.email')->value('value');
        $address  = Setting::where('key','site.address')->value('value');
        $projects = Project::orderBy('id', 'DESC')->take(3)->get();
        return view('frontend.services.branding', compact('phone','email','address','projects'));
    }

    public function business_startup(){
        $phone  = Setting::where('key','site.phone')->value('value');
        $email  = Setting::where('key','site.email')->value('value');
        $address  = Setting::where('key','site.address')->value('value');
        $projects = Project::orderBy('id', 'DESC')->take(3)->get();
        return view('frontend.services.business_startup', compact('phone','email','address','projects'));
    }

    
    

    public function details(request $request)
    {
        $phone  = Setting::where('key','site.phone')->value('value');
        $email  = Setting::where('key','site.email')->value('value');
        $address  = Setting::where('key','site.address')->value('value');
       

        return view('frontend.details', compact('phone','email','address'));

    }
    
   

    public function listblogs(request $request)
    {
        $phone  = Setting::where('key','site.phone')->value('value');
        $email  = Setting::where('key','site.email')->value('value');
        $address  = Setting::where('key','site.address')->value('value');
       
        $Blogs = Blog::orderBy('id', 'DESC')->get();
        return view('frontend.list_blogs', compact('phone','email','address','Blogs'));
    }
    

    public function blog(request $request)
    {
        $phone  = Setting::where('key','site.phone')->value('value');
        $email  = Setting::where('key','site.email')->value('value');
        $address  = Setting::where('key','site.address')->value('value');

        $blog = Blog::where('title',$request->title)->first();
        $Latest_blogs = Blog::orderBy('id', 'DESC')->take(3)->get();


        return view('frontend.blog', compact('phone','email','address','blog','Latest_blogs'));

    }
    

    public function blogcomment(request $request)
    {
            DB::table('blogcomment')->insert([
                'bolg_id' => $request->bolg_id,
                'comment' => $request->comment,
                'name' => $request->name,
                'email' => $request->email,
                'website' => $request->website,
            ]);
            return back()->with('message', 'Submit comment for review');
    }

    
   
    
}
