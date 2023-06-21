<?php

namespace App\Http\Services;


use App\Http\DTO\PatientDTO;
use App\Http\Repositories\PatientRepository;
use App\Models\Patient;

class PatientService
{
    private PatientRepository $patientRepository;

    public function __construct(PatientRepository $patientRepository)
    {
        $this->patientRepository = $patientRepository;
    }

    public function savePatient(PatientDTO $patientDTO): Patient
    {
        return $this->patientRepository->save($patientDTO);
    }

}
