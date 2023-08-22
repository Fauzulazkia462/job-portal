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
								<li role="presentation"><a href="/career">Career</a></li>
								<li role="presentation"><a href="/contact" class="active">Contact</a></li>						
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
				<li>Contact</li>			
			</div>		
		</div>	
	</div>
	
	<div class="map">
		
	</div>
	
	<section id="contact-page">
        <div class="container">
            <div class="center">        
                <h2>Contact Us</h2>
                {{-- <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> --}}
            </div> 

			<div class="infoKontak">
       
				<div class="teleponKotak"  title="WhatsApp">
					<a href="https://wa.me/6288808060787" target="_blank">
				   <div class="telepon">
				   <img src="{{asset('images/phone-icon.png')}}" >
				   </div>
		 
				   <div class="tulisanKontak">
					
				   <label class="noPe labelEmailHp">088808060787 (WA Only)</label>
				   {{-- <label class="noPeh labelEmailHp">(WA Only)</label> --}}
					
				   </div>
				</a>
			  </div> 
			  
			  <div class="pemisah"></div>
		 
			  <div class="teleponKotak divEmail" title="Email">
				  <a href="https://mail.google.com/mail/?view=cm&fs=1&to=rekrutmen@inacofood.com" target="_blank">
				   <div class="email">
				   <img src="{{asset('images/Mail.png')}}" >
				   </div>
		 
				   <div class="tulisanKontak">
				   <label class="namaEmail labelEmailHp">rekrutmen@inacofood.com</label>
				</div>
				</a>
			  </div> 
		 
		 </div> 
            
        </div><!--/.container-->
    </section><!--/#contact-page-->
	
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
	
  </body>
</html>