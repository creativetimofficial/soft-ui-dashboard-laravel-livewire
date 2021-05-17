@include('layouts.navbars.sidebar')
@include('layouts.navbars.navbar')
    <main>
      <div class="container-fluid py-4">
       {{-- Tables --}}
        @include('components.tables.table')
        {{-- Footer --}}
        @include('layouts.footers.auth-footer.auth-footer')
      </div>
    </main>

      {{-- Plugin --}}
      @include('components.plugins.fixed-plugin')

      <!--   Core JS Files   -->
      <script src="../assets/js/core/popper.min.js"></script>
      <script src="../assets/js/core/bootstrap.min.js"></script>
      <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
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
