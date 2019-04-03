<?php

namespace App\Http\Controllers\Backend;

use App\Categorias;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CategoriasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        $categorias = Categorias::orderBy('updated_at','desc')
        ->get();

        $posiciones_registradas = Categorias::select('posicion')
                                      ->orderBy('posicion')
                                      ->get();
      foreach ($posiciones_registradas as $key => $value) {
        $posiciones_disponibles[$key]=$value->posicion;
      }
      $posiciones_disponibles[count($posiciones_registradas)]=count($posiciones_registradas)+1;        

        return view('Backend.form.formcategoria',['categorias'=>$categorias,'posiciones_disponibles'=>$posiciones_disponibles]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $posiciones_registradas = Categorias::select('id','posicion')
                                        ->where('posicion',$request["posicion"])
                                      ->first();
      if ($posiciones_registradas) {
        $posiciones_registradas = Categorias::select('id','posicion')
                                        ->get();
        foreach ($posiciones_registradas as $valor) {
            if($valor->posicion > $request["posicion"]-1){
                Categorias::where('id',$valor->id)
                    ->update(['posicion'=>$valor->posicion+1]);
            }
        }

      }      
        $categoria = new Categorias();
        $categoria->fill($request->input());  
        $categoria->role_user_id = Auth::id();      
        $nombreArchivo = "img_categoria";
        $archivo_img = $nombreArchivo."_".time().'.'.$request["url_imagen"]->getClientOriginalExtension();
                $path = public_path().'/images/categorias/';
                $request["url_imagen"]->move($path, $archivo_img);
        $categoria->url_imagen=$archivo_img;
      
        
        $categoria->save();
    
        return redirect()->route("formcategoria");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Categorias  $categorias
     * @return \Illuminate\Http\Response
     */
    public function show(Categorias $categorias)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Categorias  $categorias
     * @return \Illuminate\Http\Response
     */
    public function edit(Categorias $categorias)
    {
        $categoria = Categorias::select(DB::raw('id, nombre_categoria, posicion, url_imagen,  created_at'))
                                ->where('id', $categorias->id)
                                ->first();
      if (!$categoria){
        return view('Backend.index');
      }
      else{
        $posiciones_registradas = Categorias::select('posicion')
                                            ->orderBy('posicion')
                                            ->get();
        foreach ($posiciones_registradas as $key => $value) {
                $posiciones_disponibles[$key]=$value->posicion;
        }
        
        return view('Backend.form.formcategoriaupdate',['categoria'=>$categoria,'posiciones_disponibles'=>$posiciones_disponibles]);
      }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Categorias  $categorias
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categorias $categorias)
    {
        $categoria = Categorias::where('id', $categorias->id)->first();
        if (!$categoria){
            return view('Backend.index');
        }
        else{

            $id_posicion = Categorias::select('id','posicion')
                                        ->where('id',$id)
                                            ->first();
            if ($id_posicion->posicion!=$request["posicion"]) {
            $posiciones_registradas = Categorias::select('id','posicion')
                                            ->get();
            foreach ($posiciones_registradas as $valor) {
                if($valor->posicion != $id_posicion->posicion){
                    if ($valor->posicion <= $request["posicion"] && $valor->posicion > $id_posicion->posicion) {
                        Categorias::where('id',$valor->id)
                            ->update(['posicion'=>$valor->posicion-1]);
                    }
                    else {
                    if($valor->posicion >= $request["posicion"] && $valor->posicion < $id_posicion->posicion){
                        Categorias::where('id',$valor->id)
                            ->update(['posicion'=>$valor->posicion+1]);
                    }
                    }

                }
            }

            }
            $categoria = Categorias::find($categorias->id)
                    ->fill($request->input());  
                $nombreArchivo = "img_categoria";
            $name_fileoption1 = $nombreArchivo."_".time().'.'.$request["url_imagen"]->getClientOriginalExtension();
                    $path = public_path().'/images/categorias/';
                    $request["url_imagen"]->move($path, $name_fileoption1);
            $categoria->url_imagen=$name_fileoption1;  
            $categoria->role_user_id = Auth::id();   
            $categoria->save();
            return redirect()->route("formcategoria");
        }        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Categorias  $categorias
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categorias $categorias)
    {
        Categorias::where('id', $categorias->id)->delete();
        return redirect()->route("formcategoria");
    }
}
