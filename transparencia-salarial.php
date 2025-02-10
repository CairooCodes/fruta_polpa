<?php
require "config/helper.php";
require "config/url.class.php";

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
    <div class="mx-auto max-w-7xl px-2 pt-10">
        <!-- Hero Section -->
        <div class="bg-orange-50 py-20">
            <div class="text-center">
                <h1 class="text-4xl font-bold text-orange-500">Relatório de Transparência Salarial</h1>
            </div>
        </div>

        <!-- Content Section -->
        <div class="mt-10">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Left Column -->
                <div>
                    <h2 class="text-2xl font-bold text-orange-500">Introdução</h2>
                    <p class="mt-4 text-gray-700">
                        Em cumprimento à Lei nº 14.611 de 04 de Julho de 2023, à Portaria MTE Nº 3.714 ao Decreto nº 11.795/2023, bem como aos compromissos da empresa FRUTA POLPA, com a razão social DENCLA INDUSTRIA DE POLPAS LTDA, que opera com o CNPJ 05.891.546/0001-01 e tem sua sede localizada na Avenida Henry Wall de Carvalho, 12960, Angelim, Teresina PI, 64.034-280, para a promoção de práticas de inclusão e diversidade, divulgamos o relatório de igualdade salarial. É importante saber que a CBO (Classificação Brasileira de Ocupações) é um sistema que organiza e classifica as profissões existentes no Brasil, tendo sido utilizada como base para elaboração do relatório.
                    </p>
                </div>

                <!-- Right Column -->
                <div>
                    <h2 class="text-2xl font-bold text-orange-500">Ela serve para</h2>
                    <p class="mt-1 text-gray-700">
                        - Identificar e nomear profissões;
                    </p>
                    <p class="mt-1 text-gray-700">- Descrever, de forma geral e ampla, as atividades que cada profissão realiza; </p>
                    <p class="mt-1 text-gray-700">- Informar os requisitos, formações acadêmicas e experiências necessárias mais utilizados no mercado de trabalho </p>
                    <h2 class="text-2xl font-bold text-orange-500 mt-4">Para que é utilizado</h2>
                    <p class="mt-1 text-gray-700">
                        - Buscar informações sobre profissões;
                    </p>
                    <p class="mt-1 text-gray-700">- Auxiliar empresas a classificar cargos e funções (e-Social e Caged); </p>
                    <p class="mt-1 text-gray-700">- Pesquisas públicas de mercado de trabalho; </p>
                    <p class="mt-1 text-gray-700">- Políticas públicas de emprego e qualificação profissional. </p>
                </div>
            </div>

            <div class="mt-10 flex justify-center mb-10">
                <div>
                    <h2 class="text-2xl font-bold text-orange-500 text-center">Relatórios Disponíveis</h2>
                    <p class="mt-4 text-gray-700">
                        Confira abaixo os relatórios de transparência salarial disponíveis para download:
                    </p>

                    <div class="mt-6 flex flex-col space-y-4 md:flex-row md:space-y-0 md:space-x-4">
                        <!-- First PDF Link -->
                        <a href="./docs/RELATORIO 1º SEMESTRE 2024.pdf" class="flex items-center p-4 bg-orange-50 rounded-lg hover:bg-orange-100 transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-orange-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                            </svg>
                            <span class="ml-4 text-blue-900 font-medium">Relatório Primeiro Semestre 2024</span>
                        </a>

                        <!-- Second PDF Link -->
                        <a href="./docs/REALTORIO 2º SEMESTRE 2024.pdf" class="flex items-center p-4 bg-orange-50 rounded-lg hover:bg-orange-100 transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-orange-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                            </svg>
                            <span class="ml-4 text-blue-900 font-medium">Relatório Segundo Semestre 2024</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

    <?php include "./components/footer.php" ?>
    <?php include "./components/btn-whatsapp.php" ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
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