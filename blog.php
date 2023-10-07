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
$idpost = $url[3];

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
  <div class="bg-gray-300  pt-36 pb-20">
    <h1 class="text-center text-6xl">
      <?php echo $blog['name']; ?>
    </h1>
  </div>
  <section class="mx-auto max-w-7xl px-2">
    <div class="max-w-screen-xl px-4 py-8 mx-auto space-y-12 lg:space-y-20 lg:py-6 lg:px-6">
      <div>
        <div class="mt-4 rounded-xl p-2 shadow-md shadow-blue-200">
          <div  class="flex justify-center">
          <?php echo "<img class='lazy rounded-md h-full w-76 object-cover' src=" . $URI->base('/admin/uploads/blogs') . '/' . $blog['img'] . '>' ?>
          </div>
        </div>
      </div>
      <h2>
        <?php echo $blog['description']; ?>
      </h2>
    </div>
  </section>

  <?php include "./components/footer.php" ?>
  <?php include "./components/modal_form_whats.php" ?>

  <script src="<?php echo $URI->base('assets/js/script.js'); ?>"></script>
  <script src="./assets/js/lz.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
  <script src="<?php echo $URI->base('/assets/js/tw.js'); ?>"></script>
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js"></script>
  <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
</body>

</html>