<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <link href="/css/app.css" rel="stylesheet">
        <title>{{strtoupper($dealer[0]['name'])}}'S STORE</title>

        <style>
            h1{
              color: #000000;
            }
            nav{
              background-color: #ffffff;
            }
            body {
              font-family: 'Arial';
              background-color: #ffffff;
            }
            i{
              -moz-transform: scale(-1, 1);
              -webkit-transform: scale(-1, 1);
              -o-transform: scale(-1, 1);
              -ms-transform: scale(-1, 1);
              transform: scale(-1, 1);
            }
            footer{
              background-color: #e02b20;
              font-weight: bold;
              color: #ffffff;
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
            .logo{
              height: 78px;
            }
            .shop{
              font-weight: bold;
              font-size: 150%;
              color: #e02b20 ! important;
            }
            .shop:hover{
              color: #e02b20 ! important;
              filter: brightness(75%) ! important;
            }
            .info{
              display: flex;
              margin-left: auto;
              width: fit-content;
              margin-right: auto;
            }
        </style>
    </head>
    <body class="">

      <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
          <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="/{{$dealer[0]['name']}}">
                  <div class="row">
                    <div class="col text-center">
                      <img class="logo img-fluid" src="ChampionLogo.jpg" alt="">
                    </div>
                    <div class="col mt-auto mb-auto">
                      <h1>{{strtoupper($dealer[0]['name'])}}'S STORE</h1>
                    </div>
                  </div>
                </a>
              <div class="col"></div>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item active">
                    <a class="nav-link shop" href="https://champion-animal-health.myshopify.com/?rfsn={{$dealer[0]['cookie']}}">Shop</a>
                  </li>
                </ul>
              </div>
          </div>
      </nav>

      <div class="proportion mt-3 mb-3">
                <img src="{{$dealer[0]['banner']}}" class="banner img-fluid d-block w-100" alt="...">
      </div>

      <div class="text-center mt-3 mb-3">
        <div class="">
          <h2><b>Products Available in Store</b></h2>
          <hr class="w-50">
        </div>
      </div>

      <div class="pl-5 pr-5 mt-3 mb-3">
          <div class="card-columns text-center ">
              @foreach ($localProducts as $product)
              <div class="card">
                  <img src="{{$product['image']}}" class="img-fluid d-block card-img-top" alt="...">
                  <div class="card-body">
                    <hr>
                    <h5 class="card-title">{{$product['name']}}</h5>
                    <p class="card-text">$ {{$product['price']}}</p>
                  </div>
                </div>
              @endforeach
          </div>
      </div>



      @if(sizeof($localProductsIds) != sizeof($onlineProducts))
      <div class="text-center mt-3 mb-3">
        <div class="">
          <h2><b>Products Available Online</b></h2>
          <hr class="w-50">
        </div>
      </div>

      <div class="pl-5 pr-5 mt-3 mb-3">
          <div class="card-columns text-center ">
              @foreach ($onlineProducts as $product)
                @if (!in_array($product['id'], $localProductsIds))
                  <a class="product-link" href="https://champion-animal-health.myshopify.com/?rfsn={{$dealer[0]['cookie']}}">
                    <div class="card">
                        <img src="{{$product['image']}}" class="img-fluid d-block card-img-top" alt="...">
                        <div class="card-body">
                          <hr>
                          <h5 class="card-title">{{$product['name']}}</h5>
                          <p class="card-text">$ {{$product['price']}}</p>
                        </div>
                    </div>
                  </a>
                @endif
              @endforeach
          </div>
      </div>
      @endif


      <div class="text-center mt-3 mb-3">
        <div class="">
          <h2><b>Sales and General Questions:</b></h2>
          <hr class="w-50">
        </div>

        <div class="info">
          <div class="mr-1">
            <i class="fa fa-envelope" aria-hidden="true"></i>
          </div>
          <div class="">
            <label for="">{{$dealer[0]['email']}}</label>
          </div>
        </div>

        @foreach ($phones as $phone)
            <div class="info">
              <div class="mr-1">
                  <i class="fa fa-phone" aria-hidden="true"></i>
              </div>
              <div class="">
                  <label for="">({{$phone['ddd']}}) {{substr_replace($phone['phone'], '-', 5, 0)}}</label>
              </div>
            </div>
        @endforeach
      </div>

      <footer class="page-footer shadow-lg font-small">
        <div class="footer-copyright text-center p-3">
            © 2020, Champion Animal Health Powered by RAMP
        </div>
      </footer>

      <script src="/js/app.js"></script>
    </body>
</html>
