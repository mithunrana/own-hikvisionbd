<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactUserIncomingMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $email;
    public $country;
    public $address;
    public $phone_no;
    public $querymessage;
    public $enquiry_type;
    public $name;
    public $website;
    public $companyname;
    public $zip_code;
    public function __construct($email,$country,$address,$phone_no,$usermessage,$enquiry_type,$name,$website,$companyname,$zip_code)
    {
        $this->email = $email;
        $this->country = $country;
        $this->address = $address;
        $this->phone_no = $phone_no;
        $this->querymessage = $usermessage;
        $this->enquiry_type = $enquiry_type;
        $this->name = $name;
        $this->website = $website;
        $this->companyname = $companyname;
        $this->zip_code = $zip_code;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
         $email = $this->email;
         $country = $this->country;
         $address = $this->address;
         $phone_no = $this->phone_no;
         $querymessage = $this->querymessage;
         $enquiry_type = $this->enquiry_type;
         $name = $this->name;
         $website = $this->website;
         $companyname = $this->companyname;
         $zip_code = $this->zip_code;
        $subject = 'Website Customer Query';
        return $this->view('Mail.contact-user-incoming-mail',compact('email','country','address','phone_no','querymessage','enquiry_type','name','website','companyname','zip_code'))->subject($subject);
    }
}
