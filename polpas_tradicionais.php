<?php
require "db_config.php";
require "config/helper.php";
require "config/url.class.php";
require "./functions/get.php";

$products1 = getProducts1();

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
    <h1 class="text-orange-600 text-center text-3xl font-extrabold leading-9 tracking-tight sm:text-4xl sm:leading-10 md:text-left md:text-3xl md:leading-14">
      Polpas Tradicionais
    </h1>
    <div class="lg:grid lg:grid-cols-2 max-w-full-2xl mx-auto px-10 lg:space-x-5">
      <div class="pt-10 lg:col-span-4">
        <div class="swiper swiper_polpas1">
          <div class="swiper-wrapper">
            <?php foreach ($products1 as $product1) { ?>
              <div class="swiper-slide my-4 mx-1">
                <div class="max-w-lg p-3 mx-auto rounded-md shadow-csc">
                  <div>
                    <img class='lazy rounded-md h-52 w-full' data-src='./admin/uploads/products/<?php echo $product1['img'] ?>'>
                  </div>
                  <div class="rounded-2xl text-center">
                    <h3 class="post-title mb-4 text-lg font-semibold py-2"><?php echo $product1['name']; ?></h3>
                  </div>
                  <div class="flex justify-center mt-4">
                    <a href="<?php echo $URI->base('noticia/' . slugify($product1['name'])); ?>" class="text-white bg-orange-500 focus:ring-4 rounded-md font-md text-md px-5 py-2 text-center">Saiba mais</a>
                  </div>
                </div>
              </div>
            <?php }
            ?>
          </div>
        </div>
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
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script>
      var swiper = new Swiper(".swiper_polpas1", {
        loop: true,
        freeMode: true,
        breakpoints: {
          300: {
            slidesPerView: 1.2,
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
</body>

</html>