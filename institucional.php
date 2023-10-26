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

		linha do tempo body {
			font-family: Arial, sans-serif;
			background-color: #f4f4f4;
			text-align: center;
			margin: 0;
			padding: 0;
		}

		.timeline {
			position: relative;
			margin: 50px auto;
			width: 90%;
			height: 4px;
			background: #ff5733;
		}

		.event {
			position: absolute;
			width: 24px;
			height: 24px;
			background: #ff5733;
			border-radius: 50%;
			transform: translateX(-50%);
			cursor: pointer;
			box-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
		}

		.event:hover {
			background: #ff5733;
		}

		.event-label {
			position: absolute;
			top: 70px;
			text-align: center;
			width: 150px;
			left: 50%;
			transform: translateX(-50%);
			font-weight: bold;
			background: #fff;
			padding: 10px;
			border-radius: 6px;
			box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
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

	<div class="pb-24">
		<div class="text-center">
			<p class="text-2xl text-orange-600 uppercase font-sans">Nossa História</p>
			<h1 class="font-bold text-orange-600 text-5xl font-sans mb-2">
				Linha do Tempo
			</h1>
		</div>
		<div class="timeline">
			<div class="event" style="left: 10%;"></div>
			<div class="event-label" style="left: 10%;">Fundação (2005)</div>
			<div class="event" style="left: 30%;"></div>
			<div class="event-label" style="left: 30%;">Expansão Nacional (2010)</div>
			<div class="event" style="left: 50%;"></div>
			<div class="event-label" style="left: 50%;">Lançamento de Novos Produtos (2015)</div>
			<div class="event" style="left: 70%;"></div>
			<div class="event-label" style="left: 70%;">Parceria Global (2018)</div>
			<div class="event" style="left: 90%;"></div>
			<div class="event-label" style="left: 90%;">Hoje</div>
		</div>
	</div>

	<div class="mx-auto max-w-6xl pt-2 about mt-24">
		<section>
			<div class="lg:pt-4 lg:p-0 lg:p-10 p-5">
				<div class="md:grid md:grid-cols-2 md:gap-6">
					<div class="mx-auto">
						<h1 class="font-extrabold text-orange-600 text-4xl font-sans uppercase pb-3 lg:py-10">Fazendas</h1>
						<p class="text-medium font-sans">A qualidade dos produtos "in natura" e congelados De Marchi tem origem nas fazendas do grupo e também dos produtores parceiros. Elas são a garantia de produtos cultivados com muito cuidado e sabor incomparáveis.</p>
					</div>
					<!-- Your HTML Structure -->
					<div class="owl-carousel">
						<div class="item">
							<img src="./assets/img/fazenda.png" class="rounded-lg lg:h-80 cover" alt="fazenda">
						</div>
						<div class="item">
							<img src="./assets/img/fazenda2.png" class="rounded-lg lg:h-80 cover" alt="fazenda2">
						</div>
					</div>
				</div>
			</div>
		</section>

		<section>
			<div class="lg:pt-4 lg:p-0 lg:p-10 p-5">
				<div class="md:grid md:grid-cols-2 md:gap-6">

					<div class="mx-auto">
						<h1 class="font-extrabold text-orange-600 text-4xl font-sans uppercase pb-3 lg:py-10">Indústria</h1>
						<p class="text-medium font-sans ">O grupo conta com mais de 3.000 profissionais altamente capacitados e modernos equipamentos para garantir produtos minimamente processados, mantendo toda qualidade e sabor que vem direto do campo.</p>
					</div>

					<!-- Your HTML Structure -->
					<div class="owl-carousel order-first">
						<div class="item">
							<img src="./assets/img/industria2.png" class="rounded-lg lg:h-80 cover" alt="industria">
						</div>
						<div class="item">
							<img src="./assets/img/industria.png" class="rounded-lg lg:h-80 cover" alt="industria2">
						</div>
					</div>

				</div>
			</div>
		</section>

		<section>
			<div class="lg:pt-4 lg:p-0 lg:p-10 p-5">
				<div class="md:grid md:grid-cols-2 md:gap-6">
					<div class="mx-auto">
						<h1 class="font-extrabold text-orange-600 text-4xl font-sans uppercase pb-3 lg:py-10">Supermercados</h1>
						<p class="text-medium font-sans">A De Marchi abastece, diariamente, centenas de supermercados por todo país e também administra as seções FLV (Frutas, Legumes e Verduras) de renomadas redes de supermercados.</p>
					</div>
					<!-- Your HTML Structure -->
					<div class="owl-carousel">
						<div class="item">
							<img src="./assets/img/supermercado.png" class="rounded-lg" alt="supermercado">
						</div>
						<div class="item">
							<img src="./assets/img/supermercado2.png" class="rounded-lg" alt="supermercado2">
						</div>
					</div>
				</div>
			</div>
		</section>
		<div class="mb-10">
			<a href="<?php echo $URI->base("distribuidores"); ?>" class="flex justify-center">
				<button class="middle none center rounded-lg bg-orange-500 py-5 px-4 shadow-md shadow-orange-500/20 transition-all hover:shadow-lg hover:shadow-orange-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none rounded-full font-sans text-white uppercase font-bold">
					<span class="pr-2">Encontre o Distribuidor mais próximo</span><i class="bi bi-chevron-right"></i>
				</button>
			</a>
		</div>
	</div>
	<?php include "./components/footer.php"; ?>

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