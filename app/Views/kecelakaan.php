
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
	<title>Penamas - Formulir Laporan Kecelakaan</title>
    
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
                    <h5 class="title">Form Laporan Kecelakaan</h5>
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
                        <h5 class="mb-0">Laporan Kecelakaan</h5>
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
						            echo '<br>'.esc($error);
					            endforeach;?>
                                <button class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                                    <i class="fa-solid fa-xmark"></i>
                                </button>
                            </div>
            <?php }?> 
            <?php echo form_open('kecelakaan/add',['enctype' => 'multipart/form-data']);?>
				<div class="input-group">
					<input type="text" placeholder="Nama Pelapor" name="pelapor" value="<?php echo set_value('pelapor'); ?>" class="form-control">
				</div>
				<div class="input-group">
					<input type="text" placeholder="Nama Korban" name="korban" value="<?php echo set_value('korban'); ?>" class="form-control">
				</div>
				<div class="input-group">
					<input type="text" placeholder="No WA" name="wa" class="form-control" value="<?php echo set_value('wa'); ?>">
				</div>
				<div class="input-group">
                    <input type="text" id="tgle" placeholder="Tgl & Waktu Kejadian" name="tgl" class="form-control" value="<?php echo set_value('tgl'); ?>">
				</div> 
				<div class="input-group">
                    <select class="form-control js-example-basic-singles" name="rs"> 
                        <option>-- Dirawat di --</option>
                        <optgroup label='DENPASAR'>
                        <option value='RSUP SANGLAH KOTA DENPASAR'>RSUP SANGLAH KOTA DENPASAR</option>
                        <option value='RSUD WANGAYA KOTA DENPASAR'>RSUD WANGAYA KOTA DENPASAR</option>
                        <option value='RSAD TK.II UDAYANA KOTA DENPASAR'>RSAD TK.II UDAYANA KOTA DENPASAR</option>
                        <option value='RS PURI RAHARJA KOTA DENPASAR'>RS PURI RAHARJA KOTA DENPASAR</option>
                        <option value='RS SURYA HUSADHA KOTA DENPASAR'>RS SURYA HUSADHA KOTA DENPASAR</option>
                        <option value='RS KASIH IBU KOTA DENPASAR'>RS KASIH IBU KOTA DENPASAR</option>
                        <option value='RS DHARMA YADNYA KOTA DENPASAR'>RS DHARMA YADNYA KOTA DENPASAR</option>
                        <option value=' RS MANUABA KOTA DENPASAR'> RS MANUABA KOTA DENPASAR</option>
                        <option value='RS BHAKTI RAHAYU KOTA DENPASAR'>RS BHAKTI RAHAYU KOTA DENPASAR</option>
                        <option value='RS BHAYANGKARA TRIJATA KOTA DENPASAR'>RS BHAYANGKARA TRIJATA KOTA DENPASAR</option>
                        <option value='RS PRIMA MEDIKA KOTA DENPASAR'>RS PRIMA MEDIKA KOTA DENPASAR</option>
                        <option value='RS SURYA HUSADHA UBUNG KOTA DENPASAR'>RS SURYA HUSADHA UBUNG KOTA DENPASAR</option>
                        <option value='RS BALI ROYAL KOTA DENPASAR'>RS BALI ROYAL KOTA DENPASAR</option>
                        <option value='RS BALIMED KOTA DENPASAR'>RS BALIMED KOTA DENPASAR</option>
                        <option value='RSUD BALI MANDARA KOTA DENPASAR'>RSUD BALI MANDARA KOTA DENPASAR</option>
                        <option value='KLINIK/RD PRAKTEK DI KOTA DENPASAR (SANUR MEDICAL CLINIC)'>KLINIK/RD PRAKTEK DI KOTA DENPASAR (SANUR MEDICAL CLINIC)</option>
                        <option value='KLINIK/RD PRAKTEK DI KOTA DENPASAR (DHARMA SIDHI)'>KLINIK/RD PRAKTEK DI KOTA DENPASAR (DHARMA SIDHI)</option>
                        <option value='RS MURNI TEGUH TUBAN BADUNG'>RS MURNI TEGUH TUBAN BADUNG</option>
                        <option value='BIC CLINIC/RSIA BUNDA DENPASAR'>BIC CLINIC/RSIA BUNDA DENPASAR</option>
                        <option value='RS. MATA BALI MANDARA DENPASAR'>RS. MATA BALI MANDARA DENPASAR</option>
                        <optgroup label='BADUNG'>
                        <option value='RS SILOAM BALI KAB. BADUNG'>RS SILOAM BALI KAB. BADUNG</option>
                        <option value='RSUD MANGUSADA KAB. BADUNG'>RSUD MANGUSADA KAB. BADUNG</option>
                        <option value='RS SURYA HUSADHA NUSADUA KAB. BADUNG'>RS SURYA HUSADHA NUSADUA KAB. BADUNG</option>
                        <option value='RS KASIH IBU KEDONGANAN KAB. BADUNG'>RS KASIH IBU KEDONGANAN KAB. BADUNG</option>
                        <option value='RS BALI JIMBARAN KAB. BADUNG'>RS BALI JIMBARAN KAB. BADUNG</option>
                        <option value='RS GARBA MED'>RS GARBA MED</option>
                        <option value='RS.UNIV.UDAYANA KAB.BADUNG'>RS.UNIV.UDAYANA KAB.BADUNG</option>
                        <option value='RS.BIMC KUTA BADUNG'>RS.BIMC KUTA BADUNG</option>
                        <option value='RS.BIMC NUSA DUA BADUNG'>RS.BIMC NUSA DUA BADUNG</option>
                        <option value='RS.WINDU HUSADHA BADUNG'>RS.WINDU HUSADHA BADUNG</option>
                        <option value='KLINIK PRATAMA TUNAS HARAPAN BADUNG'>KLINIK PRATAMA TUNAS HARAPAN BADUNG</option>
                        <optgroup label='TABANAN'>
                        <option value='RSUD KAB. TABANAN'>RSUD KAB. TABANAN</option>
                        <option value='RS DHARMA KERTI KAB. TABANAN'>RS DHARMA KERTI KAB. TABANAN</option>
                        <option value='RS KASIH IBU KAB. TABANAN'>RS KASIH IBU KAB. TABANAN</option>
                        <option value='RS WISMA PRASHANTI KAB. TABANAN'>RS WISMA PRASHANTI KAB. TABANAN</option>
                        <option value='RS BHAKTI RAHAYU KAB. TABANAN'>RS BHAKTI RAHAYU KAB. TABANAN</option>
                        <option value='RS SEMARA RATIH KAB. TABANAN'>RS SEMARA RATIH KAB. TABANAN</option>
                        <option value='RS NYITDAH/RSUD SINGASANA TABANAN'>RS NYITDAH/RSUD SINGASANA TABANAN</option>
                        <option value='RS. BALI HOLISTIK KAB. TABANAN'>RS. BALI HOLISTIK KAB. TABANAN</option>
                        <optgroup label='GIANYAR'>
                        <option value='RSUD SANJIWANI KAB. GIANYAR'>RSUD SANJIWANI KAB. GIANYAR</option>
                        <option value=' RS ARI CANTI KAB. GIANYAR'> RS ARI CANTI KAB. GIANYAR</option>
                        <option value='RS GANESHA KAB. GIANYAR'>RS GANESHA KAB. GIANYAR</option>
                        <option value='RS FAMILI HUSADA KAB. GIANYAR'>RS FAMILI HUSADA KAB. GIANYAR</option>
                        <option value='RS KASIH IBU SABA KAB. GIANYAR'>RS KASIH IBU SABA KAB. GIANYAR</option>
                        <option value='RS. PREMAGANA KAB. GIANYAR'>RS. PREMAGANA KAB. GIANYAR</option>
                        <option value='RSUD. PAYANGAN KAB.GIANYAR'>RSUD. PAYANGAN KAB.GIANYAR</option>
                        <option value='KLINIK KENAK MEDIKA GIANYAR'>KLINIK KENAK MEDIKA GIANYAR</option>
                        <optgroup label='BANGLI'>
                        <option value='RSUD KAB. BANGLI'>RSUD KAB. BANGLI</option>
                        <option value='RS BANGLI MEDIKA CANTI (BMC) KAB. BANGLI'>RS BANGLI MEDIKA CANTI (BMC) KAB. BANGLI</option>
                        <optgroup label='KLUNGKUNG'>
                        <option value='RSUD KAB. KLUNGKUNG'>RSUD KAB. KLUNGKUNG</option>
                        <option value='RS BINTANG KAB. KLUNGKUNG'>RS BINTANG KAB. KLUNGKUNG</option>
                        <option value='RS. PERMATA HATI KLUNGKUNG'>RS. PERMATA HATI KLUNGKUNG</option>
                        <option value='RS. GEMA SANTI NUSA PENIDA'>RS. GEMA SANTI NUSA PENIDA</option>
                        <option value='RS. GRAHA BHAKTI MEDIKA KLUNGKUNG'>RS. GRAHA BHAKTI MEDIKA KLUNGKUNG</option>
                        <option value='LEMBONGAN MEDICAL CLINIC'>LEMBONGAN MEDICAL CLINIC</option>
                        <optgroup label='KARANGASEM'>
                        <option value='RS BALIMED KAB. KARANGASEM'>RS BALIMED KAB. KARANGASEM</option>
                        <option value='RSUD KAB. KARANGASEM'>RSUD KAB. KARANGASEM</option>
                        <optgroup label='BULELENG'>
                        <option value='RSUD SINGARAJA KAB. BULELENG'>RSUD SINGARAJA KAB. BULELENG</option>
                        <option value='RS KERTHA USADA KAB. BULELENG'>RS KERTHA USADA KAB. BULELENG</option>
                        <option value='RS TNI AD TK.IV SINGARAJA KAB. BULELENG'>RS TNI AD TK.IV SINGARAJA KAB. BULELENG</option>
                        <option value='RS PARAMA SIDHI KAB. BULELENG'>RS PARAMA SIDHI KAB. BULELENG</option>
                        <option value='RS KARYA DHARMA HUSADA KAB. BULELENG'>RS KARYA DHARMA HUSADA KAB. BULELENG</option>
                        <option value='RS SHANTI GRAHA KAB. BULELENG'>RS SHANTI GRAHA KAB. BULELENG</option>
                        <option value='RS BALIMED, KAB. BULELENG'>RS BALIMED, KAB. BULELENG</option>
                        <option value='RSUD PRATAMA TANGGUWISIA, KAB. BULELENG'>RSUD PRATAMA TANGGUWISIA, KAB. BULELENG</option>
                        <option value='RSUD PRATAMA GIRI EMAS'>RSUD PRATAMA GIRI EMAS</option>
                        <optgroup label='JEMBRANA'>
                        <option value='RSUD NEGARA KAB. JEMBRANA'>RSUD NEGARA KAB. JEMBRANA</option>
                        <option value='RS BUNDA KAB. JEMBRANA'>RS BUNDA KAB. JEMBRANA</option>
                        <option value='RS BALIMED KAB. JEMBRANA'>RS BALIMED KAB. JEMBRANA</option>
                        <option value='RSUD KERTAYASA JEMBRANA'>RSUD KERTAYASA JEMBRANA</option>

                    </select>
				</div>
				<div class="input-group">
                    <select class="form-control js-example-basic-singles" name="jenis"> 
                        <option>-- Jenis Kecelakaan --</option>
                        <option value="KECELAKAAN 2 KENDARAAN">KECELAKAAN 2 KENDARAAN</option> 
                        <option value="TABRAK LARI">TABRAK LARI</option> 
                        <option value="TABRAK PEJALAN KAKI/SEPEDA">TABRAK PEJALAN KAKI/SEPEDA</option> 
                        <option value="KECELAKAAN ANGKUTAN UMUM">KECELAKAAN ANGKUTAN UMUM</option> 
                        <option value="TABRAKAN DENGAN KERETA API">TABRAKAN DENGAN KERETA API</option> 
                        <option value="KECELAKAAN TUNGGAL / OUT OF CONTROL">KECELAKAAN TUNGGAL / OUT OF CONTROL</option> 

                    </select>
				</div>
				<div class="input-group">
                    <textarea class="form-control" name="lokasi" placeholder="Lokasi Kecelakaan"><?php echo set_value('lokasi'); ?></textarea>
				</div> 
				<div class="form-group">
                <label for="inputAddress" class="border-bottom w-100 pb-1 mb-3">Google Map - <i class="text-xs">Optional</i></label>
                <div class="form-group row">
                  <div class="col-sm-12">
                      <div class="embed-responsive embed-responsive-21by9">
                        <div class="embed-responsive-item bg-danger"  id="map">
                        </div>
                      </div>
                  </div>
                  <input type="hidden" class="form-control" name="inputLat" id="inputLat" value="0" >
                  <input type="hidden" class="form-control" name="inputLng" id="inputLng" value="0" >
                </div>
              </div>
                            </br>
				<div class="input-group">
					<input type="file" name="lampiran[]" class="imageuplodify" accept="image/*,video/*" multiple>
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
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBdu9gXgc3X1zN0ENhSb6fh4me9aEslKHI&libraries=&v=weekly" defer></script>
<script>
 
	$(document).ready(function() {
        
		$('input[type="file"]').imageuploadify();
        var dtt = document.getElementById('tgle')
  dtt.onfocus = function (event) {
      this.type = 'datetime-local';
      this.focus();
  }
        // Google Map Tambah Pelanggan
        
        initMapTambahPelanggan();
        
	});
        let mapTambahPelanggan = false;
    let markerTambahPelanggan = false;
    let controlDelMarker = false;
    function initMapTambahPelanggan() {
        const image = "https://my.radboox.com/public/upload/files/marker.png";
        var lat = -2.548926;
        var lng = 118.0148634;
        var zoom = 5;
        var centerOfMap = new google.maps.LatLng(lat, lng);
        var options = {
            center: centerOfMap,
            zoom: zoom,
            mapTypeControl: true,
            mapTypeControlOptions: {
                style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR,
                position: google.maps.ControlPosition.TOP_CENTER,
            },
            zoomControl: true,
            streetViewControl: false,
            styles: [
                {
                    "featureType": "poi",
                    "stylers": [
                        {
                            "visibility": "on"
                        }
                    ]
                },
                {
                    "featureType": "poi",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "poi",
                    "elementType": "labels",
                    "stylers": [
                        {
                            "visibility": "on"
                        }
                    ]
                },
                {
                    "featureType": "poi",
                    "elementType": "labels.icon",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "poi",
                    "elementType": "labels.text",
                    "stylers": [
                        {
                            "visibility": "on"
                        }
                    ]
                }
            ]
        };

        if (!mapTambahPelanggan) {
            mapTambahPelanggan = new google.maps.Map(document.getElementById("map"), options);

            if (!controlDelMarker) {
                const centerControlDiv = document.createElement("div");
                CenterControlTambah(centerControlDiv);
                mapTambahPelanggan.controls[google.maps.ControlPosition.TOP_LEFT].push(centerControlDiv);
                controlDelMarker = true;
            }

            mapTambahPelanggan.addListener('click', function (event) {
                var clickedLocation = event.latLng;
                if (!markerTambahPelanggan) {
                    const marker = new google.maps.Marker({
                        position: clickedLocation,
                        map: mapTambahPelanggan,
                        draggable: true,
                        icon: image
                    });
                    markerTambahPelanggan = marker;
                    markerTambahPelanggan.addListener('dragend', function (event) {
                        markerLocation(markerTambahPelanggan, 'inputLat', 'inputLng');
                    });
                } else {
                    markerTambahPelanggan.setPosition(clickedLocation);
                }
                markerLocation(markerTambahPelanggan, 'inputLat', 'inputLng');
            });
        }

        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function (e) {
                var nlat = e.coords.latitude;
                var nlng = e.coords.longitude;
                zoom = 15;
                var newCenterOfMap = new google.maps.LatLng(nlat, nlng);
                mapTambahPelanggan.setCenter(newCenterOfMap)
                mapTambahPelanggan.setZoom(zoom)
            });
        }
    }

    // button di map tambah pelanggan
    function CenterControlTambah(controlDiv) {
        const controlUI = document.createElement("div");
        controlUI.style.backgroundColor = "#fff";
        controlUI.style.border = "1px solid #fff";
        controlUI.style.borderRadius = "3px";
        controlUI.style.boxShadow = "0 1px 3px rgba(0,0,0,.3)";
        controlUI.style.cursor = "pointer";
        controlUI.style.margin = "10px";
        controlUI.style.padding = "4px";
        controlUI.style.textAlign = "center";
        controlUI.title = "Click untuk hapus lokasi";
        controlDiv.appendChild(controlUI);
        const controlText = document.createElement("div");
        controlText.style.color = "red";
        controlText.style.fontSize = "22px";
        controlText.style.paddingLeft = "6px";
        controlText.style.paddingRight = "6px";
        controlText.innerHTML = '<i class="fa fa-times"></i>';
        controlUI.appendChild(controlText);
        controlUI.addEventListener("click", () => {
            if (markerTambahPelanggan) {
                markerTambahPelanggan.setMap(null)
                markerTambahPelanggan = false;
                document.getElementById('inputLat').value = "";
                document.getElementById('inputLng').value = "";
            }
        });
    }

    function markerLocation(marker, idLat, idLng) {
        var currentLocation = marker.getPosition();
        document.getElementById(idLat).value = currentLocation.lat();
        document.getElementById(idLng).value = currentLocation.lng();
    }
</script>
</body>
</html>