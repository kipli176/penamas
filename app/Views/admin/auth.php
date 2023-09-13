
<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Jobie : jobie Job Portal Admin  Bootstrap 5 Template" />
	<meta property="og:title" content="Jobie : jobie Job Portal Admin  Bootstrap 5 Template" />
	<meta property="og:description" content="Jobie : Job Portal  Admin  Bootstrap 5 Template" />
	<meta property="og:image" content="https://jobie.dexignzone.com/xhtml/social-image.png" />
	<meta name="format-detection" content="telephone=no">
    <title>PENA MAS Dashboard</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/images/fav-icon-jr.png">
    <link href="/admine/css/style.css" rel="stylesheet">

</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
									<div class="text-center mb-3">
                                        <img src="/assets/images/fav-icon-jr.png" width="30%">
									</div>
                                    <h1 class="text-center mb-4 text-white">PENA MAS</h1>
						<p>(PENGADUAN ASPIRASI MASYARAKAT)</p>
                                    <?php
                                        helper('form');

                                    // echo form_open(current_url(true));
                                    if(session()->getFlashdata('msg')) { 
                                        // foreach ($errors as $error) {
                                            echo '<div class="alert alert-danger solid alert-dismissible fade show">
                                            <svg viewBox="0 0 24 24" width="24 " height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2"><polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
                                            <strong>Error!</strong> '.esc(session()->getFlashdata('msg')).'.
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                                            </button>
                                        </div>';
                                        // } 
                                    }
                                    ?>
                                    <form action="/auth" method="post">
                                    
                                        <div class="form-group">
                                            <label class="mb-1 text-white"><strong>Username</strong></label>
                                            <input type="text" class="form-control" name="username">
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1 text-white"><strong>Password</strong></label>
                                            <input type="password" class="form-control" name="password">
                                        </div>
                                        <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                            <!-- <div class="form-group">
                                               <div class="custom-control custom-checkbox ms-1 text-white">
													<input type="checkbox" class="custom-control-input" id="basic_checkbox_1">
													<label class="custom-control-label" for="basic_checkbox_1">Remember my preference</label>
												</div>
                                            </div>
                                            <div class="form-group">
                                                <a class="text-white" href="page-forgot-password.html">Forgot Password?</a>
                                            </div> -->
                                        </div>
                                        <div class="text-center"><input class="btn bg-blue text-primary btn-block" type="submit" name="login" id="login" value="MASUK"/>
                                            <!-- <button type="submit" class="btn bg-white text-primary btn-block">Masuk</button> -->
                                        </div>
                                    </form>
                                    <!-- <div class="new-account mt-3">
                                        <p class="text-white">Don't have an account? <a class="text-white" href="./page-register.html">Sign up</a></p>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="/admine/vendor/global/global.min.js"></script>
    <script src="/admine/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="/admine/js/custom.min.js"></script> 

</body>

</html>