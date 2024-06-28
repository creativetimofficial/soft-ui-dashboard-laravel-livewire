<main class="main-content">
    <div class="container-fluid py-4">

            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <h6>ระบบรายงานผลการตรวจสุขภาพ โรงพยาบาลนางรอง Health Checkup Report System (HCRS)</h6>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0 table-hover">
                                <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">#</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Author</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Function</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Employed</th>
                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                                </thead>
                                <tbody>

                        @foreach ($patients as $p)

                                <tr>

                                {{-- <tr x-data="{ isChecked: @entangle('checked').defer }" :class="{'bg-yellow-100': isChecked.includes('{{$p->hn}}') }"> --}}
                                    <td>
                                        <input type="checkbox" wire:model="checked" value="{{$p->hn}}">
                                    </td>
                                    <td>
                                    <div class="d-flex px-2 py-1">

                                        <div>
                                            <div class="fas fa-3x" style="color: #33ff4b" wire:loading>
                                                <i class="fas fa-solid fa-circle-notch fa-spin"></i>
                                            </div>
                                            @livewire('hosxp-patient-image', ['hn' => $p->hn,'gender' => $p->sex], key('hosxp-patient-image-' . $p->hn))
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm fw-normal">HN {{$p->hn}}</h6>
                                        <h6 class="mb-0 text-sm fw-normal">VN {{$p->vn}}</h6>
                                        <h6 class="mb-0 text-sm"> {{$p->patient_name}}</h6>
                                        <p class="text-xs text-secondary mb-0">john@creative-tim.com</p>
                                        {{-- <span class="w-50 badge badge-lg bg-gradient-success">{{$p->hn}} {{$p->vn}}</span> --}}
                                        </div>
                                    </div>
                                    </td>
                                    <td>
                                    <p class="text-xs font-weight-bold">{{$p->department}}</p>
                                    @foreach ($labResult->Where('vn',$p->vn) as $lab)

                                    {{-- @livewire('hosxp-lab-result',['labnumber' => $lab->lab_order_number], key('hosxp-lab-result-' . $lab->lab_order_number)) --}}
                                        @livewire('hosxp-lab-result',['labnumber' => $lab->lab_order_number], key('hosxp-lab-result-' . $lab->lab_order_number))

                                        {{-- <p class="text-xs text-secondary mb-0">LabNO. : {{$lab->lab_order_number}}</p> --}}
                                        {{-- <button type="button" class="btn btn-sm btn-outline-success">Success</button> --}}
                                    @endforeach

                                    </td>
                                    <td class="align-middle text-center text-sm">
                                    <span class="badge badge-sm bg-gradient-success">Online</span>
                                    </td>
                                    <td class="align-middle text-center">
                                    <span class="text-secondary text-xs font-weight-bold">23/04/18</span>
                                    </td>
                                    <td class="align-middle">
                                    <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                        Edit
                                    </a>
                                    </td>
                                </tr>

                        @endforeach

                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-12">



                </div>
            </div>

    </div>
</div>



