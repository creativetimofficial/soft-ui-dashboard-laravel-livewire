<main class="main-content">
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>ระบบรายงานผลการตรวจสุขภาพ โรงพยาบาลนางรอง Health Checkup Report System (HCRS)</h6>
                    </div>
                    <div class="form-group px-5 col-3">
                        <label for="checkup-date" class="form-control-label">เลือกวันที่ตรวจ เพื่อแสดงข้อมูล</label>
                        <input wire:model.live="checkupdate" class="form-control" type="date" id="checkup-date">
                    </div>
                    <div wire:loading class="fa-3x text-center">
                        <i class="fas fa-circle-notch fa-spin text-primary"></i>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0 table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">#</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ผู้รับการตรวจสุขภาพ</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">รายการตรวจ</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">สถานะผลตรวจ</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ตรวจเมื่อ</th>
                                        <th class="text-secondary opacity-7"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($patients as $p)
                                        <tr>
                                            <td>
                                                <input type="checkbox" value="{{ $p->hn }}">
                                            </td>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div x-data="{ isLoaded: false }" x-intersect.once="isLoaded = true">
                                                        <div x-show="!isLoaded" class="fas fa-3x text-primary">
                                                            <i class="fas fa-solid fa-circle-notch fa-spin"></i>
                                                        </div>
                                                        <div x-show="isLoaded">
                                                            @livewire('hosxp-patient-image', ['hn' => $p->hn, 'gender' => $p->sex,'vn' => $p->vn], key('hosxp-patient-image-' . $p->hn.$p->vn))
                                                        </div>
                                                    </div>
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm fw-normal">HN {{ $p->hn }}</h6>
                                                        <h6 class="mb-0 text-sm fw-normal">VN {{ $p->vn }}</h6>
                                                        <h6 class="mb-0 text-sm">{{ $p->patient_name }}</h6>
                                                        <p class="text-xs text-secondary mb-0">john@creative-tim.com</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold">{{ $p->department }}</p>
                                                @foreach ($labResult->where('vn', $p->vn) as $lab)
                                                    <div x-data="{ isLoaded: false }" x-intersect.once="isLoaded = true">
                                                        <div x-show="!isLoaded" class="fas fa-3x text-primary">
                                                            <i class="fas fa-solid fa-circle-notch fa-spin"></i>
                                                        </div>
                                                        <div x-show="isLoaded">
                                                            @livewire('hosxp-lab-result', ['labnumber' => $lab->lab_order_number,'vn' => $p->vn], key('hosxp-lab-result-' . $lab->lab_order_number.$p->vn))
                                                        </div>
                                                    </div>
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
                                    @empty
                                        <tr>
                                            <td colspan="6" class="text-center">No data available for the selected date.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
