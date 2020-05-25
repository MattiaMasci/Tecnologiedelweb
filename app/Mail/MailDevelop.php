<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailDevelop extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $address = 'xenomod@shop.com';
        $name = 'Xenomod';
        $subject = 'Iscrizione Newsletter';
        return $this->view('Frontend.Email.email-content')
            ->from($address, $name)
            ->subject($subject);
    }
}
