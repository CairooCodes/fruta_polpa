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
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
	<style>
		.owl-carousel {
			position: relative;
		}

		.custom-navigation {
			position: absolute;
			top: 50%;
			transform: translateY(-50%);
		}

		.custom-navigation .prev,
		.custom-navigation .next {
			color: #fff;
			padding: 10px 15px;
			border: none;
			cursor: pointer;
		}

		.custom-navigation .prev {
			position: absolute;
			left: 0;
		}

		.custom-navigation .next {
			position: absolute;
			right: 0;
		}

		
	</style>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
</head>


<body>
	<?php include "./components/navbar.php"; ?>
	<div class="mx-auto max-w-6xl pt-2 about">
		<div class="lg:pt-4 lg:p-0 lg:p-10 p-5">
			<div class="mt-24 font-sans">
				<?php foreach ($abouts as $about) {
					echo $about['texto'];
				} ?>
			</div>
		</div>
	</div>

	<div>
		<div class="text-center">
			<p class="text-2xl text-orange-600 uppercase font-sans">Nossa História</p>
			<h1 class="font-bold text-orange-600 text-5xl font-sans">
				Linha do Tempo
			</h1>
		</div>

	</div>

	<div class="mx-auto max-w-6xl pt-2 about">
		<section>
			<div class="lg:pt-4 lg:p-0 lg:p-10 p-5">
				<div class="grid grid-cols-2 gap-4">
					<div class="mx-auto">
						<h1 class="font-extrabold text-orange-600 text-4xl font-sans uppercase py-10">Fazendas</h1>
						<p class="text-medium font-sans">A qualidade dos produtos "in natura" e congelados De Marchi tem origem nas fazendas do grupo e também dos produtores parceiros. Elas são a garantia de produtos cultivados com muito cuidado e sabor incomparáveis.</p>
					</div>
					<!-- Your HTML Structure -->
					<div class="owl-carousel">
						<div class="item">
							<img src="./assets/img/fazenda.png" alt="fazenda">
							<div class="custom-navigation">
								<button type="button" class="next flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-next>
									<span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
										<svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
											<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
										</svg>
										<span class="hidden">Next</span>
									</span>
								</button>
							</div>
						</div>
						<div class="item">
							<img src="./assets/img/fazenda2.png" alt="fazenda2">
							<div class="custom-navigation">
								<button type="button" class="next flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-next>
									<span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
										<svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
											<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
										</svg>
										<span class="hidden">Next</span>
									</span>
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section>
			<div class="lg:pt-4 lg:p-0 lg:p-10 p-5">
				<div class="grid grid-cols-2 gap-4">
					<div class="mx-auto">
						<h1 class="font-extrabold text-orange-600 text-4xl font-sans uppercase py-10">Indústria</h1>
						<p class="text-medium font-sans">O grupo conta com mais de 3.000 profissionais altamente capacitados e modernos equipamentos para garantir produtos minimamente processados, mantendo toda qualidade e sabor que vem direto do campo.</p>
					</div>
					<!-- Your HTML Structure -->
					<div class="owl-carousel">
						<div class="item">
							<img src="./assets/img/industria.png" alt="industria">
							<div class="custom-navigation">
								<button type="button" class="next flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-next>
									<span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
										<svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
											<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
										</svg>
										<span class="hidden">Next</span>
									</span>
								</button>
							</div>
						</div>
						<div class="item">
							<img src="./assets/img/industria2.png" alt="industria2">
							<div class="custom-navigation">
								<button type="button" class="next flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-next>
									<span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
										<svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
											<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
										</svg>
										<span class="hidden">Next</span>
									</span>
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section>
			<div class="lg:pt-4 lg:p-0 lg:p-10 p-5">
				<div class="grid grid-cols-2 gap-4">
					<div class="mx-auto">
						<h1 class="font-extrabold text-orange-600 text-4xl font-sans uppercase py-10">Fazendas</h1>
						<p class="text-medium font-sans">A qualidade dos produtos "in natura" e congelados De Marchi tem origem nas fazendas do grupo e também dos produtores parceiros. Elas são a garantia de produtos cultivados com muito cuidado e sabor incomparáveis.</p>
					</div>
					<!-- Your HTML Structure -->
					<div class="owl-carousel">
						<div class="item">
							<img src="./assets/img/supermercado.png" alt="supermercado">
							<div class="custom-navigation">
								<button type="button" class="next flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-next>
									<span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
										<svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
											<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
										</svg>
										<span class="hidden">Next</span>
									</span>
								</button>
							</div>
						</div>
						<div class="item">
							<img src="./assets/img/supermercado2.png" alt="supermercado2">
							<div class="custom-navigation">
								<button type="button" class="next flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-next>
									<span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
										<svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
											<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
										</svg>
										<span class="hidden">Next</span>
									</span>
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
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
	<!-- Include Owl Carousel JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
	<!-- Initialize Owl Carousel with Custom Navigation -->
	<script>
		$(document).ready(function() {
			var owl = $(".owl-carousel").owlCarousel({
				items: 1, // Number of items to display at a time
				loop: true, // Enable loop
				autoplay: false, // Disable autoplay
			});

			// Custom navigation button events
			$(".custom-navigation .prev").on("click", function() {
				owl.trigger("prev.owl.carousel");
			});

			$(".custom-navigation .next").on("click", function() {
				owl.trigger("next.owl.carousel");
			});
		});
	</script>
	<script>
		$(document).ready(function() {
			var owl = $(".owl-carousel").owlCarousel({
				items: 1, // Number of items to display at a time
				loop: true, // Enable loop
				autoplay: false, // Disable autoplay
			});

			// Custom navigation button events
			$(".custom-navigation .prev").on("click", function() {
				owl.trigger("prev.owl.carousel");
			});

			$(".custom-navigation .next").on("click", function() {
				owl.trigger("next.owl.carousel");
			});
		});
	</script>
	<script>
		$(document).ready(function() {
			var owl = $(".owl-carousel").owlCarousel({
				items: 1, // Number of items to display at a time
				loop: true, // Enable loop
				autoplay: false, // Disable autoplay
			});

			// Custom navigation button events
			$(".custom-navigation .prev").on("click", function() {
				owl.trigger("prev.owl.carousel");
			});

			$(".custom-navigation .next").on("click", function() {
				owl.trigger("next.owl.carousel");
			});
		});
	</script>

</body>

</html>