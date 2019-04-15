<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;

class Notificacion extends Mailable
{
    use Queueable, SerializesModels;
   
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(Request $request)
    {
        // dd($request);
        $titulo    =$request['titulo'];
        $mensaje =$request['mensaje'];        
        return $this->from('notificacion@cubaires.com')
                    ->view('Frontend.Mail.mail')
                    ->with([
                            
                            'titulo' => $titulo,
                            'mensaje' => $mensaje,                            
                      ])
                    ->subject('Notificación Web');
    }    
}
