<?php

namespace App\Http\Controllers;

use App\Http\DTO\DocumentPhotoDTO;
use App\Http\DTO\PatientDTO;
use App\Http\Requests\StorePatientRequest;
use App\Http\Services\PatientService;
use App\Http\Services\PhotoService;
use App\Jobs\SendPatientNotification;
use Illuminate\Support\Facades\DB;
use Throwable;

class PatientController extends Controller
{
    private PatientService $patientService;
    private PhotoService $photoService;

    public function __construct(PatientService $patientService, PhotoService $photoService)
    {
        $this->patientService = $patientService;
        $this->photoService = $photoService;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePatientRequest $request)
    {
        try {
            DB::beginTransaction();

            $patientDTO = new PatientDTO($request->name, $request->lastname, $request->email, $request->phone);
            $patient = $this->patientService->savePatient($patientDTO);
            $documentPhotoDTO = new DocumentPhotoDTO($request->documentPhoto, $patient->id);
            $this->photoService->saveDocumentPhoto($documentPhotoDTO);

            DB::commit();

            dispatch(new SendPatientNotification($patient));

            return redirect()->back()->with(
                'success',
                'Patient was succesfully registered. An email confirmation has been sent.'
            );
        } catch (Throwable $e) {
            DB::rollBack();
            report($e);
            return response()->json(['errors' => [$e->getMessage()]], 500);
        }
    }
}
