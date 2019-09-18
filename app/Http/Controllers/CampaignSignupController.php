<?php

namespace App\Http\Controllers;

use App\CampaignSignUp;
use App\Campaign;
use App\Influencer;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CampaignSignupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // $CampaignSignUp = CampaignSignUp::all();
        $campagnes = Campaign::orderBy('created_at', 'desc')->take(3)->get();
        return view('campaignSignUp.index', compact('campagnes'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CampaignSignUp  $campaignSignUp
     * @return \Illuminate\Http\Response
     */
    public function show(CampaignSignUp $campaignSignUp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CampaignSignUp  $campaignSignUp
     * @return \Illuminate\Http\Response
     */
    public function edit(CampaignSignUp $campaignSignUp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CampaignSignUp  $campaignSignUp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CampaignSignUp $campaignSignUp)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CampaignSignUp  $campaignSignUp
     * @return \Illuminate\Http\Response
     */
    public function destroy(CampaignSignUp $campaignSignUp)
    {
        //
    }
}
