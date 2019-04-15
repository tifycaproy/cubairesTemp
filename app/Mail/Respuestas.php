<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;

class Respuestas extends Mailable
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
        
        $titulo    =$request['titulo'];
        $mensaje =$request['mensaje'];
        return $this->from('comuncacion@cubaires.com')
                    ->view('Frontend.Mail.mail')
                    ->with([                            
                        
                        'titulo' => $titulo,
                        'mensaje' => $mensaje,                           
                      ])
                    ->subject('Su registro ha sido Respondido');
    }    
}
