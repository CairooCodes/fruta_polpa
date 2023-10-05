<?php
require_once "db_config.php";
require "config/helper.php";
require "config/url.class.php";
require "./functions/get.php";

$servicos1 = getServicos1();
$servicos2 = getServicos2();
$URI = new URI();

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <?php include "components/heads.php"; ?>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
  <link rel="stylesheet" href="./assets/css/swiper.css">
</head>


<body>
  <?php include "./components/navbar.php" ?>
  <div class="mx-auto max-w-full px-2 pt-32 bg-gradient-to-r from-black from-35% via-gray-800 via-100%">
    <div class="px-5 lg:py-12 py-12 lg:px-32 bg-gradient-to-r from-black from-35% via-gray-800 via-100%">
      <div class="lg:flex lg:justify-center">
        <div class="lg:w-2/2">
          <h3 class="mb-16 lg:text-4xl text-2xl font-bold text-center text-white"><span>Explore o poder do <span class="text-color1 ">Marketing Político</span> para aprimorar a imagem de uma figura pública.</span>
          </h3>
          <div class="lg:grid lg:grid-cols-2 xl:gap-8 text-white">
            <img class="hidden w-full rounded-lg lg:mb-4 lg:flex mb-2 md:w-full" src="./assets/img/marketing-político.png" alt="marketing político"></img>
            <div>
              <p class="mb-2 text-lg text-justify text-white">Potencialize o impacto de sua campanha política com o Marketing Político da Boom Empresarial! Conquiste a confiança do eleitorado através de uma combinação poderosa de redes sociais, publicidade e eventos, permitindo que suas propostas sejam disseminadas com eficiência. Estabeleça conexões emocionais genuínas com o público, destacando suas qualidades e ideias, e influencie decisões nas urnas de forma significativa. Contamos com a expertise necessária para impulsionar sua candidatura ao sucesso político. Junte-se a nós e construa uma imagem positiva junto ao eleitorado com abordagens estratégicas comprovadas.
              </p>
              <ul role="list" class="pt-2 space-y-5 border-t border-gray-200 my-7">
                <div class="lg:grid lg:grid-cols-3 xl:gap-2 justify-between">
                  <li class="flex space-x-3">
                    <svg class="flex-shrink-0 w-5 h-5 text-color1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                    </svg>
                    <span class="text-lg font-bold leading-tight text-white">Pré-Candidatura</span>
                  </li>
                  <li class="flex space-x-3">
                    <svg class="flex-shrink-0 w-5 h-5 text-color1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                    </svg>
                    <span class="text-lg font-bold leading-tight text-white">Candidatura</span>
                  </li>
                  <li class="flex">
                    <svg class="flex-shrink-0 w-5 h-5 text-color1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                    </svg>
                    <span class="text-lg font-bold leading-tight text-white">Assessoria Continua</span>
                  </li>
                </div>
              </ul>
              <div>
                <div class="flex justify-center mt-10">
                  <a href="./marketing-politico.php">
                    <button type="submit" class="py-2 px-8 bg-color1 font-semibold border border-color1 rounded-xl hover:bg-orange-700 hover:text-white hover:border-transparent transition ease-in duration-200 transform hover:-translate-y-1 active:translate-y-0">
                      <span class="text-white">Saiba Mais</span>
                    </button>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php include "./components/footer.php" ?>
    <?php include "./components/modal_form_whats.php" ?>

    <script src="./assets/js/script.js"></script>
    <script src="./assets/js/lz.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
    <script src="assets/js/dark_mode.js"></script>
    <script src="assets/js/tw.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
</body>

</html>