<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;


class PatientList extends Component
{
    public $patients;
    public $labResult;
    public $checkupdate;

    public function mount()
    {
        $this->initializeData();
    }

    public function updatedCheckupdate()
    {
        $this->initializeData();
        $this->loadData();
    }

    public function initializeData()
    {
        // Initialize collections
        $this->patients = collect();
        $this->labResult = collect();
    }

    public function loadData()
    {
        if ($this->checkupdate) {
            $currentDate = $this->checkupdate;

            DB::connection('mysql_hxp')->table('ovst as o')
                ->select(
                    'o.hn',
                    'o.vn',
                    DB::raw('CONCAT(p.pname, p.fname, " ", p.lname) as patient_name'),
                    'k.department',
                    'p.sex'
                )
                ->leftJoin('patient as p', 'p.hn', '=', 'o.hn')
                ->leftJoin('kskdepartment as k', 'k.depcode', '=', 'o.main_dep')
                ->whereIn('o.main_dep', ['190', '199'])
                ->whereDate('o.vstdate', $currentDate)
                ->orderBy('o.main_dep')
                ->chunk(100, function ($patients) {
                    foreach ($patients as $patient) {
                        $this->patients->push($patient);
                    }

                    $patientVns = $patients->pluck('vn');

                    $labResults = DB::connection('mysql_hxp')->table('lab_head as lh')
                        ->whereIn('lh.vn', $patientVns)
                        ->where('confirm_report', 'Y')
                        ->get();

                    foreach ($labResults as $labResult) {
                        $this->labResult->push($labResult);
                    }
                });
        }
    }

    public function render()
    {
        return view('livewire.patient-list');
    }
}
