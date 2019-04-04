<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
// use App\Categorias;
// use App\Configuraciones;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // $categorias = Categorias::all();
        // View::share('categorias', $categorias);
        
        // $comun= Configuraciones::all();

        // foreach ($comun as $item) {
        //     if ($item->name == 'title') {
        //       $title = $item->content;
        //     }
        //     if ($item->name == 'telefono') {
        //       $telefono = $item->content;
        //     }
        //     if ($item->name == 'email') {
        //       $email = $item->content;
        //     }
        //     if ($item->name == 'direccion') {
        //       $direccion = $item->content;
        //     }
        //     if ($item->name == 'ubicacion') {
        //       $ubicacion = $item->content;
        //     }
        //     if ($item->name == 'video') {
        //       $video = $item->content;
        //     }
        //     if ($item->name == 'facebook') {
        //       $facebook = $item->content;
        //     }
        //     if ($item->name == 'twitter') {
        //       $twitter = $item->content;
        //     }
        //     if ($item->name == 'instagram') {
        //       $instagram = $item->content;
        //     }
        //     if ($item->name == 'descripcion') {
        //       $descripcion = $item->content;
        //     }
        //     if ($item->name == 'descripcion_opc') {
        //       $descripcion_opc = $item->content;
        //     }
        //     if ($item->name == 'meta_description') {
        //       $meta_description = $item->content;
        //     }
        //      if ($item->name == 'meta_name') {
        //       $meta_name = $item->content;
        //     }
        //      if ($item->name == 'meta_url') {
        //       $meta_url = $item->content;
        //     }
        //      if ($item->name == 'politica_privacidad') {
        //       $politica_privacidad = $item->content;
        //     }
        //      if ($item->name == 'text_video') {
        //       $text_video = $item->content;
        //     }
        //      if ($item->name == 'img_video') {
        //       $img_video = $item->content;
        //     }

            

            
        //   }
        // View::share(['title'=>$title
        //                 ,'telefono'=>$telefono
        //                 ,'email'=>$email
        //                 ,'direccion'=>$direccion
        //                 ,'ubicacion'=>$ubicacion
        //                 ,'video'=>$video
        //                 ,'facebook'=>$facebook
        //                 ,'twitter'=>$twitter
        //                 ,'instagram'=>$instagram
        //                 ,'descripcion'=>$descripcion
        //                 ,'descripcion_opc'=>$descripcion_opc
        //                 ,'meta_description'=>$meta_description
        //                 ,'meta_name'=>$meta_name
        //                 ,'meta_url'=>$meta_url
        //                 ,'politica_privacidad'=>$politica_privacidad
        //                 ,'text_video'=>$text_video
        //                 ,'img_video'=>$img_video
        //                 ]);

        Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
