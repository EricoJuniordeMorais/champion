<!DOCTYPE html>
	<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" method="POST">
    <head>
        <meta charset="utf-8">
	<meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <link href="/css/app.css" rel="stylesheet">
        <title>CHAMPION DEALER</title>

        <style>
            h1{
              color: #000000;
            }
            nav{
              background-color: #ffffff;
            }
            small{
              color: #e02b20 ! important;
            }
            body {
              font-family: 'Arial';
              background-color: #ffffff;
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

            .add-phone{
              color: #e02b20;
              width: fit-content;
            }
            .add-phone-text{
              font-size: x-large;
            }
            .add-phone-icon{
              font-size: xx-large;
            }
            .add-phone:hover{
              cursor: pointer;
            }
            .add-phone-text:hover{
              cursor: pointer;
            }
            .navbar-link{
              font-weight: bold;
              font-size: 150%;
              color: #e02b20 ! important;
            }
            .remove-phone{
              color: #e02b20;
            }
            .remove-phone-text{
              font-size: x-large;
            }
            .remove-phone-icon{
              font-size: xx-large;
            }
            .remove-phone:hover{
              cursor: pointer;
            }
            .remove-phone-text:hover{
              cursor: pointer;
            }
            .sub-title{
              color: #e02b20;
              font-weight: bold;
              margin: 15px;
            }
            @media (max-width: 600px){
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
                <a class="logo" href="/">
                  <div class="logo-image-div">
                    <img class="logo-image img-fluid" src="https://commotion-assets.s3.amazonaws.com/customers/champion/logos/ChampionLogo.png" alt="">
                  </div>
                </a>
              </div>
              <div class="col"></div>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <hr>
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item active">
                    <a class="nav-link navbar-link text-center" href="/admin/create">NEW DEALER</a>
                  </li>
                  <li class="nav-item active">
                    <a class="nav-link navbar-link text-center" href="/admin/index" >ALL DEALERS</a>
                  </li>
		  <li class="nav-item active">
                    <a class="nav-link navbar-link text-center" href="/logout" >LOGOUT</a>
                  </li>
                </ul>
              </div>
          </div>
      </nav>

      <div class="container">

        <h2 class="text-center sub-title">DEALER DETAILS</h2>

        @if($hasErrors)
          @foreach($errors as $errorMessages)
            @foreach($errorMessages as $message)
              <span class="form-text text-center mt-0 mb-3"> <b>ERROR:</b> {{$message}} </span>
            @endforeach
          @endforeach
        @endif

        <form method="POST" action="/admin/store" enctype="multipart/form-data">
	  @csrf

          <div class="form-group">
            <input type="text" class="form-control" id="name" name="name" aria-describedby="nameHelp" placeholder="Store's Name">
            <small id="nameHelp" class="form-text">*required</small>
          </div>
          <div class="form-group">
            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Email Adress">
            <small id="emailHelp" class="form-text">*required</small>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="cookie" name="cookie" aria-describedby="cookieHelp" placeholder="Cookie code">
            <small id="cookieHelp" class="form-text">*required</small>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="address" name="address" aria-describedby="addressHelp" placeholder="Store's Addres">
            <small id="addressHelp" class="form-text">*required</small>
          </div>
          <div class="">
            <h2 class="text-center sub-title">BANNERS</h2>
            @if($hasErrors && array_key_exists('banners', $errors))
              @foreach($errors['banners'] as $error)
                <span class="form-text text-center mt-0 mb-3"> <b>ERROR:</b> {{$error}} </span>
              @endforeach
            @endif
	    <p class="form-text text-center text-muted mt-0">*if you dont upload any image, we will use stock image.</p>
            <p class="form-text text-center text-muted mt-0">*minimum of one image required.</p>
            <p class="form-text text-center text-muted mt-0">*image size (1600x655).</p>
          </div>
          <div class="mb-3 text-center">
            <div class="custom-file mb-3">
              <input type="file" class="btn btn-danger" name="banners[]" multiple>
            </div>
            <div class="custom-file mb-3">
              <input type="file" class="btn btn-danger" name="banners[]" multiple>
            </div>
            <div class="custom-file mb-3">
              <input type="file" class="btn btn-danger" name="banners[]" multiple>
            </div>
            <div class="custom-file mb-3">
              <input type="file" class="btn btn-danger" name="banners[]" multiple>
            </div>
            <div class="custom-file mb-3">
              <input type="file" class="btn btn-danger" name="banners[]" multiple>
            </div>

          </div>

          <h2 class="text-center sub-title">PHONES</h2>
          @if($hasErrors && array_key_exists('phones', $errors))
            @foreach($errors['phones'] as $error)
                <span class="form-text text-center mt-0 mb-3"> <b>ERROR:</b> {{$error}} </span>
            @endforeach
          @endif
          @if($hasErrors && array_key_exists('ddds', $errors))
            @foreach($errors['ddds'] as $error)
                <span class="form-text text-center mt-0 mb-3"> <b>ERROR:</b> {{$error}} </span>
            @endforeach
          @endif

          <div class="form-group row" id="phone">
            <div class="ml-auto col-3">
              <input  mask="(000)" type="text" class="form-control" name="ddds[]" aria-describedby="phoneHelp" placeholder="AREA CODE">
              <small id="phone1Help" class="form-text">*required</small>
            </div>
            <div class="col-6">
              <input  id="phone" data-inputmask="'mask': '99-9999999'" type="text" class="form-control" name="phones[]" placeholder="Phone">
            </div>
            <div style="width:fit-content" class="mr-auto">
              <i id="addPhone" onclick="addPhone()" class="fa fa-plus-circle add-phone add-phone-icon"  aria-hidden="true"></i>
            </div>
          </div>

          <h2 class="text-center sub-title mb-3 mt-5">SELECT PRODUCTS AVALIABLE AT YOUR STORE</h2>

          <div class="row">
          @foreach($products as $product)
            <div style="width:33.33%" class="row mr-auto ml-auto">
              <div class="col-auto">
                <input class="" type="checkbox" id="{{$product['name']}}" name="products[]" value="{{$product['id']}}">
              </div>
              <div class="col-10">
                <label for="{{$product['name']}}"><b>${{$product['price']}}</b> - {{$product['name']}}</label>
              </div>
            </div>
          @endforeach
        </div>

          <div class="text-center m-3">
            <button type="submit" class="btn btn-lg btn-danger font-weight-bold btn-block">SUBMIT</button>
          </div>
        </form>
      </div>

      <footer id="footer" class="page-footer shadow-lg font-small">
        <div class="footer-copyright text-center p-3 border-top border-white">
            © 2020, Champion Animal Health Powered by NewVista Brands
        </div>
      </footer>

      <script>
        var phonesCount = 1;
        function removePhone(id){
          document.getElementById(id).remove();
        }
        function addPhone() {
          var phoneList = document.getElementById('phone');
          phoneList.insertAdjacentHTML('afterend',
          '<div class="form-group row mb-3" id="phone' + phonesCount + ' "> ' +
            '<div class="ml-auto col-3">' +
              '<input type="text" class="form-control" name="ddds[]" aria-describedby="phoneHelp" placeholder="AREA CODE">' +
            '</div>' +
            '<div class="col-6">' +
              '<input type="text" class="form-control" name="phones[]" placeholder="Phone">' +
            '</div>' +
            '<div style="width:fit-content" class="mr-auto"> <i onclick="removePhone(\'phone' + phonesCount + ' \')" id="removePhone" class="remove-phone fa fa-minus-circle remove-phone-icon"  aria-hidden="true"></i></div> </div>' +
          '</div>');

          phonesCount++;
        }
      </script>



      <script src="/js/app.js"></script>
    </body>
</html>
