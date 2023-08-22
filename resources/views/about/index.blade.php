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
	
	<link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}">
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
								<li role="presentation"><a href="/about" class="active">About Us</a></li>
								<li role="presentation"><a href="/career">Career</a></li>
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
				<li>About Us</li>			
			</div>		
		</div>	
	</div>
	
	<div class="aboutus">
		
		<div class="container">
			<h3>About INACO</h3>
			<hr>

			<div class="show mySwiper">
				<div class="show-wrapper swiper-wrapper">

					<div class="slide-show swiper-slide">
						<img src="{{ asset ('images/foto1About.png') }}" class="img-responsive">
					</div>

					<div class="slide-show swiper-slide">
						<img src="{{ asset ('images/foto3About.png') }}" class="img-responsive">
					</div>

					
					<div class="slide-show swiper-slide">
						<img src="{{ asset ('images/foto2About.png') }}" class="img-responsive">
					</div>

					
				</div>
				
				<div class="pagi" id="swiper-pagination"></div>
				<div class="swiper-button-next nextBtn" id="swiper-button-next"></div>
			</div>
				
			<div class="col-md-7 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
				

				<h4>PT Niramas Utama (INACO)</h4>
				<p>Berdiri pada tahun 1990, PT Niramas Utama memproduksi Nata de Coco berkualitas
					tinggi untuk pasar ekspor, dan meluncurkan Nata de Coco kemasan siap beli /
					consumer pack pada tahun 1994 dengan merek Indonesia Nata de Coco (INACO).
					Kami juga berinovasi dan mengembangkan produk berbahan dasar Nata de Coco
					yang sehat, aman dan berkualitas seperti jelly, minuman, pudding serta super food
					masa depan yaitu aloe vera dan palm seed.</p>

					<p>Dengan komitmen kami untuk menyediakan makanan sehat kaya serat di pangsa
						pasar dunia, kami mengimplementasikan Good Manufacturing Process di setiap
						produksi, memberdayakan masyarakat sekitar dan petani dengan menciptakan
						sinergi melalui pendidikan berkelanjutan, dan kegiatan tanggung jawab sosial
						perusahaan. </p>

						<p>Berkat dukungan dari berbagai pihak dan kepercayaan konsumen
							terhadap kami, kami berhasil mendapatkan berbagai macam penghargaan lokal
							maupun internasional, seperti Best Product pada Konferensi Makanan ASEAN 2003,
							Indonesia Best Brand Gold Badge oleh majalah SWA, Top Brand Awards, dan OCI
							(Outstanding Corporate Innovation) sehingga kami telah menjadi brand yang
							terpercaya baik di Indonesia maupun di dunia. A happy life is a healthy life!</p>
				
			</div>
			<div class="col-md-5 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
				<div class="skill">
					{{-- <h2>Our Skills</h2> --}}
					
					{{-- <p>Dengan komitmen kami untuk menyediakan makanan sehat kaya serat di pangsa
						pasar dunia, kami mengimplementasikan Good Manufacturing Process di setiap
						produksi, memberdayakan masyarakat sekitar dan petani dengan menciptakan
						sinergi melalui pendidikan berkelanjutan, dan kegiatan tanggung jawab sosial
						perusahaan. </p> --}}

						{{-- <p>Berkat dukungan dari berbagai pihak dan kepercayaan konsumen
							terhadap kami, kami berhasil mendapatkan berbagai macam penghargaan lokal
							maupun internasional, seperti Best Product pada Konferensi Makanan ASEAN 2003,
							Indonesia Best Brand Gold Badge oleh majalah SWA, Top Brand Awards, dan OCI
							(Outstanding Corporate Innovation) sehingga kami telah menjadi brand yang
							terpercaya baik di Indonesia maupun di dunia. A happy life is a healthy life!</p> --}}
					<div class="untuk-card-about">
						<div class="card-about">

							<div class="hubung">
								&nbsp;
								<p>Connect with us.</p>
								<hr class="garis-about">
							</div>



							<div class="li">

								<img src="{{ asset ('images/LiLogo.png') }}" alt="">
								<div class="liNu contact-about">
									<a href="https://id.linkedin.com/company/pt-niramas-utama" target="_blank"><p title="LinkedIn">PT Niramas Utama</p></a>
								</div>
								
							</div>

						


							<div class="fb ">
								<img src="{{ asset ('images/FbLogo.png') }}" alt="">

								<div class="fbNu contact-about">
									<a href="https://www.facebook.com/INACOFOOD" target="_blank"><p title="Facebook">Sahabat Inaco</p></a>
									
									<a href="https://www.facebook.com/imcocoid/" target="_blank"><p title="Facebook">I'm CoCo</p></a>
								</div>
							</div>

							<div class="ig">
								<img src="{{ asset ('images/IgLogo.png') }}" alt="">
								<div class="igNu contact-about">

									<a href="https://instagram.com/sahabatinaco?igshid=YmMyMTA2M2Y=" target="_blank"><p title="Instagram">sahabatinaco</p></a>

									<a href="https://instagram.com/imcocoid" target="_blank"><p title="Instagram">imcocoid</p></a>

									<a href="https://instagram.com/lifeatinaco" target="_blank"><p class ="last" title="Instagram">lifeatinaco</p></a>
								</div>
							</div>

							

							

						</div>
					</div>
					

					
				</div>				
			</div>
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
	<script src="js/jquery-2.1.1.min.js"></script>	
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>  
	<script src="js/wow.min.js"></script>
	<script src="js/functions.js"></script>

	<script src="{{ asset ('js/swiper-bundle.min.js') }}"></script>

	<script>
		var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        spaceBetween: 30,
		speed:1000,
        loop: true,

		navigation: {
          nextEl: ".swiper-button-next",
         
        },

        pagination: {
          el: ".pagi",
          clickable: true,
        },
      });

	 var button = document.getElementById('swiper-button-next');
	 setInterval(function()  {
		button.click();
	 }, 6000);
	</script>
	
  </body>
</html>