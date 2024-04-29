<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <!-- Link CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Link JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        body {margin:0;font-family:Arial}
        
        .topnav {
          overflow: hidden;
          background-color: #333;
        }
        
        .topnav a {
          float: left;
          display: block;
          color: #f2f2f2;
          text-align: center;
          padding: 14px 16px;
          text-decoration: none;
          font-size: 17px;
        }
        
        .active {
          background-color: #04AA6D;
          color: white;
        }
        
        .topnav .icon {
          display: none;
        }
        
        .dropdown {
          float: left;
          overflow: hidden;
        }
        
        .dropdown .dropbtn {
          font-size: 17px;    
          border: none;
          outline: none;
          color: white;
          padding: 14px 16px;
          background-color: inherit;
          font-family: inherit;
          margin: 0;
        }
        
        .dropdown-content {
          display: none;
          position: absolute;
          background-color: #f9f9f9;
          min-width: 160px;
          box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
          z-index: 1;
        }
        
        .dropdown-content a {
          float: none;
          color: black;
          padding: 12px 16px;
          text-decoration: none;
          display: block;
          text-align: left;
        }
        
        .topnav a:hover, .dropdown:hover .dropbtn {
          background-color: #555;
          color: white;
        }
        
        .dropdown-content a:hover {
          background-color: #ddd;
          color: black;
        }
        
        .dropdown:hover .dropdown-content {
          display: block;
        }
        
        @media screen and (max-width: 600px) {
          .topnav a:not(:first-child), .dropdown .dropbtn {
            display: none;
          }
          .topnav a.icon {
            float: right;
            display: block;
          }
        }
        
        @media screen and (max-width: 600px) {
          .topnav.responsive {position: relative;}
          .topnav.responsive .icon {
            position: absolute;
            right: 0;
            top: 0;
          }
          .topnav.responsive a {
            float: none;
            display: block;
            text-align: left;
          }
          .topnav.responsive .dropdown {float: none;}
          .topnav.responsive .dropdown-content {position: relative;}
          .topnav.responsive .dropdown .dropbtn {
            display: block;
            width: 100%;
            text-align: left;
          }
        }
        </style>
         <!-- Link para css e js desenvolvidos -->
         @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/app.css'])

</head>
<body>

    {{-- navbar --}}
    @include('partials.navbar')

    {{-- Conteúdo principal --}}
    @yield('content')



    {{-- JQuery --}}
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" ></script>
    {{-- Link JS Bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>  
    <script>
        function myFunction() {
          var x = document.getElementById("myTopnav");
          if (x.className === "topnav") {
            x.className += " responsive";
          } else {
            x.className = "topnav";
          }
        }
        </script>


        



</body>
</html>

