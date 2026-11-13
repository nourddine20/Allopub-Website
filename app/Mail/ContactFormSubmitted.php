<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;

class ContactFormSubmitted extends Mailable
{
    public $name;
    public $email;
    public $subject;
    public $mobile;
    public $messageContent;

    // Constructor accepts form data
    public function __construct($name, $email,$mobile,$subject,$messageContent)
    {
        $this->name = $name;
        $this->email = $email; 
        $this->mobile = $mobile;
        $this->subject = $subject;
  
        $this->messageContent = $messageContent;
    }

    public function build()
    {
        return $this->from($this->email) // Set the "From" address
                    ->subject($this->subject)
                    ->view('emails.contact', [
                        'name' => $this->name,
                        'email' => $this->email,
                        'mobile' => $this->mobile,
                        'messageContent'=>$this->messageContent
                    ]);
    }
}
