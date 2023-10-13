<?php
require_once "db_config.php";
require "config/helper.php";
require "config/url.class.php";
require "./functions/get.php";

$products = getProducts();
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
    <div class="mx-auto max-w-7xl px-2 pt-32">
        <h1 class="text-orange-600 text-center text-3xl font-extrabold leading-9 tracking-tight sm:text-4xl sm:leading-10 md:text-left md:text-3xl md:leading-14">
            Polpas Tradicionais
        </h1>
        <div class="grid lg:grid-cols-4 gap-8">

            <?php foreach ($products as $product) { ?>
                <div>
                    <div class="mb-8 mt-4 items-center rounded-xl p-2">
                        <img class='custom-image' src='./admin/uploads/products/<?php echo $product['img']; ?>'>
                    </div>

                    <div class="flex justify-center mt-4">
                        <a href="<?php echo $URI->base('/product/' . slugify($product['name'])); ?>" class="text-white bg-orange-600 focus:ring-4 rounded-md font-md text-md px-5 py-2 text-center">Saiba mais</a>
                    </div>
                </div>

            <?php }
            ?>
        </div>
    </div>

    <div class="mx-auto max-w-7xl px-2 pt-32">
        <h1 class="text-orange-600 text-center text-3xl font-extrabold leading-9 tracking-tight sm:text-4xl sm:leading-10 md:text-left md:text-3xl md:leading-14">
            Polpas Mix
        </h1>
        <div class="grid lg:grid-cols-4 gap-8">

            <?php foreach ($mixs as $mix) { ?>
                <div>
                    <div class="mb-8 mt-4 items-center rounded-xl p-2">
                        <img class='custom-image' src='./admin/uploads/products/<?php echo $mix['img']; ?>'>
                    </div>

                    <div class="flex justify-center mt-4">
                        <a href="<?php echo $URI->base('/mix/' . slugify($mix['name'])); ?>" class="text-white bg-orange-600 focus:ring-4 rounded-md font-md text-md px-5 py-2 text-center">Saiba mais</a>
                    </div>
                </div>

            <?php }
            ?>
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