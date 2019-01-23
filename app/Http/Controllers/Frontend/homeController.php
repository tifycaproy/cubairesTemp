<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Slider;
use App\Noticias;
use App\Comentarios;
use App\Categorias;
use App\Servicios;
use App\Secciones;
use App\Formatos;
use App\SeccionesCampos;
use App\Campos;
use App\TiposCampos;
use App\Solicitantes;
use App\Solicitud;


class homeController extends Controller
{
    public function index(){
        return view('Frontend.index');
    }

    public function nosotros(){
        return view('Frontend.nosotros');
    }

    public function ofertas(){
        return view('Frontend.ofertas');
    }

    public function catalogo(){
        return view('Frontend.catalogo');
    }

    public function contacto(){
        return view('Frontend.contacto');
    }

    public function detalle(){
        return view('Frontend.detalle');
    }

    public function categorias(){
        return view('Frontend.categorias');
    }
}
