
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
                        <option value='RS UMUM PAYANGAN'>RS UMUM PAYANGAN</option>
                        <option value='RS BALIMED BULELENG'>RS BALIMED BULELENG</option>
                        <option value='RS KHUSUS MATA RAMATA'>RS KHUSUS MATA RAMATA</option>
                        <option value='RS IBU DAN ANAK CAHAYA BUNDA'>RS IBU DAN ANAK CAHAYA BUNDA</option>
                        <option value='RS UNIVERSITAS UDAYANA'>RS UNIVERSITAS UDAYANA</option>
                        <option value='RS PRATAMA KUBU'>RS PRATAMA KUBU</option>
                        <option value='RSU DAERAH GEMA SANTI NUSA PENIDA'>RSU DAERAH GEMA SANTI NUSA PENIDA</option>
                        <option value='RS BALI JIMBARAN'>RS BALI JIMBARAN</option>
                        <option value='RS UMUM DAERAH BALI MANDARA PROVINSI BALI'>RS UMUM DAERAH BALI MANDARA PROVINSI BALI</option>
                        <option value='RS UMUM DAERAH TANGGUWISIA'>RS UMUM DAERAH TANGGUWISIA</option>
                        <option value='RS UMUM SEMARA RATIH'>RS UMUM SEMARA RATIH</option>
                        <option value='RS UMUM BALI HOLISTIK'>RS UMUM BALI HOLISTIK</option>
                        <option value='RS UMUM BALIMED NEGARA'>RS UMUM BALIMED NEGARA</option>
                        <option value='RS WINGS NYITDAH'>RS WINGS NYITDAH</option>
                        <option value='RS UMUM KASIH IBU SABA'>RS UMUM KASIH IBU SABA</option>
                        <option value='RS KHUSUS IBU DAN ANAK PUCUK PERMATA HATI'>RS KHUSUS IBU DAN ANAK PUCUK PERMATA HATI</option>
                        <option value='RS PRATAMA GIRI EMAS'>RS PRATAMA GIRI EMAS</option>
                        <option value='RS UMUM BALIMED KARANGASEM'>RS UMUM BALIMED KARANGASEM</option>
                        <option value='RS UMUM SURYA HUSADHA NUSA DUA'>RS UMUM SURYA HUSADHA NUSA DUA</option>
                        <option value='RS UMUM FAMILI HUSADA'>RS UMUM FAMILI HUSADA</option>
                        <option value='RS UMUM KASIH IBU TABANAN'>RS UMUM KASIH IBU TABANAN</option>
                        <option value='RS UMUM SILOAM BALI'>RS UMUM SILOAM BALI</option>
                        <option value='RS KHUSUS BEDAH BIMC NUSA DUA'>RS KHUSUS BEDAH BIMC NUSA DUA</option>
                        <option value='RS UMUM BANGLI MEDIKA CANTI'>RS UMUM BANGLI MEDIKA CANTI</option>
                        <option value='RS UMUM ARI CANTI'>RS UMUM ARI CANTI</option>
                        <option value='RS UMUM SURYA HUSADA UBUNG'>RS UMUM SURYA HUSADA UBUNG</option>
                        <option value='RS UMUM KASIH IBU KEDONGANAN'>RS UMUM KASIH IBU KEDONGANAN</option>
                        <option value='RS UMUM WISMA PRASHANTI'>RS UMUM WISMA PRASHANTI</option>
                        <option value='RS BHAYANGKARA DENPASAR'>RS BHAYANGKARA DENPASAR</option>
                        <option value='RS UMUM BUNDA'>RS UMUM BUNDA</option>
                        <option value='RS UMUM BINTANG'>RS UMUM BINTANG</option>
                        <option value='RS UMUM PERMATA HATI'>RS UMUM PERMATA HATI</option>
                        <option value='RS UMUM GANESHA'>RS UMUM GANESHA</option>
                        <option value='RS UMUM BALI ROYAL'>RS UMUM BALI ROYAL</option>
                        <option value='RS UMUM SHANTI GRAHA'>RS UMUM SHANTI GRAHA</option>
                        <option value='RS UMUM PARAMA SIDHI'>RS UMUM PARAMA SIDHI</option>
                        <option value='RS DAERAH MANGUSADA'>RS DAERAH MANGUSADA</option>
                        <option value='RS UMUM BHAKTI RAHAYU TABANAN'>RS UMUM BHAKTI RAHAYU TABANAN</option>
                        <option value='RS UMUM PREMAGANA'>RS UMUM PREMAGANA</option>
                        <option value='RS IBU DAN ANAK PURI BUNDA'>RS IBU DAN ANAK PURI BUNDA</option>
                        <option value='RS UMUM BALIMED'>RS UMUM BALIMED</option>
                        <option value='RS UMUM PRIMA MEDIKA'>RS UMUM PRIMA MEDIKA</option>
                        <option value='RS GIGI DAN MULUT SARASWATI DENPASAR'>RS GIGI DAN MULUT SARASWATI DENPASAR</option>
                        <option value='RS UMUM GRAHA ASIH'>RS UMUM GRAHA ASIH</option>
                        <option value='RS IBU DAN ANAK HARAPAN BUNDA'>RS IBU DAN ANAK HARAPAN BUNDA</option>
                        <option value='RS UMUM BHAKTI RAHAYU'>RS UMUM BHAKTI RAHAYU</option>
                        <option value='RS UMUM PURI RAHARJA'>RS UMUM PURI RAHARJA</option>
                        <option value='RS UMUM DHARMA YADNYA'>RS UMUM DHARMA YADNYA</option>
                        <option value='RS UMUM KASIH IBU'>RS UMUM KASIH IBU</option>
                        <option value='RS UMUM SURYA HUSADHA'>RS UMUM SURYA HUSADHA</option>
                        <option value='RS KHUSUS MATA BALI MANDARA'>RS KHUSUS MATA BALI MANDARA</option>
                        <option value='RS UMUM MANUABA'>RS UMUM MANUABA</option>
                        <option value='RS TK. II UDAYANA'>RS TK. II UDAYANA</option>
                        <option value='RS UMUM DAERAH WANGAYA'>RS UMUM DAERAH WANGAYA</option>
                        <option value='RSUP SANGLAH'>RSUP SANGLAH</option>
                        <option value='RS UMUM KARYA DHARMA HUSADA'>RS UMUM KARYA DHARMA HUSADA</option>
                        <option value='RS UMUM KERTHA USADHA'>RS UMUM KERTHA USADHA</option>
                        <option value='RS TK. IV SINGARAJA'>RS TK. IV SINGARAJA</option>
                        <option value='RS UMUM DAERAH KAB. BULELENG'>RS UMUM DAERAH KAB. BULELENG</option>
                        <option value='RS UMUM DAERAH KARANGASEM'>RS UMUM DAERAH KARANGASEM</option>
                        <option value='RS JIWA PROVINSI BALI'>RS JIWA PROVINSI BALI</option>
                        <option value='RS UMUM DAERAH KABUPATEN BANGLI'>RS UMUM DAERAH KABUPATEN BANGLI</option>
                        <option value='RS UMUM DAERAH KLUNGKUNG'>RS UMUM DAERAH KLUNGKUNG</option>
                        <option value='RS UMUM DAERAH SANJIWANI GIANYAR'>RS UMUM DAERAH SANJIWANI GIANYAR</option>
                        <option value='RS KHUSUS BEDAH BIMC'>RS KHUSUS BEDAH BIMC</option>
                        <option value='RS UMUM DHARMA KERTI'>RS UMUM DHARMA KERTI</option>
                        <option value='RS UMUM DAERAH TABANAN'>RS UMUM DAERAH TABANAN</option>
                        <option value='RS UMUM KERTAYASA'>RS UMUM KERTAYASA</option>
                        <option value='RS UMUM DAERAH NEGARA'>RS UMUM DAERAH NEGARA</option>

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