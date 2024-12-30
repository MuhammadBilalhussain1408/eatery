<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class MembershipMailAdmin extends Mailable
{
    use Queueable, SerializesModels;

    public $membershipDetails = null;
    /**
     * Create a new message instance.
     */
    public function __construct($membershipDetails)
    {
        $this->membershipDetails = $membershipDetails;
    }

    public function build()
    {
        $data = $this->membershipDetails->toArray();
        $subject = 'New 80/20 CEO Membership Form';
        return $this->subject($subject)
                    ->view('components.mail-layouts.admin_membership', compact('data'));
    }
}
