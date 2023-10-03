<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Datatables;
use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\User;
use Auth;

class SettingController  extends Controller
{
    
    /**messages
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $title=Setting::where(['key' => 'site.title'])->value('value');
        $description=Setting::where(['key' => 'site.description'])->value('value');
        $keywords=Setting::where(['key' => 'site.keywords'])->value('value');
        $logo=Setting::where(['key' => 'site.logo'])->value('value');
        $phone=Setting::where(['key' => 'site.phone'])->value('value');
        $email=Setting::where(['key' => 'site.email'])->value('value');
        $address=Setting::where(['key' => 'site.address'])->value('value');
        $url=Setting::where(['key' => 'site.url'])->value('value');
        $twitter=Setting::where(['key' => 'site.twitter'])->value('value');
        $linkedin=Setting::where(['key' => 'site.linkedin'])->value('value');
        $facebook=Setting::where(['key' => 'site.facebook'])->value('value');
        $skype=Setting::where(['key' => 'site.skype'])->value('value');
       
        return view('admin.settings.index', compact('title','description','keywords','logo','phone','email','address','url'));
    }
   

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        Setting::where(['key' =>'site.title'])->update(['value' => $request->title]);
        Setting::where(['key' =>'site.description'])->update(['value' => $request->description]);
        Setting::where(['key' =>'site.keywords'])->update(['value' => $request->keywords]);
       
       
        //////Print sizes
        
         Setting::where(['key' =>'site.phone'])->update(['value' => $request->phone]);
         Setting::where(['key' =>'site.email'])->update(['value' => $request->email]);
         Setting::where(['key' =>'site.address'])->update(['value' => $request->address]);
         Setting::where(['key' =>'site.url'])->update(['value' => $request->url]);
         Setting::where(['key' =>'site.twitter'])->update(['value' => $request->twitter]);
         Setting::where(['key' =>'site.linkedin'])->update(['value' => $request->linkedin]);
         Setting::where(['key' =>'site.facebook'])->update(['value' => $request->facebook]);
         Setting::where(['key' =>'site.skype'])->update(['value' => $request->skype]);
        

        if (request()->hasFile('logo') && request('logo') != '') {
            $imagePath = public_path('storage/'.$request->logo);
            if(file_exists($imagePath)){
                unlink($imagePath);
            }
            $image=$request->file('logo');
            $imageName=time(). '.' .$image->extension();
            $image->move(public_path('storage/logo'),$imageName);
            $request->logo = 'logo/'.$imageName;
            Setting::where(['key' =>'site.logo'])->update(['value' => $request->logo]);
        }

        session()->flash('success' , 'Data has been updated successfully' );
        return back();
    }


}
