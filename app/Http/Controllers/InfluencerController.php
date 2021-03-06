<?php

namespace App\Http\Controllers;

use App\Influencer;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class InfluencerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('canAny:see Influencer', ['only' => 'index']);
        $this->middleware('canAny:create Influencer', ['only' => ['create', 'store']]);
        $this->middleware('canAny:update Influencer', ['only' => ['edit', 'update']]);
        $this->middleware('canAny:destroy Influencer', ['only' => ['destroy']]);
    }

    public function index()
    {
        //$influencers = influencer::all();
        $influencers = Influencer::all();
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
    public function show(Influencer $influencer, User $User)
    {
        //
       //dd($influencer->user_id);
        return view('influencers.show', compact('influencer', 'user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Influencer  $influencer
     * @return \Illuminate\Http\Response
     */
    public function edit(Influencer $influencer)
    {

        return view('influencers.edit', compact('influencer'));

        // Check if user is the post author
        if(Auth::id() === $influencer->user_id){
                return view('influencers.edit', compact('influencer'));     
            }
        else{
                toastr()->error('U heeft geen toegang om deze gebruiker te wijzigen');
                return abort('403'); // deny
            }
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
                $influencer = User::query()->where('name', 'like', "%$search%")->get();
                break;

            case "email":
                $influencer = User::query()->where('email', 'like', "%$search%")->get();
                break;

            default:
                toastError("'$term' is geen geldige zoekterm.");

                return redirect()->to(route('influencers.index'));
        }

        return view('influencers.index', compact('influencers', 'search', 'term'));
    }

}
