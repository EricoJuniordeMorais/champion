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
            }
            body {
              font-family: 'Arial';
              background-color: #ffffff;
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
            a:hover{
              text-decoration: none;
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
            .responsive-info-nav{
              display: flex;
            }
            .responsive-item-nav{
              width: 50%;
              margin: 15px;
            }
            @media (max-width: 600px){
        	.carousel .item {
		  height: 300px !important;
		}

		.item img {
   		 position: absolute;
   		 top: 0;
   		 left: 0;
   		 min-height: 300px;
		}
	      .responsive-info{
                display: flex;
                margin-bottom: 15px
              }
              .responsive-info-nav{
                display: flex;
              }
              .responsive-item{
                width: 50%;
              }
              .responsive-item-email{
                width: 50%;
                border-right: solid;
                border-width: 1px;
                border-color: #ffffff;
              }
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
                    <img class="logo-image img-fluid" src="https://commotion-assets.s3.amazonaws.com/customers/champion/logos/ChampionLogo.png" alt="">
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
                    <a class="nav-link shop text-center" data-toggle="collapse" href="#nav-contact" role="button" aria-expanded="false" aria-controls="nav-contact">Contact</a>
                  </li>

                  <li class="nav-item active">
                    <a class="nav-link shop text-center" href="https://champion-animal-health.myshopify.com/?rfsn={{$dealer[0]['cookie']}}">Online Shop</a>
                  </li>
                </ul>
              </div>
          </div>
      </nav>
      <div class="collapse multi-collapse shadow-sm" id="nav-contact">
        <div class="contact-info p-3">
          <div class="info text-center">
            <p class="info-title"><i style="color: #e02b20" class="mr-3 fa fa-map-marker-alt" aria-hidden="true"></i><b style="color: #000000">ADDRESS</b></p>
            <p style="color: #000000" class="info-content">{{$dealer[0]['address']}}</p>
          </div>
          <div class="info text-center">

          </div>
          <div class="info text-center responsive-info-nav">
            <div class="responsive-item-nav ">
              <p class="info-title" ><i style="color: #e02b20" class="mr-3 fa fa-envelope" aria-hidden="true"></i><b style="color: #000000">EMAIL</b></p>
              <p style="color: #000000" class="info-content">{{$dealer[0]['email']}}</p>
            </div>
            <div class="responsive-item-nav ">
              <p class="info-title"><i style="color: #e02b20" class="mr-3 fa fa-phone" aria-hidden="true"></i><b style="color: #000000">PHONE</b></p>
              @foreach ($phones as $phone)
              <div class="info-content">
                <label style="color: #000000">({{$phone['ddd']}}) {{substr_replace($phone['phone'], '-', 5, 0)}}</label>
              </div>
              @endforeach
            </div>
          </div>
        </div>

      </div>
      <div style="margin-top:15px"id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">


          @for($i = 0; $i < sizeof($banners); $i++)
            @if($i == 0)
              <li data-target="#carouselExampleIndicators" data-slide-to="{{$i}}" class="active"></li>
            @else
              <li data-target="#carouselExampleIndicators" data-slide-to="{{$i}}"></li>
            @endif
          @endfor
        </ol>
        <div class="carousel-inner">
          @foreach($banners as $index => $banner)
              @if($index == 0)
                <div class="carousel-item active service-box">
                  <img class="img-responsive" style="height: 100%; width: 100%;" class="d-block w-100" src="{{$banner['image']}}" alt="{{$banner['name']}}">
                </div>
              @else
                <div class="carousel-item">
                  <img class="img-responsive" style="height: 100%; width: 100%;" class="d-block w-100" src="{{$banner['image']}}" alt="{{$banner['name']}}">
                </div>
              @endif
          @endforeach
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <i class="fa fa-chevron-right" aria-hidden="true"></i>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <i class="fa fa-chevron-left" aria-hidden="true"></i>
        </a>
      </div>

      </div>

      <div class="text-center mt-3 mb-3">
        <div class="">
          <h2><b>Products Available in Store</b></h2>
          <hr class="w-50">
        </div>
      </div>

      <div class="pl-5 pr-5 mt-3 mb-3">
          <div class="card-columns text-center" id='accordion'>
              @foreach ($localProducts as $index => $product)
                <div class="card col">
                    <a class="product-link" type="button" data-toggle="collapse" data-target="#contact-product<?=$index?>" aria-expanded="false" aria-controls="contact-product<?=$index?>">
                      <img src="{{$product['image']}}" class="img-fluid d-block card-img-top" alt="...">
                    </a>
                    <div class="card-body">
                      <hr>
                      <h5 class="card-title">{{$product['name']}}</h5>
                      <p class="card-text">$ {{$product['price']}}</p>
                      <a class="product-link">
		<!--	<button class="btn btn-danger" type="button" data-toggle="collapse" data-target="#detail-product<?=$index?>" aria-expanded="false" aria-controls="detail-product<?=$index?>">
                          Details
                        </button> -->
                        <button class="btn btn-danger" type="button" data-toggle="collapse" data-target="#contact-product<?=$index?>" aria-expanded="false" aria-controls="contact-product<?=$index?>">
                          Get in touch!
                        </button>
			<div class="collapse multi-collapse" data-parent="#accordion" id="detail-product<?=$index?>">
				asd
			</div>
                        <div class="row">
                          <div class="col">
                            <div class="collapse multi-collapse" data-parent="#accordion" id="contact-product<?=$index?>">
                                <hr>
                                <div class="p-3">
                                  <div class="text-left mb-1">
                                      <p class="info-content"><i style="color:red" class="mr-3 fa fa-map-marker-alt" aria-hidden="true"></i>{{$dealer[0]['address']}}</p>
                                  </div>
                                  <div class="text-left mb-1">
                                      <p class="info-content"><i style="color:red" class="mr-3 fa fa-envelope" aria-hidden="true"></i>{{$dealer[0]['email']}}</p>
                                  </div>
                                  @foreach ($phones as $phone)
                                    <div class="text-left mb-1">
                                        <p class="info-content"><i style="color:red" class="mr-3 fa fa fa-phone" aria-hidden="true"></i>({{$phone['ddd']}}) {{substr_replace($phone['phone'], '-', 5, 0)}}</p>
                                    </div>
                                  @endforeach
                                </div>
                            </div>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
              @endforeach
          </div>
      </div>

      @if(sizeof($localProductsIds) != sizeof($onlineProducts))
      <div class="text-center mt-3 mb-3">
        <div class="">
          <h2><b>Products Available Only Online</b></h2>
          <hr class="w-50">
        </div>
      </div>

      <div class="pl-5 pr-5 mt-3 mb-3">
          <div class="card-columns text-center ">
              @foreach ($onlineProducts as $product)
                @if (!in_array($product['id'], $localProductsIds))
                    <div class="card">
                        <a class="product-link" href="https://champion-animal-health.myshopify.com/?rfsn={{$dealer[0]['cookie']}}">
                          <img src="{{$product['image']}}" class="img-fluid d-block card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                          <hr>
                          <h5 class="card-title">{{$product['name']}}</h5>
                          <p class="card-text">$ {{$product['price']}}</p>
                          <a class="product-link" href="https://champion-animal-health.myshopify.com/?rfsn={{$dealer[0]['cookie']}}">
                            <button class="btn btn-danger">Buy now!</button>
                          </a>
                        </div>
                    </div>
                  </a>
                @endif
              @endforeach
          </div>
      </div>
      @endif

      <footer id="footer" class="page-footer shadow-lg font-small">

        <div class="container p-3">
            <div class="contact-info">
                <div class="info text-center">
                    <p class="info-title"><i class="mr-3 fa fa-map-marker-alt" aria-hidden="true"></i><b>ADDRESS</b></p>
                    <p class="info-content">{{$dealer[0]['address']}}</p>
                </div>
                <div class="info text-center">

                </div>
                <div class="info responsive-info text-center">
                  <div class="responsive-item-email">
                    <p class="info-title" ><i class="mr-3 fa fa-envelope" aria-hidden="true"></i><b>EMAIL</b></p>
                    <p class="info-content">{{$dealer[0]['email']}}</p>
                  </div>
                  <div class="responsive-item">
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
