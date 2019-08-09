<?php

namespace App\Http\Controllers;

use App\Influencer;
use App\User;
use Illuminate\Http\Request;

class InfluencerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$influencers = influencer::all();
        $influencers = User::all();
        // $s = auth()->user()
       return view('influencers.index', compact('influencers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('influencers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Influencer  $influencer
     * @return \Illuminate\Http\Response
     */
    public function show(Influencer $influencer)
    {
        //
        return view('influencers.show', compact('influencers'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Influencer  $influencer
     * @return \Illuminate\Http\Response
     */
    public function edit(Influencer $influencer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Influencer  $influencer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Influencer $influencer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Influencer  $influencer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Influencer $influencer)
    {
        //
    }

    
    public function search(Request $request) {
        $search = htmlspecialchars($request->get('q'));
        $term = strtolower($request->get('term'));

        switch ($term) {
            // TODO: No longer search on ID.
            case "naam":
                $influencers = User::query()->where('name', 'like', "%$search%")->get();
                break;

            case "email":
                $influencers = User::query()->where('email', 'like', "%$search%")->get();
                break;

            default:
                toastError("'$term' is geen geldige zoekterm.");

                return redirect()->to(route('influencers.index'));
        }

        return view('influencers.index', compact('influencers', 'search', 'term'));
    }
}
