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


    {{-- Toastr --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   
   
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
				<li><a href="/career">Career</a></li>	
                
                <li>Registration</li>		
			</div>		
		</div>	
	</div>


    <div class="form" id="form">

        <div class="formInput">
            <div class="judul">
                Registration
            </div>
            <div class="jenisData">
                Data Pribadi
            </div>

            <form method ="POST" action = "{{ route('selesai') }}" enctype="multipart/form-data">
                @csrf
                <div class="user-details">
        
                    
                    <input type="hidden" name="idJob" value="{{$req}}"  >
                    
                    
                    <div class="input-box">
                        <span class="details">Nama Lengkap*</span>
                        <input type="text" name="fName" placeholder="Masukkan Nama" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Jenis Kelamin*</span>
                        <select name="gender" class="dropDown" required>
                            <option value="" selected hidden>--</option>
                            <option value="laki-laki">Laki-laki</option>
                            <option value="perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="input-box">
                        <span class="details">Tempat Lahir*</span>
                        <input type="text" name="pob" placeholder="Tempat Lahir" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Tanggal Lahir*</span>
                        <input type="date" name="dob" value="dd-mm-yyyy" required>
                    </div>
                          
                    <div class="input-box">
                        <span class="details">Status Perkawinan*</span>
                        <select name="martial" class="dropDown" required>
                            <option value="" selected hidden>--</option>
                            <option value="Lajang">Lajang</option>
                            <option value="Menikah">Menikah</option>
                            <option value="Cerai">Cerai</option>
                            <option value="Duda/Janda">Duda/Janda</option>
                        </select>
                    </div>                  
        
                    <div class="input-box">
                        <span class="details">Agama*</span>
                        <select name="religion" class="religion" class="dropDown" required>
                            <option value="" selected hidden>--</option>
                            <option value="Islam">Islam</option>
                            <option value="Katholik">Katholik</option>
                            <option value="Protestan">Protestan</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Budha">Budha</option>
                            <option value="Konghucu">Konghucu</option>
                        </select>
                    </div>
                    <div class="input-box">
                        <span class="details">Email*</span>
                        <input type="text" name="email" placeholder="example@email.com" required>
                    </div>
                    <div class="input-box">
                        <span class="details">No. Telp*</span>
                        <input type="text" name="phone" id="no" placeholder="08xxxxxxxxxx" maxlength="20" onkeypress="return ((event.charCode >= 48 &amp;&amp; event.charCode <= 57) || event.charCode ==0)" ondrop="return false;" onpaste="return false;" required >
                    </div>
                    <div class="input-box panjang">
                        <span class="details">Alamat*</span>
                        <textarea type="text" name="alamat" placeholder="Masukkan Alamat Lengkap" required></textarea>
                    </div>
                    <div class="input-box">
                        <span class="details">RT*</span>
                        <input type="text" name="rt" placeholder="00" maxlength="3" onkeypress="return ((event.charCode >= 48 &amp;&amp; event.charCode <= 57) || event.charCode ==0)" ondrop="return false;" onpaste="return false;" required>
                    </div>
                    <div class="input-box">
                        <span class="details">RW*</span>
                        <input type="text" name="rw" placeholder="00" maxlength="3" onkeypress="return ((event.charCode >= 48 &amp;&amp; event.charCode <= 57) || event.charCode ==0)" ondrop="return false;" onpaste="return false;" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Kelurahan*</span>
                        <input type="text" name="lurah" placeholder="Kelurahan" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Kecamatan*</span>
                        <input type="text" name="camat" placeholder="Kecamatan" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Kabupaten*</span>
                        <input type="text" name="kabupaten" placeholder="Kabupaten" required>
                    </div>
                    <div class="input-box">
                        <span class="details">No. KTP*</span>
                        <input type="text" name="noKtp" placeholder="Masukkan 16 Digits" maxlength="16" onkeypress="return ((event.charCode >= 48 &amp;&amp; event.charCode <= 57) || event.charCode ==0)" ondrop="return false;" onpaste="return false;" required>
                    </div>
                    {{-- <div class="input-box">
                        <span class="details">No. KK*</span>
                        <input type="text" name="noKk" placeholder="Masukkan 16 Digits" maxlength="16" onkeypress="return ((event.charCode >= 48 &amp;&amp; event.charCode <= 57) || event.charCode ==0)" ondrop="return false;" onpaste="return false;" required>
                    </div> --}}
                    <div class="input-box">
                        <span class="details">NPWP</span>
                        <input type="text" name="npwp" id="npwp"  placeholder="00.000.000.0-000.000" onkeypress="return ((event.charCode >= 48 &amp;&amp; event.charCode <= 57) || event.charCode ==0)" ondrop="return false;" onpaste="return false;" >
                    </div>

                    <div class="input-box">
                        <span class="details">No. BPJS</span>
                        <input type="text" name="bpjs"  placeholder="Masukkan 13 Digits" maxlength="13" onkeypress="return ((event.charCode >= 48 &amp;&amp; event.charCode <= 57) || event.charCode ==0)" ondrop="return false;" onpaste="return false;" >
                    </div>

                    <div class="input-box">
                        <span class="details">No. BPJS TK</span>
                        <input type="text" name="bpjsTk"  placeholder="Masukkan 11 Digits" maxlength="11" onkeypress="return ((event.charCode >= 48 &amp;&amp; event.charCode <= 57) || event.charCode ==0)" ondrop="return false;" onpaste="return false;" >
                    </div>
                    <div class="input-box">
                        <span class="details">No. Telp Anggota Keluarga*</span>
                        <input type="text" name="noKeluarga" id="noKel" placeholder="08xxxxxxxxxx" maxlength="20" onkeypress="return ((event.charCode >= 48 &amp;&amp; event.charCode <= 57) || event.charCode ==0)" ondrop="return false;" onpaste="return false;" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Hubungan Keluarga*</span>
                        <select name="hubungan" onchange="showMe(this.value);" class="dropDown" required>
                            <option value="" selected hidden>--</option>
                            <option value="Ibu">Ibu</option>
                            <option value="Ayah">Ayah</option>
                            <option value="Suami">Suami</option>
                            <option value="Istri">Istri</option>
                            <option value="Kakak">Kakak</option>
                            <option value="Adik">Adik</option>
                            <option value="Anak">Anak</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                    </div>
                    <div class="input-box" id="showLain" style="display:none;">
                        <span class="details">Hubungan Keluarga Lainnya*</span>
                        <input type="text" name="hubungan2" placeholder="Hubungan Keluarga Lainnya">
                    </div>
                    

                    
                </div>
                
            
        
        
            <div class="jenisData">
                Informasi Pendidikan
            </div>
            
                <div class="user-details">
                    
                    <div class="input-box">
                        <span class="details">Pendidikan Terakhir*</span>
                        <select name="lastedu" class="dropDown" required>
                            <option value="" selected hidden>--</option>
                            <option value="SMA/SMK Sederajat">SMA/SMK Sederajat</option>
                            <option value="D3">D3</option>
                            <option value="S1">S1</option>
                            <option value="S2">S2</option>
                            <option value="S3">S3</option>
                        </select>
                    </div>
                    <div class="input-box">
                        <span class="details">Tahun Lulus*</span>
                        <input name="yearedu" type="text" placeholder="YYYY" maxlength="4" onkeypress="return ((event.charCode >= 48 &amp;&amp; event.charCode <= 57) || event.charCode ==0)" ondrop="return false;" onpaste="return false;" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Jurusan*</span>
                        <input name="edufocus" type="text" placeholder="Jurusan Pendidikan Terakhir" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Nama Institusi*</span>
                        <input name="eduname" type="text" placeholder="Institusi Pendidikan Terakhir" required>
                    </div>
                    
                </div>       
            
        
        
        
            <div class="jenisData">
                Pengalaman Kerja
            </div>
           
                <div class="user-details">
                    
                    <div class="input-box">
                        <span class="details">Nama Perusahaan</span>
                        <input name="companyname1" type="text">
                    </div>
        
                    <div class="input-box">
                        <span class="details">Bagian/Jabatan</span>
                        <input name="lastpostion1" type="text">
                    </div>
        
                    <div class="input-box">
                        <span class="details">Mulai Bekerja</span>
                        <input name="sdate1" type="date">
                    </div>
        
                    <div class="input-box">
                        <span class="details">Berhenti Bekerja</span>
                        <input name="edate1" type="date">
                    </div>
                    
                    <div class="input-box panjang">
                        <span class="details">Alasan Berhenti</span>
                        <textarea name="reason1" type="text"></textarea>
                    </div>

                    <div class="col-md-2">
                        <div class="form-group">
                            <label class="plusMinus add1" for="repair"> Tambah Pengalaman </label>
                            <a  class="addfindings plus btn btn-inverse-primary btn-fw form-control">+</a>
                        </div>
                    </div> 
                    
                </div>

                
                
                
                <div class="fields"></div>
                <div class="fields2"></div>
               
            
        
        
            <div class="jenisData">
                Informasi Tambahan
            </div>
            
                <div class="user-details">
                    
                   
                    <div class="input-box panjang">
                        <span class="details">Prestasi anda selama bekerja</span>
                        <textarea name="prestasi" placeholder="Prestasi Anda" type="text" ></textarea>
                    </div>
                    <div class="input-box">
                        <span class="details">Gaji yang diharapkan</span>
                        <input name="salary" id="gaji" type="text" onkeypress="return ((event.charCode >= 48 &amp;&amp; event.charCode <= 57) || event.charCode ==0)"  ondrop="return false;" onpaste="return false;" placeholder="0.000.000" class="form-control money" >
                    </div>
                    <div class="input-box">
                        <span class="details">Apabila diterima, berapa lama waktu yang Anda butuhkan untuk dapat bergabung dengan kami?*</span>
                        <input name="workstart" placeholder="e.g. 1 Bulan" type="text" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Upload CV*</span>
                        <span class="syarat-file">(Hanya menerima file .pdf sebesar 500Kb)</span>
                        <input name="file" type="file" id="inputFile" accept=".pdf" required>

                        <div class="" id="alert-file" style="display:none; color:red;">
                            <span class="harus-file">Ukuran maksimal adalah 500Kb</span>
                        </div>
                        <div class="" id="alert-file-ext" style="display:none; color:red;">
                            <span class="harus-file">Harus menginput file .pdf</span>
                        </div>
                    </div>

                   
                    
                </div>   
                
                <div class="btnSubmit">
                    <form method ="POST" action = "{{ route('selesai') }}" enctype="multipart/form-data">
                    <button class="lamar" onclick="alertSubmit()">Apply</button>
                    </form>
                </div>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
    <script src="{{ asset ('js/scriptAja.js')}}"></script>
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/jquery.inputmask.bundle.js"></script>
    <script src="{{ asset ('js/jquery.mask.min.js')}}"></script>


    {{-- toastr --}}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    {{-- <script>
        if('message'){
        toastr.success("Berhasil!");
        }

    </script> --}}

    

    <script type="text/javascript">

        $('.addfindings').on('click', function(){
                addFinding();
            });

            function addFinding() {
                var field = '<div id="peng2" class="user-details"><div class="input-box"><span class="details">Nama Perusahaan</span><input name="companyname2" type="text"></div><div class="input-box"><span class="details">Bagian/Jabatan</span><input name="lastpostion2" type="text"></div><div class="input-box"><span class="details">Mulai Bekerja</span><input name="sdate2" type="date"></div><div class="input-box"><span class="details">Berhenti Bekerja</span><input name="edate2" type="date"></div><div class="input-box panjang"><span class="details">Alasan Berhenti</span><textarea name="reason2" type="text"></textarea></div> <div class="col-md-2"><div class="form-group"><label class="plusMinus add2" for="repair"> Tambah Pengalaman </label><a class="Tambahkan plus btn btn-inverse-primary btn-fw form-control">+</a></div></div <div class="col-md-2"><div class="form-group"><label class="plusMinus rem1" for="repair"> Hapus Pengalaman </label><a class="remove ex btn btn-inverse-primary btn-fw form-control">x</a></div></div> </div>';
                
                $('.fields').append(field);              
                $('.addfindings').hide();
                $('.add1').hide();
                
            };

        $('.remove').live('click', function(){
                removeDiv();
                
            })

            function removeDiv(){
                const element = document.getElementById('peng2');
                element.remove(); 
                
                $('.addfindings').show();
                $('.add1').show();
            };

        $('.Tambahkan').live('click', function(){
                add2();
            });

        function add2(){
            var field2 = '<div id="peng3" class="user-details"><div class="input-box"><span class="details">Nama Perusahaan</span><input name="companyname3" type="text"></div><div class="input-box"><span class="details">Bagian/Jabatan</span><input name="lastpostion3" type="text"></div><div class="input-box"><span class="details">Mulai Bekerja</span><input name="sdate3" type="date"></div><div class="input-box"><span class="details">Berhenti Bekerja</span><input name="edate3" type="date"></div><div class="input-box panjang"><span class="details">Alasan Berhenti</span><textarea name="reason3" type="text"></textarea></div> <div class="col-md-2"><div class="form-group"><label class="plusMinus" for="repair"> Hapus Pengalaman </label><a  class="remove2 ex btn btn-inverse-primary btn-fw form-control">x</a></div></div> </div>';
                
            $('.fields2').append(field2);
            $('.Tambahkan').hide();
            $('.remove').hide();
            $('.add2').hide();
            $('.rem1').hide();
        };

        $('.remove2').live('click', function(){
            removeDiv2();
        });

        function removeDiv2(){
            const div3 = document.getElementById('peng3');
            div3.remove();
            $('.Tambahkan').show();
            $('.remove').show();
            $('.add2').show();
            $('.rem1').show();
        }

    </script>

    <script>
        var uploadField = document.getElementById("inputFile");

        uploadField.onchange = function(){

            if(this.files[0].size > 0.5 * 1048576){

                document.getElementById('alert-file').style.display="block";
                this.value = "";

            } else if(this.files.length > 0){
                for(var i=0; i < this.files.length; i++){
                    fileName = this.files.item(i).name;
                    ext = fileName.split('.').pop();

                    if(ext != "pdf"){
                        document.getElementById('alert-file-ext').style.display="block";
                        document.getElementById("inputFile").value = "";
                    } else {
                        document.getElementById('alert-file').style.display="none";
                        document.getElementById('alert-file-ext').style.display="none";
                    }
                }
            }
            else {
                document.getElementById('alert-file').style.display="none";
                document.getElementById('alert-file-ext').style.display="none";
            }

        };
    </script>
    <script>


        // input = document.getElementById("inputFile");

        // input.onchange=function(){
        //     if(this.files.length > 0){
        //         for(var i=0; i < this.files.length; i++){
        //             fileName = this.files.item(i).name;
        //             ext = fileName.split('.').pop();

        //             if(ext != "pdf"){
        //                 document.getElementById('alert-file-ext').style.display="block";
        //                 document.getElementById("inputFile").value = "";
        //             } else {
        //                 document.getElementById('alert-file-ext').style.display="none";
        //             }
        //         }
        //     }
        // }

    </script>
    
	
  </body>
</html>