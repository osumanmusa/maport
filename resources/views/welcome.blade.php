<!DOCTYPE html>
<html  class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{ secure_asset('home/img/fav.png')}}">
    <!-- Author Meta -->
    <meta name="author" content="">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Database Backup System</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700" rel="stylesheet">

    <!--
CSS
============================================= -->

    <link rel="stylesheet" href="{{ secure_asset('home/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ secure_asset('home/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ secure_asset('home/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{ secure_asset('home/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ secure_asset('home/css/animate.css')}}">
    <link rel="stylesheet" href="{{ secure_asset('home/css/style.css')}}">
    <link rel="stylesheet" href="{{ secure_asset('home/css/responsive.css')}}">

</head>

<body>

    <!-- Preloader -->
    <div id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>

    <!-- Start header section -->
    <header class="header-area" id="header-area">
        <div class="dope-nav-container breakpoint-off">
            <div class="container">
                <div class="row">
                    <!-- dope Menu -->
                    <nav class="dope-navbar justify-content-between" id="dopeNav">

                        <!-- Logo -->
                        <a class="nav-brand" href="index.html">
                            <img src="{{ secure_asset('home/img/mnlogo.png')}}" alt="">
                        </a>

                        <!-- Navbar Toggler -->
                        <div class="dope-navbar-toggler">
                            <span class="navbarToggler">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                        </div>

                        <!-- Menu -->
                        <div class="dope-menu">

                            <!-- close btn -->
                            <div class="dopecloseIcon">
                                <div class="cross-wrap">
                                    <span class="top"></span>
                                    <span class="bottom"></span>
                                </div>
                            </div>

                            <!-- Nav Start -->
                            <div class="dopenav">
                                <ul id="nav">
                                @if (Route::has('login'))
     
            
                                @auth
                                     <a href="{{ url('/home') }}"> class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                                @else
                                    <li>
                                    <a class="primary-btn" href="{{ route('login') }}" style="color: azure;text-decoration: none;"><i class="ti ti-user" ></i> Login</a>
                                    </li>
                                    @if (Route::has('register'))
                           
                           
                                    <li>
                                     <a class="primary-btn" href="{{ route('register') }}" style="color: azure;text-decoration: none;"> <i class="ti ti-registered"></i> Register</a>
                                    </li>
                                    @endif
                                    @endauth
                                @endif
                                
                            
                                </ul>

                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Start header section -->

    <!-- Start banner section -->

    <!-- End banner section -->

    <!-- Start about section -->
    <section class="about-section section-gap-full relative" id="about-section">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6 col-md-6 about-left">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1047.92 1248.68"><defs><style>.cls-1,.cls-11,.cls-12,.cls-13,.cls-14,.cls-16,.cls-19,.cls-7,.cls-8{fill:none;}.cls-1{stroke:#ffb000;}.cls-1,.cls-11,.cls-12,.cls-13,.cls-14,.cls-16,.cls-19,.cls-2,.cls-7,.cls-8{stroke-miterlimit:10;}.cls-1,.cls-11,.cls-12,.cls-19,.cls-2,.cls-8{stroke-width:6px;}.cls-18,.cls-2{fill:#fff;}.cls-19,.cls-2,.cls-7{stroke:#6562cf;}.cls-3{fill:#ffb819;}.cls-4{fill:#f49c00;}.cls-5{fill:#dbdaff;}.cls-6{fill:#c36f0b;}.cls-12,.cls-13,.cls-14,.cls-16,.cls-7,.cls-8{stroke-linecap:round;}.cls-7{stroke-width:7px;}.cls-8{stroke:#fff;}.cls-9{fill:#3f4d79;}.cls-10{fill:#ffb000;}.cls-11,.cls-12{stroke:#f49c00;}.cls-13,.cls-14{stroke:#b65a18;}.cls-13{stroke-width:4px;}.cls-14,.cls-16{stroke-width:3px;}.cls-15{fill:#b65a18;}.cls-16{stroke:#3f4d79;}.cls-17{fill:#c7bfff;}.cls-20{fill:#e2e2ff;}</style></defs><g id="Layer_2" data-name="Layer 2"><g id="Слой_1" data-name="Слой 1"><g id="_4" data-name="4"><g id="CHAIR"><line class="cls-1" x1="552.95" y1="779.52" x2="552.95" y2="1245.18"/><line class="cls-1" x1="758.69" y1="779.52" x2="758.69" y2="1245.18"/><line class="cls-1" x1="550.96" y1="1170.32" x2="756.17" y2="1170.32"/><rect class="cls-2" x="501.66" y="717.11" width="306.33" height="62.41" rx="16.61"/></g><g id="CHARACTER"><g id="HOOD"><path class="cls-3" d="M753.67,267.52c16.93-4.75,40.34-57.32,14.69-85.79s-80-29.33-126.14-22.42c-42.65,6.39-98.67,31.13-77.32,84.49C595.26,319.67,753.67,267.52,753.67,267.52Z"/><path class="cls-4" d="M728.15,231.72c16-3.38,43.49-30,19.33-50.26s-61.37-22.23-101-15.46-80.7,20.78-61.85,59.19S728.15,231.72,728.15,231.72Z"/></g><g id="LEGS"><g id="RIGHT_FOOT" data-name="RIGHT FOOT"><path class="cls-5" d="M822.58,1240.55c-10.35,6.37-73.65,6-85.6,0s-9.15-26.28-11.14-39.82-30.26-39-31.85-47.77,29.06-27.87,34.38-35.65c-4.38,12.92,39.47,15.75,43,7.38-1.72,30.66,20.81,79.4,39.29,83.8C822.29,1211.27,832.93,1234.18,822.58,1240.55Z"/><path class="cls-6" d="M780.81,1091.16l-9.46,33.53c-3.51,8.37-47.36,5.54-43-7.38s2.71-35.37,2.71-35.37Z"/><path class="cls-7" d="M694,1153c1.6,8.76,29.86,34.24,31.86,47.78s-.8,33.84,11.14,39.81,75.25,6.37,85.6,0"/><path class="cls-8" d="M773.81,1208.45s21-9.38,41.9-2"/></g><g id="LEFT_FOOT" data-name="LEFT FOOT"><path class="cls-5" d="M534.13,1240.55c10.35,6.37,66.65,6,78.6,0s19.15-26.28,21.14-39.82,21.26-44,22.85-52.77-29.06-27.87-34.38-35.65c4.38,12.92-38.47,20.75-42,12.38,1.72,30.66-15.82,79.4-34.29,83.8C534.41,1211.27,523.78,1234.18,534.13,1240.55Z"/><path class="cls-6" d="M558.9,1089.16l21.46,35.53c3.51,8.37,46.36.54,42-12.38s-5.71-33.37-5.71-33.37Z"/><path class="cls-7" d="M656.72,1148c-1.59,8.76-20.86,39.24-22.85,52.78s-9.2,33.84-21.15,39.81-68.24,6.37-78.6,0"/><path class="cls-8" d="M582.9,1208.45s-20.95-9.38-41.9-2"/></g><path id="PANTS" class="cls-9" d="M553.15,582.32s-208.26,102-208.26,164.74c0,111.92,186.27,348,218.26,344.9s63.5-9.87,62.27-23.41S557.2,842.71,505.14,779.86c0,0,19-29.91,137.73-28.6,57.22.63,107.11,4.52,108.34,6.37S689,883.29,721.37,1074.73c2.83,16.68,72.59,23.68,79.35,14.45S915.76,754.87,905.31,729s-119-118.52-171.94-146.71C695.24,562,553.15,582.32,553.15,582.32Z"/></g><g id="HOODY"><path class="cls-10" d="M493.68,258.87C467.27,273.37,427.8,403.4,427.8,403.4s-95.1-116.73-99.5-117.83-29.95,33-29.95,33S348,540.25,425.45,545.18c32.51,2.07,60-16.79,82.57-44.35,10,33.35,19.34,60.85,19.34,60.85,4,14-70.64,52.55-53.61,63.14,0,0,58.11-18.9,160.65,7.54C757,664,816.27,640,804.68,630.8s-29.79-39.11-36.08-59.12L779.91,464s39.58,100.46,99.41,100.46c71.37,0,136.6-218.19,136.6-218.19-25.37-.72-46.39-18.84-46.39-18.84-26.82,18.84-82.64,84.84-82.64,84.84S852.1,307.1,835.43,283.18s-71-42.77-107.28-51.46l-143.52-6.53C575,223.35,516.15,243.52,493.68,258.87Z"/><path class="cls-11" d="M886.89,407.87c-18.15,20.87-34.55,58-34.55,58"/><path class="cls-11" d="M772.88,247.57c-69.68-5.89-139.64,37.94-139.64,37.94s-61.5-13.78-73.8-54.72"/><path class="cls-12" d="M529.36,561.68S490.9,451.2,485.53,404.61"/></g><g id="ARMS"><g id="RIGHT"><path class="cls-6" d="M1013.91,266.67c-.93,5.95-7.4,15.18-1,15.11,3.3,0,27.16-3.89,30.08,4.89a19.16,19.16,0,0,1-.63,12.67c5.23,7.81,1.23,14.19,1.23,14.19,3.16,4.86,4,11.15,1.8,13.92,0,0,5.53,12.75.25,15.71-16.36,9.2-42.45,11.11-55.09,7.84-8.87-2.29-19.51-7.77-22.23-26.65-1.12-7.73,6.58-28,12.46-36.36,2.4-3.44,11.19-17.16,14.16-20.92a44.41,44.41,0,0,0,8.42-18.75S1016.51,250.05,1013.91,266.67Z"/><path class="cls-13" d="M1035.3,285.5c.58,4-23.79,4.84-28,5.76-6,1.3-5.22,14.11,2.56,12.86a162.58,162.58,0,0,0,31.39-4.53"/><path class="cls-13" d="M1042,313.66c-25.78,5.2-32.66,4.72-32.66,4.72-3.76.74-8.6-12.55.52-14.26"/><path class="cls-13" d="M1042.64,327c-24.26,5.33-32.66,4.72-32.66,4.72-3.59.43-8.08-12.21-.75-13.08"/><path class="cls-13" d="M1016.77,331.51s-8.67-.81-8.54,4.59c.24,9.6,4.89,10.63,26.84,6.6"/></g><g id="LEFT"><path id="ARM" class="cls-6" d="M293.59,237.16c.2,6,5.45,15.86-.84,15-3.26-.44-26.31-7.13-30.25,1.16a19,19,0,0,0-.92,12.57c-6.1,7.06-2.94,13.84-2.94,13.84-3.7,4.41-5.29,10.51-3.46,13.51,0,0-7,11.89-2.16,15.45,15,11.06,40.5,16.11,53.36,14.42,9-1.18,20.17-5.29,25.15-23.57,2-7.48-3.09-28.35-7.86-37.35-1.95-3.69-8.95-18.28-11.43-22.35a44.32,44.32,0,0,1-6-19.5S293.05,220.46,293.59,237.16Z"/><g id="FINGERS"><path class="cls-6" d="M263.49,309.55c21.15,6.64,25.86,6.18,27.27-3.25.44-3-2.11-4.37-4.42-5a29.61,29.61,0,0,0,3.23.45c3.22.79,8.67-10.18,3.84-13.21,2-1,4.12-8.17,4.11-14.54,3.73-2.58,4-10.23-.34-11.76-4.09-1.43-28-5.24-27-9.1Z"/><path class="cls-14" d="M263.87,266.3a164.82,164.82,0,0,0,29.22,8.28c7.51,2.17,9.84-10.36,4.09-12.37-4.09-1.43-23.22-7.66-27-9.09"/><path class="cls-14" d="M261.43,280.08c24.78,8.25,30.44,8.62,30.44,8.62,3.61,1.18,10-11.32,1.22-14.12"/><path class="cls-14" d="M258,293.1c23.26,8.21,31.62,8.62,31.62,8.62,3.49.87,8.36-12.24-.2-13.37"/><path class="cls-14" d="M282.89,300.73s8.65.26,7.87,5.57c-1.41,9.43-6.11,9.88-27.26,3.25"/></g></g></g><g id="HEAD"><g id="NECK"><path class="cls-6" d="M697.71,138.21s-15.23,68.14,30.44,93.51c0,0-42,7.25-95.68,51.46,0,0-41.32-34.79-47.84-58,0,0,42-14.49,37.69-87Z"/><path class="cls-15" d="M697.71,138.21H622.32c4.35,72.49-37.69,87-37.69,87s83.83,0,107.54-74.74Z"/></g><path id="HEAD-2" data-name="HEAD" class="cls-6" d="M700.59,137.54s-22.39,43.65-75.89,43.67c-47.72,0-55-140.07,16.07-142,67.72-1.84,59,78.29,59,78.29s12.19-7.09,16.62.29S700.59,137.54,700.59,137.54Z"/><g id="HAIR"><path class="cls-16" d="M669.24,44.44s-.77,24.25-34.34,23.88C605.75,68,589.77,84.5,588.21,96.38"/><path class="cls-9" d="M761.29,92.33c0,26.42-31.89,49.26-67.2,64.76-2.09.92-5.47,1.13-9.75.79a83.17,83.17,0,0,0,16.25-20.34S720.7,125,716.35,117.79s-16.62-.3-16.62-.3,6.11-55.85-31.28-73.2c-.29.54-10,17.66-38.7,18.57C602.45,63.71,595,74.12,591.88,85c-.1.38-.2.75-.29,1.13a122.09,122.09,0,0,0-2.48,44.24l-.16-.06c-2.65-3.22-38.86-49.11-29.41-73.72C569.81,29.84,635.45-7.89,688,1.45,717.35,6.68,761.28,78.44,761.29,92.33Z"/></g></g></g><g id="COMPUTER"><g id="COMPUTER-2" data-name="COMPUTER"><path class="cls-17" d="M523.28,471H120.53a26.41,26.41,0,0,1-25-18L10.17,198.83a18.57,18.57,0,0,1,17.61-24.48H430.53a26.42,26.42,0,0,1,25,18l85.31,254.11A18.57,18.57,0,0,1,523.28,471Z"/><path class="cls-18" d="M514.09,480.91H111.33a26.41,26.41,0,0,1-25-18L1,208.79a18.57,18.57,0,0,1,17.6-24.48H421.34a26.41,26.41,0,0,1,25,18l85.32,254.12A18.57,18.57,0,0,1,514.09,480.91Z"/><path class="cls-19" d="M523.28,470.18H120.53a26.4,26.4,0,0,1-25-18L10.17,198.06a18.57,18.57,0,0,1,17.61-24.48H430.53a26.42,26.42,0,0,1,25,18L540.88,445.7A18.57,18.57,0,0,1,523.28,470.18Z"/><path class="cls-20" d="M349.08,390.53l30.64,76.25H313.5S326.37,407.13,349.08,390.53Z"/><path class="cls-2" d="M393.12,562.41c-130.39,0-75.56-139.53-49.63-168.51H243.14c-25.92,29-96.07,176.17,34.31,176.17H393.12Z"/><ellipse class="cls-20" cx="262.13" cy="314.61" rx="19.06" ry="24.01" transform="translate(-143.83 368.32) rotate(-57.74)"/><ellipse class="cls-19" cx="268.54" cy="309.21" rx="19.06" ry="24.01" transform="translate(-136.28 371.22) rotate(-57.74)"/></g><g id="TABLE"><path class="cls-18" d="M93.75,570.07H690.92c8.78,0,15.9,6.64,15.9,14.84h0c0,8.19-7.12,14.83-15.9,14.83H93.75Z"/><path class="cls-19" d="M93.75,570.07H690.92c8.78,0,15.9,6.64,15.9,14.84h0c0,8.19-7.12,14.83-15.9,14.83H93.75"/></g></g></g></g></g></svg>
                </div>
                <div class="col-lg-5 col-md-5 about-right">
                    <h3>Data Backup</h3>
                    <h1>Let's Manage And Keep Our Data Safe</h1>
                    <p>
                        Data backups are essential to effective security,Making backups of collected data is critically important in data management. Backups protect against human errors, hardware failure, virus attacks, power failure, and natural disasters. Backups can help save time and money if these failures occur.
                    </p>
                    <a class="primary-btn" href="about-us.html"> Get Started <i class="ti ti-arrow-right"></i></a>
                </div>
            </div>
        </div>
        <div class="floating-shapes">
            <span data-parallax='{"x": 150, "y": -20, "rotateZ":500}'>
                <img src="{{ secure_asset('home/img/shape/fl-shape-1.png')}}" alt="">
            </span>
            <span data-parallax='{"x": 250, "y": 150, "rotateZ":500}'>
                <img src="{{ secure_asset('home/img/shape/fl-shape-2.png')}}" alt="">
            </span>
            <span data-parallax='{"x": -180, "y": 80, "rotateY":2000}'>
                <img src="{{ secure_asset('home/img/shape/fl-shape-3.png')}}" alt="">
            </span>
            <span data-parallax='{"x": -20, "y": 180}'>
                <img src="{{ secure_asset('home/img/shape/fl-shape-4.png')}}" alt="">
            </span>
            <span data-parallax='{"x": 300, "y": 70}'>
                <img src="{{ secure_asset('home/img/shape/fl-shape-5.png')}}" alt="">
            </span>
            <span data-parallax='{"x": 250, "y": 180, "rotateZ":1500}'>
                <img src="{{ secure_asset('home/img/shape/fl-shape-6.png')}}" alt="">
            </span>
            <span data-parallax='{"x": 180, "y": 10, "rotateZ":2000}'>
                <img src="{{ secure_asset('home/img/shape/fl-shape-7.png')}}" alt="">
            </span>
            <span data-parallax='{"x": 60, "y": -100}'>
                <img src="{{ secure_asset('home/img/shape/fl-shape-9.png')}}" alt="">
            </span>
            <span data-parallax='{"x": -30, "y": 150, "rotateZ":1500}'>
                <img src="{{ secure_asset('home/img/shape/fl-shape-10.png')}}" alt="">
            </span>
        </div>
    </section>
    <!-- End about section -->
<!-- Start feature section -->
<section class="feature-section section-gap-full" id="feature-section">
    <div class="container">
        <div class="row align-items-center feature-wrap">
            <div class="col-lg-4 header-left">
                <h1><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 969.22 1300.06"><defs><style>.cls-1,.cls-11,.cls-17,.cls-19{fill:#fff;}.cls-1,.cls-16,.cls-17,.cls-19,.cls-2{stroke:#6562cf;}.cls-1,.cls-12,.cls-13,.cls-14,.cls-15,.cls-17,.cls-2,.cls-3{stroke-miterlimit:10;}.cls-1,.cls-15,.cls-2,.cls-3{stroke-width:5px;}.cls-12,.cls-13,.cls-14,.cls-15,.cls-2,.cls-3{fill:none;}.cls-15,.cls-3{stroke:#ffb000;}.cls-4{fill:#ffc0b7;}.cls-5{fill:#3c4564;}.cls-6{fill:#5654b7;}.cls-7{fill:#3f4d79;}.cls-8{fill:#ffcfc9;}.cls-9{fill:#6562cf;}.cls-10{fill:#8382d8;}.cls-12{stroke:#8382d8;}.cls-12,.cls-13,.cls-15{stroke-linecap:round;}.cls-12,.cls-16,.cls-17,.cls-19{stroke-width:6px;}.cls-13{stroke:#f7b3af;}.cls-13,.cls-14{stroke-width:4px;}.cls-14{stroke:#3f4d79;}.cls-16{fill:#d1d0ff;}.cls-16,.cls-19{stroke-linejoin:round;}.cls-18{fill:#e2e2ff;}</style></defs><g id="Layer_2" data-name="Layer 2"><g id="Слой_1" data-name="Слой 1"><g id="CHAIR"><ellipse class="cls-1" cx="204.28" cy="874.51" rx="169.38" ry="32.25"/><path class="cls-2" d="M194.26,906.77v226.61a66.3,66.3,0,0,1-37,59.45L97,1222.54a36.94,36.94,0,0,0-20.6,33.13"/><circle class="cls-3" cx="76.95" cy="1276.61" r="20.94"/><circle class="cls-3" cx="156.22" cy="1276.61" r="20.94"/><path class="cls-2" d="M194.26,1106.77v71a45.91,45.91,0,0,1-11.82,30.75l-14.39,16a45.9,45.9,0,0,0-11.83,30.75"/><path class="cls-2" d="M215.64,906.77v226.61a66.29,66.29,0,0,0,37,59.45l60.25,29.71a36.93,36.93,0,0,1,20.61,33.13"/><circle class="cls-3" cx="332.96" cy="1276.61" r="20.94"/><circle class="cls-3" cx="253.68" cy="1276.61" r="20.94"/><path class="cls-2" d="M215.64,1106.77v71a45.91,45.91,0,0,0,11.82,30.75l14.4,16a45.89,45.89,0,0,1,11.82,30.75"/></g><g id="CHARACTER"><g id="LEGS"><g id="RIGHT"><path id="FOOT" class="cls-4" d="M360.06,1153.84s1.18,39.42-22.58,55.93c-22.4,15.56-23.23,28.08-23.23,28.08s37.33,36.25,46.52,40,42.66,15.3,60,15.3c0,0,11.73-8.55-15.13-32-36.44-31.89,4.91-89.18,4.91-89.18S372.57,1160.6,360.06,1153.84Z"/><path id="PANT" class="cls-5" d="M293.25,688s189.63,22.36,265.29,101.26c40.88,42.64-120,299.67-127.55,386,0,0-58.37-7.68-96.2-36.87,0,0,7-238.93,93-283.21,0,0-163.67,13-233.71-22.7s0-133.29,0-133.29S255,711.07,293.25,688Z"/><path id="SHOE" class="cls-6" d="M343.48,1200.77s-31.47,12.39-32.23,35.08c0,0,32.85,33.65,49.52,42,26.13,13.15,62,17.3,62,17.3s13-16-7.43-31.51-24.37-43-24.37-43-2.25,19.46-20.43,23c-16.28,3.2-21.54-5-21.54-5S353.9,1203.53,343.48,1200.77Z"/></g><g id="LEFT"><path id="PANT-2" data-name="PANT" class="cls-7" d="M81.85,702.51s-34.42,97.42-22,124.62c23.12,50.8,206.88,65.94,343.08,41.07,0,0-47.57,167.51,8.64,304.79,0,0,37.84,6.53,90.8-1,0,0-1.08-165.39,22.7-341.58C529.8,795,326.08,711.87,236.39,702.48S81.85,702.51,81.85,702.51Z"/><path id="FOOT-2" data-name="FOOT" class="cls-8" d="M425.05,1174.65s10.27,38.32,10.27,49.73c0,23.24-17.84,51.34-14.6,70.8H582.27s-9.78-23.85-49.13-32.49c-44.32-9.73-52.45-38.18-51.34-88C481.8,1174.65,452.6,1176.89,425.05,1174.65Z"/><path id="SHOE-2" data-name="SHOE" class="cls-9" d="M432.52,1242.73s-18.82,26.5-11.8,52.45H584.79s-.37-23.2-23.24-26-60-21.61-60-21.61,2.75,27.57-39.41,30.81C462.14,1278.42,463.77,1243.78,432.52,1242.73Z"/></g></g><g id="RIGHT_HAND" data-name="RIGHT HAND"><path class="cls-9" d="M317.31,299.82c-23.1,11.46-37.08,15.18-29.77,88.29S348,546.64,348,546.64l69.12-68.14S370.54,343,360.78,328C341.77,298.89,326.3,295.36,317.31,299.82Z"/><path class="cls-10" d="M436,500.48s-14.16-32-21.14-32.33-56.4,36.38-63.34,68.86c-2.23,10.48-12.6,28,47.11,35.63C417.14,575,436,500.48,436,500.48Z"/><path class="cls-4" d="M657,556.81s-4.42,2.88-17.47-.22c-4.2-1-10.13-8.38-16.38-12.39-5.06-3.25-15-2.69-25.69-1.42-6.06.7-11.78-7.31-15.61-11.81-38,11-143.87,41.8-185.94,38.31-10.68-.88,19.89-68.17,38.4-72.56,14-3.31,96.39-.36,148.62,6.31a356.47,356.47,0,0,1,54.88,12.4C644.67,519.75,657,556.81,657,556.81Z"/></g><g id="SHIRT"><path class="cls-11" d="M293.25,688s-18.33,15.19-56.85,14.45v-.06c-4.34-73.54-13.38-211.69-22.81-263-18.89-102.69-70.39-191.24-71.19-192.61v0L241.12,252s51.16,36.17,62.33,187.48S293.25,688,293.25,688Z"/><path class="cls-9" d="M241.11,252c9.36,3.7,70.53,34.68,90,46.21s31.24,101.74,21,174.4c-17.29,122.5-15.85,170.41,1.28,225.89,0,0-39.05-8.17-60.12-9.86,0,0-10.73-84,4-169.19C327.11,346.65,241.11,252,241.11,252Z"/><path class="cls-9" d="M142.38,246.8s-97.6,32.28-129.72,68c-13,14.41,61.26,192.41,54.77,244.29S30.68,725.52,30.68,725.52,77,786.05,239.06,750c0,0-12.37-239.25-25.49-310.59C194.54,335.93,142.38,246.8,142.38,246.8Z"/><path class="cls-12" d="M348.76,412.07c-4.47,31.63-8.71,106-6.14,130.28"/></g><g id="LEFT_HAND" data-name="LEFT HAND"><path class="cls-9" d="M34.13,296.86c-21.47,17.9-40.2,16.46-32.27,95.73S67.43,564.48,67.43,564.48l74.95-73.89S103.71,347,96.26,329.17C85.3,302.88,55.6,279,34.13,296.86Z"/><path class="cls-12" d="M143.42,490.59S119.59,375.27,103.52,351"/><path class="cls-10" d="M171.45,505.76s-24-26.08-31.59-26.39-59,36.51-70,74.2c-3.25,11.16-21.2,30.07,49.77,48.28C159.1,612,171.45,505.76,171.45,505.76Z"/><path class="cls-8" d="M477.08,554s-3.68,5.14-9.05,1.61c-3.35-2.2-9.42-8-14-10.87a226.89,226.89,0,0,1,11.29,20,50.62,50.62,0,0,1-18.78,4.3c-5.36.23-13.59-9-21.84-13.16-6.67-3.35-18.85-1.36-31.91,1.6s-27.13-16.37-27.13-16.37V541c-24.78,8.35-183.94,53-243.18,49.88-13.29-.7,22.13-79.78,44.94-85.92,19.26-5.19,145.34-3.86,206.22,4.78,23.49,2.65,59.24,12.26,65.94,13.78,6.11.83,20.18,10.85,24.09,14.09C467.75,541,477.08,554,477.08,554Z"/><path class="cls-13" d="M458.53,564.93s-16.56-23.77-21.12-25.4c-8-2.88-18.49-6.69-18.49-6.69"/><path class="cls-13" d="M450.6,567.17s-15-19.82-19.5-21.45c-8-2.88-18.5-6.69-18.5-6.69"/></g><g id="HEAD"><g id="NECK"><path class="cls-8" d="M242.79,239.09l-22.61,63.58s-61.48,6.77-77.55-56.1l21.66-62Z"/><path class="cls-4" d="M242.8,239.09l-10.22,28.72c-13.6,6.19-31,6-48-16.59-15.41-20.52-18.73-50.63-21.64-61.8l1.31-4.81Z"/></g><path id="HEAD-2" data-name="HEAD" class="cls-8" d="M164.29,184.61s18.86,43.31,41.91,50.3c22,6.66,48.91,4.89,51.7,0s25.62-62.62,19.56-100.76c-4.19-26.39-15.37-30-36.33-27.95s-28.33,4.36-53.95-3.49c-7.19-2.2,5.16,38.14-16.49,53.51,0,0-16.24-5.46-19.74.13S164.29,184.61,164.29,184.61Z"/><g id="HAIR"><path class="cls-7" d="M161.35,192.6S106,158.78,108.68,113c1.17-19.6,42.68-72.3,68.11-74.48s64.67,10.9,77,21.8S283,82.94,278.6,124.68a26.45,26.45,0,0,1-1.62,6.66c-4.54-23.84-15.65-27.16-35.84-25.14-21,2.1-28.34,4.35-54-3.49-7.19-2.21,5.17,38.14-16.49,53.51,0,0-16.24-5.46-19.73.12s13.33,28.26,13.33,28.26Z"/><path class="cls-7" d="M157.09,47.14S162.26,6.57,135.37,8,92.13,34.89,89.6,51.52c-3.24,21.37,35.55,27.67,35.55,27.67Z"/><path class="cls-14" d="M98.78,78.86c9.11,10.76,26.37.33,26.37.33"/><path class="cls-14" d="M164.51,45.57S170.44.51,139.59,2,88.66,40.39,92.83,51.82s35,27.37,35,27.37Z"/><path class="cls-14" d="M262,106c-5.47-2.18-12.56,3-20.87,5-27,6.5-45.54,3-55.55-9.89"/></g><g id="GLASSES"><circle class="cls-3" cx="217.05" cy="162.47" r="21.05"/><ellipse class="cls-3" cx="271.36" cy="162.47" rx="19.71" ry="21.05"/><line class="cls-3" x1="237.95" y1="161.02" x2="250.82" y2="161.02"/></g></g></g><g id="COMPUTER"><polyline class="cls-15" points="690.61 1297.56 780.61 611.16 796.83 611.16 886.83 1297.56"/><path class="cls-16" d="M849.47,580.33h-45l-7-9.88c-6.85-9.71-19.53-15.69-33.26-15.69H698.14c-13.73,0-26.41,6-33.26,15.69l-7,9.88H614.63l17.29-21.74c7.73-9.72,22-15.7,37.48-15.7H794.69c15.47,0,29.77,6,37.49,15.7Z"/><path class="cls-17" d="M850.3,580.33H832.05l-7-9.88c-6.86-9.71-19.54-15.69-33.26-15.69H699c-13.72,0-26.4,6-33.26,15.69l-7,9.88H615.46l17.29-21.74c7.73-9.72,22-15.7,37.49-15.7H795.53c15.47,0,29.76,6,37.48,15.7Z"/><path class="cls-17" d="M875.56,481.65H451.92c-11.25,0-19.36-11.18-16.24-22.39l63.19-226.64a28,28,0,0,1,26.79-20.88H949.3c11.25,0,19.37,11.18,16.24,22.38L902.35,460.77A28.05,28.05,0,0,1,875.56,481.65Z"/><path class="cls-18" d="M628.93,412.68l-10.69,65.56h37l-16.37-65.67C638.51,411.1,629.17,411.19,628.93,412.68Z"/><path class="cls-16" d="M779.33,542.2h-105L648.4,438c-2.86-11.45-6.56-15.91-15.42-18.43v-6H722.1A32.23,32.23,0,0,1,753.37,438Z"/><path class="cls-17" d="M789.75,542.2h-105L658.82,438c-3.58-14.35-8.46-24.43-23.26-24.43h97A32.25,32.25,0,0,1,763.79,438Z"/><polygon class="cls-19" points="518.16 562.43 378.59 570.44 378.59 580.33 518.16 580.33 518.16 562.43"/><rect class="cls-16" x="518.16" y="562.43" width="87.28" height="17.52"/><polygon class="cls-19" points="228.19 609.68 868.96 609.68 868.96 580.33 226.74 580.33 228.19 609.68"/></g></g></g></svg>
                </h1>
                </a>
            </div>
            <div class="col-lg-8">
                <div class="row features-wrap">
                    <div class="col-md-6">
                        <div class="single-feature relative">
                            <div class="overlay overlay-bg"></div>
                            <span class="ti-cloud"></span>
                            <h3>Data Back Up</h3>
                            <p>
                               Making backups of collected data is critically important in data management.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="single-feature relative">
                            <div class="overlay overlay-bg"></div>
                            <span class="ti-lock"></span>
                            <h3>Data Security</h3>
                            <p>
                                Physical security and computer security of data must be considered in good data management.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="single-feature relative">
                            <div class="overlay overlay-bg"></div>
                            <span class="ti-file"></span>
                            <h3>Data Merge And Import</h3>
                            <p>
                                Data merging or combining two or more similar records into a single one. Merging is done to add variables to a dataset, append or add cases or observations to a dataset, or remove duplicates and other incorrect information.
                                
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="single-feature relative">
                            <div class="overlay overlay-bg"></div>
                            <span class="ti-export"></span>
                            <h3>Data Export</h3>
                            <p>
                                Data export is the extraction and conversion of raw data from their existing format into a format required by another application.
                                
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End feature section -->


    <!--
JS
============================================= -->
    <script src="{{ secure_asset('home/js/vendor/jquery-2.2.4.min.js')}}"></script>
    <script src="{{ secure_asset('home/js/vendor/popper.min.js')}}"></script>
    <script src="{{ secure_asset('home/js/jquery.easing.1.3.js')}}"></script>
    <script src="{{ secure_asset('home/js/vendor/bootstrap.min.js')}}"></script>
    <script src="{{ secure_asset('home/js/jquery.parallax-scroll.js')}}"></script>
    <script src="{{ secure_asset('home/js/dopeNav.js')}}"></script>
    <script src="{{ secure_asset('home/js/owl.carousel.min.js')}}"></script>
    <script src="{{ secure_asset('home/js/jquery.stellar.min.js')}}"></script>
    <script src="{{ secure_asset('home/js/jquery.counterup.min.js')}}"></script>
    <script src="{{ secure_asset('home/js/waypoints.min.js')}}"></script>
    <script src="{{ secure_asset('home/js/main.js')}}"></script>
</body>

</html>
        

