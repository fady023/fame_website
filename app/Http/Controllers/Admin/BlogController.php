<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Blog;
use App\Models\BlogImages;
use App\Models\BlogComment;
use App\Models\LogActivity;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;
use DB;
class BlogController extends Controller
{
    public function index(Request $request)
    {
        $Blogs = Blog::orderBy('id', 'DESC')->get();
        return view('admin.blogs.index', compact('Blogs'));
    }

    public function create()
    {
        return view('admin.blogs.create');
    }

    public function store(request $request)
    {
        $inputData=$request->all();
        
        $blogid = Blog::insertGetId([
            'title' => $request->title,
            'details'=> $request->details,
        ]);
          

        if($request->file('image')){
            $images=$request->file('image');
            foreach ($images as $image){
                if($image->isValid()){
                    $extension=$image->getClientOriginalExtension();
                    $filename=rand(100,999999).time().'.'.$extension;
                    $small_image_path=public_path('blogs/'.$filename);
                    $large_image_path=public_path('blogs/large'.$filename);
                    
                    //// Resize Images
                    Image::make($image)->resize(525,328)->save($small_image_path);
                    Image::make($image)->resize(1067,600)->save($large_image_path);

                    $inputData['image']=$filename;
                    
                    DB::insert('insert into blogallery (blog_id ,image) 
                    values (?, ?)', [$blogid,$inputData['image']]);
                    
                }
            }
        }
      
        return redirect()->route('blogsIndex',['admin','blogs' ,'index']);
    }

    public function edit(request $request)
    {
        $edit_Blogs=Blog::findOrFail($request->id);
        $images = BlogImages::where('blog_id',$request->id)->get();

        return view('admin.blogs.edit', compact('edit_Blogs','images'));
    }

    public function update(request $request)
    {
        $input_data=$request->all();

        $blogid = Blog::where('id',$request->id)->update([
            'title' => $request->title,
            'details'=> $request->details,
        ]);
          
       
        

        if($request->file('image')){
            $images=$request->file('image');
            foreach ($images as $image){
                if($image->isValid()){
                    $extension=$image->getClientOriginalExtension();
                    $filename=rand(100,999999).time().'.'.$extension;
                    $small_image_path=public_path('blogs/'.$filename);
                    $large_image_path=public_path('blogs/large'.$filename);
                    
                    //// Resize Images
                    Image::make($image)->resize(525,328)->save($small_image_path);
                    Image::make($image)->resize(1067,600)->save($large_image_path);
                    
                    $inputData['image']=$filename;
                    
                    DB::insert('insert into blogallery (blog_id ,image) 
                    values (?, ?)', [$request->id,$inputData['image']]);
                    
                }
            }
        }

        

        return redirect()->route('blogsIndex',['admin','blogs' ,'index']);
    }

    public function show($id)
    {
        //return view('admin.blogs.show');
    }

    
    public function destroy(request $request,$id)
    {
        BlogImages::where('blog_id',$request->id)->delete();
        Blog::where('id',$request->id)->delete();
        return back();
    }

    public function del(request $request,$id)
    {
        BlogImages::where('id',$request->id)->delete();
        return back();
    }

    
}
