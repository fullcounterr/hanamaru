<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Numpang Testing Om</title>

        <!-- favicon -->
        <link rel="apple-touch-icon" sizes="180x180" href="{{ URL('assets/img/icons/moesubs_favicon.png') }}">
		<link rel="icon" type="image/png" href="{{ URL('assets/img/icons/moesubs_favicon.png') }}" sizes="16x16">
		<link rel="icon" type="image/png" href="{{ URL('assets/img/icons/moesubs_favicon.png') }}" sizes="32x32">
		<link rel="icon" type="image/png" href="{{ URL('assets/img/icons/moesubs_favicon.png') }}" sizes="192x192">
        <meta name="msapplication-TileColor" content="#ffffff">
		<meta name="theme-color" content="#ffffff">

        <!-- Fonts -->
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css"> 

        <!-- Styles -->
        <style>
         /*External style goes here*/

        </style>
        <link rel="stylesheet" type="text/css" href="{{ URL('assets/css/app.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ URL('assets/css/bootstrap.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ URL('assets/css/materialize.min.css') }}">
        <link rel="stylesheet" href="{{ URL('assets/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ URL('assets/css/mdb.css') }}">
        <link rel="stylesheet" href="{{ URL('assets/css/hover.css') }}">
          
    </head>
    <body>
    <div id="banner-wrapper">
      <div class="moesubs-brand">
        <a href="{{ URL('/') }}" class="hvr-curl-top-left"><b>[Moesubs] Jagonya Ngesub</b></a>
      </div>
    <img src="{{ URL('assets/img/banners/moesubs_bang_dream_00.jpg')}}" alt=""> <!-- Banner height must 1000px!!! -->
    </div>
    <img id="banner-logo" src="{{ URL('assets/img/moesubs_logo.png') }}" alt="">

    <div id="container-main">
      <div id="content-sidebar">
          <div class="nav-side-menu">
            <div id="brand-desktop">
          <div class="brand">
            <script type="text/javascript" src="http://localtimes.info/clock.php?continent=Asia&country=Indonesia&city=Jakarta&cp1_Hex=000000&cp2_Hex=000000&cp3_Hex=000000&fwdt=200&ham=1&hbg=1&hfg=0&sid=0&mon=0&wek=0&wkf=0&sep=0&widget_number=1000"></script>
          </div>
            </div>
            <div id="brand-mobile" class="brand"><b>[Moesubs] Jagonya Ngesub</b></div>
            <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>

            <div class="menu-list">
  
            <ul id="menu-content" class="menu-content collapse out">
                <li class="dropdown drop-shadow"><a class="dropdown-toggle" href="#" data-toggle="dropdown" role="button"></span><span class="glyphicon glyphicon-info-sign"></span> Home <span class="caret"></a>
				<li class="dropdown drop-shadow"><a class="dropdown-toggle" href="#" data-toggle="dropdown" role="button"></span><span class="glyphicon glyphicon-info-sign"></span> Release Info <span class="caret"></a>
				<ul class="dropdown-menu" role="menu">
						<li role="presentation"><a role="menuitem" tabindex="-1" href="#"><span class="glyphicon glyphicon-info-sign"></span> New Release</a></li>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="#"><span class="glyphicon glyphicon-sunglasses"></span> Archive</a></li>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="#"><span class="glyphicon glyphicon-sunglasses"></span> Statur Report</a></li>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="#"><span class="glyphicon glyphicon-sunglasses"></span> Tentative Schedule</a></li>
						</ul>
				</li>
            </ul>

            </div>

          </div>
      </div>

      <div id="content-main">
<div class="container-fluid">  
<div class="row">
            @foreach ($rilisan as $data)
            <!--columnn-->
            <div class="col-md-4">
              <div class="profile-card text-center">

                 <div class="view overlay hm-white-slight">
                <img class="img-posting" src="{{ $data['gambar'] }}">
                        <a href="#">
                            <div class="mask"></div>
                        </a>
                </div>

                <div class="profile-info">

                  <h2 class="hvr-underline-from-center">Rod<span>Digital / Design Consultant</span></h2>
                  <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                  <a href="#" class="btn btn-default black">Selengkapnya</a>
                </div>

              </div>
            </div>
            <!--columnn-->
            @endforeach
            <div class="text-center">{{ $rilisan->links() }}</div>
</div>
</div>
      </div>
      </div>

      <div class="footer-end">
        CopyPaste &copy; 2010-{{ date('Y') }} om Himeko, numpang modip ea.
      </div>

        <!-- Javascript -->
        <script type="text/javascript" src="{{ URL('assets/js/jquery-2.1.1.js') }}"></script>
        <script type="text/javascript" src="{{ URL('assets/js/jquery-ui-1.10.4.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL('assets/js/tether.min.js') }}"></script>  
        <script type="text/javascript" src="{{ URL('assets/js/bootstrap.js') }}"></script>
        <script type="text/javascript" src="{{ URL('assets/js/mdb.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL('assets/js/jquery.matchHeight-min.js') }}"></script>

<script>
    $(function() {
    $('.perspective').matchHeight(false);
});
</script>

    </body>
</html>
