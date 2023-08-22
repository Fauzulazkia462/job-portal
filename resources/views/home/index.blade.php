<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Career at INACO - INACO Career</title>
	<link rel="shortcut icon" type="image" href="{{asset('images/Banner-INACO.png')}}">
	<link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}">

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/animate.css">
	<link href="css/prettyPhoto.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet" />	


	{{-- toastr --}}
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />



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
								<li role="presentation"><a href="/" class="active">Home</a></li>
								<li role="presentation"><a href="/about">About Us</a></li>
								<li role="presentation"><a href="/career">Career</a></li>
								<li role="presentation"><a href="/contact">Contact</a></li>						
							</ul>
						</div>
					</div>						
				</div>
			</div>	
		</nav>		
	</header>
	
	<section id="main-slider" class="no-margin">
        <div class="carousel slide">      
            <div class="carousel-inner">
                <div class="item active" style="background-image: url(images/slider/bg1.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
							
								<div class="col-sm-6 hidden-xs animation animated-item-4 very-home-1">
									<div class="slider-img">
										{{-- <img src="images/slider/img3.png" class="img-responsive"> --}}
										<img src="{{ asset('images/Dragon.png')}}" class="img-responsive maskot">
									</div>
								</div>
							
                            <div class="col-sm-6 very-home-2">
								
                                <div class="carousel-content">
                                    <h2 class="animation animated-item-1">Job <span>Portal</span></h2>
                                    {{-- <p class="animation animated-item-2">PT Niramas Utama INACO</p> --}}
										<h3 class="animation animated-item-2 bg">PT. Niramas Utama INACO</h3>
                                    <a class="btn-slide animation animated-item-3" href="/career">Cari Lowongan</a>
                                </div>
                            </div>

                            

                        </div>
                    </div>
                </div><!--/.item-->             
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
    </section><!--/#main-slider-->
	
	{{-- <div class="feature">
		<div class="container">
			
		</div>
	</div> --}}
	
	<div class="about">
		<div class="container">
			<div class="col-md-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" >
				{{-- <h2>Sekilas tentang INACO</h2> --}}
				<img src="{{ asset ('images/MicrosoftTeams-image.png') }}" class="img-responsive"/>
				<p></p>
			</div>
			
			<div class="col-md-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" >
				<h2>Sekilas tentang INACO </h2>

				<p class="sekilas">PT Niramas Utama berkomitmen untuk memproduksi berbagai makanan & minuman sehat. PT Niramas dikenal sebagai pionir pembuatan NATA DE COCO dengan menggunakan proses standar industri dan memiliki rangkaian lengkap produk berbahan dasar Nata De Coco. PT Niramas terus melakukan inovasi dan promosi produk-produk sehat, dalam kategori desserts, seperti jelly, puding, minuman, dan aloe vera.
				</p>
				
				{{-- <p>PT Niramas Utama membedakan dirinya dari pasar melalui bahan-bahan berkualitas, proses higienis dan produk-produk inovatifnya untuk menyediakan makanan penutup yang sehat untuk semua orang. INACO hanya menggunakan santan sebagai media untuk memproduksi NATA DE COCO sebagai pengganti air kelapa. Formulasi ini memungkinkan PT Niramas untuk menghindari penggunaan aditif atau zat apa pun selama prosesnya. Selain itu, 100% gula tebu berkualitas tinggi digunakan, tidak ada pemanis buatan yang digunakan. Kami juga menerapkan proses pasteurisasi di garis akhir proses dengan standar kebersihan yang ketat. Proses ini memungkinkan kami untuk memberikan produk dengan kualitas terbaik kepada pelanggan kami.
				</p> --}}
				
				
			</div>
		</div>
	</div>
	

	<div class="testi">
		<p>Pendapat Karyawan</p>
	</div>

	<section class="kontener">
	<div class="testimonial mySwiper">
		<div class="testi-content swiper-wrapper">

			<div class="slide swiper-slide">
				<img src="{{ asset('images/angelinaFoto.png') }}" class="foto-karyawan"/>
				<p>PT Niramas Utama memberikan saya ruang untuk dapat berkembang dan belajar hal baru. Dengan lingkungan kerja yang kondusif menjadi pendukung dalam bekerja dan menjadi motivasi untuk terus memberikan yang terbaik.</p>

				<img src="{{ asset ('images/quote.png') }}" class="quote"/>

				<div class="data-diri">
					<span class="nama-karyawan">Angelina</span>
					<span class="jobnya">Receptionist</span>
				</div>
			</div>

			<div class="slide swiper-slide">
				<img src="{{ asset('images/annisaFoto.png') }}" class="foto-karyawan"/>
				<p>Saya senang bertemu dan bekerja bersama tim yang kompak dan kekeluargaan. Fokus berkarya sepenuh hati, selalu mencoba, dan bersama mencapai Niramas Jaya!</p>

				<img src="{{ asset ('images/quote.png') }}" class="quote"/>

				<div class="data-diri">
					<span class="nama-karyawan">Annisa</span>
					<span class="jobnya">New Product Development Staff</span>
				</div>
			</div>

			<div class="slide swiper-slide">
				<img src="{{ asset('images/haryFoto.png') }}" class="foto-karyawan"/>
				<p>PT Niramas Utama yang berwarna membuat hidup saya lebih berwarna. Di sini, saya mendapatkan banyak sekali pengalaman yang menantang dan sangat berguna untuk pengembangan karir ke depannya.</p>

				<img src="{{ asset ('images/quote.png') }}" class="quote"/>

				<div class="data-diri">
					<span class="nama-karyawan">Hary Junova</span>
					<span class="jobnya">Planner Engineering Supervisor</span>
				</div>
			</div>

			<div class="slide swiper-slide">
				<img src="{{ asset('images/ihsanFoto.png') }}" class="foto-karyawan"/>
				<p>Inaco sudah seperti keluarga kedua bagi saya. Saya diberikan wadah untuk dapat bekerja dengan sepenuh hati dan terus berkembang, sehingga saya dapat terus berkarya.</p>

				<img src="{{ asset ('images/quote.png') }}" class="quote"/>

				<div class="data-diri">
					<span class="nama-karyawan">Ihsan</span>
					<span class="jobnya">Operator Khusus Produksi</span>
				</div>
			</div>

			<div class="slide swiper-slide">
				<img src="{{ asset('images/stefanieFoto.png') }}" class="foto-karyawan"/>
				<p>PT Niramas Utama telah memberikan saya banyak kesempatan dan pengalaman untuk mengembangkan potensi diri baik dalam hal personal maupun profesional. Kunci keberhasilan untuk sukses adalah siap ketika kesempatan itu datang.</p>

				<img src="{{ asset ('images/quote.png') }}" class="quote"/>

				<div class="data-diri">
					<span class="nama-karyawan">Stefanie</span>
					<span class="jobnya">Asisten Brand Manager</span>
				</div>
			</div>

			{{-- <div class="slide swiper-slide">
				<img src="images/6.jpg" class="foto-karyawan"/>
				<p>6 Perkataannya manthab beud dah kalo ga manthab ya ndak tau kok tanya saya</p>

				<img src="{{ asset ('images/quote.png') }}" class="quote"/>

				<div class="data-diri">
					<span class="nama-karyawan">Nama Karyawan</span>
					<span class="jobnya">Jabatan</span>
				</div>
			</div> --}}


		</div>
		<div class="swiper-button-next swipe-btn" id="swiper-button-next"></div>
		<div class="swiper-button-prev swipe-btn"></div>
		<div class="swiper-pagination" id="swiper-pagination"></div>
	</div>
	</section>
	
	
	
	
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


	{{-- toastr --}}
	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


	<script src="{{ asset ('js/swiper-bundle.min.js') }}"></script>

	<script>
		var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        spaceBetween: 30,
		speed : 1000,
        loop: true,
        loopFillGroupWithBlank: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });

	 var button = document.getElementById('swiper-button-next');
	 setInterval(function()  {
		button.click();
	 }, 8000);
	</script>


@if(session('message'))
<script>


	// dengan parameter, parameternya dari controller
	// toastr.success('{{ session('message')['type'] }}', "{{ session('message')['msg'] }}");


	// tanpa parameter
	toastr.success('{{ session('message')['type'] }}');

</script>
@endif

	
  </body>
</html>