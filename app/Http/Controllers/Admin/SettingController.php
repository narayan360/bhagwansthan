<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Setting;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $settings = Setting::all();
        $logos = Setting::where('title','logo')->get();
        return view('admin.setting.index', compact('settings','logos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.setting.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|unique:settings',
            'value' => 'required'
        ]);

        $setting = new Setting;
        $setting->title = $request->title;
        $setting->value = $request->value;
        $setting->save();

        return redirect()->route('settings.index')->with('success', 'Setting added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Setting $setting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Setting $setting)
    {
        return view('admin.setting.edit', compact('setting'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Setting $setting)
    {
        $this->validate($request, [
            'value' => 'required'
        ]);

        $setting->value = $request->value;
        $setting->save();

        return redirect()->route('settings.index')->with('success', 'Setting saved.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Setting $setting)
    {
        if($setting){

            if($setting->value){
                $value = public_path('uploads/logo/' . $setting->value);
                if(file_exists($value)){
                    unlink($value);
                }
            }

            if($setting && $setting->delete()){
                return redirect()->route('settings.index')->with('success', 'Setting deleted.');
            }else{
                return redirect()->route('settings.index')->with('error', 'Error while deleting Setting.');
            }

        }else{
            abort();
        }
    }

    public function logoChange(Request $request)
    {
        if($request->hasFile('logo'))
        {
            $setting = Setting::whereTitle('logo')->first();
            if(!$setting)
            {
                $setting = new Setting;
            }

            if($setting->value && file_exists(public_path('uploads/logo/'.$setting->value))){
                unlink(public_path('uploads/logo/'.$setting->value));
            }

            $image_name = 'bhagwansthan-logo'.'.'.$request->logo->extension();
            $path = $request->logo->move('uploads/logo/', $image_name);
            $setting->title = 'logo';
            $setting->value = $image_name;
            $setting->save();
        }
        return redirect()->route('settings.index')->with('success','Logo Saved');
    }
}
