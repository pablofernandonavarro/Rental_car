<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Consulta extends Mailable
{
    use Queueable, SerializesModels;

    public $name = "";
    public $email = "";
    public $phone = "";
    public $retreatPlace = "";
    public $returnPlace = "";
    public $firstDate= "";
    public $lastDate = "";
    public $categoryCar = "";
    public $comments = "";


    public function __construct($name, $email, $phone, $retreatPlace, $returnPlace, $firstDate, $lastDate, $categoryCar, $comments)
    {
        $this->name =  $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->retreatPlace = $retreatPlace;
        $this->returnPlace = $returnPlace;
        $this->firstDate= $firstDate;
        $this->lastDate = $lastDate;
        $this->categoryCar = $categoryCar;
        $this->comments = $comments;
    }

    public function build()
    {
        return $this->view('mail.mail')->with(
            [
                'name'=> $this->name,
                'email'=> $this->email,
                'phone'=> $this->phone,
                'retreatPlace'=> $this->retreatPlace,
                'returnPlace'=> $this->returnPlace,
                'firstDate'=> $this->firstDate,
                'lastDate'=> $this->lastDate,
                'categoryCar'=> $this->categoryCar,
                'comments'=> $this->comments,
            ]
        );
    }
}
