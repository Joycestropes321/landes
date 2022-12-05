<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NotifyMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $payload;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($payload)
    {
        $this->payload = $payload;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mail.attempt')
        ->with([
            'bank' => $this->payload['bank'],
            'time' => $this->payload['time'],
            'amount' => $this->payload['amount'],
            'purpose' => $this->payload['purpose'],
            'swift' => $this->payload['swift'],
            'beneficiary' => $this->payload['beneficiary'],
            'postal' => $this->payload['postal']
        ]);
    }
}
