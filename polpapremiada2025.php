<?php
require "db_config.php";
require "config/helper.php";
require "config/url.class.php";
require "./functions/get.php";

$URI = new URI();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php include "./components/heads.php"; ?>
    <link rel="stylesheet" href="https://frutapolpa.com.br/assets/css/maps.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <style>
        html,
        body {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        .bg-custom-image {
            background-image: url('./assets/img/landing_page/Wallpaper.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 100%;
        }

        @media (max-width: 640px) {
            .modelo-mobile {
                display: none !important;
            }

            .texto-mobile {
                position: relative !important;
                top: 0 !important;
                right: 0 !important;
                transform: none !important;
                margin-top: 1rem;
                width: 60% !important;
            }
        }
    </style>
</head>

<body class="overflow-x-hidden">
    <?php // include  "./components/navbar.php"; 
    ?>
    <section class="bg-custom-image px-4 sm:px-0">
        <div class="flex w-full flex-col sm:flex-row items-center sm:items-start">
            <div class="py-4 sm:pl-12 flex justify-center sm:justify-start">
                <img src="./assets/img/landing_page/LOGOTIPO_RGB.png" alt="LOGOTIPO_RGB" class="w-32 sm:w-44">
            </div>
            <div class="flex flex-1 items-center justify-center">
                <img src="./assets/img/landing_page/SELO3D.png" alt="SELO3D" class="lg:w-[400px]">
            </div>
        </div>

        <div class="flex items-center justify-center relative">
            <!-- Modelo (escondido no mobile) -->
            <img src="./assets/img/landing_page/Modelo.png" alt="Modelo"
                class="sm:block lg:w-[950px] lg:absolute lg:top-[-480px] lg:left-[650px] transform -translate-x-1/2 z-0 hidden">
            <img src="./assets/img/landing_page/Modelo.png" alt="Modelo"
                class="absolute lg:top-[200px] lg:hidden">
            <!-- Produtos -->
            <img src="./assets/img/landing_page/Produtos.png" alt="Produtos"
                class="w-full lg:w-[1000px] relative z-10">

            <!-- Texto -->
            <img src="./assets/img/landing_page/Texto.png" alt="Texto"
                class="w-36 lg:w-96 lg:absolute lg:top-4 lg:top-[-60px] top-[-30px] lg:right-[10%] lg:right-[570px] right-[70px] transform translate-x-1/2 z-0 absolute">
        </div>
        <a href="https://wa.me/558688727926?text=Oi">
            <div class="flex items-center justify-center mt-10">
                <img src="./assets/img/landing_page/Polpas.png" alt="Polpas" class="w-full lg:w-4/5 relative bottom-10 z-10">
            </div>

            <div class="flex items-center justify-center py-10">
                <img src="./assets/img/landing_page/Regulamento.png" alt="Regulamento" class="lg:w-2/3 relative z-10">
            </div>
        </a>
    </section>

    <?php // include "./components/footer.php"; 
    ?>
    <script src="assets/js/tw.js"></script>
    <script src="./assets/js/main.js"></script>
    <script src="./assets/js/maps.js"></script>

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAet9s5aUCXCW8LCVn3GgnSixUcrXhSANc&callback=initMap&v=weekly"
        defer></script>

    <script>
        var swiper = new Swiper(".swiper_products_type", {
            effect: "flip",
            autoplay: {
                delay: 3500,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
            },
        });
        var swiper2 = new Swiper(".swiper_products_type2", {
            effect: "flip",
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