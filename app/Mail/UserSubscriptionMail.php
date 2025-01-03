<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class UserSubscriptionMail extends Mailable
{
    use Queueable, SerializesModels;

    public $subscriberDetail = null;
    /**
     * Create a new message instance.
     */
    public function __construct($subscriberDetail)
    {
        $this->subscriberDetail = $subscriberDetail;
    }

    public function build()
    {
        $data = $this->subscriberDetail->toArray();
        $subject = 'Thank you For Subscribing Us!';
        return $this->subject($subject)
                    ->view('components.mail-layouts.user_subscription', compact('data'));
    }
}
