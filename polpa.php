<?php
require_once "db_config.php";
require "config/helper.php";
require "config/url.class.php";
require "./functions/get.php";

$receitas = getAllReceitas();
$polpas;
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
      $polpa = getPolpa($id);
    }
  }
}


// Verifica se existem receitas relacionadas à polpa


?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <?php include "components/heads.php"; ?>
</head>

<body>
  <?php include "./components/navbar.php" ?>
  <section class="mx-auto max-w-7xl px-2">
    <div class="max-w-screen-xl pt-10 mx-auto lg:grid grid-cols-2 pb-10">
      <div>
        <h1 class="lg:text-3xl text-3xl">
          <span style="letter-spacing: 0.5px" class="font-black bg-clip-text bg-gradient-to-r from-color1 to-color1 text-color1">
            <?php echo $polpa['name']; ?>
          </span>
        </h1>
        <h2 class="py-4 px-2 text-justify text-xl">
          A polpa de fruta é um produto natural obtido pela extração da parte carnosa e suculenta de frutas maduras, preservando seu sabor e aroma autênticos. É uma opção saudável e versátil, rica em nutrientes, que pode ser consumida de várias maneiras, como lanche, ingrediente em bebidas e sobremesas, e é valorizada por sua conveniência e durabilidade, permitindo desfrutar do sabor das frutas em qualquer estação do ano.
        </h2>
        <div class="rounded-xl shadow-md shadow-blue-200 mb-5">
          <div class="flex justify-center">
            <?php echo "<img class='fade-in-up lazy' data-src=" . $URI->base('/admin/uploads/polpas') . '/' . $polpa['img'] . '>' ?>
          </div>
        </div>
      </div>
      <div class="lg:px-10 p-2">
        <h1 class="lg:text-3xl text-3xl">
          <span style="letter-spacing: 0.5px" class="font-black bg-clip-text bg-gradient-to-r from-color1 to-color1 text-color1">
          Modo de preparo:
          </span>
        </h1>
        <h1 class="text-xl mt-5">
          1- Coloque a embalagem por 10 segundos em água corrente.
        </h1>
        <h1 class="text-xl">
          2- Abra a embalagem com o produto ainda congelado.
        </h1>
        <h1 class="text-xl">
          3- Bata no liquidificador 100g de fruta com 200ml de água ou outro líquido de sua preferência. Rende 1 copo de 300 ml. Adoce a gosto.
        </h1>
        <div class="w-full max-w-md mx-auto py-4 mt-5">
          <table class="bg-green-300 w-full">
            <thead class="bg-green-600">
              <tr>
                <th class="px-4 py-2">Nutriente</th>
                <th class="px-4 py-2">% VD (*)</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="px-4 py-2">Valor Energético</td>
                <td class="px-4 py-2">4%</td>
              </tr>
              <tr>
                <td class="px-4 py-2">Carboidratos</td>
                <td class="px-4 py-2">0,2%</td>
              </tr>
              <tr>
                <td class="px-4 py-2">Proteínas</td>
                <td class="px-4 py-2">2%</td>
              </tr>
              <tr>
                <td class="px-4 py-2">Gorduras totais</td>
                <td class="px-4 py-2">17%</td>
              </tr>
              <tr>
                <td class="px-4 py-2">Gorduras saturadas</td>
                <td class="px-4 py-2">15%</td>
              </tr>
              <tr>
                <td class="px-4 py-2">Gorduras trans</td>
                <td class="px-4 py-2">**</td>
              </tr>
              <tr>
                <td class="px-4 py-2">Fibra alimentar</td>
                <td class="px-4 py-2">37%</td>
              </tr>
              <tr>
                <td class="px-4 py-2">Sódio</td>
                <td class="px-4 py-2">5,5%</td>
              </tr>
              <tr>
                <td class="px-4 py-2">Cálcio</td>
                <td class="px-4 py-2">5%</td>
              </tr>
              <tr>
                <td class="px-4 py-2">Ferro</td>
                <td class="px-4 py-2">0,2%</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <?php
    $polpaId2 = $polpa['id'];
    // Consulta SQL para obter todas as receitas relacionadas à polpa
    $stmt2 = $pdo->prepare("SELECT * FROM receitas WHERE product_id = :product_id");
    $stmt2->bindParam(':product_id', $polpaId2);
    $stmt2->execute();

    if ($stmt2->rowCount() > 0) {
      echo "<h1 class='text-xl text-gray-800 font-bold'>
      Confira algumas de nossas receitas
    </h1>";
    }
    ?>

    <div class="grid grid-cols-3 pb-10">
      <?php
      $polpaId = $polpa['id'];
      // Consulta SQL para obter todas as receitas relacionadas à polpa
      $stmt = $pdo->prepare("SELECT * FROM receitas WHERE product_id = :product_id");
      $stmt->bindParam(':product_id', $polpaId);
      $stmt->execute();

      if ($stmt->rowCount() > 0) {
        $receitasDaPolpa = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($receitasDaPolpa as $receita) {
      ?>
          <div>
            <div class="mb-8 mt-4 items-center rounded-xl p-2">
              <?php echo "<img class='lazy rounded-md' style='width: 350px; height: 250px;' data-src=" . $URI->base('/admin/uploads/receitas') . '/' . $receita['img'] . '>' ?>
            </div>
            <div class="mb-8 mt-4 items-center rounded-xl p-2 text-orange-600 text-center text-xl font-semibold">
              <?php echo $receita['name']; ?>
            </div>
            <div class="flex justify-center">
              <a href="<?php echo $URI->base('/receita/' . slugify($receita['name'])); ?>" class="text-orange-600 border-2 border-orange-600 bg-white rounded-full font-semibold text-lg px-5 py-2 text-center hover:bg-orange-600 hover:text-white">Saiba Mais</a>
            </div>
          </div>
      <?php }
      } else {
        echo "";
      } ?>
    </div>
    </div>
  </section>

  <?php include "./components/footer.php" ?>
  <?php include "./components/btn-whatsapp.php" ?>
  <script src="<?php echo $URI->base('/assets/js/script.js'); ?>"></script>
  <script src="<?php echo $URI->base('/assets/js/lz.js"'); ?>"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
  <script src="<?php echo $URI->base('/assets/js/main.js'); ?>"></script>
  <script src="<?php echo $URI->base('/assets/js/tw.js'); ?>"></script>
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js"></script>
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