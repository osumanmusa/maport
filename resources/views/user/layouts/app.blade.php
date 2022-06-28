<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>Dashboard</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('assets/styles/css/themes/lite-purple.min.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/styles/vendor/perfect-scrollbar.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/fonts/fontawesome-free-5.10.1-web/css/all.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/styles/vendor/metisMenu.min.css')}}">

        <link rel="stylesheet" href="{{ asset('assets/styles/vendor/datatables.min.css')}}">
 <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css"> 
 
    </head>

    <body>  
<script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
{!! Toastr::message() !!}

@yield('content')


        <script src="{{ asset('assets/js/vendor/jquery-3.3.1.min.js')}}"></script>
        <script src="{{ asset('assets/js/vendor/bootstrap.bundle.min.js')}}"></script>
        <script src="{{ asset('assets/js/tooltip.script.js')}}"></script>
       <script src="{{ asset('assets/js/vendor/datatables.min.js')}}"></script>
        <script src="{{ asset('assets/js/vendor/perfect-scrollbar.min.js')}}"></script>
        <script src="{{ asset('assets/js/vendor/echarts.min.js')}}"></script>
        <script src="{{ asset('assets/js/es5/echart.options.min.js')}}"></script>
    <script src="{{ asset('assets/js/es5/dashboard.v1.script.min.js')}}"></script>
        <script src="{{ asset('assets/js/es5/script.min.js')}}"></script>
        <script src="{{ asset('assets/js/es5/script_2.js')}}"></script>
        <script src="{{ asset('assets/js/es5/sidebar.large.script.min.js')}}"></script>
        <script src="{{ asset('assets/js/vendor/feather.min.js')}}"></script>
        <script src="{{ asset('assets/js/vendor/metisMenu.min.js')}}"></script>

        <script src="{{ asset('assets/js/datatables.script.js')}}"></script>

        <script>
            feather.replace()
        </script>
        <script>
            $(function () {
                $('#menu').metisMenu();
            });
        </script>

    </body>

</html>
