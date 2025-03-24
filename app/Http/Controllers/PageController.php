<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Updates;
use App\News;
use App\Ads;
use App\RealEstate;
use App\Businesses;

class PageController extends Controller
{
    /**
     * Show the application's homepage.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function homepage()
    {
        return view('pages.homepage');
    }

    /**
     * Show last week's updates.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function updates()
    {
        $updates = Updates::orderBy('created_at', 'desc')->get();
        return view('pages.updates', compact('updates'));
    }

    /**
     * Show the server rules.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function rules()
    {
        return view('pages.rules');
    }

    /**
     * Show the news page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function news()
    {
        $articles = News::orderBy('created_at', 'desc')->take(3)->get();
        $ads = Ads::all()->random(2);
        return view('pages.news', compact('articles', 'ads'));
    }

    /**
     * Show the policies page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function policies()
    {
        return view('pages.policies');
    }

    /**
     * Show the realestate page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function realestate(Request $request)
    {
        $sortBy = 'created_at';
        $orderBy = 'asc';
        $q = null;

        if($request->has('sortBy')) $sortBy = $request->query('sortBy');
        if($request->has('orderBy')) $orderBy = $request->query('orderBy');
        if($request->has('q')) $q = $request->query('q');


        $properties = RealEstate::search($q)->orderBy($sortBy, $orderBy)->paginate(12);

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

        return view('pages.realestate', compact('locations', 'properties', 'orderBy', 'sortBy', 'q'));
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function showProperty($slug)
    {
        $property = RealEstate::where('slug', $slug)->first();
        return view('pages.showProperty', compact('property'));
    }

    /**
     * Show the law page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function laws()
    {
        return view('pages.laws');
    }

    /**
     * Show the businesses page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function businesses()
    {
        $businesses = Businesses::orderBy('created_at', 'desc')->get();
        return view('pages.businesses', compact('businesses'));
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function showBusiness($slug)
    {
        $business = Businesses::where('slug', $slug)->first();
        return view('pages.showBusiness', compact('business'));
    }
}
