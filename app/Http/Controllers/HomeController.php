<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
     * @return \Illuminate\Http\Response
     */
     public function index(Request $request)
      {
        // dd(Auth::user());
        
        if(Auth::user()->hasRole('client')){         
            
            return redirect()->back();
            // return redirect()->route("usuario");
          
        }
        else{
          $request->user()->authorizeRoles(['user', 'admin']);
          // dd($request);

          // return view('home');
          //redirecciona cuando inicia sesión al panel administrativo
          return view('Backend.index');
        }         
      }
}
