<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactMailSender extends Mailable
{
    
    use Queueable, SerializesModels;

    public $sender, $themessage;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($sender, $themessage)
    {
        $this->sender = $sender;
        $this->themessage = $themessage;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.contactus');
    }
}
