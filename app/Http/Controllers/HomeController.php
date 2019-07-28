<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Role;
use App\User;

class HomeController extends Controller
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
    public function index(request $request)
    {
       // $t = $request->user()->authorizeRoles(['employee', 'manager']);
    
       // return view('home');
        return view("/home");
    }



    public function someAdminStuff(Request $request)
      {
        $request->user()->authorizeRoles('manager');
        return view(‘some.view’);
      }
}
