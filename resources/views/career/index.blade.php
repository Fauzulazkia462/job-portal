<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Career at INACO - INACO Career</title>
	<link rel="shortcut icon" type="image" href="{{asset('images/Banner-INACO.png')}}">

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/animate.css">
	<link href="css/prettyPhoto.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet" />	
		
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
	<header>		
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="navigation">
				<div class="container">					
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<div class="navbar-brand">
							<a href="/">
								<img src="{{asset('images/Banner-INACO.png')}}" class="logo" >
								{{-- <h1><span>Com</span>pany</h1> --}}
							</a>
						</div>
					</div>
					
					<div class="navbar-collapse collapse">							
						<div class="menu">
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation"><a href="/">Home</a></li>
								<li role="presentation"><a href="/about">About Us</a></li>
								<li role="presentation"><a href="/career" class="active">Career</a></li>
								<li role="presentation"><a href="/contact">Contact</a></li>						
							</ul>
						</div>
					</div>						
				</div>
			</div>	
		</nav>		
	</header>
	
	<div id="breadcrumb">
		<div class="container">	
			<div class="breadcrumb">							
				<li><a href="/">Home</a></li>
				<li>Career</li>			
			</div>		
		</div>	
	</div>


	<div class="allCard">

		<div class="vacancyJudul">
			<p>Job Vacancy</p>
		</div>

		<div class="search">
			<form method="GET" action="{{ route('getVac') }}">
			@csrf
			<div class="isiSearch">

				<div class="nameProf">
					<input type="text"  name="cariNama" placeholder="All Job Titles">
				</div>

				<div class="nameLok">
					<select name="cariLokasi" class="dropDown">		
						
						<option value="" selected hidden>All Locations</option>	
						@foreach($lokasiCari as $l)
						<option value="{{$l->region_city}}">{{$l->region_city}}</option>
						@endforeach
					</select>
				</div>

				<div class="searchBut">
					<button>Cari</button>
				</div>

			</div>
			</form>
		</div>


		@foreach($model as $t)
		<div class="card wow fadeInDown" data-wow-duration="400ms" data-wow-delay="5ms">
			<div class="isiCard">

				<div class="judul">
					<h1>{{$t->job_title_name}}</h1>
					<h2>{{$t->region_city}}</h2>
				</div>

				<div class="butt">
					<form method ="POST" action = "{{ url('career/job-desc') }}">
						@csrf
					<input type="hidden" name="id"  value="{{$t->id}}">

					<button>Rincian</button>

					</form>
				</div>

			</div>

		</div>
		@endforeach

	</div>

	
	{{-- <div class="feature">
		<div class="container">
			<div class="text-center">

				<div class="vacancyJudul">
					<p>Job Vacancy</p>
				  </div>

				@foreach($model as $t)

				<div class="col-md-3">
	
					<div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" >

						<i class="fa fa-laptop"></i>

						<h2>{{$t->job_title_name}}</h2>
	
						<p>{{$t->region_city}}</p>

						<form method ="POST" action = "{{ url('career/job-desc') }}">
							@csrf
						<input type="hidden" name="id"  value="{{$t->id}}">
						<button class="rincian">Rincian</button>
						</form>
						
					</div>

					
				</div>

				

				@endforeach
				
				
			</div>
		</div>
	</div>
	 --}}



	<footer>
		<div class="footer">
			<div class="container">
				<div class="social-icon">
					<div class="col-md-4">
						<ul class="social-network">
							
							<li><a href="https://id.linkedin.com/company/pt-niramas-utama" class="linkedin tool-tip" title="Linkedin" target="_blank"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="https://instagram.com/sahabatinaco?igshid=YmMyMTA2M2Y=" class="instagram tool-tip" title="Instagram" target="_blank"><i class="fa fa-instagram"></i></a></li>
							<li><a href="https://www.youtube.com/channel/UC04oMOdHl8R7Ruu0ftxHWRQ" class="ytube tool-tip" title="YouTube" target="_blank"><i class="fa fa-youtube-play"></i></a></li>
							
						</ul>	
					</div>
				</div>
				
				<div class="col-md-4 col-md-offset-4">
					<div class="copyright">
						Copyright &copy; <?php echo date("Y") ?> HCM <a href="https://www.inacofood.com" target="_blank"> PT. NIRAMAS UTAMA </a>
					</div>
                    <!-- 
                        All links in the footer should remain intact. 
                        Licenseing information is available at: http://bootstraptaste.com/license/
                        You can buy this theme without footer links online at: http://bootstraptaste.com/buy/?theme=Company
                    -->
				</div>						
			</div>
			<div class="pull-right">
				<a href="#home" class="scrollup"><i class="fa fa-angle-up fa-3x up-page"></i></a>
			</div>
		</div>
	</footer>
	
   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js/jquery-2.1.1.min.js"></script>
	<script src="js/jquery.js"></script>	
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>  
	<script src="js/wow.min.js"></script>
	<script src="js/functions.js"></script>
	
	
  </body>
</html>