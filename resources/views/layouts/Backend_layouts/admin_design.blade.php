<!DOCTYPE html>
<html lang="en">
<head>
    <title>Matrix Admin</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('css/Backend.css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/Backend.css/bootstrap-responsive.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/Backend.css/uniform.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/Backend.css/select2.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/Backend.css/fullcalendar.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/Backend.css/matrix-style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/Backend.css/matrix-media.css') }}" />
    <link href="{{ asset('fonts/Backend.fonts/css/font-awesome.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/Backend.css/jquery.gritter.css') }}" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

@include('layouts.Backend_layouts.admin_header')

@include('layouts.Backend_layouts.admin_sidebar')

@yield('content')

@include('layouts.Backend_layouts.admin_footer')



    <script src="{{ asset('js/Backend.js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/Backend.js/jquery.ui.custom.js') }}"></script>
    <script src="{{ asset('js/Backend.js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/Backend.js/jquery.uniform.js') }}"></script>
    <script src="{{ asset('js/Backend.js/select2.min.js') }}"></script>
    <script src="{{ asset('js/Backend.js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/Backend.js/jquery.validate.js') }}"></script>
    <script src="{{ asset('js/Backend.js/matrix.js') }}"></script>
    <script src="{{ asset('js/Backend.js/matrix.form_validation.js') }}"></script>
    <script src="{{ asset('js/Backend.js/matrix.tables.js') }}"></script>

</body>
</html>
