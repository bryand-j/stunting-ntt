<!DOCTYPE html>

<html lang="en">

	<!--begin::Head-->
	<head>
		<base href="">
		<meta charset="utf-8" />
		<title><?=$title; ?></title>
		<meta name="description" content="Website Portal Stunting NTT" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />

		<!--end::Fonts-->

		<!--begin::Page Vendors Styles(used by this page)-->
		<link href="/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />

		<!--end::Page Vendors Styles-->

		<!--begin::Global Theme Styles(used by all pages)-->
		<link href="/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="/assets/plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet" type="text/css" />
		<link href="/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />

		<!--end::Global Theme Styles-->

		<!--begin::Layout Themes(used by all pages)-->
		<link href="/assets/css/themes/layout/header/base/light.css" rel="stylesheet" type="text/css" />
		<link href="/assets/css/themes/layout/header/menu/light.css" rel="stylesheet" type="text/css" />
		<link href="/assets/css/themes/layout/brand/light.css" rel="stylesheet" type="text/css" />
		<link href="/assets/css/themes/layout/aside/light.css" rel="stylesheet" type="text/css" />

		<!--end::Layout Themes-->
		<link rel="icon" href="/logo/logo.png" />
	</head>

	<!--end::Head-->

	<!--begin::Body-->
	<body id="kt_body" class="page-loading-enabled page-loading header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">

		<!--[html-partial:include:{"file":"partials/_page-loader.html"}]/-->
		<?=view('partials/_page-loader'); ?>

		<?=view('partials/_header-mobile'); ?>
		<div class="d-flex flex-column flex-root">

			<!--begin::Page-->
			<div class="d-flex flex-row flex-column-fluid page">

				<?=view('partials/_aside'); ?>
				<!--begin::Wrapper-->
				<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">

					<?=view('partials/_header'); ?>

					<!--begin::Content-->
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">

						<?=$this->renderSection('content'); ?>

						<!-- end div tag on file script -->

	</body>
</html>