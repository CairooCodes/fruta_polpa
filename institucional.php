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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
</head>


<body>
  <?php include "./components/navbar.php"; ?>
  <section class="max-w-full px-4 pt-10 mx-auto fade-in-up">
    <div class="mx-auto md:max-w-7xl">
      <div class="grid md:grid-cols-2">
        <div class="grid grid-rows-3">
          <div class="bg-red-600 rounded-t-2xl md:rounded-t-none md:rounded-tl-2xl">
            <div class="flex h-full items-center">
              <h1 class="-rotate-90 text-white text-2xl font-[1000]">Missão</h1>
              <h3 class="px-8 text-white text-lg">
                Orientados por nossos valores e com a
                nutrição como foco central, trabalhamos
                junto com nossos parceiros para melhorar
                a qualidade de vida e contribuir para um
                futuro mais saudável.
              </h3>
            </div>
          </div>
          <div class="bg-orange-500">
            <div class="flex h-full items-center">
              <h1 class="-rotate-90 text-white text-2xl font-[1000]">Visão</h1>
              <h3 class="px-8 text-white text-lg">
                Deﬁnimos como meta direcionar
                esforços para alcançarmos a liderança
                no segmento até 2028 de forma
                sustentável.
              </h3>
            </div>
          </div>
          <div class="bg-orange-400 md:rounded-bl-2xl  ">
            <div class="flex h-full items-center">
              <h1 class="-rotate-90 text-white text-2xl font-[1000]">Valores</h1>
              <h3 class="px-8 text-white text-lg">
                Respeito ao próximo;<br>
                Humildade;<br>
                Proatividade;<br>
                Comprometimento<br>
              </h3>
            </div>
          </div>
        </div>
        <div class="">
          <img class="w-full rounded-b-2xl md:rounded-b-none  md:rounded-r-2xl" src="<?php echo $URI->base("/assets/img/institucional.png"); ?>" alt="">
        </div>
      </div>
    </div>
    <div class="mx-auto lg:pb-16 pb-4 py-12">
      <div class="text-center">
        <p class="text-2xl text-orange-600 uppercase font-sans">Nossa História</p>
        <h1 class="font-bold text-orange-600 lg:text-5xl text-xl font-sans mb-2">
          Linha do Tempo
        </h1>
      </div>
    </div>
    <div class="grid md:grid-cols-4 gap-4 mx-auto md:px-20 justify-center">
      <div class="">
        <div class="flex gap-2 mr-2 p-2">
          <i class="bi bi-dot"></i>
          <i class="bi bi-dot"></i>
          <i class="bi bi-dot"></i>
          <i class="bi bi-dot"></i>
          <i class="bi bi-dot"></i>
          <i class="bi bi-dot"></i>
          <i class="bi bi-dot"></i>
          <i class="bi bi-dot"></i>
          <i class="bi bi-dot"></i>
          <i class="bi bi-dot"></i>
          <i class="bi bi-dot"></i>
          <i class="bi bi-dot"></i>
          <i class="bi bi-dot"></i>
          <i class="text-center bi bi-record-circle"></i>
        </div>
        <div class="grid justify-start">
          <p class="text-gray-500">(2003)<br><span class="font-semibold font-sans text-color1">Fundação</span></p>
          <p class="font-sans">Fundada no ano de 2003, a Fruta Polpa iniciou suas atividades<br>
            vendendo frutas in natura na cidade de Teresina.<br>
            Com apenas 04 colaboradores, começou o negócio de <br>produção de polpas.</p>
        </div>
      </div>
      <div class="">
        <div class="flex gap-2 mr-2 p-2">
          <i class="bi bi-dot"></i>
          <i class="bi bi-dot"></i>
          <i class="bi bi-dot"></i>
          <i class="bi bi-dot"></i>
          <i class="bi bi-dot"></i>
          <i class="bi bi-dot"></i>
          <i class="bi bi-dot"></i>
          <i class="bi bi-dot"></i>
          <i class="bi bi-dot"></i>
          <i class="bi bi-dot"></i>
          <i class="bi bi-dot"></i>
          <i class="bi bi-dot"></i>
          <i class="bi bi-dot"></i>
          <i class="text-center bi bi-record-circle"></i>
        </div>
        <div class="grid justify-start">
          <p class="text-gray-500">(2010)<br><span class="font-semibold font-sans text-color1">Expanção Nacional</span></p>
          <p class="font-sans">Fundada no ano de 2003, a Fruta Polpa iniciou suas atividades<br>
            vendendo frutas in natura na cidade de Teresina.<br>
            Com apenas 04 colaboradores, começou o negócio de <br>produção de polpas.</p>
        </div>
      </div>
      <div class="">
        <div class="flex gap-2 mr-2 p-2">
          <i class="bi bi-dot"></i>
          <i class="bi bi-dot"></i>
          <i class="bi bi-dot"></i>
          <i class="bi bi-dot"></i>
          <i class="bi bi-dot"></i>
          <i class="bi bi-dot"></i>
          <i class="bi bi-dot"></i>
          <i class="bi bi-dot"></i>
          <i class="bi bi-dot"></i>
          <i class="bi bi-dot"></i>
          <i class="bi bi-dot"></i>
          <i class="bi bi-dot"></i>
          <i class="bi bi-dot"></i>
          <i class="text-center bi bi-record-circle"></i>
        </div>
        <div class="grid justify-start">
          <p class="text-gray-500">(2015)<br><span class="font-semibold font-sans text-color1">Lançamento de Novos Produtos</span></p>
          <p class="font-sans text-justify">Fundada no ano de 2003, a Fruta Polpa iniciou suas atividades<br>
            vendendo frutas in natura na cidade de Teresina.<br>
            Com apenas 04 colaboradores, começou o negócio de <br>produção de polpas.</p>
        </div>
      </div>
      <div class="">
        <div class="flex gap-2 mr-2 p-2">
          <i class="bi bi-dot"></i>
          <i class="bi bi-dot"></i>
          <i class="bi bi-dot"></i>
          <i class="bi bi-dot"></i>
          <i class="bi bi-dot"></i>
          <i class="bi bi-dot"></i>
          <i class="bi bi-dot"></i>
          <i class="bi bi-dot"></i>
          <i class="bi bi-dot"></i>
          <i class="bi bi-dot"></i>
          <i class="bi bi-dot"></i>
          <i class="bi bi-dot"></i>
          <i class="bi bi-dot"></i>
          <i class="text-center bi bi-record-circle"></i>
        </div>
        <div class="grid justify-start">
          <p class="text-gray-500">(2018)<br><span class="font-semibold font-sans text-color1">Parceria Global</span></p>
          <p class="font-sans text-justify">Fundada no ano de 2003, a Fruta Polpa iniciou suas atividades<br>
            vendendo frutas in natura na cidade de Teresina.<br>
            Com apenas 04 colaboradores, começou o negócio de <br>produção de polpas.</p>
        </div>

      </div>
    </div>
    <div class="mx-auto max-w-6xl pt-2 about mt-24">
      <section>
        <div class="lg:pt-4 lg:p-0 lg:p-10">
          <div class="md:grid md:grid-cols-2 md:gap-6">
            <div class="mx-auto">
              <h1 class="font-extrabold text-orange-600 text-4xl font-sans uppercase pb-3 lg:py-10">Fazendas</h1>
              <p class="text-medium font-sans text-justify">A qualidade dos produtos "in natura" e congelados De Marchi tem origem nas fazendas do grupo e também dos produtores parceiros. Elas são a garantia de produtos cultivados com muito cuidado e sabor incomparáveis.</p>
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
        <div class="lg:pt-4 lg:p-0 lg:p-10">
          <div class="md:grid md:grid-cols-2 md:gap-6">

            <div class="mx-auto">
              <h1 class="font-extrabold text-orange-600 text-4xl font-sans uppercase pb-3 lg:py-10">Indústria</h1>
              <p class="text-medium font-sans text-justify">O grupo conta com mais de 3.000 profissionais altamente capacitados e modernos equipamentos para garantir produtos minimamente processados, mantendo toda qualidade e sabor que vem direto do campo.</p>
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
        <div class="lg:pt-4 lg:p-0 lg:p-10 p-2">
          <div class="md:grid md:grid-cols-2 md:gap-6">
            <div class="mx-auto">
              <h1 class="font-extrabold text-orange-600 text-4xl font-sans uppercase pb-3 lg:py-10">Supermercados</h1>
              <p class="text-medium font-sans text-justify">A De Marchi abastece, diariamente, centenas de supermercados por todo país e também administra as seções FLV (Frutas, Legumes e Verduras) de renomadas redes de supermercados.</p>
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
  </section>
  <?php include "./components/footer.php"; ?>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
  <script src="assets/js/tw.js"></script>
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
  <script src="./assets/js/lz.js"></script>
  <script src="./assets/js/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
  <!-- Include Owl Carousel JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <!-- Initialize Owl Carousel with Custom Navigation -->
  <script>
    $(document).ready(function() {
      var owl = $(".owl-carousel").owlCarousel({
        items: 1.1, // Number of items to display at a time
        loop: true, // Enable loop
        autoplay: true, // Disable autoplay
        margin: 10,
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