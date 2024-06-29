<div style="position: relative; display: inline-block;" class="image-container">
    <div wire:key="patient-image-{{ $hn }}-{{ $vn }}" wire:lazy>
        @if ($imageExists)
            <img
                data-src="{{ route('patient-image', ['hn' => $hn]) }}"
                alt="{{ $hn }}"
                loading="lazy"
                class="lazyload avatar avatar-sm me-3"
                style="display: block;"
                onerror="this.style.display='none'; this.nextElementSibling.style.display='block';">
            <div style="display: none;"><i class="fas fa-image fa-2x me-3"></i></div>
        @else
            @if ($gender == '1')
                <img
                    src="{{ asset('assets/img/avatar-m.webp') }}"
                    loading="lazy"
                    alt="Image not found"
                    class="avatar avatar-sm me-3"
                    style="display: block;">
            @else
                <img
                    src="{{ asset('assets/img/avatar-f.webp') }}"
                    loading="lazy"
                    alt="Image not found"
                    class="avatar avatar-sm me-3"
                    style="display: block;">
            @endif
        @endif
    </div>
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;"></div>
</div>

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Start image protect
            var overlays = document.querySelectorAll('div[style*="position: absolute"]');
            overlays.forEach(function(overlay) {
                overlay.oncontextmenu = function() {
                    return false;
                }
            });
        });
    </script>
@endpush
