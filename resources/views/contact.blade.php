<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <link href="/css/app.css" rel="stylesheet">
        <title>{{strtoupper($dealer[0]['name'])}}</title>

        <style>
            h1{
              color: #000000;
            }
            nav{
              background-color: #ffffff;
              margin-bottom: 15px;
            }
            body  {
              font-family: 'Arial';
              background-repeat: no-repeat;
              background-size: cover;
              background-image: url(<?=$banners[0]['image']?>);";
            }
            i{
              font-size: large;
              color: #ffffff;
              -moz-transform: scale(-1, 1);
              -webkit-transform: scale(-1, 1);
              -o-transform: scale(-1, 1);
              -ms-transform: scale(-1, 1);
              transform: scale(-1, 1);
            }
            h3{
              color: #e02b20 ! important;
            }

            footer{
              background-color: #e02b20;
              font-weight: bold;
              color: #ffffff;
              position: fixed;
              bottom: 0;
              width: 100%;
            }
            .product-link{
              color: #000000;
            }
            .product-link:hover{
              color: #000000;
            }
            .banner{
              height: 100%;
              width: 100%;
              position: absolute;
              top: 0;
              left: 0;
              z-index: 0;
            }
            .proportion{
              padding-top:48.25%;
              width: 100%;
              position: relative;
            }
            /* .logo{
              height: 78px;
            } */
            .shop{
              font-weight: bold;
              font-size: 150%;
              color: #e02b20 ! important;
            }
            .shop:hover{
              color: #e02b20 ! important;
              filter: brightness(75%) ! important;
            }
            .contact-info{
              display:flex;
              margin-left:auto;
              margin-right:auto;
            }
            .info{
              width: 33.33%;
            }
            .info-content{
              margin: -15px 0 20px 0;
            }
            .logo{
                display: flex;
            }
            .logo-image{
                max-height: 78px;
            }
            .logo-name{
                margin-top: auto;
                margin-bottom: auto;
            }
            @media (max-width: 600px){
              .contact-info{
                  flex-direction: column;
              }
              .info{
                  width: 100%;
                  margin-right: 5px;
              }
              .logo{
                flex-direction: column;
                margin-left: auto;
                margin-right: auto;
                width: 100%;
              }
              .logo-image-div{
                margin-left: auto;
                margin-right: auto;
              }
              .logo-name{
                margin-left: auto;
                margin-right: auto;
              }
            }


        </style>
    </head>
    <body class="">

      <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
          <div class="container">
              <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="logo">
                <a class="logo" href="/{{$dealer[0]['slug']}}">
                  <div class="logo-image-div">
                    <img class="logo-image img-fluid" src="ChampionLogo.png" alt="">
                  </div>
                  <div class="logo-name">
                    <h1 class="text-center">{{strtoupper($dealer[0]['name'])}}</h1>
                  </div>
                </a>
              </div>
              <div class="col"></div>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <hr>
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item active">
                    <a class="nav-link shop text-center" href="/{{$dealer[0]['slug']}}/contact">Contact</a>
                  </li>
                  <li class="nav-item active">
                    <a class="nav-link shop text-center" href="https://champion-animal-health.myshopify.com/?rfsn={{$dealer[0]['cookie']}}">Online Shop</a>
                  </li>
                </ul>
              </div>
          </div>
      </nav>

      <div class="content">

      </div>

      <footer class="page-footer shadow-lg font-small">

        <div class="container p-3">
            <div class="contact-info">
                <div class="info text-center">
                    <p class="info-title"><i class="mr-3 fa fa-map-marker-alt" aria-hidden="true"></i><b>ADDRESS</b></p>
                    <p class="info-content">{{$dealer[0]['address']}}</p>
                </div>
                <div class="info text-center">
                    <div class="">
                      <p class="info-title" ><i class="mr-3 fa fa-envelope" aria-hidden="true"></i><b>EMAIL</b></p>
                      <p class="info-content">{{$dealer[0]['email']}}</p>
                    </div>
                </div>
                <div class="info text-center">
                  <p class="info-title"><i class="mr-3 fa fa-phone" aria-hidden="true"></i><b>PHONE</b></p>
                  @foreach ($phones as $phone)
                    <div class="info-content">
                        <label>({{$phone['ddd']}}) {{substr_replace($phone['phone'], '-', 5, 0)}}</label>
                    </div>
                  @endforeach
                </div>
            </div>
        </div>

        <div class="footer-copyright text-center p-3 border-top border-white">
            © 2020, Champion Animal Health Powered by NewVista Brands
        </div>
      </footer>

      <script src="/js/app.js"></script>
    </body>
</html>
