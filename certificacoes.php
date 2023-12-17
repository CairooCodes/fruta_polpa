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
  <section class="mx-auto max-w-7xl px-2 py-10 lg:px-16">
    <div class="px-4 py-3">
      <h1 class="lg:text-4xl text-3xl text-center lg:text-start">
        <span class="font-semibold text-gray-800">
          Certificações
        </span>
      </h1>
      <p class="mt-6 text-justify">
        Nosso empenho em garantir padrões rigorosos de qualidade abrange desde a seleção cuidadosa de matérias-primas até os processos de fabricação e distribuição, assegurando a satisfação e confiança de nossos clientes. Essas conquistas refletem nosso firme compromisso em superar as expectativas do mercado e manter um alto nível de integridade em tudo o que fazemos.
      </p>
    </div>
    <div class="lg:pt-12 lg:grid grid-cols-2 mt-2 items-center fade-in-up">
      <div class="px-2 fade-in-up lg:order-last">
        <img src="./assets/img/energia-solar.png" loading="lazy" class="lg:w-full w-full h-72 rounded-md object-cover lg:ml-12">
      </div>
      <div class="lg:px-4 px-2">
        <div class="lg:mt-10 mb-4">
          <h1 class="font-bold pb-3 pt-5 text-gray-900 lg:text-3xl text-2xl lg:text-start text-center">
            Energia Renovável
          </h1>
          <p class="text-justify mb-12">
            A Fruta Polpa utiliza energia de fonte renováveis como ( Eólica, Biomassa, PCH, Solar) de baixo impacto em suas instalações. Através do consumo de energia renovável e ambientalmente sustentável e isso traz diversos benefícios:
          </p>
        </div>
      </div>
    </div>
    <div class="text-justify lg:pt-6 mt-5">
      <div class="">
        <div class="lg:fade-in-up">
          <div class="lg:fade-in-up border-t border-gray-300 py-4">
            <div class="lg:pt-12 lg:grid grid-cols-2 mt-2 items-center fade-in-up">
              <div class="lg:p-6 fade-in-up">
                <img src="./assets/img/IBD.jpg" loading="lazy" class="lg:w-10/12 w-full h-72 rounded-md object-cover lg:ml-12">
              </div>
              <div class="lg:px-12 px-2">
                <div class="lg:mt-10 mb-4">
                  <h1 class="font-bold pb-3 pt-5 text-gray-900 lg:text-3xl text-2xl lg:text-start text-center">
                    Certificação por auditoria da empresa IBD certificações para produção de produto
                    ORGÂNICO.
                  </h1>
                  <p class="text-justify mb-12">
                    A certificação IBD (Instituto Biodinâmico) é direcionada para propriedades agrícolas e processos produtivos desse segmento, sendo emitida com uma importante comprovação de que os produtos gerados nesses locais são produzidos e/ou processados conforme normas orgânicas e biodinâmicas.
                  </p>
                </div>
              </div>
            </div>
            <div class="lg:pt-12 lg:grid grid-cols-2 mt-2 items-center fade-in-up">
              <div class="lg:p-6 fade-in-up lg:order-last">
                <img src="./assets/img/APPCC.png" loading="lazy" class="lg:w-full w-full h-72 rounded-md object-cover lg:ml-12">
              </div>
              <div class="lg:px-12 px-2">
                <div class="lg:mt-10 mb-4">
                  <h1 class="font-bold pb-3 pt-5 text-gray-900 lg:text-3xl text-2xl lg:text-start text-center">
                    Norma de APPCC implantada.
                  </h1>
                  <p class="text-justify mb-12">
                    O Sistema APPCC (Sistema de Análise de Perigos e Pontos Críticos de Controle) cuja sigla em inglês é HACCP (Hazard Analysis and Critical Control Point), consiste em um sistema de controle sobre a segurança do alimento mediante a análise e controle dos riscos biológicos, químicos e físicos em todas as etapas, desde a produção da matéria prima até a fabricação, distribuição e consumo.
                  </p>
                </div>
              </div>
            </div>

            <div class="lg:fade-in-up border-t border-gray-300 py-2">
              <div class="lg:pt-12 lg:grid grid-cols-2 mt-2 items-center fade-in-up">
                <div class="lg:p-6 px-2 fade-in-up">
                  <img src="./assets/img/plantando.png" loading="lazy" class="lg:w-full w-full h-72 rounded-md object-cover lg:ml-12">
                </div>
                <div class="lg:px-12 px-2">
                  <div class="lg:mt-10 mb-4">
                    <h1 class="font-bold pb-3 pt-5 text-gray-900 lg:text-3xl text-2xl lg:text-start text-center">
                      Resíduos Orgânicos
                    </h1>
                    <p class="text-justify mb-12">
                      Os resíduos orgânicos gerados dos despolpamento das frutas (cascas e sementes de frutas) no processo de produção, são acumulados em caixas dispostas em pallets e enviadas para sítios onde será utilizado para a alimentação de animais e transformado em adubo para as plantas pelo processo de compostagem.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php include "./components/footer.php" ?>
  <?php include "./components/btn-whatsapp.php" ?>
  <script src="assets/js/tw.js"></script>
  <script src="./assets/js/lz.js"></script>
  <script src="./assets/js/main.js"></script>
  <script src="./assets/js/script.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
  <script src="assets/js/dark_mode.js"></script>
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
  <script>
    const saibaMaisButtons = document.querySelectorAll('.saiba-mais');

    saibaMaisButtons.forEach(button => {
      button.addEventListener('click', () => {
        const certDescription = button.nextElementSibling;
        if (certDescription.classList.contains('show-description')) {
          certDescription.classList.remove('show-description');
        } else {
          certDescription.classList.add('show-description');
        }
      });
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