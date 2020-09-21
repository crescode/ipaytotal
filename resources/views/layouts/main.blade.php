<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Ipaytotal</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link href="{{ asset('admin/assets/vendor/fonts/circular-std/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('admin/assets/libs/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/fonts/fontawesome/css/fontawesome-all.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{ asset('admin/assets/vendor/datatables/css/dataTables.bootstrap4.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{ asset('admin/assets/vendor/datatables/css/buttons.bootstrap4.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{ asset('admin/assets/vendor/datatables/css/select.bootstrap4.css') }}">
    <link rel="stylesheet" type="text/css"
          href="{{ asset('admin/assets/vendor/datatables/css/fixedHeader.bootstrap4.css')}}">
</head>
<body>
    <div class="d-flex flex-column-fluid" style="margin-top: 40px;">
        <!--begin::Container-->
        <div class="container">
            <div class="row">
                <div class="col">
                    @yield('content')
                </div>
            </div>
        </div>
        <!--end::Container-->
    </div>
    <script src="{{ asset('admin/assets/vendor/jquery/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/bootstrap/js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/slimscroll/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/multi-select/js/jquery.multi-select.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/js/main-js.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/datatables/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/datatables/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/datatables/js/data-table.js') }}"></script>
</body>
</html>
