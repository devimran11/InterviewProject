<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('backend')}}/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="{{asset('backend')}}/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="{{asset('backend')}}/css/style.css">
    <link rel="shortcut icon" href="{{asset('backend')}}/images/favicon.ico" />
  </head>
  <body>
    <div class="container-scroller">
      @include('backend.layouts.header')
      <div class="container-fluid page-body-wrapper">
        @include('backend.layouts.sidebar')
        <!-- partial -->
        <div class="main-panel">
          @yield('content')
            </div>
            
          </div>
          @include('backend.layouts.footer')
        </div>
      </div>
    </div>
    <script src="{{asset('backend')}}/vendors/js/vendor.bundle.base.js"></script>
    <script src="{{asset('backend')}}/vendors/chart.js/Chart.min.js"></script>
    <script src="{{asset('backend')}}/js/off-canvas.js"></script>
    <script src="{{asset('backend')}}/js/hoverable-collapse.js"></script>
    <script src="{{asset('backend')}}/js/misc.js"></script>
    <script src="{{asset('backend')}}/js/dashboard.js"></script>
    <script src="{{asset('backend')}}/js/todolist.js"></script>
  </body>
</html>