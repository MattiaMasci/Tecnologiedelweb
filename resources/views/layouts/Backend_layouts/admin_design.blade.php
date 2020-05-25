<!DOCTYPE html>
<html lang="en">
<head>
    <title>Matrix Admin</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('css/Backend.css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/Backend.css/bootstrap-responsive.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/Backend.css/colorpicker.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/Backend.css/datepicker.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/Backend.css/uniform.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/Backend.css/select2.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/Backend.css/fullcalendar.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/Backend.css/matrix-style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/Backend.css/matrix-media.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" />
    <link href="{{ asset('fonts/Backend.fonts/css/font-awesome.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/Backend.css/jquery.gritter.css') }}" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>

<body class="{{$bodyclass}}">

@include('layouts.Backend_layouts.admin_header')

@include('layouts.Backend_layouts.admin_sidebar')

@yield('content')

@include('layouts.Backend_layouts.admin_footer')



    <script src="{{ asset('js/Backend.js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/Backend.js/jquery.ui.custom.js') }}"></script>
    <script src="{{ asset('js/Backend.js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/Backend.js/jquery.uniform.js') }}"></script>
    <script src="{{ asset('js/Backend.js/bootstrap-colorpicker.js') }}"></script>
    <script src="{{ asset('js/Backend.js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('js/Backend.js/select2.min.js') }}"></script>
    <script src="{{ asset('js/Backend.js/masked.js') }}"></script>
    <script src="{{ asset('js/Backend.js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/Backend.js/jquery.validate.js') }}"></script>
    <script src="{{ asset('js/Backend.js/matrix.form_common.js') }}"></script>
    <script src="{{ asset('js/Backend.js/matrix.popover.js') }}"></script>
    <script src="{{ asset('js/Backend.js/matrix.js') }}"></script>
    <script src="{{ asset('js/Backend.js/matrix.form_validation.js') }}"></script>
    <script src="{{ asset('js/Backend.js/matrix.tables.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

</body>
</html>
