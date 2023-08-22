<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Career at INACO - INACO Career</title>
   <link rel="shortcut icon" type="image" href="{{asset('images/Banner-INACO.png')}}">

    <!-- Bootstrap -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
	<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/animate.css')}}">
	<link href="{{asset('css/prettyPhoto.css')}}" rel="stylesheet">
	<link href="{{asset('css/style.css')}}" rel="stylesheet" />		
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="job-desc">
	<header>		
		<nav class="navbar navbar-default navbar-fixed-top navigasi naik" role="navigation">
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
								<li role="presentation"><a href="/career">Career</a></li>
								<li role="presentation"><a href="/contact">Contact</a></li>						
							</ul>
						</div>
					</div>						
				</div>
			</div>	
		</nav>	

		<nav class="blakang">

			<div class="navigation blakangJuga">
				<div class="container">					
					<div class="nama"> 

						@foreach($name as $n)
						<h3>{{$n->job_title_name}}</h3>
						@endforeach


						@foreach($lokasi as $l)
						<h4>{{$l->region_city}}</h4>
						@endforeach

					</div>						
				</div>
			</div>	
		</nav>	



	</header>
	
	<div id="breadcrumb">
		<div class="container">	
			<div class="breadcrumb">							
				<li><a href="/">Home</a></li>
				<li><a href="/career">Career</a></li>	
                <li>Job Description</li>		
			</div>		
		</div>	
	</div>


    <div class="jabatan">

		<div class="namaJob namaJobJuga">

			<div class="jobNama">
				@foreach($name as $n)
				<h1>{{$n->job_title_name}}</h1>
				@endforeach
			</div>
    
            <div class="lokasi">
				@foreach($lokasi as $l)
				<h2>{{$l->region_city}}</h2>
				@endforeach
			</div>
		</div>

		
    
        <div class="deskripsi wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
            
           <div class="cardRinci">
			<div>
				<h3>Rincian Pekerjaan:</h3>
				<hr class="garis">
				<h4><ul>
		
				
					@foreach($desk as $d)
					<li>{{$d->JobDesc}}</li>
					&nbsp;
					@endforeach
			
				
		
		
				
				</ul></h4>
			</div>


		   </div>

		   <div class="cardQual">
			<div>
				<h3>Kualifikasi Umum/Khusus:</h3>
				<hr class="garis">
				<h4><ul>
		
					
					@foreach($syar as $s)
						<li>{{$s->JobReq}}</li>
						&nbsp;
					@endforeach
	
					@foreach($spek as $sp)
					<li>{{$sp->JobSpec}}</li>
					&nbsp;
					@endforeach
				
		
				</ul></h4>
			</div>

		   </div>
    
            

    
        </div>
    
        <div class="tombol">     
    
            
            <form method ="POST" action = "{{ url('career/job-desc/input') }}">
				@csrf
                <input type="hidden" name="id" value="{{$n->id}}" >
            <button class="lamar">Lamar Sekarang</button>
            </form>
            
    
           
    
        </div>
    

                    
    </div>
	





	
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
	<script src="{{ asset ('js/jquery-2.1.1.min.js') }}"></script>
	<script src="{{ asset ('js/jquery.js')}}"></script>	
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset ('js/bootstrap.min.js')}}"></script>
	<script src="{{ asset ('js/jquery.prettyPhoto.js') }}"></script>
    <script src="{{ asset ('js/jquery.isotope.min.js')}}"></script>  
	<script src="{{ asset ('js/wow.min.js')}}"></script>
	<script src="{{ asset ('js/functions.js')}}"></script>

	<script>
		var my_window = $(window);
		var position = my_window.scrollTop();

		my_window.scroll(function(){
			if(my_window.scrollTop() > position){
				$('.naik').addClass('nav-up');
				$('.namaJob').addClass('hilang');
			}else{
				$('.naik').removeClass('nav-up');
				$('.namaJob').removeClass('hilang');
			}

			position = my_window.scrollTop();
		});
	</script>
	
  </body>
</html>