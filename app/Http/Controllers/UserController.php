<?php

namespace App\Http\Controllers;

use App\User;
use App\Influencer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('canAny:see user', ['only' => 'index']);
        $this->middleware('canAny:create user', ['only' => ['create', 'store']]);
        $this->middleware('canAny:update user', ['only' => ['edit', 'update']]);
        $this->middleware('canAny:destroy user', ['only' => ['destroy']]);
    }


    public function index()
    {
        //
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        
        // $influencer = Influencer::all()->get(Auth::user()->imageable_id - 1);
        $influencer = Influencer::where('user_id' , '=' , $user->id )->get();
        return view('user.show', compact('user', 'influencer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        // $t = Influencer::where('user_id', '=' ,Auth::id()); 
        // $influencer = Influencer::where('user_id' , '=' , $user->id )->get();

        // if ($user->id === ) {
        //     return view('user.edit', compact('user'));
        // }

        // // Check if user is the post author
        // if ($user->id === $post->author_id) {
        //     return true;
        // }
        $this->authorize('edit', auth()->user());
        return view('user.edit', compact('user')); 
        
        // $user1 = User::with('influencer')->get();

        // dd($user->id);
        // $t = Influencer::get()->where('user_id', '=' ,Auth::id());

        // $t = Influencer::get()->where('user_id', '===' ,Auth::id());
        // dd($t);
        // dd(auth::id());

        // if(Auth::id() === $t->user_id){
        //         return view('user.edit', compact('user'));      
        //     }
        // else{
        //         toastr()->error('U heeft geen toegang om deze gebruiker te wijzigen');
        //         return abort('403'); // deny
        //     }

        
        //dd(Auth::id() == Influencer::id('user_id'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
