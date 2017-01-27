<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Test Page</title>

        <!-- favicon -->
        <link rel="apple-touch-icon" sizes="180x180" href="{{ URL('assets/img/icons/favicon.png') }}">
		<link rel="icon" type="image/png" href="{{ URL('assets/img/icons/favicon.png') }}" sizes="16x16">
		<link rel="icon" type="image/png" href="{{ URL('assets/img/icons/favicon.png') }}" sizes="32x32">
		<link rel="icon" type="image/png" href="{{ URL('assets/img/icons/favicon.png') }}" sizes="192x192">
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
         <style>
	.navbar-brand,
.navbar-nav li a {
    line-height: 65px;
    height: 65px;
    padding-top: 0;
}
.title {
	font-size:50%;
}
		 </style>
    </head>
    <body>
    <div id="banner-wrapper">
    <img src="{{ URL('assets/img/banners/alicemarga.jpg')}}" alt="">
    </div>
    <img id="banner-logo" src="{{ URL('assets/img/what') }}" alt="">

<nav class="navbar navbar-inverse navbar-top" id="main-navbar" role="navigation" style="margin-bottom:0;">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse" id="navbar-collapse">
				<a href="http://neko-chan.eu" class="navbar-brand navbar-right">neko-chan.eu</a>
				<ul class="nav navbar-nav">
                <li class="dropdown drop-shadow"><a class="dropdown-toggle" href="http://neko-chan.eu" data-toggle="dropdown" role="button"></span><span class="glyphicon glyphicon-info-sign"></span> Home</a>
				<li class="dropdown drop-shadow"><a class="dropdown-toggle" href="#" data-toggle="dropdown" role="button"></span><span class="glyphicon glyphicon-info-sign"></span> Release Info <span class="caret"></a>
				<ul class="dropdown-menu" role="menu">
						<li role="presentation"><a role="menuitem" tabindex="-1" href="/"><span class="glyphicon glyphicon-info-sign"></span> New Release</a></li>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="#"><span class="glyphicon glyphicon-sunglasses"></span> Archive</a></li>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="#"><span class="glyphicon glyphicon-sunglasses"></span> Status Report</a></li>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="#"><span class="glyphicon glyphicon-sunglasses"></span> Tentative Schedule</a></li>
						</ul>
				</li>
				</ul>
            </div>
			</div>
</nav>
          
<br>
<div id="content-main">
<div class="container-fluid">  
<div class="jumbotron">
            <!--column-->
			<div class="text-center">
                <img src="{{ URL('assets/img/banners/404.png')}}">
                        <a href="#">
                            <div class="mask"></div>
                        </a>
				</div>

				

              </div>
            </div>
			

      <div class="footer-end">
        CopyPaste &copy; 1945-{{ date('Y') }} All enemy must be desutroyed.
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
