<!doctype html>
<html lang="en">
    <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      {{-- <script src="https://kit.fontawesome.com/a88a65451c.js" crossorigin="anonymous"></script> --}}
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
      <link rel="stylesheet" href="{{ asset('style.css') }}">
      <link href="https://fonts.googleapis.com/css2?family=Hind:wght@400;500;600;700&display=swap" rel="stylesheet"> 
        <style>
            body, html{
                font-family: 'Hind', sans-serif;
            }
        </style>
      <style>
        .list-group-menu li{
          width: 10rem;
          height: 6rem;
          position: relative;
          border: 0px;
        }
        .list-group-menu .ma-menu::after{
          z-index: 2;
          content: "";
          position: absolute;
          top: 0;
          bottom: 0;
          right: 0;
          left: 0;
          border-radius: 1rem;
        }
        .list-group-menu .ma-semua::after{
          background: linear-gradient(to top, #000000ff,  #000000ff 100%);
        }
        .list-group-menu .ma-sayur::after{
          background: linear-gradient(to top, #4caf50dd,  #4caf5033 75%);
        }
        .list-group-menu .ma-buah::after{
          background: linear-gradient(to top, #ef6c00dd,  #ef6c0033 75%);
        }
        .list-group-menu .ma-daging::after{
          background: linear-gradient(to top, #d32f2fdd,  #d32f2f33 75%);
        }
        .list-group-menu .ma-ikan::after{
          background: linear-gradient(to top, #1976d2dd,  #1976d233 75%);
        }
        .list-group-menu .ma-lain::after{
          background: linear-gradient(to top, #5d4037dd,  #5d403733 75%);
        }
        .list-group-menu li:not(:first-of-type){
          margin: 0 0 0 20px;
          width: 10rem;
        }
        .ma-menu-title{
          z-index: 999;
        }
        .ma_image-product{
            position: relative;
            width: 100%;
            height: 10rem;
            border-radius: .5rem;
            overflow: hidden;
        }
        .ma_image-product .image {
            display: block;
            width: 100%;
            height: auto;
            border-radius: .5rem;
            z-index: 1;
            transition: all .5s;
        }
        .ma_product:hover .image{
            transform: scale(1.1);
            transition: all .5s;
        }
        .ma_image-product .ma_product-action{
            transition: all .5s;
            background: #3CA34A;
            color: white;
        }
        .ma_product:hover .ma_product-action{
            transform: translateY(-3rem);
            transition: all .5s;
        }
        .ma-footer-link{
          padding: 0;
        }
        .ma-footer-link li{
          list-style-type: none
        }
        .ma-profile-container{
          min-height: 36rem;
        }
        .ma-sidemenu ul{
          padding-left: .75rem;
        }
        .ma-sidemenu li{
          list-style-type: none;
        }
        .ma-sidemenu a, .ma-sidemenu-link{
          color: #333;
          text-decoration: none;
          font-size: .8rem;
        }
        .ma-sidemenu .ma-sidemenu-link:hover{
          color: #28a745;
        }
        .ma-sidemenu .ma-sidemenu-link.active{
          color: #28a745;
        }
          @media(min-width: 1200px){
            .ma-menu-title{
              display: none;
            }
          }
          @media (min-width:768px){
            .ma-menu-title{
              display: none;
            }
          }
          @media (max-width:768px){
            .ma-menu-title{
              display: inline;
            }
          }
      </style>
      <title>Hello, world!</title>
    </head>
    <body>
      @yield('content')
      <!-- Optional JavaScript -->
      <!-- Popper.js first, then Bootstrap JS -->
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    </body>
</html>