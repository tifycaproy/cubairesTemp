<?php

namespace App\Http\Controllers\Backend;

use App\Servicios;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\DetallesClientes as DetallesClientes;
use App\Solicitudes;
use App\Paises;
use App\User;

class SolicitudesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        $vista_porconfirmar=NULL;
        $vista_confirmado=NULL;
        if($request->redireccion==NULL){
            $vista_porconfirmar="active";
        }
        else{
            $vista_confirmado="active";
        }
        $solicitudes= Solicitudes::select(DB::raw('solicitudes.id,titulo_servicio, solicitudes.created_at, estatus_solicitud, name'))
                    ->join('servicios', 'servicios.id', '=', 'solicitudes.servicio_id')
                    ->join('detalles_clientes', 'detalles_clientes.id', '=', 'solicitudes.detalle_cliente_id')
                    ->join('role_user', 'role_user.id', '=', 'detalles_clientes.role_user_id')
                    ->join('users', 'users.id', '=', 'role_user.user_id')
                    ->get();
        $porconfirmar=array();
        $confirmados=array();
        // dd($solicitudes);
        foreach ($solicitudes as $key => $value) {
            
            switch ($value["estatus_solicitud"]) {
                case 1:
                $confirmados[$key]["solicitud_id"]=$value["id"];
                $confirmados[$key]["name"]=$value["name"];
                $confirmados[$key]["titulo_servicio"]=$value["titulo_servicio"];
                $confirmados[$key]["created_at"]=$value["created_at"];
                $confirmados[$key]["estatus_solicitud"]=$value["estatus_solicitud"];
                    break;
                    case 0:
                    $porconfirmar[$key]["solicitud_id"]=$value["id"];
                    $porconfirmar[$key]["name"]=$value["name"];
                    $porconfirmar[$key]["titulo_servicio"]=$value["titulo_servicio"];
                    $porconfirmar[$key]["created_at"]=$value["created_at"];
                    $porconfirmar[$key]["estatus_solicitud"]=$value["estatus_solicitud"];
                    break;
                default:
                   
                    break;
            }
        }    
        return view('Backend.solicitudes.index',['porconfirmar'=>$porconfirmar,'confirmados'=>$confirmados,'vista_porconfirmar'=>$vista_porconfirmar,'vista_confirmado'=>$vista_confirmado]);     
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
        // dd($request);

        if(Auth::user() && Auth::user()->hasRole('client')){
            
            $detalles_cliente=User::join('role_user', 'role_user.user_id', '=', 'users.id')
                           ->join('detalles_clientes', 'detalles_clientes.role_user_id', '=', 'role_user.id')
                            ->where('users.id',Auth::user()->id)
                            ->first();
            // dd($detalles_cliente);
            
            $solicitud = new Solicitudes;
            $solicitud->fill($request->input());
            $solicitud->estatus_solicitud = 0;
            $solicitud->detalle_cliente_id = $detalles_cliente->id;
            $solicitud->servicio_id = $request->servicio_id;
            $solicitud->save();

            

              return redirect()->route("usuario");
            
        }
        else{
            if(Auth::user()){
                return redirect()->route("vertr");
            }
            else{
                return redirect()->route("/");
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Solicitudes  $solicitud
     * @return \Illuminate\Http\Response
     */
    public function show(Solicitudes $solicitudes)
    {

        
    }

    /**
     * Show the form for editing the specified resource.
     *@param  \Illuminate\Http\Request  $request
     * @param  \App\Solicitudes  $solicitud
     * @return \Illuminate\Http\Response
     */
    public function edit(Solicitudes $solicitudes)
    {   

        return view('Backend.form.formtramite');     
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Solicitudes  $solicitud
     * @return \Illuminate\Http\Response
     */
    public function update($solicitudes,$estatus_solicitud)
    {         
        // dd();
        Solicitudes::where('id', $solicitudes)
                    ->update(['estatus_solicitud'=>$estatus_solicitud]);
        $request->redireccion = $estatus_solicitud;
        return redirect()->route("vertramites",['request'=>$request]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Solicitudes  $solicitud
     * @return \Illuminate\Http\Response
     */
    public function destroy(Solicitudes $solicitudes)
    {

    }
}
