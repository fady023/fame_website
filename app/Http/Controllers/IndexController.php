<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Models\Setting;
use App\Models\Blog;
use App\Models\CategoryBlog;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Carbon;
use App\Models\Project;
use App\Models\Portfolio;
use App\Models\Contact;
use App\Models\Qoute;
class IndexController extends Controller
{
    public function index(){
        $phone  = Setting::where('key','site.phone')->value('value');
        $email  = Setting::where('key','site.email')->value('value');
        $address  = Setting::where('key','site.address')->value('value');
        $Portfolios = Portfolio::orderBy('id', 'DESC')->get();
        $Portfolio_Graphic = Portfolio::where('category','Graphic')->orderBy('id', 'DESC')->get();
        $Portfolio_Branding = Portfolio::where('category','Branding')->orderBy('id', 'DESC')->get();
        $Portfolio_development = Portfolio::where('category','development')->orderBy('id', 'DESC')->get();

        return view('frontend.index', compact('phone','email','address','Portfolios','Portfolio_Graphic','Portfolio_Branding','Portfolio_development'));
    }

    public function qoute(){
        $phone  = Setting::where('key','site.phone')->value('value');
        $email  = Setting::where('key','site.email')->value('value');
        $address  = Setting::where('key','site.address')->value('value');

        return view('frontend.qoute', compact('phone','email','address'));
    }

    public function consultation(){
        $phone  = Setting::where('key','site.phone')->value('value');
        $email  = Setting::where('key','site.email')->value('value');
        $address  = Setting::where('key','site.address')->value('value');

        return view('frontend.consultation', compact('phone','email','address'));
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

    public function pr_com(){
        $phone  = Setting::where('key','site.phone')->value('value');
        $email  = Setting::where('key','site.email')->value('value');
        $address  = Setting::where('key','site.address')->value('value');
        $projects = Project::orderBy('id', 'DESC')->take(3)->get();
        return view('frontend.services.pr_com', compact('phone','email','address','projects'));
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

        $Last_Blogs = Blog::orderBy('id', 'DESC')->take(2)->get();
        $Categories = CategoryBlog::orderBy('id', 'DESC')->get();
        return view('frontend.list_blogs', compact('phone','email','address','Blogs','Last_Blogs','Categories'));
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

    public function contact(request $request)
    {
        Contact::create($request->all());
        return back()->with('message', 'Submit Message for review');
    }

    
    public function qoutes(request $request)
    {
        //dd($request->all());
        Qoute::create($request->all());
        $phone  = Setting::where('key','site.phone')->value('value');
        $email  = Setting::where('key','site.email')->value('value');
        $address  = Setting::where('key','site.address')->value('value');
        return view('frontend.consultation', compact('phone','email','address'));

        //return back()->with('message', 'Submit Qoute for review');
    }
    
    
}
