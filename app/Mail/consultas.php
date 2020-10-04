<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class consultas extends Mailable
{
    use Queueable, SerializesModels;

    public $consulta;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($consulta)
    {
        $this->consulta = $consulta;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.message-received');
    }
}
