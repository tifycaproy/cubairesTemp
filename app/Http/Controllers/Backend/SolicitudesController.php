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
    public function index()
    {

        $solicitudes = Solicitudes::join('paises', 'solicitudes.pais','=','paises.iso')
                                    ->join('tours','solicitudes.id_tour', '=', 'tours.id')
                                    ->select('solicitudes.*','tours.nombre as tour', 'paises.nombre as pais')
                                    ->get();
                                    //dd($solicitudes);

        return view ('Backend.solicitudes.index', compact('solicitudes'));
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
            $solicitud->detalle_cliente_id = $detalles_cliente->id;
            $solicitud->servicio_id = $request->servicio_id;
            $solicitud->save();

            

              return redirect()->route("usuario");
            
        }
        else{
            return redirect()->route("/");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Solicitud  $solicitud
     * @return \Illuminate\Http\Response
     */
    public function show(Solicitud $solicitud)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *@param  \Illuminate\Http\Request  $request
     * @param  \App\Solicitud  $solicitud
     * @return \Illuminate\Http\Response
     */
    public function edit($id_servicio,$id_solicitante)
    {
        
        $solicitante= Solicitantes::where('id_solicitante', $id_solicitante)->get();
        $tramite= Solicitud::where('id_servicio', $id_servicio)->where('id_solicitante', $id_solicitante)->get();
        $servicio = Servicios::join('formatos', 'formatos.servicio_id', '=', 'servicios.id')
        ->where('servicios.id', $id_servicio)
        ->get();
        
        foreach ($servicio as $key => $value) {
            if($value->seccion_id==3){
                $secciones_campos= SeccionesCampos::join('secciones', 'secciones.id', '=', 'secciones_campos.seccion_id')
                                                    ->join('campos', 'campos.id', '=', 'secciones_campos.campo_id')
                                                    ->join('tipos_campos', 'tipos_campos.id', '=', 'campos.tipo_campo_id')
                                                    ->where('seccion_id',$value->seccion_id)->get();
                foreach ($secciones_campos as $key3 => $value3) {    
                    foreach ($solicitante as $key2 => $value2) {
                        if($value2->id_campo==$value3->campo_id){
                            $formato_ver[$key][$key3]["id_solicitante"]=$id_solicitante;
                            $formato_ver[$key][$key3]["nombre_servicio"]=$value->titulo_servicio;
                            $formato_ver[$key][$key3]["id_servicio"]=$value->id;
                            $formato_ver[$key][$key3]["nombre_seccion"]=$value3->nombre_seccion;
                            $formato_ver[$key][$key3]["id_seccion"]=$value->seccion_id;
                            $formato_ver[$key][$key3]["nombre_campo"]=$value3->nombre_campo;
                            $formato_ver[$key][$key3]["id_campo"]=$value3->campo_id;
                            $formato_ver[$key][$key3]["tipo_campo"]=$value3->name;                            
                            $formato_ver[$key][$key3]["valor"]=$value2->valor;
                            $formato_ver[$key][$key3]["status"]="";
                        }
                    }
                }
            }
            else{
                $secciones_campos= SeccionesCampos::join('secciones', 'secciones.id', '=', 'secciones_campos.seccion_id')
                                                    ->join('campos', 'campos.id', '=', 'secciones_campos.campo_id')
                                                    ->join('tipos_campos', 'tipos_campos.id', '=', 'campos.tipo_campo_id')
                                                    ->where('seccion_id',$value->seccion_id)->get();
                foreach ($secciones_campos as $key3 => $value3) {                  
                    foreach ($tramite as $key2 => $value2) {
                        if($value2->id_campo==$value3->campo_id){                            
                            $formato_ver[$key][$key3]["id_solicitante"]=$id_solicitante;
                            $formato_ver[$key][$key3]["nombre_servicio"]=$value->titulo_servicio;
                            $formato_ver[$key][$key3]["id_servicio"]=$value->id;
                            $formato_ver[$key][$key3]["nombre_seccion"]=$value3->nombre_seccion;
                            $formato_ver[$key][$key3]["id_seccion"]=$value->seccion_id;
                            $formato_ver[$key][$key3]["nombre_campo"]=$value3->nombre_campo;
                            $formato_ver[$key][$key3]["id_campo"]=$value3->campo_id; 
                            $formato_ver[$key][$key3]["tipo_campo"]=$value3->name;                          
                            $formato_ver[$key][$key3]["valor"]=$value2->valor;
                            $formato_ver[$key][$key3]["status"]=$value2->status;
                        }
                    }
                }
            }           
        }      
        $status = collect([
            ['status' => 1, 'name' => 'En Proceso'],
            ['status' => 2, 'name' => 'Finalizada'],
            ['status' => 3, 'name' => 'Rechazada'],
        ]);  
        if ($formato_ver[1][0]["status"]==1) {
            $status = collect([                
                ['status' => 2, 'name' => 'Finalizada'],
                ['status' => 3, 'name' => 'Rechazada'],
            ]);
        }
        
        $status_select = $status->pluck('name','status');           
        return view('Backend.form.formtramite',['formato_ver'=>$formato_ver,'status'=>$status_select]);     
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Solicitud  $solicitud
     * @return \Illuminate\Http\Response
     */
    public function update($id_servicio,$id_solicitante,Request $request)
    {
        $tramite = Solicitud::where('id_servicio', $id_servicio)
                ->where('id_solicitante', $id_solicitante)
                ->get();
        if (!$tramite){
        return view('Backend.index');
        }
        else{

          $tramite = Solicitud::where('id_servicio', $id_servicio)
                        ->where('id_solicitante', $id_solicitante)          
                        ->update(['status'=>$request->status]);
          ;
        return redirect()->route("vertramites");
     }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Solicitud  $solicitud
     * @return \Illuminate\Http\Response
     */
    public function destroy(Solicitud $solicitud)
    {
        //
    }
}
