<x-layouts.base>

    {{-- If the user is authenticated --}}
    @auth()
        @if (in_array(request()->route()->getName(),['dashboard']))
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
                        <div class="col-2"></div>
                        <div class="col col-md-10">
                            @include('layouts.footers.auth.footer')
                        </div>
                    </div>
                </div>
                </div>
            </main>
            {{-- If the user is authenticated and on the login page --}}
        @elseif(in_array(request()->route()->getName(), ['login']))
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

</x-layouts.base>
