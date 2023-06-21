<?php

namespace App\Http\DTO;

class PatientDTO
{
    public string $name;
    public string $lastname;
    public string $email;
    public string $phone;

    public function __construct(string $name, string $lastname, string $email, string $phone)
    {
        $this->name = $name;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->phone = $phone;
    }

}
