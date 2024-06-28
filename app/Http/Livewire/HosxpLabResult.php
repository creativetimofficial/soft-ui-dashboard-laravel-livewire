<?php

namespace App\Http\Livewire;

use Livewire\Component;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

use Illuminate\Http\Request;

use Illuminate\Support\Collection;

class HosxpLabResult extends Component
{

    public $labnumber;
    public $labResultDetail;

    public function mount($labnumber)
    {
        // $this->hn = $hn;
        // $this->checkImageExists();

        $this->labResultDetail = DB::connection('mysql_hxp')->table('lab_order as lo')
            ->where('lab_order_number',$labnumber)->get();
    }

    public function render()
    {
        return view('livewire.hosxp-lab-result');
    }
}
