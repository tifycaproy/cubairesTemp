<?php

namespace App\Http\Controllers\Frontend;

use App\DetallesClientes as DetallesClientes;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Paises as Paises;
use App\User;
use App\Role;


class DetallesClientesController extends Controller
{

    use RegistersUsers;

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
        $paises = Paises::get();        
        return view('Frontend.registro', ['paises'=>$paises]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    protected function store(Request $request)
    {

        // $data['email'] = $request['email'];
        // $data['password'] = $request['password'];

        $rules = [
            'documento_identidad_cliente' => ['required', 'string', 'unique:detalles_clientes'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ];
      
        $this->validate($request, $rules);
        
        $name=$request['firstname']." ".$request['lastname'];

        $user = User::create([
            'name' => $name,
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
        $user->roles()
            ->attach(Role::where('id', 3)->first());
           
        // dd($user);
            $detalle_cliente = new DetallesClientes;
            $detalle_cliente->fill($request->input());
            $detalle_cliente->role_user_id = $user->id;

            $detalle_cliente->save();
              return redirect()->route("sesion");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DetallesClientes  $detallesClientes
     * @return \Illuminate\Http\Response
     */
    public function show(DetallesClientes $detallesClientes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DetallesClientes  $detallesClientes
     * @return \Illuminate\Http\Response
     */
    public function edit(DetallesClientes $detallesClientes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DetallesClientes  $detallesClientes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DetallesClientes $detallesClientes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DetallesClientes  $detallesClientes
     * @return \Illuminate\Http\Response
     */
    public function destroy(DetallesClientes $detallesClientes)
    {
        //
    }
}
