
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
	<title>Penamas - Formulir Pengaduan</title>
    
    <!-- Stylesheets -->
    <link href="/assets/vendor/imageuplodify/imageuploadify.min.css" rel="stylesheet">
	<link rel="stylesheet" href="/admine/vendor/select2/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Racing+Sans+One&display=swap" rel="stylesheet">

</head>   
<body style=" background-image: url(/assets/images/1.png); ">
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
                    <h5 class="title">Form Pengaduan</h5>
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
                        <h5 class="mb-0">Aduan</h5>
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
                                foreach ($errors as $error) {
                                    echo '<br>'.esc($error);
                                }?>
                                <button class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                                    <i class="fa-solid fa-xmark"></i>
                                </button>
                            </div>
            <?php }?> 
            <?php echo form_open('aduan/add', ['enctype' => 'multipart/form-data']); ?>
				<div class="input-group">
					<input type="text" placeholder="Judul Laporan" name="judul" value="<?php echo set_value('judul'); ?>" class="form-control">
				</div>
				<div class="input-group">
                    <textarea class="form-control" name="isi" rows="4" placeholder="Isi Laporan"><?php echo set_value('isi'); ?></textarea>
				</div>
				<div class="input-group">
					<input type="text" placeholder="Nama Pelapor" name="nama" class="form-control" value="<?php echo set_value('nama'); ?>">
				</div>
                <div class="input-group ">
                    <label class="radio-inline me-3"><input type="radio" name="jk" value="Bapak"> Laki-laki</label>
                    <label class="radio-inline me-3"><input type="radio" name="jk" value="Ibu"> Perempuan</label>                                            
                </div>
				<div class="input-group">
					<input type="text" placeholder="No WA" name="wa" class="form-control" value="<?php echo set_value('wa'); ?>">
				</div>
				<div class="input-group">
                    <input type="text" id="tgle" placeholder="Tgl Kejadian" name="tgl" class="form-control" value="<?php echo set_value('tgl'); ?>">
				</div> 
				<div class="input-group">
                    <select class="form-control dropdown-groups" name="lokasi"> 
                        <option></option>
                        <?php
        $aa = json_encode($kantor);
        $ab = str_replace('rs', 'kantor', json_encode($rs));
        $as = array_merge(json_decode($aa), json_decode($ab));
        // print_r($as);
        foreach ($as as $kantore) {?>
                        <option value='<?php echo $kantore->kantor; ?>'><?php echo $kantore->kantor; ?></option>
                        <?php }?>

                    </select>
				</div>
				
				<div class="input-group">
                <!-- <label for="inputAddress" class="border-bottom w-100 pb-1 mb-3"><i class="text-xs">max 5mb</i></label> -->
					<input type="file" name="lampiran[]" class="imageuplodify" accept="image/*,video/*" multiple>
				</div>
                <div class="form-check">
                                                <input class="form-check-input" id="check" type="checkbox" name="setuju">
                                                <label class="form-check-label">Saya Setuju dengan <a href="#"  data-bs-toggle="modal" data-bs-target="#exampleModalCenter">Kebijakan Privasi</a></label>
                                            </div>
				 
                <!-- Modal -->
                                    <div class="modal fade" id="exampleModalCenter">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">PERLINDUNGAN PELAPOR</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                                                    </button>
                                                </div>
                                                <div class="modal-body">  
<ol>
	<li>1. Perusahaan memiliki komitmen yang jelas dan tidak memihak untuk mendukung dan melindungi semua pelapor yang menginformasikan kejadian pelanggaran yang terjadi di perusahaaan. Pelapor mendapatkan perlindungan antara lain :&nbsp;<br />
	<br />
	a. Identitas pelapor dijamin kerahasiannya oleh perusahaan.&nbsp;<br />
	b. Perusahaan menjamin perlindungan terhadap Pelapor dari segala bentuk ancaman, intimidasi, ataupun tindakan tidak menyenangkan dari pihak manapun selama pelapor menjaga kerahasiaan pelanggaran yang diadukan kepada pihak manapun.&nbsp;<br />
	c. Perlindungan terhadap pelapor juga berlaku bagi para pihak yang melaksanakan investigasi maupun pihak-pihak yang memberikan informasi terkait dengan pengaduan/penyingkapan tersebut.&nbsp;<br />
	&nbsp;</li>
	<li>2. Perlindungan dan jaminan kerahasiaan tidak diberikan kepada Pelapor yang terbukti melakukan pelaporan palsu dan/atau fitnah. Apabila hasil investigasi menyimpulkan dan dapat dibuktikan bahwa pelaporan yang disampaikan mengandung laporan palsu, fitnah, tanpa dasar yang jelas, maka pelapor dapat digugat balik atau dikenai sanksi sesuai dengan peraturan perundang-undangan atau peraturan internal perusahaan.<br />
	&nbsp;</li>
	<li>3. Jika laporan yang disampaikan tidak terbukti, maka pengelola sistem pelaporan pelanggaran akan mengenakan sanksi kepada pelapor.</li>
</ol>

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Tutup</button> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
        <!-- Footer -->
        <footer class="footer fixed">
            <div class="container">
                <input type="submit" onclick="var e=this;setTimeout(function(){e.disabled=true;e.text='Loading…';},0);return true;" id="btncheck" class="btn btn-primary w-100 btn-rounded" name="submit" value="Kirim">
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
<script src="/admine/vendor/select2/js/select2.full.min.js"></script> 
<script>
    $(document).on('select2:open', () => {
        document.querySelector('.select2-search__field').focus();
    }); 
	$(document).ready(function() {
        $('#check').change(function () {
        $('#btncheck').prop("disabled", !this.checked);
        }).change();
        $('.dropdown-groups').select2({
        placeholder: "Pilih Kantor/Tempat",
        allowClear: true
        });
            
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