<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;

class DevisFormSubmitted extends Mailable
{
    public $name;
    public $company_name;
    public $email;
    public $mobile;
    public $name_event;
    public $event_date;
    public $surface;
    public $prestation;
    public $budget;
    public $messageContent;

    // Constructor accepts form data
    public function __construct($name, $company_name, $email, $mobile, $name_event, $event_date,$surface,$prestation, $budget, $messageContent)
    {
        $this->name = $name;
        $this->company_name = $company_name;
        $this->email = $email;
        $this->mobile = $mobile;
        $this->name_event = $name_event;
        $this->event_date = $event_date;
        $this->surface = $surface;
        $this->prestation = $prestation;
        $this->budget = $budget;
        $this->messageContent = $messageContent;
    }

    public function build()
    {
       
        return $this->from($this->email) // Set the "From" address
                    ->subject('Demande Devis !!')
                    ->view('emails.devis', [
                        'name' => $this->name,
                        'company_name' => $this->company_name,
                        'email' => $this->email,
                        'mobile' => $this->mobile,
                        'name_event' => $this->name_event,
                        'event_date' => $this->event_date,
                         'surface'=>$this->surface,
                        'prestation' => $this->prestation,
                        'budget' => $this->budget,
                        'messageContent' => $this->messageContent
                    ]);
    }
}