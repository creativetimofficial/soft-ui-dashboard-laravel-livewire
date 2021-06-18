<x-layouts.base>

    {{-- If the user is authenticated --}}
    @auth()
        {{-- If the user is authenticated on the static sign up or the sign up page --}}
        @if (in_array(
            request()->route()->getName(),
            ['static-sign-up', 'sign-up'],
        ))
            @include('layouts.navbars.guest.sign-up')
            {{ $slot }}
            {{-- FOOTER --}}
            @include('layouts.footers.guest.with-socials')
            {{-- If the user is authenticated on the static sign in or the login page --}}
        @elseif (in_array(
            request()->route()->getName(),
            ['sign-in', 'login'],
            ))
            @include('layouts.navbars.guest.login')
            {{ $slot }}
            {{-- FOOTER --}}
            @include('layouts.footers.guest.description')
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
        @if (!auth()->check() &&
        in_array(
            request()->route()->getName(),
            ['login'],
        ))
            @include('layouts.navbars.guest.login')
            {{ $slot }}
            {{-- FOOTER --}}
            @include('layouts.footers.guest.description')


            {{-- If the user is on the sign up page --}}
        @elseif (!auth()->check() &&
            in_array(
            request()->route()->getName(),
            ['sign-up'],
            ))
            <div>
                @include('layouts.navbars.guest.sign-up')
                {{ $slot }}
                {{-- FOOTER --}}
                @include('layouts.footers.guest.with-socials')
            </div>
        @endif
    @endguest

</x-layouts.base>
