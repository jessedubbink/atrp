<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Updates;
use Illuminate\Http\Request;
use Validator;

class UpdatesController extends Controller
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
     * @var \App\Updates $updates
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $updates = Updates::orderBy('created_at', 'DESC')->get();
        return view('pages.admin.updates.index', compact('updates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.updates.create');
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
            'description' => 'required',
        ]);

        if ($data->fails()) {
            return redirect()->back()->withErrors($data->errors());
        }

        $update = new Updates($request->all());
        $update->save();
        return redirect()->route('updates.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $update = Updates::where('id', $id)->first();
        return view('pages.admin.updates.show', compact('update'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  integer $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $update = Updates::find($id);
        return view('pages.admin.updates.edit', compact('update'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  integer $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update = Updates::find($id);

        $data = Validator::make($request->all(), [
            'title'  => 'required|max:255',
            'description' => 'required',
        ]);

        if ($data->fails()) {
            return redirect()->back()->withErrors($data->errors());
        }

        $update->title = $request->title;
        $update->description = $request->description;
        $update->save();
        return redirect()->route('updates.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  integer $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $update = Updates::find($id);
        $update->delete();

        return back();
    }
}
