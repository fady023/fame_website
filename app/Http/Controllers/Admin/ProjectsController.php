<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Project;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;

class ProjectsController extends Controller
{
    public function index(Request $request)
    {
        $projects = Project::orderBy('id', 'DESC')->get();
        return view('admin.projects.index', compact('projects'));
    }

    public function create()
    {
        //abort_if(Gate::denies('slider_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        return view('admin.projects.create');
    }

    public function store(request $request)
    {
        $formInput=$request->all();
        
        if($request->file('image')){
            $image=$request->file('image');
            if($image->isValid()){
                $fileName=time().'-'.Str::slug($request['image'],"-").'.'.$image->getClientOriginalExtension();
                $small_image_path=public_path('projects/'.$fileName);
    
                //Resize Image
                Image::make($image)->resize(808,590)->save($small_image_path);
                $formInput['image']=$fileName;
            }
        }

        $project = Project::create($formInput);
      
        return redirect()->route('projectsIndex',['admin','projects' ,'index']);
    }

    public function edit(request $request)
    {

        $edit_projects=Project::findOrFail($request->id);
        return view('admin.projects.edit', compact('edit_projects'));
    }

    public function update(request $request)
    {
        $input_data=$request->all();
       
        if($request->file('image')){
            $image=$request->file('image');
            if($image->isValid()){
                $fileName=time().'-'.Str::slug($request['image'],"-").'.'.$image->getClientOriginalExtension();
                $small_image_path=public_path('projects/'.$fileName);
    
                //Resize Image
                Image::make($image)->resize(808,590)->save($small_image_path);
                $input_data['image']=$fileName;
            }
        }

        Project::where('id',$request->id)->update($input_data);

        return redirect()->route('projectsIndex',['admin','projects' ,'index']);
       
    }

    public function show(Slider $slider)
    {
       
    }

    
    public function destroy(request $request,$id)
    {

        $name = Project::where('id',$request->id)->value('name');
        
        Project::where('id',$request->id)->delete();
        return back();
    }
}
