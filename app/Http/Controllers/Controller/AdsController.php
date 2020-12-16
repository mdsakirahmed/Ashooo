<?php

namespace App\Http\Controllers\Controller;

use App\AdminAds;
use App\ControllerAds;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Image;

class AdsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('controller.ads.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'url'           => 'nullable',
            'startingDate'  => 'required',
            'endingDate'    => 'required',
            'image'         => 'required|image',
        ]);
        $ads = new ControllerAds();
        $ads->controller_id = Auth::user()->id;
        $ads->url = $request->input('url');

        $ads->starting = $request->input('startingDate');
        $ads->ending = $request->input('endingDate');

        if ($request->input('activation') ==1){
            $ads->status = 1;
        }else{
            $ads->status = 0;
        }


        //Auto resize with 500 wide/ 500 height
        if($request->hasFile('image')){
            $image              = $request->file('image');
            $OriginalExtension  = $image->getClientOriginalExtension();
            $image_name         ='controller-ads-'. Carbon::now()->format('d-m-Y H-i-s') .'.'. $OriginalExtension;
            $destinationPath    = ('uploads/images/ads/admin');
            $resize_image       = Image::make($image->getRealPath());
            $resize_image->resize(500, 500, function($constraint){
                $constraint->aspectRatio();
            });
            $resize_image->save($destinationPath . '/' . $image_name);
            $ads->image    = $image_name;
        }
        $ads->save();
        return $ads;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $id = $request->input('id');
        $request->validate([
            'url'           => 'nullable',
            'startingDate'  => 'required',
            'endingDate'    => 'required',
            //'image'         => 'required|image',
        ]);
        $ads = ControllerAds::find($id);
        $ads->url = $request->input('url');
        $ads->starting = $request->input('startingDate');
        $ads->ending = $request->input('endingDate');

        if ($request->input('activation') == 1){
            $ads->status = 1;
        }else{
            $ads->status = 0;
        }

        //Auto resize with 500 wide/ 500 height
        if($request->hasFile('image')){
            $image              = $request->file('image');
            $OriginalExtension  = $image->getClientOriginalExtension();
            $image_name         ='controller-ads-'. Carbon::now()->format('d-m-Y H-i-s') .'.'. $OriginalExtension;
            $destinationPath    = ('uploads/images/ads/controller');
            $resize_image       = Image::make($image->getRealPath());
            $resize_image->resize(500, 500, function($constraint){
                $constraint->aspectRatio();
            });
            $resize_image->save($destinationPath . '/' . $image_name);
            $ads->image    = $image_name;
        }
        $ads->save();
        return $ads;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
