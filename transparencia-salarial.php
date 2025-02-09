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
        <div class="bg-blue-50 py-20">
            <div class="text-center">
                <h1 class="text-4xl font-bold text-blue-900">Relatório de Transparência Salarial</h1>
                <p class="mt-4 text-lg text-blue-700">Entenda como funciona a política de remuneração na Avine.</p>
            </div>
        </div>

        <!-- Content Section -->
        <div class="mt-10">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Left Column -->
                <div>
                    <h2 class="text-2xl font-bold text-blue-900">Introdução</h2>
                    <p class="mt-4 text-gray-700">
                        Na Avine, acreditamos que a transparência é fundamental para construir um ambiente de trabalho justo e equitativo. Este relatório tem como objetivo fornecer uma visão clara e detalhada sobre como estruturamos a remuneração de nossos colaboradores.
                    </p>
                </div>

                <!-- Right Column -->
                <div>
                    <h2 class="text-2xl font-bold text-blue-900">Metodologia</h2>
                    <p class="mt-4 text-gray-700">
                        Utilizamos uma metodologia baseada em dados reais e benchmarks de mercado para garantir que nossos salários sejam competitivos e justos. Todos os dados são revisados periodicamente para garantir a precisão e a relevância.
                    </p>
                </div>
            </div>

            <!-- Additional Content -->
            <div class="mt-10">
                <h2 class="text-2xl font-bold text-blue-900">Dados Salariais</h2>
                <p class="mt-4 text-gray-700">
                    Abaixo, você encontrará uma tabela com os dados salariais médios por cargo e nível de experiência. Esses dados são atualizados anualmente e refletem a média salarial dentro da empresa.
                </p>

                <!-- Example Table -->
                <div class="mt-6 overflow-x-auto">
                    <table class="min-w-full bg-white">
                        <thead>
                            <tr>
                                <th class="py-2 px-4 border-b border-gray-200 bg-gray-100 text-left text-gray-600">Cargo</th>
                                <th class="py-2 px-4 border-b border-gray-200 bg-gray-100 text-left text-gray-600">Nível</th>
                                <th class="py-2 px-4 border-b border-gray-200 bg-gray-100 text-left text-gray-600">Salário Médio</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="py-2 px-4 border-b border-gray-200">Desenvolvedor</td>
                                <td class="py-2 px-4 border-b border-gray-200">Júnior</td>
                                <td class="py-2 px-4 border-b border-gray-200">R$ 4.000,00</td>
                            </tr>
                            <tr>
                                <td class="py-2 px-4 border-b border-gray-200">Desenvolvedor</td>
                                <td class="py-2 px-4 border-b border-gray-200">Pleno</td>
                                <td class="py-2 px-4 border-b border-gray-200">R$ 6.500,00</td>
                            </tr>
                            <tr>
                                <td class="py-2 px-4 border-b border-gray-200">Desenvolvedor</td>
                                <td class="py-2 px-4 border-b border-gray-200">Sênior</td>
                                <td class="py-2 px-4 border-b border-gray-200">R$ 9.000,00</td>
                            </tr>
                        </tbody>
                    </table>
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