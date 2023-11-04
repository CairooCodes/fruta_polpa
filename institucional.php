<?php
require "db_config.php";
require "config/helper.php";
require "config/url.class.php";
require "./functions/get.php";

$polpas2 = getPolpas2();
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

    <div class="mx-auto lg:pb-16 pb-4">
      <div class="text-center">
        <p class="text-2xl text-orange-600 uppercase font-sans">Nossa História</p>
        <h1 class="font-bold text-orange-600 lg:text-5xl text-xl font-sans mb-2">
          Linha do Tempo
        </h1>
      </div>
    </div>
    <div class="flex flex-col sm:flex-row justify-between md:max-w-6xl mx-auto">
      <div class="mb-4 sm:mr-4">
        <div class="grid justify-start">
          <div class="flex">
            <div class="grid grid-rows-2 gap-2 mr-2 p-2">
              <i class="text-center bi bi-record-circle"></i>
              <i class="bi bi-dot"></i>
              <i class="bi bi-dot"></i>
              <i class="bi bi-dot"></i>
              <i class="bi bi-dot"></i>
              <i class="bi bi-dot"></i>
            </div>
            <div class="grid justify-start">
              <p class="text-gray-500">(2003)<br><span class="font-semibold font-sans text-color1">Fundação</span></p>
              <p class="font-sans">Fundada no ano de 2003, a Fruta Polpa iniciou suas atividades<br>
                vendendo frutas in natura na cidade de Teresina.<br>
                Com apenas 04 colaboradores, começou o negócio de <br>produção de polpas.</p>
            </div>
          </div>
          <br>
          <div class="flex">
            <div class="grid grid-rows-2 gap-2 mr-2 p-2">
              <i class="text-center bi bi-record-circle"></i>
              <i class="bi bi-dot"></i>
              <i class="bi bi-dot"></i>
              <i class="bi bi-dot"></i>
              <i class="bi bi-dot"></i>
              <i class="bi bi-dot"></i>
            </div>
            <div class="grid justify-start">
              <p class="text-gray-500">(2010)<br><span class="font-semibold font-sans text-color1">Expanção Nacional</span></p>
              <p class="font-sans">Fundada no ano de 2003, a Fruta Polpa iniciou suas atividades<br>
                vendendo frutas in natura na cidade de Teresina.<br>
                Com apenas 04 colaboradores, começou o negócio de <br>produção de polpas.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="grid justify-items-end">
        <div class="text-right img-right">
          <div class="flex">
            <div class="grid justify-start">
              <p class="text-gray-500">(2015)<br><span class="font-semibold font-sans text-color1">Lançamento de Novos Produtos</span></p>
              <p class="font-sans text-justify"><br>Fundada no ano de 2003, a Fruta Polpa iniciou suas atividades<br>
                vendendo frutas in natura na cidade de Teresina.<br>
                Com apenas 04 colaboradores, começou o negócio de <br>produção de polpas.</p>
            </div>
            <div class="grid grid-rows-2 gap-2 mr-2 p-2">
              <i class="text-center bi bi-record-circle"></i>
              <i class="bi bi-dot"></i>
              <i class="bi bi-dot"></i>
              <i class="bi bi-dot"></i>
              <i class="bi bi-dot"></i>
              <i class="bi bi-dot"></i>
            </div>
          </div>
          <br>
          <div class="flex">
            <div class="grid justify-start">
              <p class="text-gray-500">(2018)<br><span class="font-semibold font-sans text-color1">Parceria Global</span></p>
              <p class="font-sans text-justify"><br>Fundada no ano de 2003, a Fruta Polpa iniciou suas atividades<br>
                vendendo frutas in natura na cidade de Teresina.<br>
                Com apenas 04 colaboradores, começou o negócio de <br>produção de polpas.</p>
            </div>
            <div class="grid grid-rows-2 gap-2 mr-2 p-2">
              <i class="text-center bi bi-record-circle"></i>
              <i class="bi bi-dot"></i>
              <i class="bi bi-dot"></i>
              <i class="bi bi-dot"></i>
              <i class="bi bi-dot"></i>
              <i class="bi bi-dot"></i>
            </div>
          </div>
        </div>
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
    <div class="mb-10 mt-20">
      <div class="mx-auto px-2">
        <h1 class="text-orange-600 px-6 lg:px-28 text-center text-3xl font-extrabold leading-9 tracking-tight sm:text-4xl sm:leading-10 md:text-3xl md:leading-14">
          Conheça nossa equipe
        </h1>
        <div class="mx-auto px-6 lg:px-48">
          <div class="">
            <div class="swiper swiper_equip py-8  ">
              <div class="swiper-wrapper ">
                <div class="swiper-slide my-4 mx-1">
                  <div class="max-w-full p-1 mx-auto rounded-md shadow2">
                    <div>
                      <img src="./assets/img/seleção.png" alt="">
                    </div>
                  </div>
                </div>
                <div class="swiper-slide my-4 mx-1">
                  <div class="max-w-full p-1 mx-auto rounded-md shadow2">
                    <div>
                      <img src="./assets/img/supermercado.png" alt="">
                    </div>
                  </div>
                </div>
                <div class="swiper-slide my-4 mx-1">
                  <div class="max-w-full p-1 mx-auto rounded-md shadow2">
                    <div>
                      <img src="./assets/img/tecnologia.png" alt="">
                    </div>
                  </div>
                </div>
                <div class="swiper-slide my-4 mx-1">
                  <div class="max-w-full p-1 mx-auto rounded-md shadow2">
                    <div>
                      <img src="./assets/img/industria2.png" alt="">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- <div class="swiper-button-next font-black text-orange-500 hover:text-orange-700 lg:mr-12"></div>
            <div class="swiper-button-prev font-black text-orange-500 hover:text-orange-700 lg:ml-12"></div> -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php include "./components/footer.php"; ?>
  <?php include "./components/modal_form_whatsapp.php" ?>
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

  <script>
    var swiper = new Swiper(".swiper_equip", {
      loop: true,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      breakpoints: {
        300: {
          slidesPerView: 1,
          spaceBetween: 20,
        },
        640: {
          slidesPerView: 2,
          spaceBetween: 10,
        },
        768: {
          slidesPerView: 3,
          spaceBetween: 20,
        },
      },
    });
  </script>
  <script>
    // JavaScript para abrir o WhatsApp ao clicar no botão
    document.getElementById('openWhatsApp').addEventListener('click', function() {
      window.open('https://api.whatsapp.com/send?phone=5586994293833&text=Olá%20Fruta%20Polpa-site', '_blank');
    });
  </script>
</body>

</html>