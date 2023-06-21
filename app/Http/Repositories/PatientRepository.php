<?php

namespace App\Http\Repositories;

use App\Http\Builders\PatientQueryBuilder;
use App\Http\DTO\PatientDTO;
use App\Models\Patient;

class PatientRepository extends Repository
{

    public function __construct()
    {
        $this->queryBuilder = new PatientQueryBuilder();
    }

    public function save(PatientDTO $patientData): Patient
    {
        $patient = new Patient([
            'name' => $patientData->name,
            'lastname' => $patientData->lastname,
            'email' => $patientData->email,
            'phone' => $patientData->phone
        ]);
        $patient->save();

        return $patient;
    }
}
