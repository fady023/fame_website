<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Models\Setting;
use App\Models\Blog;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Carbon;

class IndexController extends Controller
{
    public function index(){
        $phone  = Setting::where('key','site.phone')->value('value');
        $email  = Setting::where('key','site.email')->value('value');
        $address  = Setting::where('key','site.address')->value('value');

        

        return view('frontend.index', compact('phone','email','address'));
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
