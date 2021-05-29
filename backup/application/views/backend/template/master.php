<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('backend/template/layout/header'); ?>
</head>

<body>
<!-- BEGIN LOADER -->
<div id="load_screen">
	<div class="loader">
		<div class="loader-content">
			<div class="spinner-grow align-self-center"></div>
		</div>
	</div>
</div>
<!--  END LOADER -->

<!--  BEGIN NAVBAR  -->
<?php $this->load->view('backend/template/layout/navbar'); ?>
<!--  END NAVBAR  -->

<!--  BEGIN MAIN CONTAINER  -->
<div class="main-container" id="container">

	<div class="overlay"></div>
	<div class="search-overlay"></div>

	<!--  BEGIN SIDEBAR  -->
	<?php $this->load->view('backend/template/layout/menu'); ?>
	<!--  END SIDEBAR  -->

	<!--  BEGIN CONTENT AREA  -->
	<div id="content" class="main-content">
		<!-- start: main content-->
		<?= $konten ?>
		<!-- end: main content-->

		<!-- start: footer -->
		<div class="footer-wrapper">
			<div class="footer-section f-section-1">
				<p class="">Copyright © 2020 - <?= date('Y') ?> <a target="_blank" href="https://dapusyabab.com">Mie Syabab</a>, All rights reserved.</p>
			</div>
			<div class="footer-section f-section-2">
				<p class="">Page load in <?= $this->benchmark->elapsed_time() ?> s</p>
			</div>
		</div>
		<!-- end: footer-->
	</div>

	<!--  END CONTENT AREA  -->

</div>
<!-- END MAIN CONTAINER -->

<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
<?php $this->load->view('backend/template/layout/footer'); ?>
<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->

</body>

</html>
