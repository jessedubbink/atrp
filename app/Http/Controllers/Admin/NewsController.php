<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\News;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Auth;

class NewsController extends Controller
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
        $news = News::orderBy('created_at', 'desc')->get();
        return view('pages.admin.news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.news.create');
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
            'title'  => 'required|unique:news|max:255',
            'subtitle'  => 'max:255',
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
            $request->image->move(public_path('images/articles'), $imageName);
        }

        $article = new News($request->all());
        $article->author = Auth::user()->id;
        if($request->image !== null) {
            $article->image = "/images/articles/" . $imageName;
        }
        $article->save();
        return redirect()->route('news.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $article = News::where('slug', $slug)->first();
        return view('pages.admin.news.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = News::find($id);
        return view('pages.admin.news.edit', compact('article'));
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
        $article = News::find($id);

        $data = Validator::make($request->all(), [
            'title'  => 'required|max:255',
            'subtitle'  => 'max:255',
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
            $request->image->move(public_path('images/articles'), $imageName);
        }

        $article->title = $request->title;
        $article->subtitle = $request->subtitle;
        $article->body = $request->body;
        $article->author = Auth::user()->id;
        if($request->image !== null) {
            $article->image = "/images/articles/" . $imageName;
        }
        $article->save();
        return redirect()->route('news.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = News::find($id);
        $article->delete();

        return back();
    }
}
