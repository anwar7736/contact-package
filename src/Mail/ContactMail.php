<?php

namespace Anwar\Contact\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable 
{
    use Queueable, SerializesModels;

    public $name,$message, $email;
    public function __construct($name, $message, $email)
    {
        $this->name = $name;
        $this->message = $message;
        $this->email = $email;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('contact::mail.contact-mail', [
            'name' => $this->name, 
            'message' => $this->message,
            'email' => $this->email,
        ]);
    }
}
