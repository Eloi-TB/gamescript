<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Password extends Mailable
{
    use Queueable, SerializesModels;

    public $pass;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->$pass = $pass;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.password');
        ->from('nonreply@mailgun.com')
        ->subject('Forgot Password');
}
