<?php
$var1 = array(0 => "Temp min.");
$var2 = array(0 => "Temp max.");
$var4_des = array(0 => "Desc. Symbol");
$array = array();

$file = 'http://api.tempo.com/index.php?api_lang=br&localidad=12999&affiliate_id=tcypqcbv8817';
if ($xml = simplexml_load_file($file)) {
  $i = 0;
  $nday = 1;
  $url = $xml->location->attributes()->city;
  $array = explode('[', $url);

  foreach ($xml->location->var as $var) {
    switch ($i) {
      case 0:
        $j = 0;
        for ($j = 0; $j < $nday; $j++) {
          $var1 = $var1 + array($j + 1 => htmlentities($xml->location->var[$i]->data->forecast[$j]->attributes()->value, ENT_COMPAT, 'UTF-8'));
        }
        break;
      case 1:
        $j = 0;
        for ($j = 0; $j < $nday; $j++) {
          $var2 = $var2 + array($j + 1 => htmlentities($xml->location->var[$i]->data->forecast[$j]->attributes()->value, ENT_COMPAT, 'UTF-8'));
        }
        break;
      case 3:
        $j = 0;
        for ($j = 0; $j < $nday; $j++) {
          $var4_des = $var4_des + array($j + 1 => htmlentities($xml->location->var[$i]->data->forecast[$j]->attributes()->value, ENT_COMPAT, 'UTF-8'));
        }
        break;
    }
    $i++;
  }
}
$i = 1;

$stmt = $pdo->prepare("SELECT * FROM navbars");
$stmt->execute();
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
  extract($row);
}
?>
<header class="w-full">
  <div class="hidden bg-orange-500 sm:block">
    <div class="mx-auto flex max-w-6xl justify-between">
      <div class="flex justify-between items-center space-x-2">
        <a href=""><img width="20px" src="<?php echo $URI->base('/assets/img/brazil.png') ?>" /></a>
        <span class="text-xs text-white">Encontre Fruta Polpa</span>
      </div>
      <div class="flex items-center">
        <div>
          <img class="mr-2 nuvem-icon" width="30" src="<?php echo $URI->base('/assets/img/tempo.png') ?>">
        </div>
        <div class="hidden md:block text-white text-xs">
          Teresina/PI - Min <?php echo $var1[$i]; ?> e Max <?php echo $var2[$i]; ?> ºC
        </div>
      </div>
    </div>
  </div>
  <nav class="shadow bg-white lg:pt-2 md:pb-0">
    <div class="flex flex-wrap items-center justify-between max-w-screen-xl px-4 mx-auto">
      <a href="<?php echo $URI->base("home.php"); ?>">
        <img class="w-20 my-5" src="<?php echo $URI->base("/assets/img/$logo"); ?>" class="logo" alt="<?php echo $title; ?>" />
      </a>
      <div class="flex items-center lg:order-2">
        <?php if ($btn_name != null) { ?>
          <div class="hidden mt-2 mr-4 sm:inline-block">
            <a href="<?php echo $btn_link; ?>" class="text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 sm:mr-2 lg:mr-0 dark:bg-purple-600 dark:hover:bg-purple-700 focus:outline-none dark:focus:ring-purple-800"><?php echo $btn_name; ?></a>
          </div>
        <?php } ?>
        <button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-color1 rounded-lg lg:hidden focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="mobile-menu-2" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
          </svg>
          <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
          </svg>
        </button>
      </div>

      <div class="items-center justify-center hidden w-full lg:flex lg:w-auto lg:order-1 py-1.5 mt-2" id="mobile-menu-2">
        <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
          <li class="py-2">
            <a href="<?php echo $URI->base("home.php"); ?>" class="block py-2 pl-3 pr-4 uppercase text-sm rounded lg:p-0" aria-current="page">Home</a><img src="./assets/img/laranja.png" class="hover-image" alt="Imagem 1">
          </li>
          <li class="py-2">
            <a href="<?php echo $URI->base("quemsomos"); ?>" class="block py-2 pl-3 pr-4 uppercase text-sm rounded lg:p-0" aria-current="page">Quem Somos</a><img src="./assets/img/laranja.png" class="hover-image" alt="Imagem 1">
          </li>
          <div class="group inline-block">
            <li class="py-1">
              <div class="inline-flex items-center rounded">
                <a href="" class="uppercase text-sm" aria-current="page">Produtos</a><img src="./assets/img/laranja.png" class="hover-image" alt="Imagem 1">
                <svg class="h-4 w-4 ml-2 fill-current uppercase text-sm" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                  <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                </svg>
              </div>
            </li>
            <ul class="absolute z-10 hidden rounded bg-white pt-1 shadow-md shadow-gray-300 group-hover:block">
              <li class="grid justify-items-start">
                <button class="rounded py-2 px-4">
                  <a href="<?php echo $URI->base('products'); ?>">
                    <h1 class="text-gray-900 ml-2 mr-5 text-sm">
                      Todos nossos produtos
                    </h1>
                  </a>
                </button>
              </li>
              <?php
              $stmt = $pdo->prepare("SELECT * FROM products");
              $stmt->execute();
              if ($stmt->rowCount() > 0) {
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                  extract($row);
              ?>
                  <li class="grid justify-items-start">
                    <button class="rounded py-2 px-4">
                      <!-- <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#E96708" class="bi bi-chevron-right font-bold" viewBox="0 0 16 16">
                                                <path fillRule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                            </svg> -->
                      <a href="<?php echo $URI->base('product/' . slugify($name)); ?>">
                        <h1 class="ml-2 mr-5 text-sm text-gray-900 uppercase">
                          <?php echo $name; ?>
                        </h1>
                      </a>
                    </button>
                  </li>
              <?php
                }
              }
              ?>
            </ul>
          </div>
          <li class="py-2">
            <a href="<?php echo $URI->base("blog"); ?>" class="block py-2 pl-3 pr-4 uppercase text-sm rounded lg:p-0" aria-current="page">Blog</a><img src="./assets/img/laranja.png" class="hover-image" alt="Imagem 1">
          </li>
          <li class="py-2 md:px-4">
            <a href="<?php echo $URI->base("distribuidores"); ?>" class="block py-2 pl-3 pr-4 uppercase text-sm rounded lg:p-0" aria-current="page">Distribuidores</a><img src="./assets/img/laranja.png" class="hover-image" alt="Imagem 1">
          </li>
          <div class="group inline-block">
            <li class="py-1">
              <div class="inline-flex items-center rounded">
                <a href="" class="uppercase text-sm" aria-current="page">Contato</a><img src="./assets/img/laranja.png" class="hover-image" alt="Imagem 1">
                <svg class="h-4 w-4 ml-2 fill-current uppercase text-sm" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                  <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                </svg>
              </div>
            </li>
            <ul class="absolute z-10 hidden rounded bg-white pt-1 shadow-md shadow-gray-300 group-hover:block">
              <li class="grid justify-items-start">
                <button class="rounded py-2 px-4">
                  <a href="<?php echo $URI->base("faleconosco.php"); ?>">
                    <h1 class="ml-2 mr-5 text-sm text-gray-900 uppercase">
                      Fale Conosco
                    </h1>
                  </a>
                </button>
              </li>
              <li class="grid justify-items-start">
                <button class="rounded py-2 px-4">
                  <a href="<?php echo $URI->base("trabalheconosco.php"); ?>">
                    <h1 class="ml-2 mr-5 text-sm text-gray-900 uppercase">
                      Trabalhe Conosco
                    </h1>
                  </a>
                </button>
              </li>
              <li class="grid justify-items-start">
                <button class="rounded py-2 px-4">
                  <a href="<?php echo $URI->base("denucia.php"); ?>">
                    <h1 class="ml-2 mr-5 text-sm text-gray-900 uppercase">
                      Denúncia
                    </h1>
                  </a>
                </button>
              </li>
            </ul>
          </div>
        </ul>
      </div>
    </div>
  </nav>
</header>