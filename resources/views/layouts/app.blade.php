<x-layouts.base>

    {{-- If the user is authenticated --}}
    @auth()
            {{-- If the user is authenticated and on the login page --}}
        @if(in_array(request()->route()->getName(), ['login']))
            @include('layouts.navbars.guest.login')
            {{ $slot }}
            {{-- FOOTER --}}
            @include('layouts.footers.guest.description')
            {{-- If the user is authenticated and on the sign up page --}}
        @elseif(in_array(request()->route()->getName(), ['sign-up']))
            @include('layouts.navbars.guest.sign-up')
            {{ $slot }}
            {{-- FOOTER --}}
            @include('layouts.footers.guest.with-socials')
        @else
            {{-- Navbar --}}
            @include('layouts.navbars.auth.sidebar')
            @include('layouts.navbars.auth.nav')
            {{-- Plugin --}}
            @include('components.plugins.fixed-plugin')
            {{ $slot }}
            {{-- Footer --}}
            <main>
                <div class="container-fluid">
                    <div class="row">
                        @include('layouts.footers.auth.footer')
                    </div>
                </div>
            </main>
        @endif
    @endauth

    {{-- If the user is not authenticated (if the user is a guest) --}}
    @guest
        {{-- If the user is on the login page --}}
        @if (!auth()->check() && in_array(request()->route()->getName(),['login'],))
            @include('layouts.navbars.guest.login')
            {{ $slot }}
            {{-- FOOTER --}}
            @include('layouts.footers.guest.description')
        @endif

        {{-- If the user is on the sign up page --}}
        @if (!auth()->check() && in_array(request()->route()->getName(),['sign-up'],))
            @include('layouts.navbars.guest.sign-up')
            {{ $slot }}
            {{-- FOOTER --}}
            @include('layouts.footers.guest.with-socials')
        @endif
    @endguest
    
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
          var options = {
            damping: '0.5'
          }
          Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
      </script>
      <!-- Github buttons -->
      <script async defer src="https://buttons.github.io/buttons.js"></script>
      <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
      <script src="../assets/js/soft-ui-dashboard.min.js?v=1.0.2"></script>

</x-layouts.base>
