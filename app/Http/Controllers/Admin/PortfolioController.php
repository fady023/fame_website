<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;

class PortfolioController extends Controller
{
    public function index(Request $request)
    {
        $Portfolios = Portfolio::orderBy('id', 'DESC')->get();
        return view('admin.portfolio.index', compact('Portfolios'));
    }

    public function create()
    {
        //abort_if(Gate::denies('slider_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        return view('admin.portfolio.create');
    }

    public function store(request $request)
    {
        $formInput=$request->all();
        
        if($request->file('image')){
            $image=$request->file('image');
            if($image->isValid()){
                $fileName=time().'-'.Str::slug($request['image'],"-").'.'.$image->getClientOriginalExtension();
                $small_image_path=public_path('portfolio/'.$fileName);
    
                //Resize Image
                Image::make($image)->resize(808,590)->save($small_image_path);
                $formInput['image']=$fileName;
            }
        }

        $Portfolio = Portfolio::create($formInput);
      
        return redirect()->route('portfoliosIndex',['admin','portfolio' ,'index']);
    }

    public function edit(request $request)
    {

        $edit_portfolio=Portfolio::findOrFail($request->id);
        return view('admin.portfolio.edit', compact('edit_portfolio'));
    }

    public function update(request $request)
    {
        $input_data=$request->all();
       
        if($request->file('image')){
            $image=$request->file('image');
            if($image->isValid()){
                $fileName=time().'-'.Str::slug($request['image'],"-").'.'.$image->getClientOriginalExtension();
                $small_image_path=public_path('portfolio/'.$fileName);
    
                //Resize Image
                Image::make($image)->resize(808,590)->save($small_image_path);
                $input_data['image']=$fileName;
            }
        }

        Portfolio::where('id',$request->id)->update($input_data);

        return redirect()->route('portfoliosIndex',['admin','portfolio' ,'index']);
       
    }

    public function show(Slider $slider)
    {
       
    }

    
    public function destroy(request $request,$id)
    {

        $name = Portfolio::where('id',$request->id)->value('name');
        
        Portfolio::where('id',$request->id)->delete();
        return back();
    }
}
