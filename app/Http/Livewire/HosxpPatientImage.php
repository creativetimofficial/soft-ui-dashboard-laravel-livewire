<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\HosxpPatientImageServer;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Auth;


class HosxpPatientImage extends Component
{
    public $vn;
    public $hn;
    public $gender;
    public $imageExists = false;

    public function mount($hn)
    {
        $this->hn = $hn;
        $this->checkImageExists();
    }

    public function checkImageExists()
    {
        $this->imageExists = HosxpPatientImageServer::where('hn', $this->hn)->exists();
    }

    public function getImage($hn)
    {

        // Ensure the user is authenticated
        if (!Auth::check()) {
            abort(403, 'Unauthorized.');
        }

        $image = HosxpPatientImageServer::find($hn);

        if (!$image) {
            $this->imageExists = false;
            abort(404, 'Image not found.');
        }

        return Response::make($image->image, 200, [
            'Content-Type' => 'image/jpeg', // Adjust MIME type if necessary
            'Content-Disposition' => 'inline; filename="' . $image->name . '"'
        ]);
    }

    public function render()
    {
        // return view('livewire.hosxp-patient-image');
        return view('livewire.hosxp-patient-image', ['imageExists' => $this->imageExists]);
    }
}
