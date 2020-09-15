<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class CustomerMailSend extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $MailDetails;
    public $Subject;
    public function __construct($MailDetails, $Subject)
    {
        $this->Subject = $Subject;
        $this->MailDetails = $MailDetails;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $subject = $this->Subject;
        $MailDetails = $this->MailDetails;
        return $this->view('Mail.customermailsend',compact('MailDetails'))->subject($subject);
    }
}
