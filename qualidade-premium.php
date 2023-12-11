<?php
require_once "db_config.php";
require "config/helper.php";
require "config/url.class.php";
require "./functions/get.php";

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
  <section class="bg-white max-w-screen-xl lg:px-8 lg:py-4 px-6 header-institucional mx-auto">
    <div class="lg:pt-12 pb-12 lg:grid grid-cols-2 mt-2 items-center fade-in-up">
      <div class="lg:px-12">
        <div class="mt-14 mb-4 text-justify">
          <h6 class="lg:text-3xl text-xl pb-2 pt-4">
            <span style="font-size: 20px;letter-spacing: 4px; font-weight: 300;" class="text-color1 uppercase bg-clip-text bg-gradient-to-r from-color2 to-color2">
              O que é a
            </span>
          </h6>
          <h1 class="lg:text-5xl text-3xl">
            <span style="letter-spacing: 0.5px;" class="font-black bg-clip-text bg-gradient-to-r from-color1 to-color1 text-color1">
              Qualidade Premium?
            </span>
          </h1>
          <p class="pt-5">
            A Qualidade Premium Fruta Polpa, vem do compromisso em levar até o nosso consumidor final um produto de alto padrão, sabor e valor nutricional.
          </p>
          <p class="pt-3">
            Esse conceito vem surge a partir do momento em que todos os nossos fornecedores são rigorosamente selecionados através de critérios técnicos e qualidade dos frutos, avaliada por especialistas.
          </p>
        </div>
      </div>
      <div class="p-6">
        <img src="./assets/img/logistica.jpg" loading="lazy" class="w-full rounded-md h-96  object-cover">
      </div>
    </div>
    <div class="lg:pt-12 pb-12 lg:grid grid-cols-2 mt-2 items-center fade-in-up">
      <div class="p-6">
        <img src="./assets/img/fazenda2.png" loading="lazy" class="lg:w-4/5 w-full rounded-md h-72 object-cover lg:ml-12">
      </div>
      <div class="lg:px-12">
        <div class="lg:mt-10 mb-4 text-justify">
          <h1 class="lg:pt-10 pb-6 lg:font-semibold font-bold lg:text-xl text-xl flex">
            <!-- <i class="bi bi-record-fill pr-2 pt-1 text-xs"></i> -->
            Frutas rigorosamente selecionadas.
          </h1>
          <p class="">
            Da colheita ao momento que chegam na nossa indústria, todas as frutas passam por um processo eficiente de seleção.
          </p>
          <h1 class="pt-10 pb-6 lg:font-semibold font-bold lg:text-xl text-base flex">
            <!-- <i class="bi bi-record-fill pr-2 pt-1 text-xs"></i> -->
            Investimento na melhoria dos processos industriais.
          </h1>
          <p class="lg:text-xl text-base pb-5">
            Na Fruta Polpa, o investimento em tecnologia e processos de melhoria são constantes, por isso, aqui contamos com o que há de mais moderno no segmento, tendo capacidade para exportação.
          </p>
        </div>
      </div>
    </div>
    <div class="lg:pt-14 pb-12 lg:grid grid-cols-2 mt-2 items-center fade-in-up">
      <div class="lg:px-12">
        <div class="mb-6 text-justify">
          <h1 class="pt-10 pb-6 lg:font-semibold font-bold lg:text-xl text-base flex">
            <!-- <i class="bi blg:i-record-fill font-bold pr-2 pt-1 text-xsbase</i> -->
            Laboratório próprio equipado para análise em todas as etapas
          </h1>
          <p class="lg:text-xl text-base pb-5">
            Aqui todas as etapas do nosso processo produtivo são analisadas através de equipamentos de alta qualidade e nutricionistas qualificados.
          </p>
        </div>
      </div>
      <div class="p-6 fade-in-up">
        <img src="./assets/img/foto_da_fabrica_2.jpg" loading="lazy" class="lg:w-4/5 w-full h-72 rounded-md object-cover lg:ml-12">
      </div>
    </div>
    <div class="lg:pt-12 pb-12 lg:grid grid-cols-2 mt-2 items-center fade-in-up">
      <div class="p-6 fade-in-up">
        <img src="./assets/img/foto_da_fabrica_2.jpg" loading="lazy" class="lg:w-4/5 w-full h-72 rounded-md object-cover lg:ml-12">
      </div>
      <div class="lg:px-12">
        <div class="lg:mt-10 mb-4 text-justify">
          <h1 class="pt-10 pb-6 lg:font-semibold font-bold lg:text-xl text-xl flex">
            <!-- <i class="bi blg:i-record-fill font-bold pr-2 pt-1 text-xsbase</i> -->
            Certificação por auditoria da empresa IBD certificações para produção de produto
            ORGÂNICO.
          </h1>
          <p class="lg:text-xl text-base pb-5">
            A certificação IBD (Instituto Biodinâmico) é direcionada para propriedades agrícolas e processos produtivos desse segmento, sendo emitida com uma importante comprovação de que os produtos gerados nesses locais são produzidos e/ou processados conforme normas orgânicas e biodinâmicas.
          </p>
        </div>
      </div>
    </div>
    <div class="lg:pt-12 pb-12 lg:grid grid-cols-2 mt-2 items-center fade-in-up">
      <div class="lg:px-12">
        <div class="lg:mt-14 mb-4 text-justify">
          <h1 class="lg:pt-10 pb-5 lg:font-semibold font-bold lg:text-xl text-base flex">
            <!-- <i class="bi bi-record-fill pr-2 pt-1 text-xs"></i> -->
            Norma de APPCC implantada.
          </h1>
          <p class="lg:text-xl text-base pb-5">
            O Sistema APPCC (Sistema de Análise de Perigos e Pontos Críticos de Controle) cuja sigla em inglês é HACCP (Hazard Analysis and Critical Control Point), consiste em um sistema de controle sobre a segurança do alimento mediante a análise e controle dos riscos biológicos, químicos e físicos em todas as etapas, desde a produção da matéria prima até a fabricação, distribuição e consumo.
          </p>
        </div>
      </div>
      <div class="p-6 fade-in-up">
        <img src="./assets/img/foto_da_fabrica_2.jpg" loading="lazy" class="lg:w-4/5 w-full h-72 rounded-md object-cover lg:ml-12">
      </div>
    </div>
  </section>

  <?php include "./components/footer.php" ?>
  <?php include "./components/btn-whatsapp.php" ?>
  <script src="assets/js/tw.js"></script>
  <script src="./assets/js/lz.js"></script>
  <script src="./assets/js/main.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
  <script src="assets/js/dark_mode.js"></script>
  <script src="assets/js/tw.js"></script>
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
  <script>
    // JavaScript para abrir o WhatsApp ao clicar no botão
    document.getElementById('openWhatsApp').addEventListener('click', function() {
      window.open('https://api.whatsapp.com/send?phone=5586994293833&text=Olá%20Fruta%20Polpa-site', '_blank');
    });
  </script>
</body>

</html>