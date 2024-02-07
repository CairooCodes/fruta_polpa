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
          <img loading="lazy" class="w-full rounded-b-2xl md:rounded-b-none  md:rounded-r-2xl" src="<?php echo $URI->base("/assets/img/institucional.png"); ?>" alt="">
        </div>
      </div>
    </section>
    <section class="bg-white mx-auto md:max-w-7xl py-8 px-4 lg:mb-10 md:mb-10 sm:mb-4 header-institucional">
      <div class="max-w-full lg:pl-24 mx-auto grid lg:grid-cols-2 gap-10">
        <div class="lg:mt-14 mt-6 text-justify">
          <p style="letter-spacing: 0.5px;" class="text-gray-800">Há mais de 20 anos, a <span class="font-black text-color1">Fruta Polpa</span> é presença marcante na mesa dos Brasileiros. Aliada da saúde e do bem-estar, é uma das maiores do Brasil no segmento de polpa de frutas, sendo reconhecida como “A Melhor do Brasil” por sua qualidade, sabor e excelência em todos os processos.</p>
          <p style="letter-spacing: 0.5px;" class="text-gray-800 pt-3">Nossa história começa em 1995, graças à visão e perseverança do fundador Sr. Marcelo Teixeira e Sra. Denise Teixeira, que iniciaram o negócio de forma artesanal, com pouquíssima estrutura e uma única ideia: Levar mais qualidade de vida e sabor para as famílias.</p>
          <p style="letter-spacing: 0.5px;" class="text-gray-800 pt-3">O negócio cresceu, e o desejo de melhoria contínua nos fez mudar para melhor, desde a localização, processos de produção, produtos, logística e toda nossa estrutura como um todo.</p>
          <p style="letter-spacing: 0.5px;" class="text-gray-800 pt-3">Atualmente temos abrangência nacional, atendendo os mercados dos estados do Piauí, Maranhão, Ceará, Paraíba, Pernambuco, Bahia, Pará, Tocantins, Goiás, Rio de Janeiro e Distrito Federal.</p>
          <p style="letter-spacing: 0.5px;" class="text-gray-800 pt-3">Nossa meta é ser líder de mercado no Brasil até 2028, e para isso contamos com um time de excelência, processos bem estruturados, logística e claro produtos diferenciados que agradam não apenas pelo sabor, mas pelo compromisso em levar até a milhões de famílias brasileiras um produto de alta confiabilidade.</p>
        </div>
        <div>
          <img src="./assets/img/pagina_inicial_2.png" class="w-full fade-in-up">
        </div>
      </div>
    </section>
    <section>
      <div>
        <div class="container flex flex-col mx-auto bg-green-700 text-white lg:mb-2 mb-5">
          <div class="w-full">
            <div class="container flex flex-col items-center gap-16 mx-auto my-12">
              <div class="grid w-full grid-cols-1 lg:grid-cols-5 md:grid-cols-2 gap-y-8">
                <div class="flex flex-col items-center">
                  <h3 class="text-5xl font-extrabold leading-tight text-center">+<span id="countto1" countTo="67"></span></h3>
                  <p class="text-base font-medium leading-7 text-center">Fornecedores</p>
                </div>
                <div class="flex flex-col items-center">
                  <h3 class="text-5xl font-extrabold leading-tight text-center">+<span id="countto2" countTo="41"></span></h3>
                  <p class="text-base font-medium leading-7 text-center">Veículos</p>
                </div>
                <div class="flex flex-col items-center pr-5">
                  <h3 class="text-5xl font-extrabold leading-tight text-center"><span id="countto3" countTo="9000"></span>m</h3>
                  <p class="text-base font-medium leading-7 text-center">Metros quadrados de indústria</p>
                </div>
                <div class="flex flex-col items-center">
                  <h3 class="text-5xl font-extrabold leading-tight text-center"><span id="countto4" countTo="80000" data-decimal="2"></span>t</h3>
                  <p class="text-base font-medium leading-7 text-center">Toneladas por ano</p>
                </div>
                <div class="flex flex-col items-center">
                  <h3 class="text-5xl font-extrabold leading-tight text-center">+<span id="countto5" countTo="1500"></span></h3>
                  <p class="text-base font-medium leading-7 text-center">Pontos de vendas</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="lg:py-10 px-4 lg:mb-22 lg:mt-2">
      <h1 style="letter-spacing: 0.5px;" class="font-black bg-clip-text bg-gradient-to-r from-color1 to-color1 text-gray-700 text-center lg:text-4xl py-4 px-2 text-xl">Nossa Linha do Tempo</h1>
      <div class="hidden lg:block pt-10">
        <div class="grid grid-cols-12 max-w-screen-xl mx-auto">
          <div class="col-span-2">
            <h1 class="relative right-4 -bottom-12 text-color1 text-md">1995</h1>
            <h1 class="pb-7 font-extrabold text-gray-800 text-md">Fundação</h1>
            <div class="border-l-2">
              <div class="w-3 h-3 bg-green-600 relative left-0 -top-1 transform -translate-x-2/4 rounded-full z-10 mt-2 md:mt-0"></div>
              <div class="relative left-1 -top-5 px-5">
                <h1 class="text-sm text-gray-700">Com apenas 4 colaboradores, começou o negócio de produção de polpas.</h1>
              </div>
              <div class="w-10 h-10 relative left-0 -bottom-5 transform -translate-x-2/4 rounded-full z-10 mt-2 md:mt-0"><img src="./assets/img/folha.png"></div>
            </div>
          </div>
          <div></div>
          <div class="col-span-3">
            <h1 class="relative right-4 -bottom-12 text-color1 text-md">2002</h1>
            <h1 class="pb-7 font-extrabold text-gray-800 text-md">Primeiro Centro de Distribuição</h1>
            <div class="border-l-2">
              <div class="w-3 h-3 bg-green-600 relative left-0 -top-1 transform -translate-x-2/4 rounded-full z-10 mt-2 md:mt-0"></div>
              <div class="relative left-1 -top-5 px-5">
                <h1 class="text-sm text-gray-700">Em um marco importante, a Fruta Polpa inaugura seu Primeiro Centro de Distribuição, fortalecendo a eficiência na entrega de produtos frescos e saborosos.</h1>
              </div>
              <div class="w-10 h-10 relative left-0 -bottom-5 transform -translate-x-2/4 rounded-full z-10 mt-2 md:mt-0"><img src="./assets/img/folha.png"></div>
            </div>
          </div>
          <div class="col-span-3">
            <h1 class="relative right-4 -bottom-12 text-color1 text-md">2004</h1>
            <h1 class="pb-7 pl-2 font-extrabold text-gray-800 text-md">Indústria Fruta Polpa é inaugurada</h1>
            <div class="border-l-2">
              <div class="w-3 h-3 bg-green-600 relative left-0 -top-1 transform -translate-x-2/4 rounded-full z-10 mt-2 md:mt-0"></div>
              <div class="relative left-1 -top-5 px-5">
                <h1 class="text-sm text-gray-700">A inauguração da Indústria Fruta Polpa marca o início de uma jornada dedicada à produção de produtos de alta qualidade e sabor incomparável.</h1>
              </div>
              <div class="w-10 h-10 relative left-0 -bottom-8 transform -translate-x-2/4 rounded-full z-10 mt-2 md:mt-0"><img src="./assets/img/folha.png"></div>
            </div>
          </div>
          <div>
            <div></div>
          </div>
          <div class="col-span-2">
            <h1 class="relative right-12 -bottom-12 text-color1 text-md">2019/2023</h1>
            <h1 class="pb-7 pl-2 font-extrabold text-gray-800 text-md">Abrangência nacional</h1>
            <div class="border-l-2">
              <div class="w-3 h-3 bg-green-600 relative left-0 -top-1 transform -translate-x-2/4 rounded-full z-10 mt-2 md:mt-0"></div>
              <div class="relative left-1 -top-5 px-5">
                <h1 class="text-sm text-gray-700 pl-3">Abrangência nacional (norte, nordeste, centro–oeste, sudeste).</h1>
              </div>
              <div class="w-10 h-10 relative left-0 -bottom-8 transform -translate-x-2/4 rounded-full z-10 mt-2 md:mt-0"><img src="./assets/img/folha.png"></div>
            </div>
          </div>
        </div>
        <div class="border-t-2 border-color1">
          <div class="grid grid-cols-9 max-w-screen-xl mx-auto">
            <div></div>
            <div class="col-span-2">
              <div class="border-l-2">
                <div class="w-10 h-10 relative left-0 -top-4 transform -translate-x-2/4 rounded-full z-10 mt-2 md:mt-0"><img src="./assets/img/folha.png"></div>
                <div class="relative left-1 -top-5 px-5">
                  <h1 class="text-sm text-gray-700">Os primeiros investimentos em tecnologia da Fruta Polpa refletem o compromisso da empresa em inovar, visando maior eficiência e qualidade em seus processos.
                  </h1>
                </div>
                <div class="w-3 h-3 bg-green-600 relative left-0 -bottom-2 transform -translate-x-2/4 rounded-full z-10 mt-2 md:mt-0"></div>
              </div>
              <h1 class="relative right-28 -top-3 text-color1 text-md">1999/2002</h1>
              <h1 class="pb-4 font-extrabold text-gray-800 text-md">Primeiros investimentos em tecnologia</h1>
            </div>
            <div></div>
            <div class="col-span-2">
              <div class="border-l-2">
                <div class="w-10 h-10 relative left-0 -top-4 transform -translate-x-2/4 rounded-full z-10 mt-2 md:mt-0"><img src="./assets/img/folha.png"></div>
                <div class="relative left-1 -top-3 px-5">
                  <h1 class="text-sm text-gray-700">O início da expansão da Fruta Polpa representa um momento emocionante, evidenciando a dedicação da empresa em oferecer excelência aos clientes.</h1>
                </div>
                <div class="w-3 h-3 bg-green-600 relative left-0 -bottom-2 transform -translate-x-2/4 rounded-full z-10 mt-2 md:mt-0"></div>
              </div>
              <h1 class="relative right-14 -top-3 text-color1 text-md">2003</h1>
              <h1 class="pb-4 pl-2 font-extrabold text-gray-800 text-md">Início da expansão</h1>
            </div>
            <div></div>
            <div class="col-span-2">
              <div class="border-l-2">
                <div class="w-10 h-10 relative left-0 -top-4 transform -translate-x-2/4 rounded-full z-10 mt-2 md:mt-0"><img src="./assets/img/folha.png"></div>
                <div class="relative left-1 -top-3 px-5">
                  <h1 class="text-sm text-gray-700">Para atender à demanda em ascensão, a Fruta Polpa amplia sua fábrica, dobrando a capacidade e assegurando qualidade e frescor constantes aos clientes.</h1>
                </div>
                <div class="w-3 h-3 bg-green-600 relative left-0 -bottom-2 transform -translate-x-2/4 rounded-full z-10 mt-2 md:mt-0"></div>
              </div>
              <h1 class="relative right-14 -top-3 text-color1 text-md">2012</h1>
              <h1 class="pb-4 pl-2 font-extrabold text-gray-800 text-md">Ampliando a Fábrica para dobrar a capacidade</h1>
            </div>
          </div>
        </div>
      </div>
      <!-- MOBILE -->
      <div>
        <div class="lg:hidden pt-10">
          <div class="owl-carousel line-time">
            <div class="item h-32 px-3 border-b-2 border-color1">
              <h1 class="pb-1 font-extrabold text-gray-800 text-sm">Fundação</h1>
              <h1 class="pb-2 font-extrabold text-color1 text-xs">1995</h1>
              <div class="border-l-2">
                <div class="w-3 h-3 bg-green-600 relative left-0 -top-1 transform -translate-x-2/4 rounded-full z-10 mt-2 md:mt-0"></div>
                <div class="relative left-1 -top-5 px-1">
                  <h1 class="text-xs text-gray-700 text-justify pl-2">Com apenas 4 colaboradores dedicados e visionários, deu-se início a um empreendimento promissor no ramo da produção de polpas.</h1>
                </div>
              </div>
            </div>
            <div class="item h-32 px-3 border-b-2 border-color1">
              <h1 class="pb-1 font-extrabold text-gray-800 text-sm">1º investimentos em tecnologia</h1>
              <h1 class="pb-2 font-extrabold text-color1 text-xs">1999/2002</h1>
              <div class="border-l-2">
                <div class="w-3 h-3 bg-green-600 relative left-0 -top-1 transform -translate-x-2/4 rounded-full z-10 mt-2 md:mt-0"></div>
                <div class="relative left-1 -top-5 px-1">
                  <h1 class="text-xs text-gray-700 text-justify pl-2">Os primeiros investimentos em tecnologia da Fruta Polpa refletem o compromisso da empresa em inovar, visando maior eficiência e qualidade em seus processos.</h1>
                </div>
              </div>
            </div>
            <div class="item h-32 px-3 border-b-2 border-color1">
              <h1 class="pb-1 font-extrabold text-gray-800 text-sm">1º Centro de Distribuição</h1>
              <h1 class="pb-2 font-extrabold text-color1 text-xs">2002</h1>
              <div class="border-l-2">
                <div class="w-3 h-3 bg-green-600 relative left-0 -top-1 transform -translate-x-2/4 rounded-full z-10 mt-2 md:mt-0"></div>
                <div class="relative left-1 -top-5 px-1">
                  <h1 class="text-xs text-gray-700 text-justify pl-2">Em um marco importante, a Fruta Polpa inaugura seu Primeiro Centro de Distribuição, fortalecendo a eficiência na entrega de produtos frescos e saborosos.</h1>
                </div>
              </div>
            </div>
            <div class="item h-32 px-3 border-b-2 border-color1">
              <h1 class="pb-1 font-extrabold text-gray-800 text-sm">Início da expansão</h1>
              <h1 class="pb-2 font-extrabold text-color1 text-xs">2003</h1>
              <div class="border-l-2">
                <div class="w-3 h-3 bg-green-600 relative left-0 -top-1 transform -translate-x-2/4 rounded-full z-10 mt-2 md:mt-0"></div>
                <div class="relative left-1 -top-5 px-1">
                  <h1 class="text-xs text-gray-700 text-justify pl-2">O início da expansão da Fruta Polpa representa um momento emocionante, evidenciando a dedicação da empresa em oferecer excelência aos clientes.</h1>
                </div>
              </div>
            </div>
            <div class="item h-32 px-3 border-b-2 border-color1">
              <h1 class="pb-2 font-extrabold text-gray-800 text-sm">Inauguração</h1>
              <h1 class="pb-1 font-extrabold text-color1 text-xs">2004</h1>
              <div class="border-l-2">
                <div class="w-3 h-3 bg-green-600 relative left-0 -top-1 transform -translate-x-2/4 rounded-full z-10 mt-2 md:mt-0"></div>
                <div class="relative left-1 -top-5 px-1">
                  <h1 class="text-xs text-gray-700 text-justify pl-2">A inauguração da indústria Fruta Polpa marca o início de uma jornada dedicada à produção de produtos de alta qualidade e sabor incomparável.</h1>
                </div>
              </div>
            </div>
            <div class="item h-32 px-3 border-b-2 border-color1">
              <h1 class="pb-2 font-extrabold text-gray-800 text-sm">Ampliação da Fábrica</h1>
              <h1 class="pb-1 font-extrabold text-color1 text-xs">2012</h1>
              <div class="border-l-2">
                <div class="w-3 h-3 bg-green-600 relative left-0 -top-1 transform -translate-x-2/4 rounded-full z-10 mt-2 md:mt-0"></div>
                <div class="relative left-1 -top-5 px-1">
                  <h1 class="text-xs text-gray-700 text-justify pl-2">Para atender à demanda em ascensão, a Fruta Polpa amplia sua fábrica, dobrando a capacidade e assegurando qualidade e frescor constantes aos clientes.</h1>
                </div>
              </div>
            </div>
            <div class="item h-32 px-3 border-b-2 border-color1">
              <h1 class="pb-2 font-extrabold text-gray-800 text-sm">Abrangência nacional</h1>
              <h1 class="pb-1 font-extrabold text-color1 text-xs">2019/2023</h1>
              <div class="border-l-2">
                <div class="w-3 h-3 bg-green-600 relative left-0 -top-1 transform -translate-x-2/4 rounded-full z-10 mt-2 md:mt-0"></div>
                <div class="relative left-1 -top-5 px-1">
                  <h1 class="text-xs text-gray-700 text-justify pl-2">Para atender à demanda em ascensão, a Fruta Polpa amplia sua fábrica, dobrando a capacidade e assegurando qualidade e frescor constantes aos clientes.</h1>
                </div>
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
                A Fruta Polpa apoia o setor da agricultura através da compra da matéria prima durante o ano inteiro. Temos fornecedores de confiança que trabalham com frutas de qualidade superior, o que garante para nossos clientes o melhor produto.
              </p>
            </div>

            <div class="owl-carousel carousel-indu z-0">
              <div class="item">
                <img loading="lazy" src="./assets/img/fazenda1.jpg" class="rounded-lg h-60 object-cover" alt="fazenda">
              </div>
              <div class="item">
                <img loading="lazy" src="./assets/img/fazenda2.jpg" class="rounded-lg h-60 object-cover" alt="fazenda">
              </div>
            </div>
          </div>
        </div>
      </section>

      <section>
        <div class="lg:pt-4 lg:p-0 lg:p-10">
          <div class="md:grid md:grid-cols-2 md:gap-20">

            <div class="mx-auto">
              <h6 class="lg:text-3xl text-xl pb-5 lg:pt-2 pt-4">
                <span style="letter-spacing: 0.5px" class="text-color1 font-black bg-clip-text bg-gradient-to-r">
                  Indústria
                </span>
              </h6>
              <p class="text-medium font-sans text-justify pb-1">
              Contando com mais de 40 veículos e posto de abastecimento próprio, a logística empregada na distribuição do produto final atende mais de 1500 clientes ativos, incluindo grandes redes como Mix Mateus, Carrefuor, Pão de Açúcar, Coco Bambu, Extra, Carvalho Supermercado, Supermercado Líder e Grupo Jorge Batista.
              </p>
              <p class="text-medium font-sans text-justify pb-5">
              Contamos 187 colaboradores com diretos e indiretos, 13 representantes comerciais, 40 MEI's e 22 terceirizados.
              </p>
            </div>

            <div class="owl-carousel carousel-indu order-first z-0">
              <div class="item">
                <img loading="lazy" src="./assets/img/foto_da_fabrica_2.jpg" class="rounded-lg h-56 object-cover" alt="industria">
              </div>
              <div class="item">
                <img loading="lazy" src="./assets/img/laboratorio2.jpg" class="rounded-lg h-56 object-cover" alt="industria">
              </div>
              <div class="item">
                <img loading="lazy" src="./assets/img/laboratorio1.jpg" class="rounded-lg h-56 object-cover" alt="industria">
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
                Constantemente realizamos ações promocionais nas nossas plataformas digitais bem como ações externas através de degustações em supermercados, eventos relacionados a saúde esportes, academias, parques públicos e muito mais, sempre com um incrível feedback de quem prova nossos produtos pela primeira vez ou como forma de elogios para a marca de quem já nos conhece.
              </p>
            </div>

            <div class="owl-carousel carousel-indu z-0">
              <div class="item">
                <img loading="lazy" src="./assets/img/supermercado1.jpg" class="rounded-lg h-72 object-cover" alt="supermercado">
              </div>
              <div class="item">
                <img loading="lazy" src="./assets/img/supermercado2.jpg" class="rounded-lg h-72 object-cover" alt="supermercado2">
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
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
  <script src="https://cdn.jsdelivr.net/gh/Loopple/loopple-public-assets@main/motion-tailwind/scripts/plugins/countup.min.js"></script>
  <script>
    let numbers = document.querySelectorAll("[countTo]");

    numbers.forEach((number) => {
      let ID = number.getAttribute("id");
      let value = number.getAttribute("countTo");
      let countUp = new CountUp(ID, value);

      if (number.hasAttribute("data-decimal")) {
        const options = {
          decimalPlaces: 1,
          decimalPlaces: 2,
        };
        countUp1 = new CountUp(ID, 9.000, options);
        countUp2 = new CountUp(ID, 8000000, options);

      } else {
        countUp = new CountUp(ID, value);
      }

      if (!countUp.error) {
        countUp.start();
      } else {
        console.error(countUp.error);
        number.innerHTML = value;
      }
    });
  </script>

  <script>
    $(document).ready(function() {
      var owl = $(".line-time").owlCarousel({
        items: 1.1,
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