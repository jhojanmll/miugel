<!DOCTYPE html>
<html lang="es"> 
<head>
    <title>MiUgel</title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="description" content="Portal - Bootstrap 5 Admin Dashboard Template For Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">    
    <link rel="shortcut icon" href="favicon.ico"> 
    
    <!-- FontAwesome JS-->
    <script defer src="assets/fontawesome/js/all.min.js"></script>
    
    <!-- App CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/portal.css">
    
</head> 

<body class="app">   	
    <header class="app-header fixed-top">	   	            
        @include('layouts.top')
        @include('layouts.sidebar')
    </header><!--//app-header-->
    
    <div class="app-wrapper">
        
        <div class="app-content pt-3 p-md-3 p-lg-4">
            <div class="container-xl">
                @yield('content')                
            </div><!--//container-fluid-->
        </div><!--//app-content-->
                    
        <footer class="app-footer">
            <div class="container text-center py-3">
                <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
                <small class="copyright">Diseñado <span class="sr-only">love</span><i class="fas fa-heart" style="color: #fb866a;"></i> por <a class="app-link" href="http://themes.3rdwavemedia.com" target="_blank">Equipo de Informática</a> Ugel Tacna 2022</small>
            </div>
        </footer><!--//app-footer-->
    </div><!--//app-wrapper-->    					
    
    <!-- Javascript -->          
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>  
    
    <!-- Page Specific JS -->
    <script src="assets/js/app.js"></script> 
    
    </body>
</html> 