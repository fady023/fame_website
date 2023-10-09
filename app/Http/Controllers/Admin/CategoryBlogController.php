<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\CategoryBlog;

use App\Models\LogActivity;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;
use DB;
class CategoryBlogController extends Controller
{
    public function index(Request $request)
    {
        $CategoryBlogs = CategoryBlog::orderBy('id', 'DESC')->get();
        return view('admin.categoryblogs.index', compact('CategoryBlogs'));
    }

    public function create()
    {
        return view('admin.categoryblogs.create');
    }

    public function store(request $request)
    {
        $inputData=$request->all();
        
        CategoryBlog::create($inputData);
      
        return redirect()->route('categoryblogsIndex',['admin','categoryblogs' ,'index']);
    }

    public function edit(request $request)
    {
        $edit_CategoryBlogs=CategoryBlog::findOrFail($request->id);

        return view('admin.categoryblogs.edit', compact('edit_CategoryBlogs'));
    }

    public function update(request $request)
    {
        $input_data=$request->all();

        CategoryBlog::where('id',$request->id)->update($input_data);

        return redirect()->route('categoryblogsIndex',['admin','categoryblogs' ,'index']);
    }

    public function show($id)
    {
        //return view('admin.blogs.show');
    }

    
    public function destroy(request $request,$id)
    {
       // CategoryBlog::where('blog_id',$request->id)->delete();
        CategoryBlog::where('id',$request->id)->delete();
        return back();
    }

    public function del(request $request,$id)
    {
        BlogImages::where('id',$request->id)->delete();
        return back();
    }

    
}
