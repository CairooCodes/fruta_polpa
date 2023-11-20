<?php
include "api-tempo.php";
?>
<header class="w-full">
  <div class="hidden bg-gray-200 sm:block">
    <div class="mx-auto flex max-w-screen-xl px-4 justify-between">
      <div class="flex justify-between items-center space-x-2">
        <a href="<?php echo $URI->base('home.php#mapa') ?>"><img width="20px" src="<?php echo $URI->base('/assets/img/brazil.png') ?>" /></a>
        <span class="text-xs text-gray-600">Encontre Fruta Polpa</span>
      </div>
      <div class="flex items-center">
        <div>
          <img class="mr-2 nuvem-icon" width="30" src="<?php echo $URI->base('/assets/img/tempo.png') ?>">
        </div>
        <div class="hidden md:block text-gray-600 text-xs">
          Teresina/PI - Min <?php echo $var1[$i]; ?> e Max <?php echo $var2[$i]; ?> ºC
        </div>
      </div>
    </div>
  </div>
  <nav class="shadow bg-white">
    <div class="flex flex-wrap items-center justify-between max-w-screen-xl px-4 mx-auto">
      <a href="<?php echo $URI->base("home.php"); ?>">
        <img class="w-16 my-2" src="<?php echo $URI->base("/assets/img/logo.png"); ?>" class="logo" alt="Fruta Polpa" />
      </a>
      <div class="flex items-center lg:order-2 lg:hidden">
        <button id="mobile-menu-button" data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-xs text-color1 rounded-lg lg:hidden focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="mobile-menu-2" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg id="menu-icon" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
          </svg>
          <svg id="close-icon" class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
          </svg>
        </button>
      </div>
      <div class="items-center justify-center hidden w-full lg:flex lg:w-auto lg:order-1 py-1.5" id="mobile-menu-2">
        <ul class="flex flex-col lg:flex-row">
          <li class="py-2">
            <a href="<?php echo $URI->base("institucional"); ?>" class="block py-2 uppercase text-xs rounded" aria-current="page">Institucional</a>
          </li>
          <li class="py-2">
            <a href="<?php echo $URI->base("polpas"); ?>" class="block py-2 uppercase text-xs rounded" aria-current="page">Polpas</a>
          </li>
          <li class="py-2">
            <a href="<?php echo $URI->base("premium-quality"); ?>" class="block py-2 uppercase text-xs rounded" aria-current="page">Qualidade premium</a>
          </li>
          <li class="py-2">
            <a href="<?php echo $URI->base("certificacoes"); ?>" class="block py-2 uppercase text-xs rounded" aria-current="page">Certificações</a>
          </li>
          <li class="py-2">
            <a href="<?php echo $URI->base("receitas"); ?>" class="block py-2 uppercase text-xs rounded" aria-current="page">Receitas</a>
          </li>
          <li class="py-2">
            <a href="<?php echo $URI->base("trabalhe-conosco"); ?>" class="block py-2 uppercase text-xs rounded" aria-current="page">Seja nosso parceiro</a>
          </li>
          <li class="py-2">
            <a href="<?php echo $URI->base("contato"); ?>" class="block py-2 uppercase text-xs rounded" aria-current="page">Contato</a>
          </li>
        </ul>
        <div class="flex justify-center">
          <a href="<?php echo $URI->base("receitas"); ?>">
            <button class="hover:bg-color1 hover:text-white text-xs text-gray-800 py-2 px-4 rounded-full border-2 border-color1">
              RECEITAS
            </button>
          </a>
          <a href="<?php echo $URI->base("trabalhe-conosco"); ?>">
            <button class="ml-4 text-xs py-2 px-4 rounded-full border-2 boder-transparent hover:border-color1 bg-color1 hover:bg-white text-white hover:text-color1">
              Trabalhe conosco
            </button>
          </a>
        </div>
      </div>
    </div>
  </nav>
</header>