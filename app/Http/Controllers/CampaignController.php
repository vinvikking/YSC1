<?php

namespace App\Http\Controllers;

use App\Campaign;
use Illuminate\Http\Request;

class CampaignController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {



        $campagnes = Campaign::all();
        // $s = auth()->user()
       return view('campagnes.index', compact('campagnes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('campagnes.create');
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
     * @param  \App\Campagne  $campagne
     * @return \Illuminate\Http\Response
     */
    public function show(Campagne $campagne)
    {
        return view('campagnes.show', compact('campagnes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Campagne  $campagne
     * @return \Illuminate\Http\Response
     */
    public function edit(Campagne $campagne)
    {
        return view('campagnes.edit', compact('campagnes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Campagne  $campagne
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Campagne $campagne)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Campagne  $campagne
     * @return \Illuminate\Http\Response
     */
    public function destroy(Campagne $campagne)
    {
        //
    }

    /**
     *  Searches in the resources.
     *
     * @param $request
     * @return \Illuminate\Http\Response
     */

    public function search(Request $request) {
        $search = htmlspecialchars($request->get('q'));
        $term = strtolower($request->get('term'));

        switch ($term) {
            // TODO: No longer search on ID.
            case "titel":
                $campagnes = Campaign::query()->where('title', 'like', "%$search%")->get();
                break;

            case "omschrijving":
                $campagnes = Campaign::query()->where('description', 'like', "%$search%")->get();
                break;

            default:
                toastError("'$term' is geen geldige zoekterm.");

                return redirect()->to(route('campagnes.index'));
        }

        return view('campagnes.index', compact('campagnes', 'search', 'term'));
    }

}
