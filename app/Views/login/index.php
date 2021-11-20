<!DOCTYPE html>

<html lang="en">
<head>
		<!-- End Google Tag Manager -->
		<meta charset="utf-8" />
		<title>Login</title>
		<meta name="description" content="Login page example" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<link rel="canonical" href="https://keenthemes.com/metronic" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Page Custom Styles(used by this page)-->
		<link href="./assets/css/pages/login/classic/login-41ff3.css?v=7.1.2" rel="stylesheet" type="text/css" />
		<!--end::Page Custom Styles-->
		<!--begin::Global Theme Styles(used by all pages)-->
		<link href="./assets/plugins/global/plugins.bundle.css?v=7.1.2" rel="stylesheet" type="text/css" />
		<link href="./assets/plugins/custom/prismjs/prismjs.bundle.css?v=7.1.2" rel="stylesheet" type="text/css" />
		<link href="./assets/css/style.bundle.css?v=7.1.2" rel="stylesheet" type="text/css" />
		<!--end::Global Theme Styles-->
		<!--begin::Layout Themes(used by all pages)-->
		<link href="./assets/css/themes/layout/header/base/light.css?v=7.1.2" rel="stylesheet" type="text/css" />
		<link href="./assets/css/themes/layout/header/menu/light.css?v=7.1.2" rel="stylesheet" type="text/css" />
		<link href="./assets/css/themes/layout/brand/dark.css?v=7.1.2" rel="stylesheet" type="text/css" />
		<link href="./assets/css/themes/layout/aside/dark.css?v=7.1.2" rel="stylesheet" type="text/css" />
		<!--end::Layout Themes-->
		
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
		<!-- Google Tag Manager (noscript) -->
		<noscript>
			<iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FS8GGP" height="0" width="0" style="display:none;visibility:hidden"></iframe>
		</noscript>
		<!-- End Google Tag Manager (noscript) -->
		<!--begin::Main-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Login-->
			<div class="login login-4 login-signin-on d-flex flex-row-fluid" id="kt_login">
				<div class="d-flex flex-center flex-row-fluid bgi-size-cover bgi-position-top bgi-no-repeat" style="background-image: url('./assets/media/bg/bg-9.jpg');">
					<div class="login-form text-center p-7 position-relative overflow-hidden">
						<!--begin::Login Header-->
						<div class="d-flex flex-center mb-15">
							<a href="#">
								<img src="./assets/media/logos/logo-letter-13.png" class="max-h-75px" alt="" />
							</a>
						</div>
						<!--end::Login Header-->
						<!--begin::Login Sign in form-->
						<div class="login-signin">
							<div class="mb-20">
								<h3>Silahkan Login</h3>
							</div>
							<?php if (session()->getFlashdata('error')) :?>
							<div class="alert alert-custom alert-light-danger fade show mb-5" role="alert">
						    <div class="alert-icon"><i class="flaticon2-warning"></i></div>
						    <div class="alert-text"><?=session()->getFlashdata('error')?></div>
						    <div class="alert-close">
						        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
						            <span aria-hidden="true"><i class="ki ki-close"></i></span>
						        </button>
						    </div>
							</div>
							<?php endif ?>
							<form class="form" id="kt_login_signin_form" method="post" action="/Login/in">
								<div class="form-group mb-5">
									<input class="form-control h-auto form-control-solid py-4 px-8" type="text" placeholder="Username" name="username" autocomplete="off"/>
								</div>
								<div class="form-group mb-5 input-icon input-icon-right">
									<input class="form-control h-auto form-control-solid py-4 px-8" type="password" placeholder="Password" name="password" id="password" autocomplete="off" />
									<span id="toggle">
										<i class="far fa-eye text-muted "></i>
										<i class="far fa-eye-slash text-muted d-none"></i>
									</span>
								</div>
								
								<button id="kt_login_signin_submit" class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-4">Login</button>
							</form>
							
						</div>
						<!--end::Login Sign in form-->
					</div>
				</div>
			</div>
			<!--end::Login-->
		</div>
		<!--end::Main-->
		
		<!--begin::Global Config(global config for global JS scripts)-->
		<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1400 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#3699FF", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#E4E6EF", "dark": "#181C32" }, "light": { "white": "#ffffff", "primary": "#E1F0FF", "secondary": "#EBEDF3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#3F4254", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#EBEDF3", "gray-300": "#E4E6EF", "gray-400": "#D1D3E0", "gray-500": "#B5B5C3", "gray-600": "#7E8299", "gray-700": "#5E6278", "gray-800": "#3F4254", "gray-900": "#181C32" } }, "font-family": "Poppins" };</script>
		<!--end::Global Config-->
		<!--begin::Global Theme Bundle(used by all pages)-->
		<script src="./assets/plugins/global/plugins.bundle.js?v=7.1.2"></script>
		<script src="./assets/plugins/custom/prismjs/prismjs.bundle.js?v=7.1.2"></script>
		<script src="./assets/js/scripts.bundle.js?v=7.1.2"></script>
		<!--end::Global Theme Bundle-->
		<!--begin::Page Scripts(used by this page)-->
		<script src="./assets/js/pages/custom/login/login-general1ff3.js?v=7.1.2"></script>
		<!--end::Page Scripts-->

		<script>
			$('#toggle').click(function(event) {
				if ($('#password').attr('type') =='password') {
					$('#password').attr('type', 'text');
				} 
				else {
					$('#password').attr('type', 'password');
				}
				$('.fa-eye , .fa-eye-slash').toggleClass('d-none');
			});
		</script>
	</body>
	<!--end::Body-->

<!-- Mirrored from preview.keenthemes.com/metronic/demo1/custom/pages/login/classic/login-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 03 Oct 2020 16:40:26 GMT -->
</html>