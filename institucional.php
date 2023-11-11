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
  <section class="max-w-full px-4 pt-10 mx-auto">
    <section class="mx-auto md:max-w-7xl">
      <div class="grid md:grid-cols-2">
        <div class="grid grid-rows-3">
          <div class="bg-red-600 rounded-t-2xl md:rounded-t-none md:rounded-tl-2xl">
            <div class="flex h-full items-center">
              <h1 class="-rotate-90 text-white text-2xl font-[1000] lg:ml-2">Missão</h1>
              <h3 class="lg:px-8 px-2 text-white text-lg">
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
              <h1 class="-rotate-90 text-white text-2xl font-[1000] lg:ml-4">Visão</h1>
              <h3 class="lg:px-8 px-2 text-white text-lg">
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
              <h3 class="lg:px-8 px-2 text-white text-lg">
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
    <section>

      <ol class="items-center sm:flex">
        <li class="relative mb-6 sm:mb-0">
          <div class="flex items-center">
            <div class="z-10 flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full ring-0 ring-white dark:bg-blue-900 sm:ring-8 dark:ring-gray-900 shrink-0">
              <svg class="w-2.5 h-2.5 text-blue-800 dark:text-blue-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
              </svg>
            </div>
            <div class="hidden sm:flex w-full bg-gray-200 h-0.5 dark:bg-gray-700"></div>
          </div>
          <div class="mt-3 sm:pe-8">
            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Flowbite Library v1.0.0</h3>
            <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Released on December 2, 2021</time>
            <p class="text-base font-normal text-gray-500 dark:text-gray-400">Get started with dozens of web components and interactive elements.</p>
          </div>
        </li>
        <li class="relative mb-6 sm:mb-0">
          <div class="flex items-center">
            <div class="z-10 flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full ring-0 ring-white dark:bg-blue-900 sm:ring-8 dark:ring-gray-900 shrink-0">
              <svg class="w-2.5 h-2.5 text-blue-800 dark:text-blue-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
              </svg>
            </div>
            <div class="hidden sm:flex w-full bg-gray-200 h-0.5 dark:bg-gray-700"></div>
          </div>
          <div class="mt-3 sm:pe-8">
            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Flowbite Library v1.2.0</h3>
            <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Released on December 23, 2021</time>
            <p class="text-base font-normal text-gray-500 dark:text-gray-400">Get started with dozens of web components and interactive elements.</p>
          </div>
        </li>
        <li class="relative mb-6 sm:mb-0">
          <div class="flex items-center">
            <div class="z-10 flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full ring-0 ring-white dark:bg-blue-900 sm:ring-8 dark:ring-gray-900 shrink-0">
              <svg class="w-2.5 h-2.5 text-blue-800 dark:text-blue-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
              </svg>
            </div>
            <div class="hidden sm:flex w-full bg-gray-200 h-0.5 dark:bg-gray-700"></div>
          </div>
          <div class="mt-3 sm:pe-8">
            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Flowbite Library v1.3.0</h3>
            <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Released on January 5, 2022</time>
            <p class="text-base font-normal text-gray-500 dark:text-gray-400">Get started with dozens of web components and interactive elements.</p>
          </div>
        </li>
        <li class="relative mb-6 sm:mb-0">
          <div class="flex items-center">
            <div class="z-10 flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full ring-0 ring-white dark:bg-blue-900 sm:ring-8 dark:ring-gray-900 shrink-0">
              <svg class="w-2.5 h-2.5 text-blue-800 dark:text-blue-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
              </svg>
            </div>
            <div class="hidden sm:flex w-full bg-gray-200 h-0.5 dark:bg-gray-700"></div>
          </div>
          <div class="mt-3 sm:pe-8">
            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Flowbite Library v1.3.0</h3>
            <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Released on January 5, 2022</time>
            <p class="text-base font-normal text-gray-500 dark:text-gray-400">Get started with dozens of web components and interactive elements.</p>
          </div>
        </li>
      </ol>

      <div class="border-l-2 mt-10">
        <!-- Card 1 -->
        <div class="transform transition cursor-pointer hover:-translate-y-2 ml-10 relative flex items-center px-6 py-4 bg-blue-600 text-white rounded mb-10 flex-col md:flex-row space-y-4 md:space-y-0">
          <!-- Dot Follwing the Left Vertical Line -->
          <div class="w-5 h-5 bg-blue-600 absolute -left-10 transform -translate-x-2/4 rounded-full z-10 mt-2 md:mt-0"></div>

          <!-- Line that connecting the box with the vertical line -->
          <div class="w-10 h-1 bg-blue-300 absolute -left-10 z-0"></div>

          <!-- Content that showing in the box -->
          <div class="flex-auto">
            <h1 class="text-lg">Day 1</h1>
            <h1 class="text-xl font-bold">Orientation and Briefing on Uniliver basics</h1>
            <h3>Classroom</h3>
          </div>
          <a href="#" class="text-center text-white hover:text-gray-300">Download materials</a>
        </div>

        <!-- Card 2 -->
        <div class="transform transition cursor-pointer hover:-translate-y-2 ml-10 relative flex items-center px-6 py-4 bg-pink-600 text-white rounded mb-10 flex-col md:flex-row space-y-4 md:space-y-0">
          <!-- Dot Follwing the Left Vertical Line -->
          <div class="w-5 h-5 bg-pink-600 absolute -left-10 transform -translate-x-2/4 rounded-full z-10 mt-2 md:mt-0"></div>

          <!-- Line that connecting the box with the vertical line -->
          <div class="w-10 h-1 bg-pink-300 absolute -left-10 z-0"></div>

          <!-- Content that showing in the box -->
          <div class="flex-auto">
            <h1 class="text-lg">Day 1</h1>
            <h1 class="text-xl font-bold">Orientation and Briefing on Uniliver basics</h1>
            <h3>Classroom</h3>
          </div>
          <a href="#" class="text-center text-white hover:text-gray-300">Download materials</a>
        </div>

        <!-- Card 3 -->
        <div class="transform transition cursor-pointer hover:-translate-y-2 ml-10 relative flex items-center px-6 py-4 bg-green-600 text-white rounded mb-10 flex-col md:flex-row space-y-4 md:space-y-0">
          <!-- Dot Follwing the Left Vertical Line -->
          <div class="w-5 h-5 bg-green-600 absolute -left-10 transform -translate-x-2/4 rounded-full z-10 mt-2 md:mt-0"></div>

          <!-- Line that connecting the box with the vertical line -->
          <div class="w-10 h-1 bg-green-300 absolute -left-10 z-0"></div>

          <!-- Content that showing in the box -->
          <div class="flex-auto">
            <h1 class="text-lg">Day 1</h1>
            <h1 class="text-xl font-bold">Orientation and Briefing on Uniliver basics</h1>
            <h3>Classroom</h3>
          </div>
          <a href="#" class="text-center text-white hover:text-gray-300">Download materials</a>
        </div>

        <!-- Card 4 -->
        <div class="transform transition cursor-pointer hover:-translate-y-2 ml-10 relative flex items-center px-6 py-4 bg-purple-600 text-white rounded mb-10 flex-col md:flex-row space-y-4 md:space-y-0">
          <!-- Dot Follwing the Left Vertical Line -->
          <div class="w-5 h-5 bg-purple-600 absolute -left-10 transform -translate-x-2/4 rounded-full z-10 mt-2 md:mt-0"></div>

          <!-- Line that connecting the box with the vertical line -->
          <div class="w-10 h-1 bg-purple-300 absolute -left-10 z-0"></div>

          <!-- Content that showing in the box -->
          <div class="flex-auto">
            <h1 class="text-lg">Day 1</h1>
            <h1 class="text-xl font-bold">Orientation and Briefing on Uniliver basics</h1>
            <h3>Classroom</h3>
          </div>
          <a href="#" class="text-center text-white hover:text-gray-300">Download materials</a>
        </div>

        <!-- Card 5 -->
        <div class="transform transition cursor-pointer hover:-translate-y-2 ml-10 relative flex items-center px-6 py-4 bg-yellow-600 text-white rounded mb-10 flex-col md:flex-row">
          <!-- Dot Follwing the Left Vertical Line -->
          <div class="w-5 h-5 bg-yellow-600 absolute -left-10 transform -translate-x-2/4 rounded-full z-10 -mt-2 md:mt-0"></div>

          <!-- Line that connecting the box with the vertical line -->
          <div class="w-10 h-1 bg-yellow-300 absolute -left-10 z-0"></div>

          <!-- Content that showing in the box -->
          <div class="flex-auto">
            <h1 class="text-lg">Day 1</h1>
            <h1 class="text-xl font-bold">Orientation and Briefing on Uniliver basics</h1>
            <h3>Classroom</h3>
          </div>
          <a href="#" class="text-center text-white hover:text-gray-300">Download materials</a>
        </div>
      </div>
      <div class="mx-auto lg:pb-16 pb-4 py-12">
        <div class="text-center">
          <h6 class="lg:text-3xl text-xl pb-2 text-center pt-4"><span style="font-size: 20px;letter-spacing: 4px; font-weight: 300;" class="text-color1 uppercase bg-clip-text bg-gradient-to-r from-color2 to-color2">Nossa História</span></h6>
          <h1 class="lg:text-5xl text-3xl text-center"><span style="letter-spacing: 0.5px;color:#1c5503;" class="font-black bg-clip-text bg-gradient-to-r from-color2 to-color2">Linha do Tempo</span></h1>
        </div>
      </div>
      <div class="grid md:grid-cols-4 gap-4 mx-auto md:px-20 justify-center">
        <div class="">
          <div class="flex gap-2 mr-2 p-2">
            <i class="text-center bi bi-record-circle"></i>
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
            <i class="bi bi-dot"></i>
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
            <i class="text-center bi bi-record-circle"></i>
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
            <i class="bi bi-dot"></i>
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
            <i class="text-center bi bi-record-circle"></i>
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
            <i class="bi bi-dot"></i>
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
            <i class="text-center bi bi-record-circle"></i>
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
            <i class="bi bi-dot"></i>
          </div>
          <div class="grid justify-start">
            <p class="text-gray-500">(2018)<br><span class="font-semibold font-sans text-color1">Parceria Global</span></p>
            <p class="font-sans text-justify">
              Fundada no ano de 2003, a Fruta Polpa iniciou suas atividades<br>
              vendendo frutas in natura na cidade de Teresina.<br>
              Com apenas 04 colaboradores, começou o negócio de <br>produção de polpas.
            </p>
          </div>

        </div>
      </div>
    </section>
    <div class="mx-auto max-w-6xl pt-2 about mt-10">
      <section>
        <div class="lg:pt-4 lg:p-0 lg:p-10">
          <div class="md:grid md:grid-cols-2 md:gap-6">
            <div class="mx-auto">
              <h6 class="lg:text-3xl text-xl pb-5 pt-4">
                <span style="letter-spacing: 0.5px" class="text-color1 font-black bg-clip-text bg-gradient-to-r uppercase">
                  Fazendas
                </span>
              </h6>

              <p class="text-medium font-sans text-justify pb-2">
                A qualidade dos produtos "in natura" e congelados De Marchi tem origem nas fazendas do grupo e também dos produtores parceiros. Elas são a garantia de produtos cultivados com muito cuidado e sabor incomparáveis.

              </p>
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
              <h6 class="lg:text-3xl text-xl pb-5 pt-4">
                <span style="letter-spacing: 0.5px" class="text-color1 font-black bg-clip-text bg-gradient-to-r uppercase">
                  Indústrias
                </span>
              </h6>

              <p class="text-medium font-sans text-justify pb-2">
                O grupo conta com mais de 3.000 profissionais altamente capacitados e modernos equipamentos para garantir produtos minimamente processados, mantendo toda qualidade e sabor que vem direto do campo.
              </p>
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
              <h6 class="lg:text-3xl text-xl pb-5 pt-4">
                <span style="letter-spacing: 0.5px" class="text-color1 font-black bg-clip-text bg-gradient-to-r uppercase">
                  Supermercados
                </span>
              </h6>

              <p class="text-medium font-sans text-justify pb-2">
                A De Marchi abastece, diariamente, centenas de supermercados por todo país e também administra as seções FLV (Frutas, Legumes e Verduras) de renomadas redes de supermercados.
              </p>
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
      <div class="pb-2">
        <a href="<?php echo $URI->base("distribuidores"); ?>" class="flex justify-center">
          <button class="middle none center rounded-lg bg-orange-500 py-5 px-4 shadow-md shadow-orange-500/20 transition-all hover:shadow-lg hover:shadow-orange-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none rounded-full font-sans text-white uppercase font-bold">
            <span class="pr-2">Encontre o Distribuidor mais próximo</span><i class="bi bi-chevron-right"></i>
          </button>
        </a>
      </div>
    </div>
    <section class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-4 py-12">
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
            <img class="object-center object-cover rounded-full h-48 w-48" src="./assets/img/seleção.png" alt="photo">
          </div>
          <div class="text-center">
            <p class="text-xl text-gray-700 font-bold mb-2">Dany Bailey</p>
            <p class="text-base text-gray-400 font-normal">Software Engineer</p>
          </div>
        </div>
        <div class="w-full bg-white rounded-lg p-12 flex flex-col justify-center items-center">
          <div class="mb-8">
            <img class="object-center object-cover rounded-full h-48 w-48" src="./assets/img/seleção.png" alt="photo">
          </div>
          <div class="text-center">
            <p class="text-xl text-gray-700 font-bold mb-2">Lucy Carter</p>
            <p class="text-base text-gray-400 font-normal">Graphic Designer</p>
          </div>
        </div>
        <div class="w-full bg-white rounded-lg p-12 flex flex-col justify-center items-center">
          <div class="mb-8">
            <img class="object-center object-cover rounded-full h-48 w-48" src="./assets/img/seleção.png" alt="photo">
          </div>
          <div class="text-center">
            <p class="text-xl text-gray-700 font-bold mb-2">Jade Bradley</p>
            <p class="text-base text-gray-400 font-normal">Dev Ops</p>
          </div>
        </div>
        <div class="w-full bg-white rounded-lg p-12 flex flex-col justify-center items-center">
          <div class="mb-8">
            <img class="object-center object-cover rounded-full h-48 w-48" src="./assets/img/seleção.png" alt="photo">
          </div>
          <div class="text-center">
            <p class="text-xl text-gray-700 font-bold mb-2">Dany Bailey</p>
            <p class="text-base text-gray-400 font-normal">Software Engineer</p>
          </div>
        </div>
        <div class="w-full bg-white rounded-lg p-12 flex flex-col justify-center items-center">
          <div class="mb-8">
            <img class="object-center object-cover rounded-full h-48 w-48" src="./assets/img/seleção.png" alt="photo">
          </div>
          <div class="text-center">
            <p class="text-xl text-gray-700 font-bold mb-2">Lucy Carter</p>
            <p class="text-base text-gray-400 font-normal">Graphic Designer</p>
          </div>
        </div>
        <div class="w-full bg-white rounded-lg p-12 flex flex-col justify-center items-center">
          <div class="mb-8">
            <img class="object-center object-cover rounded-full h-48 w-48" src="./assets/img/seleção.png" alt="photo">
          </div>
          <div class="text-center">
            <p class="text-xl text-gray-700 font-bold mb-2">Jade Bradley</p>
            <p class="text-base text-gray-400 font-normal">Dev Ops</p>
          </div>
        </div>
      </div>
    </section>
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