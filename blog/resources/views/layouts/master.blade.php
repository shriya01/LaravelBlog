<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf_token">
    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('public/assets/theme/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{ asset('public/assets/theme/css/metisMenu.min.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('public/assets/theme/css/sb-admin-2.min.css') }} " rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ asset('public/assets/theme/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
@yield('content')

    <!-- jQuery -->
    <script src="{{ asset('public/assets/theme/js/jquery.min.js')}} "></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('public/assets/theme/js/bootstrap.min.js') }}"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{ asset('public/assets/theme/js/sb-admin-2.js') }}"></script>

    <script src="{{ asset('public/assets/theme/js/metisMenu.min.js') }}"></script>
</body>

</html>
