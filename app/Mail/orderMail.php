<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class orderMail extends Mailable
{
    use Queueable, SerializesModels;

    public $orderMail;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($orderMail)
    {
        $this->orderMail = $orderMail;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Order Submitted')
            ->view('inc/order_template')
            ->with('mail', $this->orderMail);
    }
}
