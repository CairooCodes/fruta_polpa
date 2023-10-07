<?php
require "db_config.php";
require "config/helper.php";
require "config/url.class.php";
require "./functions/get.php";

$abouts = getAbouts();
$URI = new URI();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
	<?php include "./components/heads.php"; ?>
</head>


<body>
	<?php include "./components/navbar.php"; ?>
	<div class="mx-auto max-w-6xl pt-2 about">
		<div class="lg:pt-4 lg:p-0 lg:p-10 p-5">
			<div  class="mt-24">
			<?php foreach ($abouts as $about) {
				echo $about['texto'];
			} ?>
			</div>
		</div>
	</div>
	<?php include "./components/footer.php"; ?>
	<?php include "./components/modal_form_whats.php"; ?>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
	<script src="assets/js/tw.js"></script>
	<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
	<script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
	<script src="./assets/js/lz.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

</body>

</html>