<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="
Saidur Rahman, saidurdev a PHP Laravel web developer with a proven track record of success. I have developed and delivered high-quality, scalable, and secure PHP Laravel websites and applications for a variety of clients in Bangladesh and other countries. I am proficient in all aspects of PHP Laravel development, including object-oriented programming, and MVC frameworks. I am an expert in Laravel, a popular PHP framework. I am confident that I can use my skills to" />
    <meta name="google-site-verification" content="JzV09-f6RgdURI3XznrXv2cL5YK5Q8nc_Nj7lHGU_h0" />
    <meta name="author" content="" />
    <title>Saidur Dev</title>
    <link rel="icon" type="image/x-icon" href="{{asset('/favicon.ico')}}" />
    <link href="{{asset('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css')}}" rel="stylesheet" />
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <link href="{{asset('css/style.css')}}" rel="stylesheet" />




</head>


<body class="d-flex flex-column h-100">
<main class="flex-shrink-0"> 
        <!-- Navigation-->
        @include('components.navBar')
        @include('components.loder')


<div id="content-div">

    
    @yield('content')
    
</div>



</main>
    <!-- Footer-->
    @include('components.footer')


    <script src="{{asset('/js/bootstrap.bundle.min.js')}}"></script>
        <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-91FSGQY6KP"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-91FSGQY6KP');
</script>
</body>

</html>
