
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
                         <div class="divider border-warning inner-divider text-danger right mb-0"><span><a data-bs-toggle="modal" data-bs-target="#exampleModalCentere" class="blink text-white" href="#"><h6 class="text-white">INFORMASI SANTUNAN</h6></a></span></div>
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
            <?php echo form_open('kecelakaan/add', ['enctype' => 'multipart/form-data']); ?>
				<div class="input-group">
					<input type="text" placeholder="Nama Pelapor" name="pelapor" value="<?php echo set_value('pelapor'); ?>" class="form-control" required>
				</div>
                <div class="input-group ">
                    <label class="radio-inline me-3"><input type="radio" name="jk" value="Bapak"> Laki-laki</label>
                    <label class="radio-inline me-3"><input type="radio" name="jk" value="Ibu"> Perempuan</label>                                            
                </div>
				<div class="input-group">
					<input type="text" placeholder="Nama Korban" name="korban" value="<?php echo set_value('korban'); ?>" class="form-control" required>
				</div>
				<div class="input-group">
					<input type="text" placeholder="No WA" name="wa" class="form-control" value="<?php echo set_value('wa'); ?>" required>
				</div>
				<div class="input-group">
                    <input type="text" id="tgle" placeholder="Tgl & Waktu Kejadian" name="tgl" class="form-control" value="<?php echo set_value('tgl'); ?>" required>
				</div> 
				<div class="input-group">
                    <select id="rsa" class="form-control  dropdown-groups" name="rs" required> 
                    <option></option>
                        <option value='Lainnya'>Lainnya</option>
                        
                            <?php foreach ($rs as $rse) {?>
                        <option value='<?php echo $rse->rs; ?>'><?php echo $rse->rs; ?></option>
                        <?php }?>

                    </select>
				</div>
				<div class="input-group">
					<input type="text" id="rsi" placeholder="Masukan nama rumah sakit" name="" class="form-control" >
				</div>
				<div class="input-group">
                    <select class="form-control js-example-basic-singles" id="jenis" name="jenis" required> 
                        <option></option>
                        <option value="KECELAKAAN 2 KENDARAAN">KECELAKAAN 2 KENDARAAN</option> 
                        <option value="TABRAK LARI">TABRAK LARI</option> 
                        <option value="TABRAK PEJALAN KAKI/SEPEDA">TABRAK PEJALAN KAKI/SEPEDA</option> 
                        <option value="KECELAKAAN ANGKUTAN UMUM">KECELAKAAN ANGKUTAN UMUM</option> 
                        <option value="TABRAKAN DENGAN KERETA API">TABRAKAN DENGAN KERETA API</option> 
                        <option value="KECELAKAAN TUNGGAL / OUT OF CONTROL">KECELAKAAN TUNGGAL / OUT OF CONTROL</option> 

                    </select>
				</div>
				<div class="input-group">
                    <input type="text" id="autocomplete" class="form-control" rows="4" name="lokasi" placeholder="Lokasi Kecelakaan" value="<?php echo set_value('lokasi'); ?>" required>
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
                                    
                                    <div class="modal fade" id="exampleModalCentere">                                        
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Pengurusan Santunan Jasa Raharja BEBAS BIAYA</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                                                    </button>
                                                </div>
                                                <div class="modal-body">  
													<img src="/assets/images/santunan1.png" width="100%"> 
													<img src="/assets/images/santunan2.png" width="100%">

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
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB41DRUbKWJHPxaFjMAwdrzWzbVKartNGg&libraries=places&callback=initMap" defer></script>
<script src="/admine/vendor/select2/js/select2.full.min.js"></script> 
<script>
    
    $(document).on('select2:open', () => {
        document.querySelector('.select2-search__field').focus();
    }); 
	$(document).ready(function() { 
        $('#check').change(function () {
            $('#btncheck').prop("disabled", !this.checked);
        }).change();
        $("#rsi").hide();
        $("#rsi").attr('name', 'kosong');
        $(".dropdown-groups").on("change", function() {
            if ($(this).val() === "Lainnya") { 
                $("#rsi").show();
                $("#rsa").attr('name', '');
                $("#rsi").attr('name', 'rs');
                $("#rsi").prop('required',true);
            }
            else {
                $("#rsi").hide();
                $("#rsi").attr('name', 'kosong');
            }
        });
        $('.dropdown-groups').select2({
        placeholder: "Pilih Rumah Sakit",
        allowClear: true
        });
        $('#jenis').select2({
        placeholder: "Jenis Kecelakaan",
        allowClear: true
        });
            
        $('input[type="file"]').imageuploadify();
            var dtt = document.getElementById('tgle')
            dtt.onfocus = function (event) {
            this.type = 'datetime-local';
            this.focus();
        } 
        // Google Map Tambah Pelanggan
        
        // initMapTambahPelanggan();
        
	});
    

 let map;
 let autocomplete;
 let marker;

 function initMap() {
   map = new google.maps.Map(document.getElementById('map'), {
     zoom: 18
   });

   marker = new google.maps.Marker({
     map: map,
     draggable: true
   });

   // Get the user's current location using geolocation
   if (navigator.geolocation) {
     navigator.geolocation.getCurrentPosition(function(position) {
       const userLocation = {
         lat: position.coords.latitude,
         lng: position.coords.longitude
       };
       map.setCenter(userLocation);
       marker.setPosition(userLocation);
        var currentLocation = marker.getPosition();
        document.getElementById("inputLat").value = currentLocation.lat();
        document.getElementById("inputLng").value = currentLocation.lng();
     });
   }

   autocomplete = new google.maps.places.Autocomplete(
     document.getElementById('autocomplete')
   );

   autocomplete.addListener('place_changed', onPlaceChanged);
   map.addListener('click', onMapClick);
 }

 function onPlaceChanged() {
   const place = autocomplete.getPlace();
   if (!place.geometry) {
     console.log("Place details not available");
     return;
   }

   if (place.geometry.viewport) {
     map.fitBounds(place.geometry.viewport);
   } else {
     map.setCenter(place.geometry.location);
     map.setZoom(18);
   }

   marker.setPosition(place.geometry.location);
   var currentLocation = marker.getPosition();
        document.getElementById("inputLat").value = currentLocation.lat();
        document.getElementById("inputLng").value = currentLocation.lng();
 }

 function onMapClick(event) {
   marker.setPosition(event.latLng);
   var currentLocation = marker.getPosition();
        document.getElementById("inputLat").value = currentLocation.lat();
        document.getElementById("inputLng").value = currentLocation.lng();
 }


    //     let mapTambahPelanggan = false;
    // let markerTambahPelanggan = false;
    // let controlDelMarker = false;
    
    // function showInfo(latlng) {
    //   geocoder.geocode({
    //     'latLng': latlng
    //   }, function(results, status) {
    //     if (status == google.maps.GeocoderStatus.OK) {
    //       if (results[1]) {
    //         // here assign the data to asp lables
    //         // document.getElementById('<%=addressStandNo.ClientID %>').value = results[1].formatted_address;
    //         alert( results[1].formatted_address);
    //       } else {
    //         alert('No results found');
    //       }
    //     } else {
    //       alert('Geocoder failed due to: ' + status);
    //     }
    //   });
    // }
    // function initMapTambahPelanggan() {
    //     const image = "https://my.radboox.com/public/upload/files/marker.png";
    //     var lat = -2.548926;
    //     var lng = 118.0148634;
    //     var zoom = 18;
    //     var centerOfMap = new google.maps.LatLng(lat, lng);
    //     var options = {
    //         center: centerOfMap,
    //         zoom: zoom,
    //         mapTypeControl: true,
    //         mapTypeControlOptions: {
    //             style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR,
    //             position: google.maps.ControlPosition.TOP_CENTER,
    //         },
    //         zoomControl: true,
    //         streetViewControl: false,
    //         styles: [
    //             {
    //                 "featureType": "poi",
    //                 "stylers": [
    //                     {
    //                         "visibility": "on"
    //                     }
    //                 ]
    //             },
    //             {
    //                 "featureType": "poi",
    //                 "elementType": "geometry",
    //                 "stylers": [
    //                     {
    //                         "visibility": "off"
    //                     }
    //                 ]
    //             },
    //             {
    //                 "featureType": "poi",
    //                 "elementType": "labels",
    //                 "stylers": [
    //                     {
    //                         "visibility": "on"
    //                     }
    //                 ]
    //             },
    //             {
    //                 "featureType": "poi",
    //                 "elementType": "labels.icon",
    //                 "stylers": [
    //                     {
    //                         "visibility": "off"
    //                     }
    //                 ]
    //             },
    //             {
    //                 "featureType": "poi",
    //                 "elementType": "labels.text",
    //                 "stylers": [
    //                     {
    //                         "visibility": "on"
    //                     }
    //                 ]
    //             }
    //         ]
    //     };

    //     if (!mapTambahPelanggan) {
    //         mapTambahPelanggan = new google.maps.Map(document.getElementById("map"), options);

    //         if (!controlDelMarker) {
    //             const centerControlDiv = document.createElement("div");
    //             CenterControlTambah(centerControlDiv);
    //             mapTambahPelanggan.controls[google.maps.ControlPosition.TOP_LEFT].push(centerControlDiv);
    //             controlDelMarker = true;
    //         }

    //         mapTambahPelanggan.addListener('click', function (event) {
    //             var clickedLocation = event.latLng;
    //             if (!markerTambahPelanggan) {
    //                 const marker = new google.maps.Marker({
    //                     position: clickedLocation,
    //                     map: mapTambahPelanggan,
    //                     draggable: true,
    //                     icon: image
    //                 });
    //                 markerTambahPelanggan = marker;
    //                 markerTambahPelanggan.addListener('dragend', function (event) {
    //                     markerLocation(markerTambahPelanggan, 'inputLat', 'inputLng');
    //                 });
    //             } else {
    //                 markerTambahPelanggan.setPosition(clickedLocation);
    //             }
    //             markerLocation(markerTambahPelanggan, 'inputLat', 'inputLng');
    //             //showInfo(this.position);
    //         });
            
    //     }

    //     if (navigator.geolocation) {
    //         navigator.geolocation.getCurrentPosition(function (e) {
    //             var nlat = e.coords.latitude;
    //             var nlng = e.coords.longitude;
    //             zoom = 18;
    //             var newCenterOfMap = new google.maps.LatLng(nlat, nlng);
    //             mapTambahPelanggan.setCenter(newCenterOfMap)
    //             mapTambahPelanggan.setZoom(zoom)
    //         });
    //     }
    // }

    // // button di map tambah pelanggan
    // function CenterControlTambah(controlDiv) {
    //     const controlUI = document.createElement("div");
    //     controlUI.style.backgroundColor = "#fff";
    //     controlUI.style.border = "1px solid #fff";
    //     controlUI.style.borderRadius = "3px";
    //     controlUI.style.boxShadow = "0 1px 3px rgba(0,0,0,.3)";
    //     controlUI.style.cursor = "pointer";
    //     controlUI.style.margin = "10px";
    //     controlUI.style.padding = "4px";
    //     controlUI.style.textAlign = "center";
    //     controlUI.title = "Click untuk hapus lokasi";
    //     controlDiv.appendChild(controlUI);
    //     const controlText = document.createElement("div");
    //     controlText.style.color = "red";
    //     controlText.style.fontSize = "22px";
    //     controlText.style.paddingLeft = "6px";
    //     controlText.style.paddingRight = "6px";
    //     controlText.innerHTML = '<i class="fa fa-times"></i>';
    //     controlUI.appendChild(controlText);
    //     controlUI.addEventListener("click", () => {
    //         if (markerTambahPelanggan) {
    //             markerTambahPelanggan.setMap(null)
    //             markerTambahPelanggan = false;
    //             document.getElementById('inputLat').value = "";
    //             document.getElementById('inputLng').value = "";
    //         }
    //     });
    // }

    // function markerLocation(marker, idLat, idLng) {
    //     var currentLocation = marker.getPosition();
    //     document.getElementById(idLat).value = currentLocation.lat();
    //     document.getElementById(idLng).value = currentLocation.lng();
    // }
</script>
</body>
</html>