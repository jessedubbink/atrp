<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\RealEstate;
use Validator;
use Illuminate\Support\Facades\Auth;

class RealestateController extends Controller
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
        $properties = RealEstate::orderBy('created_at', 'desc')->get();
        return view('pages.admin.realestate.index', compact('properties'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function sell($id)
    {
        $property = RealEstate::find($id);
        if($property->is_sold == 0) {
            $property->is_sold = 1;
        } else {
            $property->is_sold = 0;
        }
        $property->save();
        return redirect()->route('realestate.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $locations = [
            "Annesburg",
            "Armadillo",
            "Blackwater",
            "Valentine",
            "Rhodes",
            "Saint Denis",
            "Strawberry",
            "Tumbleweed",
            "Van Horn",
        ];

        return view('pages.admin.realestate.create', compact('locations'));
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
            'location'  => 'required|max:255',
            'body'      => '',
            'owner'     => 'required|max:255',
            'price'     => 'required|numeric',
            'image' => 'image|mimes:jpeg,png,jpg',
            'type' => 'required|max:255'
        ]);

        if ($data->fails()) {
            return back()->withInput()->withErrors($data->errors());
        }

        if($request->image !== null) {
            $str = str_replace(' ', '-', $request->title);
            $title = preg_replace('/[^A-Za-z0-9\-]/', '', $str);
            
            $imageName = time()."_".$title.'.'.$request->image->extension(); 
            $request->image->move(public_path('images/properties'), $imageName);
        }

        $property = new RealEstate($request->all());
        if($request->image !== null) {
            $property->image = "/images/properties/" . $imageName;
        }
        $property->save();

        return redirect()->route('realestate.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $locations = [
            "Annesburg",
            "Armadillo",
            "Blackwater",
            "Valentine",
            "Rhodes",
            "Saint Denis",
            "Strawberry",
            "Tumbleweed",
            "Van Horn",
        ];
        

        $property = RealEstate::find($id);
        return view('pages.admin.realestate.edit', compact('property', 'locations'));
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
        $property = RealEstate::find($id);

        $data = Validator::make($request->all(), [
            'title'  => 'required|max:255',
            'location'  => 'required|max:255',
            'body'      => '',
            'owner'     => 'required|max:255',
            'price'     => 'required|numeric',
            'is_sold'   => '',
            'image' => 'image|mimes:jpeg,png,jpg',
            'type' => 'required|max:255'
        ]);

        if ($data->fails()) {
            return back()->withInput()->withErrors($data->errors());
        }

        if($request->image !== null) {
            $str = str_replace(' ', '-', $request->title);
            $title = preg_replace('/[^A-Za-z0-9\-]/', '', $str);
            
            $imageName = time()."_".$title.'.'.$request->image->extension();
            $request->image->move(public_path('images/properties'), $imageName);
        }

        $property->title = $request->title;
        $property->location = $request->location;
        $property->body = $request->body;
        $property->owner = $request->owner;
        $property->price = $request->price;
        $property->type = $request->type;
        if($request->image !== null) {
            $property->image = "/images/properties/" . $imageName;
        }
        $property->save();

        return redirect()->route('realestate.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $property = RealEstate::find($id);
        $property->delete();

        return back();
    }
}
