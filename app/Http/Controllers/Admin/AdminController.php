<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Updates;
use App\News;
use App\Ads;
use App\RealEstate;

class AdminController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function dashboard()
    {
        $updates = Updates::orderBy('created_at', 'DESC')->limit(4)->get();
        $articles = News::orderBy('created_at', 'DESC')->limit(4)->get();
        $ads = Ads::orderBy('created_at', 'DESC')->limit(4)->get();
        $properties = RealEstate::where('is_sold', 1)->orderBy('updated_at', 'DESC')->limit(4)->get();
        return view('pages.admin.dashboard', compact('updates', 'articles', 'ads', 'properties'));
    }
}
