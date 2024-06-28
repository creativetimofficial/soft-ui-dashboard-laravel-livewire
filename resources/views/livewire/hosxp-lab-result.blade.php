<p wire:key="lab-r-detail-{{ $labnumber }}" class="text-xs font-weight-bold m-0 p-0">
    <button type="button" class="btn btn-sm bg-gradient-primary btn-tooltip my-1 py-1" data-bs-toggle="tooltip" data-bs-placement="top"
    @if($labResultDetail->isNotEmpty())
        title="{{ $labResultDetail->pluck('lab_items_name_ref')->implode(' - ') }}"
    @else
        title="No records found."
    @endif
    data-container="body" data-animation="true">อ่านผล {{$labnumber}}</button>
</p>
