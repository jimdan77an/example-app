<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactanosMailable extends Mailable
{
    use Queueable, SerializesModels;

    public $subject = "Información del contacto";
    private $contacto;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($contacto)
    {
        $this->contacto = $contacto;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this ->to('sbhiaedla77@gmail.com','Heidi')
        ->from('contacto@umes.edu.gt', 'Atencion al Cliente')
        ->replyTo('sbhiaedla77@gmail.com', 'Heidi')
        ->subject('Contacto Recibido')
        ->view('emails.contactado')->with($this->contacto);
    }
}
