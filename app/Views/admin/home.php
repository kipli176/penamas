
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="PENA MAS Dashboard" />
	<meta property="og:title" content="PENA MAS Dashboard" />
	<meta property="og:description" content="PENA MAS Dashboard" />
	<meta property="og:image" content="/admine/social-image.png" />
	<meta name="format-detection" content="telephone=no">
    <title>PENA MAS Dashboard</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/images/fav-icon-jr.png">
	<link rel="manifest" href="/admine/manifest.json">
    <!-- Datatable -->
    <link href="/admine/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <!-- Custom Stylesheet -->
    <link href="/admine/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="/admine/css/style.css" rel="stylesheet">

</head>

<body style="background: var(--headerbg);!mportant">

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="/admin/" class="brand-logo">
				<!-- <svg class="logo-abbr" width="66.5px" height="66.5px">
					<g><path class="svg-logo-circle" fill-rule="evenodd"  fill="rgb(64, 24, 157)"
					 d="M32.999,66.000 C14.774,66.000 -0.000,51.225 -0.000,33.000 C-0.000,14.775 14.774,-0.000 32.999,-0.000 C51.225,-0.000 66.000,14.775 66.000,33.000 C66.000,51.225 51.225,66.000 32.999,66.000 Z"/></g><g><path class="svg-logo-icon-text" fill-rule="evenodd"  stroke="rgb(255, 255, 255)" stroke-width="1px" stroke-linecap="butt" stroke-linejoin="miter" fill="rgb(255, 255, 255)"
					 d="M58.273,11.788 L53.346,35.007 C52.729,37.824 51.661,40.116 50.142,41.883 C48.623,43.602 46.868,44.939 44.874,45.894 C42.928,46.849 40.840,47.470 38.609,47.757 C36.379,48.091 34.243,48.258 32.202,48.258 C29.829,48.258 27.788,48.091 26.080,47.757 C24.371,47.470 22.852,47.040 21.523,46.467 C20.242,45.894 19.079,45.202 18.035,44.390 C16.991,43.530 15.947,42.599 14.902,41.597 L17.181,30.780 L30.565,30.780 C30.565,30.924 30.493,31.282 30.351,31.855 C30.256,32.380 30.138,33.025 29.995,33.789 C29.853,34.553 29.710,35.389 29.568,36.296 C29.473,37.203 29.426,38.039 29.426,38.803 C29.426,39.281 29.473,39.782 29.568,40.307 C29.663,40.832 29.829,41.334 30.066,41.811 C30.304,42.241 30.636,42.623 31.063,42.958 C31.538,43.244 32.107,43.387 32.771,43.387 C34.006,43.387 34.979,42.886 35.690,41.883 C36.450,40.832 37.114,38.946 37.683,36.224 L44.858,2.204 C50.110,4.228 54.714,7.552 58.273,11.788 Z"/>
					</g>
				</svg>
				<svg class="brand-title" width="101.5px" height="29.5px">
				<path class="svg-logo-text-path" fill-rule="evenodd"  stroke="rgb(0, 0, 0)" stroke-width="1px" stroke-linecap="butt" stroke-linejoin="miter" fill="rgb(64, 24, 157)"
				 d="M99.505,17.384 C99.302,18.169 98.998,18.840 98.593,19.398 L87.915,19.398 C87.813,19.955 87.737,20.487 87.687,20.994 C87.661,21.501 87.649,21.957 87.649,22.362 C87.649,22.590 87.661,22.843 87.687,23.122 C87.712,23.401 87.763,23.667 87.839,23.920 C87.940,24.148 88.067,24.351 88.219,24.528 C88.396,24.680 88.637,24.756 88.941,24.756 C89.169,24.756 89.422,24.680 89.701,24.528 C90.005,24.376 90.296,24.161 90.575,23.882 C90.879,23.603 91.158,23.261 91.411,22.856 C91.690,22.451 91.905,21.995 92.057,21.488 L98.289,21.488 L97.301,25.554 C96.794,25.883 96.211,26.162 95.553,26.390 C94.894,26.618 94.197,26.808 93.463,26.960 C92.728,27.087 91.981,27.175 91.221,27.226 C90.461,27.302 89.739,27.340 89.055,27.340 C87.788,27.340 86.610,27.226 85.521,26.998 C84.432,26.770 83.482,26.377 82.670,25.820 C81.860,25.263 81.214,24.528 80.733,23.616 C80.277,22.679 80.049,21.526 80.049,20.158 C80.049,18.917 80.239,17.701 80.619,16.510 C81.024,15.319 81.683,14.268 82.595,13.356 C83.532,12.419 84.773,11.671 86.319,11.114 C87.890,10.557 89.840,10.278 92.171,10.278 C94.704,10.278 96.604,10.671 97.871,11.456 C99.163,12.241 99.809,13.470 99.809,15.142 C99.809,15.826 99.708,16.573 99.505,17.384 ZM92.589,13.280 C92.335,13.001 92.032,12.862 91.677,12.862 C91.271,12.862 90.892,13.001 90.537,13.280 C90.208,13.533 89.904,13.888 89.625,14.344 C89.346,14.775 89.093,15.281 88.865,15.864 C88.637,16.421 88.447,17.017 88.295,17.650 L92.627,17.650 C92.678,17.346 92.728,17.029 92.779,16.700 C92.830,16.421 92.868,16.117 92.893,15.788 C92.944,15.459 92.969,15.155 92.969,14.876 C92.969,14.090 92.842,13.559 92.589,13.280 ZM79.024,8.340 C78.644,8.644 78.201,8.872 77.694,9.024 C77.188,9.176 76.668,9.252 76.136,9.252 C75.123,9.252 74.274,9.011 73.590,8.530 C72.906,8.049 72.564,7.289 72.564,6.250 C72.564,5.693 72.678,5.199 72.906,4.768 C73.134,4.312 73.438,3.945 73.818,3.666 C74.224,3.362 74.679,3.134 75.186,2.982 C75.718,2.830 76.263,2.754 76.820,2.754 C77.808,2.754 78.644,2.995 79.328,3.476 C80.012,3.957 80.354,4.705 80.354,5.718 C80.354,6.301 80.227,6.807 79.974,7.238 C79.746,7.669 79.429,8.036 79.024,8.340 ZM75.832,27.036 L68.118,27.036 L71.576,10.696 L79.366,10.696 L75.832,27.036 ZM67.055,19.550 C66.878,20.411 66.625,21.311 66.295,22.248 C65.967,23.160 65.523,23.996 64.966,24.756 C64.433,25.516 63.750,26.137 62.914,26.618 C62.103,27.099 61.128,27.340 59.988,27.340 C59.304,27.340 58.632,27.264 57.974,27.112 C57.340,26.960 56.757,26.757 56.226,26.504 C55.719,26.251 55.263,25.959 54.857,25.630 C54.478,25.275 54.199,24.921 54.021,24.566 L53.755,24.566 L52.045,27.036 L45.890,27.036 L51.286,1.500 L59.076,1.500 L56.605,13.128 L56.871,13.128 C57.707,12.165 58.645,11.481 59.683,11.076 C60.747,10.645 61.799,10.430 62.838,10.430 C63.724,10.430 64.459,10.569 65.042,10.848 C65.650,11.101 66.131,11.456 66.485,11.912 C66.840,12.368 67.093,12.913 67.245,13.546 C67.397,14.179 67.473,14.851 67.473,15.560 C67.473,15.915 67.448,16.447 67.397,17.156 C67.347,17.865 67.233,18.663 67.055,19.550 ZM59.304,14.572 C59.152,14.243 58.860,14.078 58.429,14.078 C57.923,14.078 57.454,14.268 57.024,14.648 C56.592,15.003 56.276,15.307 56.074,15.560 L54.591,22.362 C54.769,22.666 54.997,22.957 55.276,23.236 C55.579,23.515 55.934,23.654 56.340,23.654 C56.948,23.654 57.454,23.337 57.859,22.704 C58.265,22.045 58.594,21.285 58.847,20.424 C59.101,19.537 59.279,18.663 59.379,17.802 C59.506,16.915 59.569,16.257 59.569,15.826 C59.569,15.319 59.481,14.901 59.304,14.572 ZM42.082,24.908 C40.156,26.529 37.370,27.340 33.722,27.340 C30.606,27.340 28.377,26.745 27.034,25.554 C25.590,24.312 24.868,22.451 24.868,19.968 C24.868,18.321 25.198,16.827 25.856,15.484 C26.540,14.141 27.515,13.027 28.782,12.140 C30.631,10.899 33.165,10.278 36.382,10.278 C39.397,10.278 41.588,10.810 42.956,11.874 C44.400,12.989 45.122,14.838 45.122,17.422 C45.122,19.018 44.856,20.462 44.324,21.754 C43.792,23.021 43.045,24.072 42.082,24.908 ZM37.180,13.432 C37.054,13.052 36.762,12.862 36.306,12.862 C35.622,12.862 35.027,13.229 34.520,13.964 C34.039,14.699 33.646,15.573 33.342,16.586 C33.038,17.599 32.810,18.638 32.658,19.702 C32.531,20.766 32.468,21.627 32.468,22.286 C32.468,23.933 32.912,24.756 33.798,24.756 C34.431,24.756 34.976,24.401 35.432,23.692 C35.914,22.983 36.293,22.121 36.572,21.108 C36.851,20.069 37.054,19.005 37.180,17.916 C37.332,16.801 37.408,15.839 37.408,15.028 C37.408,14.319 37.332,13.787 37.180,13.432 ZM20.309,23.996 C19.499,24.908 18.561,25.617 17.497,26.124 C16.459,26.631 15.344,26.960 14.154,27.112 C12.963,27.289 11.823,27.378 10.733,27.378 C9.467,27.378 8.378,27.289 7.466,27.112 C6.554,26.960 5.743,26.732 5.033,26.428 C4.350,26.124 3.729,25.757 3.171,25.326 C2.614,24.870 2.057,24.376 1.500,23.844 L2.716,18.106 L9.859,18.106 C9.859,18.182 9.821,18.372 9.745,18.676 C9.695,18.955 9.632,19.297 9.556,19.702 C9.480,20.107 9.404,20.551 9.328,21.032 C9.277,21.513 9.252,21.957 9.252,22.362 C9.252,22.615 9.277,22.881 9.328,23.160 C9.379,23.439 9.467,23.705 9.594,23.958 C9.720,24.186 9.897,24.389 10.126,24.566 C10.379,24.718 10.683,24.794 11.038,24.794 C11.696,24.794 12.216,24.528 12.595,23.996 C13.001,23.439 13.356,22.438 13.659,20.994 L17.497,2.906 L25.744,2.906 L22.020,20.348 C21.690,21.843 21.120,23.059 20.309,23.996 Z"/>
				</svg> -->
            </a>
            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->
		 

		
		
        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="dashboard_bar">
                                Dashboard
                            </div>
                        </div>

                        <ul class="navbar-nav header-right"> 
							<li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link  ai-icon" href="#" role="button" data-bs-toggle="dropdown">
                                    <svg width="26" height="28" viewBox="0 0 26 28" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M9.45251 25.6682C10.0606 27.0357 11.4091 28 13.0006 28C14.5922 28 15.9407 27.0357 16.5488 25.6682C15.4266 25.7231 14.2596 25.76 13.0006 25.76C11.7418 25.76 10.5748 25.7231 9.45251 25.6682Z" fill="#3E4954"/>
										<path d="M25.3531 19.74C23.8769 17.8785 21.3995 14.2195 21.3995 10.64C21.3995 7.09073 19.1192 3.89758 15.7995 2.72382C15.7592 1.21406 14.5183 0 13.0006 0C11.4819 0 10.2421 1.21406 10.2017 2.72382C6.88095 3.89758 4.60064 7.09073 4.60064 10.64C4.60064 14.2207 2.12434 17.8785 0.647062 19.74C0.154273 20.3616 0.00191325 21.1825 0.240515 21.9363C0.473484 22.6721 1.05361 23.2422 1.79282 23.4595C3.08755 23.8415 5.20991 24.2715 8.44676 24.491C9.84785 24.5851 11.3543 24.64 13.0007 24.64C14.646 24.64 16.1524 24.5851 17.5535 24.491C20.7914 24.2715 22.9127 23.8415 24.2085 23.4595C24.9477 23.2422 25.5268 22.6722 25.7597 21.9363C25.9983 21.1825 25.8448 20.3616 25.3531 19.74Z" fill="#3E4954"/>
									</svg>
									<span id="count" class="badge light text-white bg-primary rounded-circle">0</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <div id="DZ_W_Notification1" class="widget-media dz-scroll p-3 height380">
										<ul id="notif" class="timeline">
										</ul>
									</div>
                                </div>
                            </li>
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown">
                                    <img src="/assets/images/fav-icon-jr.png" width="20" alt=""/>
									<div class="header-info">
										<span class="text-black"><?php echo $username; ?></span>
										<p class="fs-12 mb-0">PENA MAS</p>
									</div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end"> 
                                    <a href="/logout" class="dropdown-item ai-icon">
                                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                        <span class="ms-2">Keluar </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
       <div class="deznav">
            <div class="deznav-scroll">
				<ul class="metismenu" id="menu">
                    <li class="has-menu mm-active"><a href="/admin/dashboard" class="has-arrow ai-icon" aria-expanded="false">
							<i class="flaticon-381-networking"></i>
							<span class="nav-text">Dashboard</span>
						</a>
					</li>
                    <li class="has-menu"><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-notepad"></i>
							<span class="nav-text">Data</span>
						</a>
                        <ul aria-expanded="false">
							<li><a href="/admin/aduan">Layanan Aduan</a></li>
							<li><a href="/admin/aspirasi">Aspirasi</a></li>
							<li><a href="/admin/kecelakaan">Laporan Kecelakaan</a></li> 
						</ul>
                    </li>
                    <li class="has-menu"><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-notepad"></i>
							<span class="nav-text">Master</span>
						</a>
                        <ul aria-expanded="false">
							<li><a href="/admin/user">Data User</a></li>
							<li><a href="/admin/kantor">Data Kantor</a></li>
							<li><a href="/admin/rumahsakit">Data Rumah Sakit</a></li> 
						</ul>
                    </li> 
                    <li class="has-menu"><a href="/logout" class="has-arrow ai-icon" aria-expanded="false">
							<i class="flaticon-381-exit"></i>
							<span class="nav-text">Keluar</span>
						</a>
					</li>
                </ul>
				
				<div class="copyright">
					<p>PENA MAS  © 2023 v1.2</p> 
				</div>
			</div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li> 
					</ol>
                </div>
                <!-- row -->

				<div class="row">
        
					<div class="col-xl-4 col-xxl-4 col-lg-4 col-sm-6">
						<div class="widget-stat card bg-danger">
							<div class="card-body  p-4">
								<div class="media">
									<span class="me-3">
										<i class="flaticon-381-list"></i>
									</span>
									<div class="media-body text-white text-end">
										<p class="mb-1">Jumlah Data Aduan</p>
										<h3 class="text-white"><?=$countAduan;?></h3>
									</div>
								</div>
							</div>
						</div>
                    </div>
					<div class="col-xl-4 col-xxl-4 col-lg-4 col-sm-6">
						<div class="widget-stat card bg-success">
							<div class="card-body p-4">
								<div class="media">
									<span class="me-3">
										<i class="flaticon-381-idea"></i>
									</span>
									<div class="media-body text-white text-end">
										<p class="mb-1">Jumlah Data Aspirasi</p>
										<h3 class="text-white"><?=$countAspirasi;?></h3>
									</div>
								</div>
							</div>
						</div>
                    </div>
					<div class="col-xl-4 col-xxl-4 col-lg-4 col-sm-6">
						<div class="widget-stat card bg-info">
							<div class="card-body p-4">
								<div class="media">
									<span class="me-3">
										<i class="flaticon-381-location"></i>
									</span>
									<div class="media-body text-white text-end">
										<p class="mb-1">Jumlah Data Kecelakaan</p>
										<h3 class="text-white"><?=$countKecelakaan;?></h3>
									</div>
								</div>
							</div>
						</div>
                    </div>

					<div class="col-xl-4 col-xxl-6 col-lg-6">
                        <div class="card border-0 pb-0">
                            <div class="card-header border-0 pb-0">
                                <h4 class="card-title">Aduan Terbaru</h4>
                            </div>
                            <div class="card-body"> 
                                <div id="DZ_W_Todo2" class="widget-media dz-scroll height370">
                                    <ul class="timeline">
										<?php foreach($aduan as $item){?>
                                        <li>
                                            <div class="timeline-panel">
												<div class="media me-2">
												<i class="flaticon-381-list"></i>
												</div>
                                                <div class="media-body">
													<h5 class="mb-1"><?=$item->nama;?></h5>
													<small class="d-block"><?=date('d-M-Y',strtotime($item->tgl));?></small>
												</div>
												<a title="Lihat Detail" href="/admin/aduan/detail/<?=$item->_id;?>" class="badge light badge-success">Lihat <i class="fa fa-eye"></i> </a>
											</div>
                                        </li>
										<?php }?>
                                    </ul>
                                </div>
                            </div>
                        </div>
					</div>
					<div class="col-xl-4 col-xxl-6 col-lg-6">
                        <div class="card border-0 pb-0">
                            <div class="card-header border-0 pb-0">
                                <h4 class="card-title">Aspirasi Terbaru</h4>
                            </div>
                            <div class="card-body"> 
                                <div id="DZ_W_Todo2" class="widget-media dz-scroll height370">
                                    <ul class="timeline">
										<?php foreach($aspirasi as $item){?>
                                        <li>
                                            <div class="timeline-panel">
												<div class="media me-2">
												<i class="flaticon-381-idea"></i>
												</div>
                                                <div class="media-body">
													<h5 class="mb-1"><?=$item->nama;?></h5>
													<small class="d-block"><?=date('d-M-Y',strtotime($item->tgl));?></small>
												</div>
												<a title="Lihat Detail" href="/admin/aspirasi/detail/<?=$item->_id;?>" class="badge light badge-success">Lihat <i class="fa fa-eye"></i> </a>
											</div>
                                        </li>
										<?php }?>
                                    </ul>
                                </div>
                            </div>
                        </div>
					</div>
					<div class="col-xl-4 col-xxl-6 col-lg-6">
                        <div class="card border-0 pb-0">
                            <div class="card-header border-0 pb-0">
                                <h4 class="card-title">Kecelakaan Terbaru</h4>
                            </div>
                            <div class="card-body"> 
                                <div id="DZ_W_Todo2" class="widget-media dz-scroll height370">
                                    <ul class="timeline">
										<?php foreach($kecelakaan as $item){?>
                                        <li>
                                            <div class="timeline-panel">
												<div class="media me-2">
												<i class="flaticon-381-location"></i>
												</div>
                                                <div class="media-body">
													<h5 class="mb-1"><?=$item->pelapor;?></h5>
													<small class="d-block"><?=date('d-M-Y',strtotime($item->tgl));?></small>
												</div>
												<a title="Lihat Detail" href="/admin/kecelakaan/detail/<?=$item->_id;?>" class="badge light badge-success">Lihat <i class="fa fa-eye"></i> </a>
											</div>
                                        </li>
										<?php }?>
                                    </ul>
                                </div>
                            </div>
                        </div>
					</div>
    			</div>



                
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>PENA MAS  © 2023 v1.2</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->

        
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="/admine/vendor/global/global.min.js"></script>
	<script src="/admine/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
	
    <!-- Datatable -->
    <script src="/admine/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="/admine/js/plugins-init/datatables.init.js"></script>

    <script src="/admine/js/custom.min.js"></script>
	<script src="/admine/js/deznav-init.js"></script>
	<!-- <script src="./js/demo.js"></script> -->
    <!-- <script src="./js/styleSwitcher.js"></script> --> 
</body>
</html>