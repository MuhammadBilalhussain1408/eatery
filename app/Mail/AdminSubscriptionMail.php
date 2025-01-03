<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class AdminSubscriptionMail extends Mailable
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
        $subject = 'New Lead Subscription Form';
        return $this->subject($subject)
                    ->view('components.mail-layouts.admin_subscription', compact('data'));
    }
}
