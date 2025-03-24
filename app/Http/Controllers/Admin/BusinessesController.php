<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Businesses;

class BusinessesController extends Controller
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
        $businesses = Businesses::orderBy('created_at', 'desc')->get();
        return view('pages.admin.businesses.index', compact('businesses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.businesses.create');
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
            'name'  => 'required|unique:businesses|max:255',
            'owner' => 'required|max:255',
            'location'  => 'required|max:255',
            'body'      => 'required',
            'image' => 'image|mimes:jpeg,png,jpg',
        ]);

        if ($data->fails()) {
            return redirect()->back()->withErrors($data->errors());
        }

        if($request->image !== null) {
            $str = str_replace(' ', '-', $request->title);
            $title = preg_replace('/[^A-Za-z0-9\-]/', '', $str);
            
            $imageName = time()."_".$title.'.'.$request->image->extension();
            $request->image->move(public_path('images/businesses'), $imageName);
        }

        $business = new Businesses($request->all());
        if($request->image !== null) {
            $business->image = "/images/businesses/" . $imageName;
        }
        $business->save();
        return redirect()->route('businesses.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $business = Businesses::find($id);
        return view('pages.admin.businesses.edit', compact('business'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $business = Businesses::find($id);

        $data = Validator::make($request->all(), [
            'name'  => 'required|unique:businesses|max:255',
            'owner' => 'required|max:255',
            'location'  => 'required|max:255',
            'body'      => 'required',
            'image' => 'image|mimes:jpeg,png,jpg',
        ]);

        if ($data->fails()) {
            return redirect()->back()->withErrors($data->errors());
        }

        if($request->image !== null) {
            $str = str_replace(' ', '-', $request->title);
            $title = preg_replace('/[^A-Za-z0-9\-]/', '', $str);
            
            $imageName = time()."_".$title.'.'.$request->image->extension();
            $request->image->move(public_path('images/businesses'), $imageName);
        }

        $business->name = $request->title;
        $business->owner = $request->owner;
        $business->location = $request->subtitle;
        $business->body = $request->body;
        if($request->image !== null) {
            $business->image = "/images/businesses/" . $imageName;
        }
        $business->save();
        return redirect()->route('businesses.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $business = Businesses::find($id);
        $business->delete();

        return back();
    }
}
