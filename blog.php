<?php
require_once "db_config.php";
require "config/helper.php";
require "config/url.class.php";
require "./functions/get.php";

$blogs;
$URI = new URI();

function remove_simbolos_acentos($string)
{
  $string = trim(strtolower($string));
  $a = 'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûüýýþÿŔŕ?';
  $b = 'aaaaaaaceeeeiiiidnoooooouuuuybsaaaaaaaceeeeiiiidnoooooouuuuyybyRr-';
  $string = strtr($string, utf8_decode($a), $b);
  $string = str_replace(".", "-", $string);
  $string = preg_replace("/[^0-9a-zA-Z\.]+/", '-', $string);
  return utf8_decode(rtrim($string, "-"));
}


$url = explode("/", $_SERVER['REQUEST_URI']);
$idpost = $url[2];

$idpost2 = "";

$stmt = $pdo->prepare("SELECT * FROM blogs");
$stmt->execute();
if ($stmt->rowCount() > 0) {
  while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    extract($row);
    $string1 = remove_simbolos_acentos(utf8_decode($idpost));
    $string2 = remove_simbolos_acentos(utf8_decode($name));
    if ($string1 == $string2) {
      $idpost2 = $name;
      $blog = getBlog($id);
    }
  }
}


?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <?php include "components/heads.php"; ?>
</head>

<body>
  <?php include "./components/navbar.php" ?>
  <section class="mx-auto max-w-7xl px-2">
    <div class="max-w-screen-xl pt-10 mx-auto lg:grid grid-cols-2 gap-10 pb-10">
      <div>
        <h1 class="lg:text-4xl text-3xl text-color1 pb-3 text-center">
          <?php echo $blog['name']; ?>
        </h1>
        <div class="swiper swiper_blog z-0">
          <div class="swiper-wrapper">
            <a class="swiper-slide">
              <?php echo "<img class='rounded-md object-cover w-full' loading='lazy' src=" . $URI->base('/admin/uploads/blogs') . '/' . $blog['img'] . '>' ?>
            </a>
          </div>
          <div class="swiper-button-next text-white"></div>
          <div class="swiper-button-prev text-white"></div>
          <div class="swiper-pagination swiper-pagination-blog-main"></div>
        </div>
      </div>
      <div>
        <h2 class="pt-3">
          <?php echo $blog['description']; ?>
        </h2>
      </div>
  </section>

  <?php include "./components/footer.php" ?>
  <?php include "./components/btn-whatsapp.php" ?>

  <script src="<?php echo $URI->base('/assets/js/lz.js'); ?>"></script>
  <script src="<?php echo $URI->base('assets/js/script.js'); ?>"></script>
  <script src="<?php echo $URI->base('/assets/js/main.js'); ?>"></script>
  <script src="./assets/js/lz.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
  <script src="https://frutapolpa.com.br/assets/js/tw.js"></script>
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js"></script>
  <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
  <script>
    var swiper = new Swiper(".swiper_blog", {
      loop: true,
      autoplay: {
        delay: 5000,
        disableOnInteraction: false,
      },
      pagination: {
        el: ".swiper-pagination-blog-main",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  </script>

</body>

</html>