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
    <section class="bg-white max-w-screen-xl px-4 header-institucional mx-auto">
        <div class="lg:pt-12 pb-12 lg:grid grid-cols-2 mt-2">
            <div class="lg:px-12">
                <div class="mt-14 mb-4 text-justify">
                    <h1 class="font-sm text-3xl mb-10" style="color: #1c5503">
                        Fruta polpa é <br><span class="font-bold lg:text-5xl" style="color: #1c5503">QUALIDADE PREMIUM</span>
                    </h1>
                    <p>
                        Referência em polpas de frutas premium, garantindo qualidade excepcional e sabor autêntico. Além disso, nosso compromisso com a sustentabilidade inclui práticas responsáveis na produção e parcerias com agricultores locais. Possuímos certificações de qualidade e sustentabilidade, assegurando a pureza de nossos produtos e nossa dedicação ao meio ambiente. Escolha a Fruta Polpa e desfrute de sabores incríveis com consciência ecológica.
                    </p>
                </div>
                
                <div class="max-w-full mx-auto grid grid-cols-2 pt-8">
                    <img data-src="./assets/img/industria2.png" class="lazy w-full rounded-tl-md">
                    <div class="flex justify-center items-center text-white p-3 rounded-tr-md" style="background-color: #f7640e;">
                        <h1 class="font-bold">QUALIDADE PREMIUM</h1>
                    </div>
                    <div class="flex justify-center items-center text-white p-3 lg:rounded-bl-md" style="background-color: #ce1575;">
                        <h1 class="font-bold">TECNOLOGIA</h1>
                    </div>
                    <img data-src="./assets/img/tecnologia.png" class="lazy w-full lg:rounded-br-md">
                </div>
            </div>
            <div class="lg:px-16">
                <div class="max-w-full lg:pt-12 mx-auto grid grid-cols-2">
                    <img data-src="./assets/img/materiaprimaselecionada.png" class="lazy w-full rounded-tl-md">
                    <div class="flex justify-center items-center text-white text-center p-3 rounded-tr-md" style="background-color:  #1c5503;">
                        <h1 class="font-bold">MATÉRIA PRIMA SELECIONADA</h1>
                    </div>
                </div>
                <div class="max-w-full mx-auto grid grid-cols-2">
                    <div class="flex justify-center items-center text-white p-3" style="background-color: #cfcd0d;">
                        <h1 class="font-bold">SELEÇÃO</h1>
                    </div>
                    <img data-src="./assets/img/seleção.png" class="lazy w-full">
                    <img data-src="./assets/img/produção.png" class="lazy w-full">
                    <div class="flex justify-center items-center text-white p-3" style="background-color: #ffae00;">
                        <h1 class="font-bold">PRODUÇÃO</h1>
                    </div>
                    <div class="flex justify-center items-center text-white p-3 rounded-bl-md pb-12" style="background-color: #ff2400;">
                        <h1 class="font-bold">LOGÍSTICA</h1>
                    </div>
                    <img data-src="./assets/img/logística.png" class="lazy w-full rounded-br-md">
                </div>
            </div>
        </div>
    </section>

    <?php include "./components/footer.php" ?>
    <?php include "./components/btn-whatsapp.php" ?>
    <script src="./assets/js/script.js"></script>
    <script src="./assets/js/lz.js"></script>
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