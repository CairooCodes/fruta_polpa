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
</head>


<body>
  <?php include "./components/navbar.php"; ?>
  <section class="max-w-full px-4 pt-10 mx-auto">
    <section class="mx-auto md:max-w-7xl">
      <div class="grid md:grid-cols-2">
        <div class="grid grid-rows-3">
          <div class="bg-red-600 rounded-t-2xl md:rounded-t-none md:rounded-tl-2xl">
            <div class="flex h-full items-center">
              <h1 class="-rotate-90 text-white text-2xl font-[1000] lg:ml-2 ml-3">Missão</h1>
              <h3 class="lg:px-8 px-2 py-2 text-white lg:text-lg text-md">
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
              <h1 class="-rotate-90 text-white text-2xl font-[1000] ml-4 lg:ml-3">Visão</h1>
              <h3 class="lg:px-8 px-2 text-white lg:text-lg text-md ml-2">
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
              <h3 class="lg:px-8 px-2 text-white lg:text-lg text-md">
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
    </section>
    <section class="bg-white max-w-full header-institucional">
      <div class="max-w-full lg:pl-24 mx-auto lg:grid grid-cols-2 gap-10">
        <div class="lg:mt-14 mt-6 text-justify">
          <p style="letter-spacing: 0.5px;" class="text-gray-800">Há mais de 15 anos, a <span class="font-black text-color1">Fruta Polpa</span> é presença marcante na mesa dos piauienses. Aliada da saúde e do bem-estar, é uma das maiores do Brasil no segmento de polpa de frutas, sendo reconhecida como “A Melhor do Brasil” por sua qualidade, sabor e excelência em todos os processos.</p>
          <p style="letter-spacing: 0.5px;" class="text-gray-800 pt-3">Nossa história começa em 1994, graças à visão e perseverança do fundador Sr. Marcelo Teixeira e Sra. Denise Teixeira, que iniciaram o negócio de forma artesanal, com pouquíssima estrutura e uma única ideia: Levar mais qualidade de vida e sabor para os piauienses.</p>
          <p style="letter-spacing: 0.5px;" class="text-gray-800 pt-3">O negócio cresceu, e o desejo de melhoria contínua fez com que a indústria passasse por inúmeras transformações, desde sua localização até o processo de produção, passando pelos produtos e logística.</p>
          <p style="letter-spacing: 0.5px;" class="text-gray-800 pt-3">Atualmente temos abrangência nacional, além do mercado piauiense, atendemos também Maranhão, Ceará, Paraíba, Pernambuco, Bahia, Pará, Tocantins, Goiás, Rio de Janeiro e Distrito Federal.</p>
          <p style="letter-spacing: 0.5px;" class="text-gray-800 pt-3">Nossa meta é ser líder de mercado no Brasil até 2028, e para isso contamos com um time de excelência, processos bem estruturados, logística e claro produtos diferenciados que agradam não apenas pelo sabor, mas pelo compromisso em levar até a milhões de famílias brasileiras um produto de alta confiabilidade.</p>
        </div>
        <div>
          <img src="./assets/img/pagina_inicial_2.png" class="w-full">
        </div>
      </div>
    </section>
    <section class="py-10 px-4 lg:mb-32 lg:mt-16">
      <h1 style="letter-spacing: 0.5px;" class="font-black bg-clip-text bg-gradient-to-r from-color1 to-color1 text-color1 text-center lg:text-4xl py-4 px-2 text-xl">Nossa Linha do Tempo</h1>
      <h2 class="lg:mt-5 mt-6 text-justify lg:px-16 mx-auto">
        <p style="letter-spacing: 0.5px;" class="text-gray-800">A Fruta Polpa nasceu em meados dos anos 90 da vontade de levar mais saúde e um produto de qualidade à população piauiense. No início éramos apenas 04 colaboradores, um dosador e um funil, e assim iniciamos aquela que iria se tornar uma das maiores indústrias do segmento no Brasil.</p>
        <p style="letter-spacing: 0.5px;" class="text-gray-800 pt-3"><span class="font-bold text-color1">Nosso Propósito: </span>Produzir um produto com alto padrão de qualidade, preço justo e que melhore a qualidade de vida dos consumidores. Além disso, queremos nos tornar a maior e marca de polpa de fruta do Brasil.</p>
      </h2>
      <div class="hidden lg:block pt-10">
        <div class="grid grid-cols-5 max-w-screen-xl mx-auto">
          <div>
            <h1 class="relative right-14 -bottom-14 font-extrabold text-color1">1995</h1>
            <h1 class="pb-4 font-extrabold text-color1 text-xl">Fundação</h1>
            <div class="border-l-2 h-52">
              <div class="w-3 h-3 bg-color1 relative left-0 -top-1 transform -translate-x-2/4 rounded-full z-10 mt-2 md:mt-0"></div>
              <div class="relative left-1 -top-5 px-5">
                <h1 class="text-sm text-gray-700  pt-2 text-justify">Com apenas 4 colaboradores, começou o negócio de produção de polpas.</h1>
              </div>
              <div class="w-10 h-10 relative left-0 -bottom-8 transform -translate-x-2/4 rounded-full z-10 mt-2 md:mt-0"><img src="./assets/img/folha.png"></div>
            </div>
          </div>
          <div></div>
          <div>
            <h1 class="relative right-14 -bottom-20 font-extrabold text-color1">2002</h1>
            <h1 class="pb-4 font-extrabold text-color1 text-xl">Primeiro Centro de Distribuição</h1>
            <div class="border-l-2 h-52">
              <div class="w-3 h-3 bg-color1 relative left-0 -top-1 transform -translate-x-2/4 rounded-full z-10 mt-2 md:mt-0"></div>
              <div class="relative left-1 -top-5 px-5">
                <h1 class="text-sm text-gray-700 text-justify">Em um marco importante, a Fruta Polpa inaugura seu Primeiro Centro de Distribuição, fortalecendo a eficiência na entrega de produtos frescos e saborosos.</h1>
              </div>
              <div class="w-10 h-10 relative left-0 -bottom-8 transform -translate-x-2/4 rounded-full z-10 mt-2 md:mt-0"><img src="./assets/img/folha.png"></div>
            </div>
          </div>
          <div></div>
          <div>
            <h1 class="relative right-14 -bottom-20 font-extrabold text-color1">2004</h1>
            <h1 class="pb-4 pl-2 font-extrabold text-color1 text-xl">Indústria Fruta Polpa é inaugurada</h1>
            <div class="border-l-2 h-52">
              <div class="w-3 h-3 bg-color1 relative left-0 -top-1 transform -translate-x-2/4 rounded-full z-10 mt-2 md:mt-0"></div>
              <div class="relative left-1 -top-5 px-5">
                <h1 class="text-sm text-gray-700 text-justify">A inauguração da Indústria Fruta Polpa marca o início de uma jornada dedicada à produção de produtos de alta qualidade e sabor incomparável.</h1>
              </div>
              <div class="w-10 h-10 relative left-0 -bottom-8 transform -translate-x-2/4 rounded-full z-10 mt-2 md:mt-0"><img src="./assets/img/folha.png"></div>
            </div>
          </div>
        </div>
        <div class="border-t-2 border-color1">
          <div class="grid grid-cols-6 max-w-screen-xl mx-auto">
            <div></div>
            <div>
              <div class="border-l-2 h-48">
                <div class="w-10 h-10 relative left-0 -top-4 transform -translate-x-2/4 rounded-full z-10 mt-2 md:mt-0"><img src="./assets/img/folha.png"></div>
                <div class="relative left-1 -top-5 px-5">
                  <h1 class="text-sm text-gray-700 text-justify">Os primeiros investimentos em tecnologia da Fruta Polpa refletem o compromisso da empresa em inovar, visando maior eficiência e qualidade em seus processos.</h1>

                </div>
                <div class="w-3 h-3 bg-color1 relative left-0 -bottom-2 transform -translate-x-2/4 rounded-full z-10 mt-2 md:mt-0"></div>
                <h1 class="relative right-28 -top-3 font-extrabold text-color1">1999/2002</h1>
                <h1 class="pb-4 font-extrabold text-color1 text-xl">Primeiros investimentos em tecnologia</h1>
              </div>
            </div>
            <div></div>
            <div class="border-l-2 h-52">
              <div class="w-10 h-10 relative left-0 -top-4 transform -translate-x-2/4 rounded-full z-10 mt-2 md:mt-0"><img src="./assets/img/folha.png"></div>
              <div class="relative left-1 -top-5 px-5">
                <h1 class="text-sm text-gray-700 text-justify">O início da expansão da Fruta Polpa representa um momento emocionante, evidenciando a dedicação da empresa em oferecer excelência aos clientes.</h1>
              </div>
              <div class="w-3 h-3 bg-color1 relative left-0 -bottom-2 transform -translate-x-2/4 rounded-full z-10 mt-2 md:mt-0"></div>
              <h1 class="relative right-14 -top-5 font-extrabold text-color1">2003</h1>
              <h1 class="pb-4 pl-2 font-extrabold text-color1 text-xl">Início da expansão</h1>
            </div>
            <div></div>
            <div class="border-l-2 h-52">
              <div class="w-10 h-10 relative left-0 -top-4 transform -translate-x-2/4 rounded-full z-10 mt-2 md:mt-0"><img src="./assets/img/folha.png"></div>
              <div class="relative left-1 -top-5 px-5">
                <h1 class="text-sm text-gray-700 text-justify">Para atender à demanda em ascensão, a Fruta Polpa amplia sua fábrica, dobrando a capacidade e assegurando qualidade e frescor constantes aos clientes.</h1>
              </div>
              <div class="w-3 h-3 bg-color1 relative left-0 -bottom-2 transform -translate-x-2/4 rounded-full z-10 mt-2 md:mt-0"></div>
              <h1 class="relative right-14 -top-5 font-extrabold text-color1">2012</h1>
              <h1 class="pb-4 pl-2 font-extrabold text-color1 text-xl">Ampliando a Fábrica para dobrar a capacidade</h1>
            </div>
          </div>
        </div>
      </div>
      <!-- MOBILE -->
      <div>
        <div class="lg:hidden">
          <div class="owl-carousel line-time">
            <div class="item px-3 border-b-2 border-color1 py-3 mb-3">
              <h1 class="pb-1 font-extrabold text-color1 text-lg">Fundação</h1>
              <h1 class="pb-2 font-extrabold text-color1">1995</h1>
              <div class="border-l-2">
                <div class="w-3 h-3 bg-color1 relative left-0 -top-1 transform -translate-x-2/4 rounded-full z-10 mt-2 md:mt-0"></div>
                <div class="relative left-1 -top-5 px-1">
                  <h1 class="text-sm text-gray-700 text-justify">Com apenas 4 colaboradores, começou o negócio de produção de polpas.</h1>
                </div>
                <div class="w-5 h-5 bg-color1 relative left-0 -bottom-5 transform -translate-x-2/4 rounded-full z-10 mt-2 md:mt-0"><img src="./assets/img/folha.png"></div>
              </div>
            </div>
            <div class="item px-3 border-b-2 border-color1 py-3 mb-3">
              <h1 class="pb-1 font-extrabold text-color1 text-lg">Primeiros investimentos em tecnologia</h1>
              <h1 class="pb-2 font-extrabold text-color1">1999/2002</h1>
              <div class="border-l-2">
                <div class="w-3 h-3 bg-color1 relative left-0 -top-1 transform -translate-x-2/4 rounded-full z-10 mt-2 md:mt-0"></div>
                <div class="relative left-1 -top-5 px-1">
                  <h1 class="text-sm text-gray-700 text-justify">Os primeiros investimentos em tecnologia da Fruta Polpa refletem o compromisso da empresa em inovar, visando maior eficiência e qualidade em seus processos.</h1>
                </div>
                <div class="w-5 h-5 bg-color1 relative left-0 -bottom-5 transform -translate-x-2/4 rounded-full z-10 mt-2 md:mt-0"><img src="./assets/img/folha.png"></div>
              </div>
            </div>
            <div class="item px-3 border-b-2 border-color1 py-3 mb-3">
              <h1 class="pb-1 font-extrabold text-color1 text-lg">Primeiro Centro de Distribuição</h1>
              <h1 class="pb-2 font-extrabold text-color1">2002</h1>
              <div class="border-l-2">
                <div class="w-3 h-3 bg-color1 relative left-0 -top-1 transform -translate-x-2/4 rounded-full z-10 mt-2 md:mt-0"></div>
                <div class="relative left-1 -top-5 px-1">
                  <h1 class="text-sm text-gray-700 text-justify">Em um marco importante, a Fruta Polpa inaugura seu Primeiro Centro de Distribuição, fortalecendo a eficiência na entrega de produtos frescos e saborosos.</h1>
                </div>
                <div class="w-5 h-5 bg-color1 relative left-0 -bottom-5 transform -translate-x-2/4 rounded-full z-10 mt-2 md:mt-0"><img src="./assets/img/folha.png"></div>
              </div>
            </div>
            <div class="item px-3 border-b-2 border-color1 py-3 mb-3">
              <h1 class="pb-1 font-extrabold text-color1 text-lg">Início da expansão</h1>
              <h1 class="pb-2 font-extrabold text-color1">2003</h1>
              <div class="border-l-2">
                <div class="w-3 h-3 bg-color1 relative left-0 -top-1 transform -translate-x-2/4 rounded-full z-10 mt-2 md:mt-0"></div>
                <div class="relative left-1 -top-5 px-1">
                  <h1 class="text-sm text-gray-700 text-justify">O início da expansão da Fruta Polpa representa um momento emocionante, evidenciando a dedicação da empresa em oferecer excelência aos clientes.</h1>
                </div>
                <div class="w-5 h-5 bg-color1 relative left-0 -bottom-5 transform -translate-x-2/4 rounded-full z-10 mt-2 md:mt-0"><img src="./assets/img/folha.png"></div>
              </div>
            </div>
            <div class="item px-3 border-b-2 border-color1 py-3 mb-3">
              <h1 class="pb-2 font-extrabold text-color1">Indústria Fruta Polpa é inaugurada</h1>
              <h1 class="pb-1 font-extrabold text-color1 text-xl">2004</h1>
              <div class="border-l-2">
                <div class="w-3 h-3 bg-color1 relative left-0 -top-1 transform -translate-x-2/4 rounded-full z-10 mt-2 md:mt-0"></div>
                <div class="relative left-1 -top-5 px-1">
                  <h1 class="text-sm text-gray-700 text-justify">A inauguração da Indústria Fruta Polpa marca o início de uma jornada dedicada à produção de produtos de alta qualidade e sabor incomparável.</h1>
                </div>
                <div class="w-5 h-5 bg-color1 relative left-0 -bottom-5 transform -translate-x-2/4 rounded-full z-10 mt-2 md:mt-0"><img src="./assets/img/folha.png"></div>
              </div>
            </div>
            <div class="item px-3 border-b-2 border-color1 py-3 mb-3">
              <h1 class="pb-2 font-extrabold text-color1">Ampliando a Fábrica para dobrar a capacidade </h1>
              <h1 class="pb-1 font-extrabold text-color1 text-xl">2012</h1>
              <div class="border-l-2">
                <div class="w-3 h-3 bg-color1 relative left-0 -top-1 transform -translate-x-2/4 rounded-full z-10 mt-2 md:mt-0"></div>
                <div class="relative left-1 -top-5 px-1">
                  <h1 class="text-sm text-gray-700 text-justify">Para atender à demanda em ascensão, a Fruta Polpa amplia sua fábrica, dobrando a capacidade e assegurando qualidade e frescor constantes aos clientes.</h1>
                </div>
                <div class="w-5 h-5 bg-color1 relative left-0 -bottom-5 transform -translate-x-2/4 rounded-full z-10 mt-2 md:mt-0"><img src="./assets/img/folha.png"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- MOBILE -->
    <div class="mx-auto max-w-6xl pt-2 about">
      <section class="lg:mt-16">
        <div class="lg:pt-4 lg:p-0 lg:p-10">
          <div class="md:grid md:grid-cols-2 md:gap-20">
            <div class="mx-auto">
              <h6 class="lg:text-3xl text-xl pb-5 pt-4">
                <span style="letter-spacing: 0.5px" class="text-color1 font-black bg-clip-text bg-gradient-to-r">
                  Fazendas
                </span>
              </h6>

              <p class="text-medium font-sans text-justify pb-5">
                A Fruta Polpa apoia o setor da agricultura na compra da matéria prima, garantindo o estoque da safra o ano inteiro, também é feita uma seleção rigorosa dos produtos a serem comprados para a fabricação dos produtos.
              </p>
            </div>

            <div class="owl-carousel carousel-indu">
              <div class="item">
                <img src="./assets/img/fazenda.png" class="rounded-lg h-60 cover" alt="fazenda">
              </div>
              <div class="item">
                <img src="./assets/img/fazenda2.png" class="rounded-lg h-60 cover" alt="fazenda2">
              </div>
            </div>
          </div>
        </div>
      </section>

      <section>
        <div class="lg:pt-4 lg:p-0 lg:p-10">
          <div class="md:grid md:grid-cols-2 md:gap-20">

            <div class="mx-auto">
              <h6 class="lg:text-3xl text-xl pb-5 pt-4">
                <span style="letter-spacing: 0.5px" class="text-color1 font-black bg-clip-text bg-gradient-to-r">
                  Indústrias
                </span>
              </h6>

              <p class="text-medium font-sans text-justify pb-5">
                Contando com mais de 20 veículos e posto de abastecimento na própria indústria, a logística empregada na distribuição do produto final atende cerca de 2000 clientes ativos, em 1000 cidades, incluindo grandes redes como Supermercado Mateus, Carvalho Supermercado, Pão de Açúcar, Extra, Supermercado Líder e Grupo Jorge Batista.
              </p>
            </div>

            <div class="owl-carousel carousel-indu order-first">
              <div class="item">
                <img src="./assets/img/foto_da_fabrica_2.jpg" class="rounded-lg h-56 cover" alt="industria">
              </div>
              <div class="item">
                <img src="./assets/img/industria.png" class="rounded-lg h-56 cover" alt="industria2">
              </div>
            </div>

          </div>
        </div>
      </section>

      <section>
        <div class="lg:pt-4 lg:p-0 lg:p-10 p-2">
          <div class="md:grid md:grid-cols-2 md:gap-20">
            <div class="mx-auto">
              <h6 class="lg:text-3xl text-xl pb-5 pt-4">
                <span style="letter-spacing: 0.5px" class="text-color1 font-black bg-clip-text bg-gradient-to-r">
                  Supermercados
                </span>
              </h6>
              <p class="text-medium font-sans text-justify pb-5">
                Constantemente realizamos diversas ações promocionais nas nossas plataformas digitais bem como ações externas com degustações, sejam nos supermercados, eventos relacionados a saúde e esportes, academias, parques públicos e muito mais, sempre com um incrível feedback de quem prova nossos produtos pela primeira vez ou como forma de elogios para a marca de quem já nos conhece.
              </p>
            </div>

            <div class="owl-carousel carousel-indu">
              <div class="item">
                <img src="./assets/img/supermercado.png" class="rounded-lg h-60" alt="supermercado">
              </div>
              <div class="item">
                <img src="./assets/img/supermercado2.png" class="rounded-lg h-60" alt="supermercado2">
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!-- <section class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-4 py-12">
      <div class="text-center pb-12">
        <h1 class="lg:text-5xl text-3xl text-center">
          <span style="letter-spacing: 0.5px" class="font-black bg-clip-text bg-gradient-to-r from-color1 to-color1 text-color1">
            Conheça nossa equipe
          </span>
        </h1>
      </div>
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <div class="w-full bg-white rounded-lg p-12 flex flex-col justify-center items-center">
          <div class="mb-8">
            <img class="object-center object-cover rounded-full h-48 w-48" src="" alt="photo">
          </div>
          <div class="text-center">
            <p class="text-xl text-gray-700 font-bold mb-2">Marcelo</p>
            <p class="text-base text-gray-400 font-normal">CEO</p>
          </div>
        </div>
        </div>
      </div>
    </section> -->
  </section>
  <?php include "./components/footer.php"; ?>
  <?php include "./components/btn-whatsapp.php" ?>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
  <script src="assets/js/tw.js"></script>
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
  <script src="./assets/js/lz.js"></script>
  <script src="./assets/js/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

  <script>
    $(document).ready(function() {
      var owl = $(".line-time").owlCarousel({
        items: 1.3,
        loop: true,
        autoplay: true,
      });
    });
  </script>

  <script>
    $(document).ready(function() {
      var owl = $(".carousel-indu").owlCarousel({
        items: 1.3,
        loop: true,
        autoplay: true,
        margin: 20
      });
    });
  </script>

</body>

</html>