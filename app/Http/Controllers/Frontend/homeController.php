<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\DetallesClientes as DetallesClientes;
use App\Slider;
use App\Comentarios;
use App\Categorias;
use App\CategoriasServicios;
use App\Servicios;



class homeController extends Controller
{
    public function index(){

        $slider = Slider::where('publico', 1)->orderBy('posicion','asc')->get();
        $categorias = Categorias::orderBy('posicion','asc')->get();
        $ofertas = Servicios::select('titulo_servicio as titulo', 'oferta', 'id')->whereNotNull('oferta')->where('estatus', 1)->inRandomOrder()->limit(2)->get();
        $destacados = Servicios::select('titulo_servicio as titulo', 'monto', 'id', 'url_imagen')->where('destacado', 1)->where('estatus', 1)->inRandomOrder()->whereNull('oferta')->limit(4)->get();
        $comentarios = Comentarios::all();

        return view('Frontend.index', compact('slider','categorias','ofertas','destacados','comentarios'));
    }

    public function nosotros(){
        return view('Frontend.nosotros');
    }

    public function ofertas(){
        $ofertas = Servicios::whereNotNull('oferta')->where('estatus', 1)->orderBy('id', 'desc')->paginate(10);
        return view('Frontend.ofertas',compact('ofertas'));
    }

    public function catalogo(Request $request){

        if ($request->isMethod('post')) {
            $cadena = '%'.$request->search_input.'%';
           $servicios = Servicios::where('titulo_servicio','LIKE', $cadena)->paginate(500); 
        }else{
            $servicios = Servicios::where('estatus', 1)->paginate(10); 
        }
       
        if ($request->ajax()) {
           $view = view('Frontend.paquetes', compact('servicios'))->render();
            return response()->json(['html'=>$view]);
        }
        return view('Frontend.catalogo', compact('servicios'));
    }

    public function contacto(){
        return view('Frontend.contacto');
    }

    public function detalle(Request $request){

        $paquete = Servicios::where('id',$request->id)->first();

        $servicios = Servicios::select('url_imagen', 'titulo_servicio', 'id', 'monto','oferta')->inRandomOrder()->limit(8)->get();

        return view('Frontend.detalle', compact('paquete','servicios'));
    }

    public function categorias(Request $request){

        $servicios = Servicios::Join('categorias_servicios', 'servicios.id', '=', 'categorias_servicios.servicio_id')->where('categorias_servicios.categoria_id',$request->id)->select('servicios.id', 'servicios.titulo_servicio', 'servicios.url_imagen', 'servicios.descripcion', 'servicios.valoracion', 'servicios.monto', 'servicios.oferta')->get();
        $categoria = Categorias::where('id',$request->id )->first();

        return view('Frontend.categorias', compact('servicios','categoria'));
    }

    public function sesion(){
        
        return view('Frontend.sesion');
    }

    public function usuario(){
        // dd(Auth::user());
        if(Auth::user() && Auth::user()->hasRole('client')){
            $detalles_cliente=DetallesClientes::join('role_user', 'role_user.id', '=', 'detalles_clientes.role_user_id')
                            ->join('paises', 'paises.id', '=', 'detalles_clientes.pais_id')
                            ->where('user_id',Auth::user()->id)
                            ->first();
            // dd($detalles_cliente);
            $solicitudes="";
            return view('Frontend.usuario', ['detalles_cliente'=>$detalles_cliente,'solicitudes'=>$solicitudes]);
        }
        else{
            return redirect()->route("/");
        }
        
    }

    public function solicitar(){
        return view('Frontend.solicitar');
    }

    public function recuperar(){
        return view('Frontend.recuperar');
    }

    public function contrasena(){
        return view('Frontend.contrasena');
    }
}
