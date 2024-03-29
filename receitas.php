<?php
require_once "db_config.php";
require "config/helper.php";
require "config/url.class.php";
require "./functions/get.php";

$receitas = getAllReceitas();
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
  <div class="mx-auto max-w-7xl px-2 pt-10 pb-10">
    <h1 class="lg:text-4xl text-3xl">
      <span class="text-color1 px-4">
        Receitas Fruta Polpa
      </span>
    </h1>
    <p class="lg:mt-4 mt-2 text-justify px-4">
      Nossos produtos são caracterizados pela versatilidade, podem ser usados para os mais diversas receitas como: Bolos, sobremesas, drinks, tortas, geleias, sorvetes, saladas, mousses além é claro dos sucos para refrescar e proporcionar mais saúde, já que todos os nutrientes das nossas polpas são mantidos graças ao nosso processo premium de qualidade.
    </p>
    <p class="mt-1 text-justify mb-10 px-4">
      Confira nossas receitas, faça em casa e nos marque no instagram @Frutapolpa.
    </p>

    <div class="grid lg:grid-cols-4 gap-8">

      <?php foreach ($receitas as $receita) { ?>
        <div>
          <div class="mb-3 mt-4 items-center rounded-xl p-2 zoom-container">
            <img class='custom-image w-full' loading="lazy" src='./admin/uploads/receitas/<?php echo $receita['img']; ?>'>
          </div>
          <div class="lg:text-xl text-xl text-center">
            <span class="text-gray-800">
              <?php echo $receita['name']; ?>
            </span>
          </div>

          <div class="flex justify-center mt-4">
            <a href="<?php echo ('https://frutapolpa.com.br/receita/' . slugify($receita['name'])); ?>" style="background: rgb(252,114,0); background: linear-gradient(15deg, rgba(252,114,0,1) 25%, rgba(255,198,0,1) 100%);" class="saiba-mais text-white border-2 border-white bg-white rounded-full font-semibold text-lg px-5 py-2 text-center hover:bg-orange-600 hover:text-black">Saiba mais</a>
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