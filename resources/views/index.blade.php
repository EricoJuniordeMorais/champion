<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <link href="/css/app.css" rel="stylesheet">
        <title>CHAMPION DEALER</title>

        <style>
            nav{
              background-color: #ffffff;
            }
            h3{
              color: #e02b20 ! important;
            }
            a:hover{
              text-decoration: none;
            }
            button{
              background-color: #ffffff;
              border: none;
            }
            html {
              height: 100%;
            }
            html, body {
              height: 100%;
            }
            body {
              display: flex;
              flex-direction: column;
            }
            .content {
              flex: 1 0 auto;
            }
            footer{
              flex-shrink: 0;
              background-color: #e02b20;
              font-weight: bold;
              color: #ffffff;
            }
            .navbar-link{
              font-weight: bold;
              font-size: 150%;
              color: #e02b20 ! important;
            }
            .navbar-link:hover{
              color: #e02b20 ! important;
              filter: brightness(75%) ! important;
            }
            .disabled{
              pointer-events: none;
            }
            .dealer-card{
              border-left: solid;
              border-width: thick;
              border-color: #e02b20;
            }
            .paginate-action{
              color: #e02b20;
              font-size: -webkit-xxx-large;
            }
            .paginate-action:hover{
              filter: brightness(75%);
            }
            .dealer-card:hover{
              filter: brightness(110%);
            }
            .dealer-id{
              color: #e02b20;
            }
            .sub-title{
              color: #e02b20;
              font-weight: bold;
              margin: 15px;
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
            .trash{
              background-color: none;
              color: #e02b20;
            }
            .trash:hover{
              filter: brightness(70%);
            }
            .restore{
              background-color: none;
              color: #2dc71c;
            }
            .restore:hover{
              filter: brightness(70%);
            }

            @media (max-width: 600px){
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
            }

        </style>
    </head>
    <body class="">
      <header>
        <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
            <div class="container">
                <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="logo">
                  <a class="logo" href="/admin/index">
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
      </header>
      <div class="content">

      <h2 class="text-center sub-title">DEALERS LIST</h2>

      <div class="container">
        <div class="row">
          @foreach($dealers as $dealer)
            <div class="container p-3 mt-3 mb-3 mr-3 col-sm-12 dealer-card shadow-sm">
                <div class="dealer-id">
                  <b>#{{$dealer->id}}</b>
                </div>
                <div class="container">
                  <div class="row">
                    <div class="mr-5">
                        <span><b>NOME:</b> {{$dealer->name}}</span>
                    </div>
                    <div class="mr-5">
                      <span><b>EMAIL:</b> {{$dealer->email}}</span>
                    </div>
                    <div class="mr-5">
                      <span><b>COOKIE:</b> {{$dealer->cookie}}</span>
                    </div>
                    <div class="mr-5">
                      <span><b>SLUG:</b> {{$dealer->slug}}</span>
                    </div>
                  </div>
                </div>
                <div class="">
                  <span><b>ADDRESS:</b> {{$dealer->address}}</span>
                </div>
                <div class="">
                  <span><b>CREATED AT:</b> {{$dealer->created_at}}</span>
                </div>
                  <hr>
                  <div class="container">
			<div class="row">
                  @if($dealer->deleted_at == null)
                    <a class="" href="/dealer/{{$dealer->slug}}"> <button type="button" class="btn btn-danger" name="button"> Visit dealer</button> </a>
                    <form class="" action="{{$dealer->id}}/delete" method="get">
     			 <button type="submit" class="ml-3 btn btn-danger" name="button">Delete dealer</button>	                 
                    </form>
                  @else
                    <form class="" action="{{$dealer->id}}/restore" method="get">
 		      	 <button type="submit" class="ml-3 btn btn-danger" name="button">Restore dealer</button>
                    </form>
                  @endif
			</div>
                  </div>
            </div>
          @endforeach
        </div>
      </div>
      <div class="actions mb-5 container">
        <div class="row">
          @if ($dealers->lastPage() > 1)
              <div style="width: fit-content;" class="text-center ml-auto col {{ ($dealers->currentPage() == 1) ? ' disabled' : '' }}">
                  <a href="{{ $dealers->url(1) }}"><i class="fas paginate-action fa-angle-left"></i></a>
              </div>
              <div style="width: fit-content;" class="text-center mr-auto col {{ ($dealers->currentPage() == $dealers->lastPage()) ? ' disabled' : '' }}">
                  <a href="{{ $dealers->url($dealers->currentPage()+1) }}" ><i class="fas paginate-action fa-angle-right"></i></a>
              </div>
          @endif
        </div>
      </div>
    </div>
    <footer id="footer" class="page-footer sticky-bottom shadow-lg font-small">
      <div class="footer-copyright text-center p-3 border-top border-white">
          © 2020, Champion Animal Health Powered by NewVista Brands
      </div>
    </footer>

    <script src="/js/app.js"></script>
  </body>
</html>
