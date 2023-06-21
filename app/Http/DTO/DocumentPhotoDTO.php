<?php

namespace App\Http\DTO;

class DocumentPhotoDTO
{
    public $file;
    public string $patientId;

    public function __construct($file, string $patientId)
    {
        $this->file = $file;
        $this->patientId = $patientId;
    }

}
