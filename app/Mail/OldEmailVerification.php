<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OldEmailVerification extends Mailable
{
    use Queueable, SerializesModels;

    public $verificationLink;
    public $newEmail;

    /**
     * Create a new message instance.
     *
     * @param string $verificationLink
     * @param string $newEmail
     */
    public function __construct($verificationLink, $newEmail)
    {
        $this->verificationLink = $verificationLink;
        $this->newEmail = $newEmail;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('support@maxstockx.com', 'MaxStockx')
                    ->subject('Verify Your Email Change Request')
                    ->view('emails.old_email_verification');
    }
}
