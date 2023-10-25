<?php
require_once "db_config.php";
require "config/helper.php";
require "config/url.class.php";
require "./functions/get.php";

$receitas = getAllReceitas();
$products;
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

$stmt = $pdo->prepare("SELECT * FROM products");
$stmt->execute();
if ($stmt->rowCount() > 0) {
  while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    extract($row);
    $string1 = remove_simbolos_acentos(utf8_decode($idpost));
    $string2 = remove_simbolos_acentos(utf8_decode($name));
    if ($string1 == $string2) {
      $idpost2 = $name;
      $product = getProduct($id);
      $receita = getReceita($id);
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
  <div class="bg-gray-200  pt-16 pb-16">
    <h1 class="text-center text-6xl text-orange-600">
      <?php echo $product['name']; ?>
    </h1>
    <h2 class="text-center text-2xl px-5 py-10">
      Do norte do país para a sua geladeira. O fruto genuinamente brasileiro que dá a força que você precisa na rotina. Nossa dica é você consumir acompanhado de banana, fica uma delícia.
    </h2>
  </div>
  <section class="mx-auto max-w-7xl px-2">
    <div class="max-w-screen-xl px-4 py-8 mx-auto space-y-12 lg:space-y-20 lg:py-6 lg:px-6 grid grid-cols-2">
      <div class="image">
        <div class="mt-4 rounded-xl p-2 shadow-md shadow-blue-200" style="width: 500px; height: 350px;">
          <div class="flex justify-center">
            <?php echo "<img class='lazy rounded-md h-full w-52 object-cover mt-14' style='width: 350px; height: 250px;' src=" . $URI->base('/admin/uploads/products') . '/' . $product['img'] . '>' ?>
          </div>
        </div>
      </div>
      <div class="description">
        <h2 class="">
          <?php echo $product['description']; ?>
        </h2>
      </div>
    </div>
    <div class="grid grid-cols-2">
      <h1>
      <?php// echo $product['price']; ?>
      </h1>
      <h2>
        <?php echo $product['info']; ?>
      </h2>
    </div>
      <div class="flex justify-center mt-4">
        <a href="<?php echo $URI->base('/receita/' . slugify($receitas['name'])); ?>" class="text-orange-600 border-2 border-orange-600 bg-white rounded-full font-semibold text-lg px-5 py-2 text-center hover:bg-orange-600 hover:text-white"><?php echo $product['receita']; ?></a>
      </div>
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