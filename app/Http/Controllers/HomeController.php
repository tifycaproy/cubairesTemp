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
        $data=$_SERVER["HTTP_REFERER"];
        $info=explode("?",$data);
        if(Auth::user()->hasRole('client')){
          if(count($info)>1){
            if($info[1]=="paquete=1"){
              return redirect()->back();
            }
          }          
          else{
            return redirect()->route("usuario");
          }
        }
        else{
          $request->user()->authorizeRoles(['user', 'admin']);


          // return view('home');
          //redirecciona cuando inicia sesión al panel administrativo
          return view('Backend.index');
        }         
      }
}
