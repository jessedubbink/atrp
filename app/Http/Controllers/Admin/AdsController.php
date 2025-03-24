<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Ads;
use Validator;

class AdsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ads = Ads::orderBy('created_at', 'desc')->get();
        return view('pages.admin.news.ads.index', compact('ads'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.news.ads.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = Validator::make($request->all(), [
            'title'  => 'required|max:255',
            'body'      => 'required',
            'location'  => 'required|max:255',
            'image' => 'image|mimes:jpeg,png,jpg',
        ]);

        if ($data->fails()) {
            return redirect()->back()->withErrors($data->errors());
        }

        if($request->image !== null) {
            $str = str_replace(' ', '-', $request->title);
            $title = preg_replace('/[^A-Za-z0-9\-]/', '', $str);

            $imageName = time()."_".$title.'.'.$request->image->extension();
            $request->image->move(public_path('images/'), $imageName);
        }

        $ad = new Ads($request->all());
        if($request->image !== null) {
            $ad->image = "/images/" . $imageName;
        }
        $ad->save();
        return redirect()->route('news.ads.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ad = Ads::find($id);
        return view('pages.admin.news.ads.edit', compact('ad'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ad = Ads::find($id);

        $data = Validator::make($request->all(), [
            'title'  => 'required|max:255',
            'body'      => 'required',
            'location'  => 'required|max:255',
            'image' => 'image|mimes:jpeg,png,jpg',
        ]);

        if ($data->fails()) {
            return redirect()->back()->withErrors($data->errors());
        }

        if($request->image !== null) {
            $str = str_replace(' ', '-', $request->title);
            $title = preg_replace('/[^A-Za-z0-9\-]/', '', $str);
            
            $imageName = time()."_".$title.'.'.$request->image->extension();
            $request->image->move(public_path('images/'), $imageName);
        }
        
        $ad->title = $request->title;
        $ad->body = $request->body;
        $ad->location = $request->location;
        if($request->image !== null) {
            $ad->image = "/images/" . $imageName;
        }
        $ad->save();
        return redirect()->route('news.ads.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ads = Ads::find($id);
        $ads->delete();

        return back();
    }
}
