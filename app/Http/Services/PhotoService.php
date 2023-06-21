<?php

namespace App\Http\Services;

use App\Http\DTO\DocumentPhotoDTO;
use App\Models\Photo;
use Illuminate\Support\Facades\Storage;

class PhotoService
{

    public function saveDocumentPhoto(DocumentPhotoDTO $data): Photo
    {
        $documentPhotoName = $data->file->getClientOriginalName();
        $photo = new Photo(['name' => $documentPhotoName, 'size' => $data->file->getSize()]);
        $photo->patient()->associate($data->patientId);
        $photo->save();
        //TODO if this was a real project, the best option is to configure an AWS S3 bucket for storing the photos
        $path = "public/photos/" . $data->patientId . '-' . $documentPhotoName;
        Storage::disk('local')->put($path, file_get_contents($data->file));

        return $photo;
    }
}
