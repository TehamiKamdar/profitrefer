<!--
=========================================================
* Soft UI Dashboard 3 - v1.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/soft-ui-dashboard
* Copyright 2024 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

{{-- Head Tag Including CSS and FontIcons --}}
@include('layouts.admin.components.head')

{{-- Custom Stylings (if Any) --}}
@yield('partial-styles')

<body class="g-sidenav-show  bg-gray-100">
  @include('layouts.admin.components.aside')
  <main class="main-content position-relative max-height-vh-100 h-100  ">
    @include('layouts.admin.components.navbar')

    <div class="container-fluid py-4">
      @yield('main-content')
    </div>
  </main>
</body>

</html>
<!--   Core JS Files   -->
<script src="{{asset('adminDashboard/assets/js/core/popper.min.js')}}"></script>
<script src="{{asset('adminDashboard/assets/js/core/bootstrap.min.js')}}"></script>
<script src="{{asset('adminDashboard/assets/js/plugins/perfect-scrollbar.min.js')}}"></script>
<script src="{{asset('adminDashboard/assets/js/plugins/smooth-scrollbar.min.js')}}"></script>
<script src="{{asset('adminDashboard/assets/js/plugins/chartjs.min.js')}}"></script>
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
<script src="{{asset('adminDashboard/assets/js/soft-ui-dashboard.min.js')}}"></script>

@yield('partial-scripts')