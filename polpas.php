<?php
require "db_config.php";
require "config/helper.php";
require "config/url.class.php";
require "./functions/get.php";

$polpas1 = getPolpas1();
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
  <section class="max-w-full lg:pt-32 lg:pb-12 pb-2 polpas">
    <div class="max-w-full px-6 lg:pt-12 pt-10 lg:pb-40 mx-auto mt-2 pb-3 lg:px-16">
      <div class="fade-up">
        <p class="cssnormal lg:text-6xl text-2xl text-black text-end">Polpas<br>
          <span class="csscursiva lg:text-6xl text-2xl text-black">100% Naturais</span>
        </p>
      </div>
    </div>
  </section>
  <div class="mx-auto max-w-7xl px-2 pt-10">
    <h1 class="lg:text-4xl text-3xl">
      <span style="letter-spacing: 0.5px;" class="font-black bg-clip-text bg-gradient-to-r from-color1 to-color1 text-color1">
        Linha Tradicional
      </span>
    </h1>
    <div class="grid lg:grid-cols-4 gap-8">
      <?php foreach ($polpas1 as $polpa1) { ?>
        <div>
          <div class="mb-8 mt-4 items-center rounded-xl p-2">
            <img loading="lazy" src='./admin/uploads/polpas/<?php echo $polpa1['img']; ?>'>
          </div>

          <div class="flex justify-center mt-4">
            <a href="<?php echo $URI->base('polpa/' . slugify($polpa1['name'])); ?>" style="background: rgb(252,114,0); background: linear-gradient(15deg, rgba(252,114,0,1) 25%, rgba(255,198,0,1) 100%);" class="text-white border-2 border-white bg-white rounded-full font-semibold text-lg px-5 py-2 text-center hover:bg-orange-600 hover:text-black"><?php echo $polpa1['name']; ?></a>
          </div>
        </div>

      <?php }
      ?>
    </div>
  </div>

  <div class="mx-auto max-w-7xl px-2 pt-24 mb-10">
    <h1 class="lg:text-4xl text-3xl">
      <span style="letter-spacing: 0.5px;" class="font-black bg-clip-text bg-gradient-to-r from-color1 to-color1 text-color1">
        Linha Mix
      </span>
    </h1>
    <div class="grid lg:grid-cols-4 gap-8">

      <?php foreach ($polpas2 as $polpa2) { ?>
        <div>
          <div class="mb-8 mt-4 items-center rounded-xl p-2">
            <img loading="lazy" src='./admin/uploads/polpas/<?php echo $polpa2['img']; ?>'>
          </div>

          <div class="flex justify-center mt-4">
            <a href="<?php echo $URI->base('/polpa/' . slugify($polpa2['name'])); ?>" style="background: rgb(252,114,0); background: linear-gradient(15deg, rgba(252,114,0,1) 25%, rgba(255,198,0,1) 100%);" class="text-white border-2 border-white bg-white rounded-full font-semibold text-lg px-5 py-2 text-center hover:bg-orange-600 hover:text-black"><?php echo $polpa2['name']; ?></a>
          </div>
        </div>

      <?php }
      ?>
    </div>
  </div>

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

</body>

</html>