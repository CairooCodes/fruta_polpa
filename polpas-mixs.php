<?php
require "db_config.php";
require "config/helper.php";
require "config/url.class.php";
require "./functions/get.php";

$polpas2 = getPolpas2();

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
    <div class="mx-auto px-2 pt-10">
        <h1 class="text-orange-600 px-6 lg:px-28 text-center text-3xl font-extrabold leading-9 tracking-tight sm:text-4xl sm:leading-10 md:text-left md:text-3xl md:leading-14">
            Polpas Mix
        </h1>
        <div class="mx-auto px-6 lg:px-48">
            <div class="">
                <div class="swiper swiper_polpas2 py-8  ">
                    <div class="swiper-wrapper ">
                        <?php foreach ($polpas2 as $polpa2) { ?>
                            <div class="swiper-slide my-4 mx-1">
                                <div class="max-w-lg p-3 mx-auto rounded-md shadow2">
                                    <div>
                                        <img class='lazy rounded-md h-96 object-cover w-full' data-src='./admin/uploads/polpas/<?php echo $polpa2['img'] ?>'>
                                    </div>
                                    <div class="rounded-2xl text-center">
                                        <h3 class="post-title mb-4 text-lg font-semibold py-2"><?php echo $polpa2['name']; ?></h3>
                                    </div>
                                    <div class="flex justify-center mt-4">
                                        <a href="<?php echo $URI->base('noticia/' . slugify($polpa2['name'])); ?>" class="text-white bg-orange-500 focus:ring-4 rounded-md font-md text-md px-5 py-2 text-center">Saiba mais</a>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
                <div class="swiper-button-next font-black text-orange-500 hover:text-orange-700 lg:mr-12"></div>
                <div class="swiper-button-prev font-black text-orange-500 hover:text-orange-700 lg:ml-12"></div>
            </div>
        </div>
        <div>
            <div class="flex justify-center px-4 py-8">
                <a href="#" class="text-white bg-orange-500 focus:ring-4 rounded-3xl font-md text-md px-12 py-3 text-center font-black shadow-lg hover:bg-orange-700 hover:shadow-orange-700/50 duration-500 shadow-orange-500/50">ENCONTRE O DISTRIBUIDOR MAIS PRÓXIMO</a>
            </div>
        </div>

        <?php include "./components/footer.php" ?>

        <script src="./assets/js/script.js"></script>
        <script src="./assets/js/lz.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
        <script src="assets/js/dark_mode.js"></script>
        <script src="assets/js/tw.js"></script>
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
        <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
        <script>
            var swiper = new Swiper(".swiper_polpas2", {
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
        <style>
            .swiper-button-next,
            .swiper-button-prev {
                transform: scale(0.6);
                /* Fator de escala desejado (0.8 reduzirá em 20%) */
            }
        </style>
</body>

</html>