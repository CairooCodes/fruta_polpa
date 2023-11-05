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
    <div class="mx-auto max-w-7xl px-2 pt-10">
        <h1 class="text-orange-600 px-6 lg:px-28 text-center text-3xl font-extrabold leading-9 tracking-tight sm:text-4xl sm:leading-10 md:text-left md:text-3xl md:leading-14">
            Fruta Polpa Mix
        </h1>
        <div class="grid lg:grid-cols-4 gap-8 py-16">
            <?php foreach ($polpas2 as $polpa2) { ?>
                <div>
                    <div class="mb-8 mt-4 items-center rounded-xl p-2">
                        <img src='./admin/uploads/polpas/<?php echo $polpa2['img']; ?>'>
                    </div>

                    <div class="flex justify-center mt-4">
                        <a href="<?php echo $URI->base('/polpa/' . slugify($polpa2['name'])); ?>" class="text-orange-600 border-2 border-orange-600 bg-white rounded-full font-semibold text-lg px-5 py-2 text-center hover:bg-orange-600 hover:text-white"><?php echo $polpa2['name']; ?></a>
                    </div>
                </div>

            <?php }
            ?>
        </div>
        <div>
            <div class="flex justify-center px-4 py-8">
                <a href="#" class="text-white bg-orange-500 focus:ring-4 rounded-3xl font-md text-md px-12 py-3 text-center font-black shadow-lg hover:bg-orange-700 hover:shadow-orange-700/50 duration-500 shadow-orange-500/50">ENCONTRE O DISTRIBUIDOR MAIS PRÓXIMO</a>
            </div>
        </div>
    </div>

    <?php include "./components/footer.php" ?>
    <?php include "./components/modal_form_whatsapp.php" ?>
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