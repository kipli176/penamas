
<!DOCTYPE html>
<html lang="en">
<head>
    
    <!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover">
	<meta name="theme-color" content="#48a9f8">
	<meta name="author" content="DexignZone" /> 
    <meta name="keywords" content="" /> 
    <meta name="robots" content="" /> 
	<meta name="description" content="PENA MAS"/>
	<meta property="og:title" content="PENA MAS" />
	<meta property="og:description" content="PENA MAS" />
	<meta property="og:image" content="/assets/images/fav-icon-jr.png"/>
	<meta name="format-detection" content="telephone=no">
    
	<!-- PWA Version -->
	<link rel="manifest" href="/assets/manifest.json">
    <!-- Favicons Icon -->
	<link rel="shortcut icon" type="image/x-icon" sizes="16x16" href="/assets/images/fav-icon-jr.png" />
    
    <!-- Title -->
	<title>Penamas - Formulir Aspirasi</title>
    
    <!-- Stylesheets -->
    <link href="/assets/vendor/imageuplodify/imageuploadify.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Racing+Sans+One&display=swap" rel="stylesheet">

</head>   
<body>
<div class="page-wraper">
    
    <!-- Preloader -->
	<div id="preloader">
		<div class="spinner"></div>
	</div>
    <!-- Preloader end-->
    
    <!-- Page Content -->
    <div class="page-content bottom-content">
        
        <!-- Banner -->
        <div class="head-details">
            <div class=" container">
                <div class="dz-info">
                    <span class="location d-block">PENA MAS</span>
                    <h5 class="title">Form Aspirasi</h5>
                </div>
                <div class="dz-media media-65">
                    <img src="/assets/images/fav-icon-jr.png" alt="">
                </div>
            </div>
        </div>
			
        <div class="fixed-content p-0"> 
            <div class="container">
                <div class="main-content">
                    <div class="left-content">
                        <a href="javascript:void(0);" class="back-btn">
                            <svg width="18" height="18" viewBox="0 0 10 16" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M9.03033 0.46967C9.2966 0.735936 9.3208 1.1526 9.10295 1.44621L9.03033 1.53033L2.561 8L9.03033 14.4697C9.2966 14.7359 9.3208 15.1526 9.10295 15.4462L9.03033 15.5303C8.76406 15.7966 8.3474 15.8208 8.05379 15.6029L7.96967 15.5303L0.96967 8.53033C0.703403 8.26406 0.679197 7.8474 0.897052 7.55379L0.96967 7.46967L7.96967 0.46967C8.26256 0.176777 8.73744 0.176777 9.03033 0.46967Z" fill="#a19fa8"/>
							</svg>
                        </a>
                    </div>
                    <div class="mid-content">
                        <h5 class="mb-0">Aspirasi</h5>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner End -->
        
        <div class="container">
        <?php if (isset($errors) && !empty($errors)) {?>                
                <div class="alert alert-danger solid alert-dismissible fade show">
                                <svg viewBox="0 0 24 24" width="20" height="20" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2"><polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
                                <strong>Error!</strong> <?php 
                                foreach ($errors as $error) :
						            echo esc($error);
					            endforeach;?>
                                <button class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                                    <i class="fa-solid fa-xmark"></i>
                                </button>
                            </div>
            <?php }?> 
            <?php echo form_open('aspirasi/add',['enctype' => 'multipart/form-data']);?>
				<div class="input-group">
					<input type="text" placeholder="Judul Laporan" name="judul" value="<?php echo set_value('judul'); ?>" class="form-control">
				</div>
				<div class="input-group">
                    <textarea class="form-control" name="isi" placeholder="Isi Laporan"><?php echo set_value('isi'); ?></textarea>
				</div>
				<div class="input-group">
					<input type="text" placeholder="Nama Pelapor" name="nama" class="form-control" value="<?php echo set_value('nama'); ?>">
				</div>
				<div class="input-group">
					<input type="text" placeholder="No WA" name="wa" class="form-control" value="<?php echo set_value('wa'); ?>">
				</div>
				<div class="input-group">
                    <input type="text" id="tgle" placeholder="Tgl Kejadian" name="tgl" class="form-control" value="<?php echo set_value('tgl'); ?>">
				</div> 
				<div class="input-group">
                    <select class="form-control js-example-basic-singles" name="lokasi"> 
                        <option>--Lokasi Kantor--</option>
                        <option value="KANTOR CABANG BALI">KANTOR CABANG BALI</option>
                            <option value="KANTOR PERWAKILAN SINGARAJA">KANTOR PERWAKILAN SINGARAJA</option>
                            <option value="KANTOR PELAYANAN JASA RAHARJA GIANYAR">KANTOR PELAYANAN JASA RAHARJA GIANYAR</option>
                            <option value="SAMSAT DENPASAR">SAMSAT DENPASAR</option>
                            <option value="SAMSAT TABANAN">SAMSAT TABANAN</option>
                            <option value="SAMSAT GIANYAR">SAMSAT GIANYAR</option>
                            <option value="SAMSAT KLUNGKUNG">SAMSAT KLUNGKUNG</option>
                            <option value="SAMSAT BANGLI">SAMSAT BANGLI</option>
                            <option value="SAMSAT BADUNG">SAMSAT BADUNG</option>
                            <option value="SAMSAT PEMBANTU SESETAN">SAMSAT PEMBANTU SESETAN</option>
                            <option value="SAMSAT PEMBANTU KUTA">SAMSAT PEMBANTU KUTA</option>
                            <option value="SAMSAT PEMBANTU NUSA PENIDA">SAMSAT PEMBANTU NUSA PENIDA</option>
                            <option value="SAMSAT PEMBANTU UBUD">SAMSAT PEMBANTU UBUD</option>
                            <option value="SAMSAT PEMBANTU BAJERA">SAMSAT PEMBANTU BAJERA</option>
                            <option value="SAMSAT GERAI DALUNG">SAMSAT GERAI DALUNG</option>
                            <option value="SAMSAT GERAI NUSA DUA">SAMSAT GERAI NUSA DUA</option>
                            <option value="SAMSAT LINK BATURITI">SAMSAT LINK BATURITI</option>
                            <option value="SAMSAT GERAI PENATIH">SAMSAT GERAI PENATIH</option>
                            <option value="SAMSAT KELILING 1">SAMSAT KELILING 1</option>
                            <option value="SAMSAT KELILING 2">SAMSAT KELILING 2</option>
                            <option value="SAMSAT GERAI PUPUAN">SAMSAT GERAI PUPUAN</option>
                            <option value="SAMSAT LINK KINTAMANI">SAMSAT LINK KINTAMANI</option>
                            <option value="SAMSAT KERTI">SAMSAT KERTI</option>
                            <option value="SAMSAT GELIS">SAMSAT GELIS</option>
                            <option value="SAMSAT KELILING TABANAN">SAMSAT KELILING TABANAN</option>
                            <option value="SAMSAT KELILING BANGLI">SAMSAT KELILING BANGLI</option>
                            <option value="SAMSAT KELILING KLUNGKUNG">SAMSAT KELILING KLUNGKUNG</option>
                            <option value="SAMSAT KELILING BADUNG">SAMSAT KELILING BADUNG</option>
                            <option value="SAMSAT GELIS SAMBA">SAMSAT GELIS SAMBA</option>
                            <option value="SAMSAT DRIVE THRU GIANYAR">SAMSAT DRIVE THRU GIANYAR</option>
                            <option value="E-SAMSAT NASIONAL">E-SAMSAT NASIONAL</option>
                            <option value="E-SAMSAT BALI">E-SAMSAT BALI</option>
                            <option value="SAMSAT POLDA">SAMSAT POLDA</option>
                            <option value="SAMSAT DRIVETHRU/GELIS BANGLI">SAMSAT DRIVETHRU/GELIS BANGLI</option>
                            <option value="SAMSAT DRIVE THRU SESETAN">SAMSAT DRIVE THRU SESETAN</option>
                            <option value="SAMSAT BULELENG">SAMSAT BULELENG</option>
                            <option value="SAMSAT JEMBRANA/NEGARA">SAMSAT JEMBRANA/NEGARA</option>
                            <option value="SAMSAT KARANGASEM">SAMSAT KARANGASEM</option>
                            <option value="SAMSAT PEMBANTU SERIRIT">SAMSAT PEMBANTU SERIRIT</option>
                            <option value="SAMSAT GERAI GILIMANUK">SAMSAT GERAI GILIMANUK</option>
                            <option value="SAMSAT GERAI KUBUTAMBAHAN">SAMSAT GERAI KUBUTAMBAHAN</option>
                            <option value="SAMSAT KELILING 3 BULELENG">SAMSAT KELILING 3 BULELENG</option>
                            <option value="SAMSAT KELILING 4 KARANGASEM">SAMSAT KELILING 4 KARANGASEM</option>
                            <option value="SAMSAT LINK TEJAKULA">SAMSAT LINK TEJAKULA</option>
                            <option value="SAMSAT KELILING JEMBRANA">SAMSAT KELILING JEMBRANA</option>
                            <option value="SAMSAT DRIVETHRU / GELIS SAMBUL">SAMSAT DRIVETHRU / GELIS SAMBUL</option>
                            <option value="SAMSAT LINK MANGGIS">SAMSAT LINK MANGGIS</option>
                            <option value="SAMSAT DRIVE THRU/GELIS KARANGASEM">SAMSAT DRIVE THRU/GELIS KARANGASEM</option>
                            <option value="SAMSAT DRIVE THRU JEMBRANA">SAMSAT DRIVE THRU JEMBRANA</option>

                    </select>
				</div>
				 
        <!-- Footer -->
        <footer class="footer fixed">
            <div class="container">
                <input type="submit" class="btn btn-primary w-100 btn-rounded" name="submit" value="Kirim">
            </div>
        </footer>
        <!-- Footer End -->
        <?php echo form_close(); ?>
        </div>
		<!-- Page Content End -->
        
		
    </div>    
</div>
<!--**********************************
    Scripts
***********************************-->
<script src="/assets/js/jquery.js"></script>
<script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/assets/js/settings.js"></script>
<script src="/assets/js/custom.js"></script>
<script src="/assets/vendor/imageuplodify/imageuploadify.min.js"></script> 
<script>
 
	$(document).ready(function() {
        
		$('input[type="file"]').imageuploadify();
        var dtt = document.getElementById('tgle')
  dtt.onfocus = function (event) {
      this.type = 'date';
      this.focus();
  }
	})
</script>
</body>
</html>