<?php
require "db_config.php";
require "config/helper.php";
require "config/url.class.php";
require "./functions/get.php";

$polpas = getAllPolpas();
$polpas1 = getPolpas1();
$polpas2 = getPolpas2();

$URI = new URI();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php include "./components/heads.php"; ?>
    <link rel="stylesheet" href="https://frutapolpa.com.br/assets/css/maps.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <style>
        @keyframes jump {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-5px);
            }
        }
    </style>
</head>

<body>
    <?php include "./components/navbar.php"; ?>
    <section class="flex items-center justify-center min-h-screen w-full bg-no-repeat bg-center bg-cover polpas">
        <div class="bg-white bg-opacity-80 p-16 rounded-lg shadow-lg w-full max-w-4xl">
            <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-28">
                <img src="./assets/img/logo.png" alt="Logo" class="w-72 mx-auto animate-bounce" style="animation-duration: 5s;">
                <div class="flex flex-col space-y-6">
                    <h1 class="text-center text-4xl font-bold text-emerald-800">PARTICIPE AQUI! <br> É FÁCIL E RÁPIDO.</h1>
                    <p class="text-center text-xl font-bold text-emerald-800">Informe seu cpf para logar ou se cadastrar:</p>
                    <input type="text" placeholder="Digite seu CPF" class="p-5 border border-color1 rounded-full w-full text-lg">
                    <div class="flex justify-center items-center"><button class="w-1/2 p-3 bg-green-600 text-white rounded-full text-lg hover:bg-green-700">Enviar</button></div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-3 bg-color3">
        <div class="p-5 text-3xl font-bold uppercase text-center">
            <h1>Como participar?</h1>
        </div>
        <div class="flex items-center justify-center">
            <div class="lg:grid grid-cols-3 gap-8 pt-3">
                <div class="flex flex-col items-center lg:pb-0 pb-5">
                    <div class="flex items-center justify-center">
                        <img src="./assets/img/logo.png" alt="Logo" class="w-20">
                    </div>
                    <div>
                        <h1 class="text-center font-bold"><span class="text-3xl">Compre</span> <br> <span class="text-xl">qualquer produto Fruta Polpas</span></h1>
                    </div>
                </div>
                <div class="flex flex-col items-center lg:pb-0 pb-5">
                    <div class="flex items-center justify-center">
                        <div class="bg-green-600 w-16 h-16 rounded-full flex items-center justify-center">
                            <i class="bi bi-whatsapp text-white text-3xl"></i>
                        </div>
                    </div>
                    <div>
                        <h1 class="text-center font-bold"><span class="text-3xl uppercase">Cadastre</span> <br> <span class="text-xl"><a href="#" class="underline">aqui no site</a> <br> ou pelo WhatsApp (xx) xxxx-xxxx</span></h1>
                    </div>
                </div>
                <div class="flex flex-col items-center lg:pb-0 pb-5">
                    <div class="flex items-center justify-center">
                        <div class="bg-green-600 w-16 h-16 rounded-full flex items-center justify-center">
                            <i class="bi bi-gift text-white text-3xl"></i>
                        </div>
                    </div>
                    <div>
                        <h1 class="text-center font-bold"><span class="text-3xl uppercase">Concorra</span> <br> <span class="text-xl">a prêmios que não <br> dá para esquecer</span></h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-3 bg-color3">
        <div class="p-5 text-3xl font-bold uppercase text-center">
            <h1>Toda a linha de produtos <br> Fruta Polpa participam.</h1>
        </div>
        <div class="max-w-full px-4 pb-12 lg:grid grid-cols-2">
            <div class="lg:pl-72 px-5">
                <div class="swiper swiper_products_type z-0">
                    <div class="swiper-wrapper">
                        <?php foreach ($polpas1 as $polpa1) { ?>
                            <div class="swiper-slide pb-5">
                                <div class="transition duration-500 bg-white rounded-2xl shadow2">
                                    <div class="h-full">
                                        <img loading="lazy" src='https://frutapolpa.com.br/admin/uploads/polpas/<?php echo $polpa1['img']; ?>'>
                                    </div>
                                </div>
                            </div>
                        <?php }
                        ?>
                    </div>
                    <!-- <div class="swiper-pagination"></div> -->
                </div>
            </div>
            <div class="lg:pr-72 px-5">
                <div class="swiper swiper_products_type2 z-0">
                    <div class="swiper-wrapper">
                        <?php foreach ($polpas2 as $polpa2) { ?>
                            <div class="swiper-slide">
                                <div class=" transition duration-500 bg-white rounded-2xl shadow2 ">
                                    <div class="h-full">
                                        <img loading="lazy" src='https://frutapolpa.com.br/admin/uploads/polpas/<?php echo $polpa2['img']; ?>'>
                                    </div>
                                </div>
                            </div>
                        <?php }
                        ?>
                    </div>
                    <!-- <div class="swiper-pagination2"></div> -->
                </div>
            </div>
        </div>
    </section>
    <?php include "./components/footer.php"; ?>
    <script src="assets/js/tw.js"></script>
    <script src="./assets/js/main.js"></script>
    <script src="./assets/js/maps.js"></script>

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAet9s5aUCXCW8LCVn3GgnSixUcrXhSANc&callback=initMap&v=weekly" defer></script>

    <script>
        var swiper = new Swiper(".swiper_products_type", {
            effect: "flip",
            // grabCursor: true,
            autoplay: {
                delay: 3500,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
            },
        });
    </script>
    <script>
        var swiper = new Swiper(".swiper_products_type2", {
            effect: "flip",
            // grabCursor: true,
            autoplay: {
                delay: 4500,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
            },
        });
    </script>
</body>

</html>