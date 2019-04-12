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
use App\Solicitudes;
use App\User;



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

    public function sesion(Request $request){
        if(Auth::user()){
            if(Auth::user()->hasRole('client')){
                return redirect()->route("usuario");    
            }            
        }        
        else{
            $lugar="login";
            $paquete=NULL;
            return view('Frontend.sesion',['lugar'=>$lugar,'paquete'=>$paquete]);
        }
        
        
    }

    public function usuario(Request $request){  
        // dd($request);      
        if(Auth::user() && Auth::user()->hasRole('client')){
            
            $detalles_cliente=User::join('role_user', 'role_user.user_id', '=', 'users.id')
                           ->join('detalles_clientes', 'detalles_clientes.role_user_id', '=', 'role_user.id')
                            ->where('users.id',Auth::user()->id)
                            ->first();
            // dd($detalles_cliente);
            $solicitudes=Solicitudes::select(DB::raw('solicitudes.id,titulo_servicio, fecha_desde, fecha_hasta, numero_nino, numero_adulto, solicitudes.created_at, case  
            when estatus_solicitud LIKE 0 then "Pendiente por Confirmación" 
            when estatus_solicitud LIKE 1 then "Confirmado"
            when estatus_solicitud LIKE 2 then "Rechazado"
         end as estatus_solicitud'))
                            ->join('servicios', 'servicios.id', '=', 'solicitudes.servicio_id')
                            ->where('detalle_cliente_id',$detalles_cliente->id)
                            ->orderBy('solicitudes.created_at')
                            ->get();

                // dd($solicitudes);            
            if($solicitudes){
                $solicitudes=$solicitudes;
            }
            else{
                $solicitudes="";
            }            
            if($request->lugar && $request->servicio){
                return redirect()->route('detalle',['id'=>$request->servicio]);
            }
            else{
                return view('Frontend.usuario', ['detalles_cliente'=>$detalles_cliente,'solicitudes'=>$solicitudes]);
            }
            
        }
        else{
            return redirect()->route("/");
        }
        
    }

    public function solicitar(Request $request, $id){
        
        // dd($id);
        if(Auth::user()){
            if(Auth::user()->hasRole('client')){

                return view('Frontend.solicitar',['paquete_id'=>$id]);
            }
        }
        else{
            $lugar="solicitud";
            $request->session()->put('paquete', $id);
            return view('Frontend.sesion',['paquete_id'=>$id]); 
            // redirect()->route('sesion2',['lugar'=>$lugar,'paquete'=>$request->paquete]);            
        }
    }

    public function solicitud(Request $request,$id){
        // dd($request);
        if(Auth::user()){
            if(Auth::user()->hasRole('client')){
                return view('Frontend.solicitar');
            }
        }
        else{
            $lugar="solicitud";
            $request->session()->put('paquete', $id);
            return view('Frontend.sesion',['lugar'=>$lugar,'paquete'=>$solicitar]); 
            // redirect()->route('sesion2',['lugar'=>$lugar,'paquete'=>$request->paquete]);            
        }
    }

    public function recuperar(){
        return view('Frontend.recuperar');
    }

    public function contrasena(){
        return view('Frontend.contrasena');
    }
}
