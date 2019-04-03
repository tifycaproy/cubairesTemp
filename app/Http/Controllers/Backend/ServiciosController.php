<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Servicios as Servicios;
use App\Categorias as Categorias;
use App\CategoriasServicios as CategoriasServicios;
use App\SeccionesCampos as SeccionesCampos;


class ServiciosController extends Controller
{
  public function list()
  {
       $servicios = Servicios::distinct()
                      ->select('titulo_servicio','monto','oferta','estatus','servicios.created_at','servicios.id','servicios.updated_at')
                      ->orderBy('servicios.updated_at','desc')
                      ->get();

// dd($servicios);
       return view('Backend.servicios',['servicios'=>$servicios]);
  }
  public function listuno(Request $request)
  {
    $id = $request['id_categoria'];
       $servicios = Servicios::where('categoria_id',$id)
                        ->orderBy('titulo_servicio')
                      ->get();
       return $servicios;
  }
  public function form()
  {    
      $categorias = Categorias::distinct()->get();
      return view('Backend.form.formservicio',['categorias'=>$categorias]);
  }
  public function onesearch($id)
  {      
      $servicio = Servicios::select(DB::raw('id, titulo_servicio, IF (destacado = "1", "checked", "") as destacado, IF (estatus = "1", "checked", "") as estatus, descripcion, detalles, condiciones, descripcion, valoracion, monto, oferta, url_imagen,  created_at'))
                ->where('id', $id)
                ->first();
      if (!$servicio){
        return view('Backend.index');
      }
      else{
        
        $categorias= Categorias::get();
        $categorias_servicios=CategoriasServicios::where('servicio_id',$id)->get();
        
        foreach ($categorias_servicios as $key => $categoria_servicio) {
            $paquetes[$categoria_servicio->categoria_id]["categoria_id"]=$categoria_servicio->categoria_id;
            $paquetes[$categoria_servicio->categoria_id]["servicio_id"]=$categoria_servicio->servicio_id;
        }       
        
        foreach ($categorias as $key => $categoria) {
          if(isset($paquetes[$categoria->id]["categoria_id"])){
            $categoria_id[$categoria->id]["categoria_id"]=$categoria->id;
            $categoria_id[$categoria->id]["nombre_categoria"]=$categoria->nombre_categoria;            
            $categoria_id[$categoria->id]["registrado"]=1;
          }
          else {
            $categoria_id[$categoria->id]["categoria_id"]=$categoria->id;
            $categoria_id[$categoria->id]["nombre_categoria"]=$categoria->nombre_categoria;
            $categoria_id[$categoria->id]["registrado"]=0;
          }
        }
        // dd($categoria_id); 
        $valoraciones = collect([
          ['valoracion_id' => '0', 'valoracion' => '0/5'],
          ['valoracion_id' => '1', 'valoracion' => '1/5'],
          ['valoracion_id' => '2', 'valoracion' => '2/5'],
          ['valoracion_id' => '3', 'valoracion' => '3/5'],
          ['valoracion_id' => '4', 'valoracion' => '4/5'],
          ['valoracion_id' => '5', 'valoracion' => '5/5'],
      ]); 

        return view('Backend.form.formservicioupdate',['servicio'=>$servicio,'categoria_id'=>$categoria_id,'valoraciones'=>$valoraciones]);
      }

  }
  public function delete($id)
  {
      DB::table('categorias_servicios')->where('servicio_id', $id)->delete();
      DB::table('servicios')->where('id', $id)->delete();

      return redirect()->route("verservicios");
  }
  public function create(Request $request)
  {
    // dd($request);    
    
    $servicio = new Servicios();
    $servicio->titulo_servicio = $request["titulo_servicio"];
    $servicio->descripcion = $request["descripcion"];
    $servicio->detalles = $request["detalles"];
    $servicio->condiciones = $request["condiciones"];
    $servicio->valoracion = $request["valoracion"];
    $servicio->monto = $request["monto"];
    $servicio->oferta = $request["oferta"];            
    if($request->hasFile('url_imagen')){
      $nombreArchivo = "img_servicios";
      $archivo_img = $nombreArchivo."_".time().'.'.$request["url_imagen"]->getClientOriginalExtension();
              $path = public_path().'/images/servicios/';
              $request["url_imagen"]->move($path, $archivo_img);
      $servicio->url_imagen = $archivo_img;
    }
    if($request["estatus"]){
        $servicio->estatus= "1";
    }
    else {
      $servicio->estatus = "0";
    }
    if($request["destacado"]){
      $servicio->destacado= "1";
  }
  else {
    $servicio->destacado = "0";
  }
    $servicio->save();  
    
    
    $categorias=$request["categoria_id"];
    if($request["categoria_id"]!=""){
      if(count($categorias)>1){
        foreach($categorias as $key=> $categoria){
  
                $categoria_servicio = new CategoriasServicios();              
                $categoria_servicio->categoria_id = $categorias[$key];
                $categoria_servicio->role_user_id = Auth::id();
                $categoria_servicio->servicio_id = $servicio->id;
                $categoria_servicio->save();
              }
      }
      else{
          $categoria_servicio = new CategoriasServicios();
          $categoria_servicio->categoria_id = $request["categoria_id"][0];        
          $categoria_servicio->role_user_id = Auth::id();
          $categoria_servicio->servicio_id = $servicio->id;
          $categoria_servicio->save();
      }
    }
    
    return redirect()->route("verservicios");
  }
  public function update(Request $request, $id)
  {
    // dd($request);
    $servicio = Servicios::where('id', $id)
              ->first();

    if (!$servicio){
      return view('Backend.index');
    }
    else{
        if($request->hasFile('url_imagen')){          
          $nombreArchivo = "img_servicios";
          $archivo_img = $nombreArchivo."_".time().'.'.$request["url_imagen"]->getClientOriginalExtension();
                  $path = public_path().'/images/servicios/';
                  $request["url_imagen"]->move($path, $archivo_img);
                  $servicio = Servicios::where('id',$id)
                  ->update(['url_imagen' => $archivo_img]);
        }   
        if($request["estatus"]){
          $estatus = "1";
      }
      else {
        $estatus = "0";
      }
      if($request["destacado"]){
        $destacado= "1";
      }
      else {
        $destacado = "0";
      }
          $servicio = Servicios::where('id',$id)
                                  ->update(['titulo_servicio' => $request["titulo_servicio"]
                                  ,'descripcion' => $request["descripcion"]
                                  ,'detalles' => $request["detalles"]
                                  ,'condiciones' => $request["condiciones"]
                                  ,'valoracion' => $request["valoracion"]
                                  , 'monto' => $request["monto"]
                                  , 'destacado' => $destacado
                                  , 'estatus' => $estatus
                                  , 'oferta' => $request["oferta"]]);          
                

          
          $categoria_id= $request["categoria_id"];
          if($categoria_id){
            $categoria_servicio = CategoriasServicios::where('servicio_id',$id)
            ->whereNotIn('categoria_id',$categoria_id)
            ->get();

            if($categoria_servicio){
              foreach ($categoria_servicio as $para_borrar) {
                $borrar= CategoriasServicios::where('servicio_id', $id)
                                            ->where('categoria_id',$para_borrar->categoria_id)
                                            ->delete();
              }
            }
            foreach ($categoria_id as $key=>$para_guardar) {
              $buscar_categorias = CategoriasServicios::where('servicio_id', $id)
                                          ->where('categoria_id',$para_guardar)
                                          ->first();
  
              if (!$buscar_categorias){
                $categoria_servicio = new CategoriasServicios();              
                $categoria_servicio->categoria_id = $para_guardar;
                $categoria_servicio->servicio_id = $id;
                $categoria_servicio->role_user_id = Auth::id();
                $categoria_servicio->save();
              }
              else{              
                // $buscar_categorias->fill(['posicion_seccion'=> $posiciones[$key]])
                //                   ->save();
              }
  
            }
          }
          else{
            $borrar= CategoriasServicios::where('servicio_id', $id)                                            
                                            ->delete();
          }
          
        
          
          

        return redirect()->route("verservicios");
     }
  }
}
