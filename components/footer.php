<!-- component -->
<footer class="w-full text-gray-700 bg-white body-font border-t pt-16">
  <div class="max-w-screen-xl px-4 flex flex-col flex-wrap py-12 mx-auto md:items-center lg:items-start md:flex-row md:flex-no-wrap">
    <div class="flex-shrink-0 w-64 mx-auto text-center md:mx-0 md:text-left">
      <div>
        <a href="<?php echo $URI->base("home"); ?>" class="flex justify-center">
          <img data-src="<?php echo $URI->base("assets/img/logo.png"); ?>" class="logo lazy" alt="Fruta Polpa" />
        </a>
      </div>
      <div class="text-center mt-2">
        <p class="mb-3 text-sm font-medium tracking-widest text-gray-600">A melhor do Brasil</p>
      </div>
      <div class="mt-4 text-center">
        <span class="inline-flex justify-center mt-2 sm:ml-auto sm:mt-0 sm:justify-start">
          <a href="https://www.instagram.com/frutapolpa/" class="ml-3 text-gray-500 cursor-pointer hover:text-gray-700">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5 text-color1" viewBox="0 0 24 24">
              <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
              <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
            </svg>
          </a>
          <a href="https://www.youtube.com/watch?v=-PHliBQYwXI" class="ml-3 text-gray-500 cursor-pointer hover:text-gray-700">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-whatsapp text-color1" viewBox="0 0 16 16">
              <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z" />
            </svg>
          </a>
          <a href="https://www.linkedin.com/company/fruta-polpa/" class="text-gray-500 cursor-pointer hover:text-gray-700 ml-3">
            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5 text-color1" viewBox="0 0 24 24">
              <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z">
              </path>
            </svg>
          </a>

        </span>
      </div>
    </div>
    <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:col-span-2 lg:grid-cols-4 mt-10 -mb-10 text-left md:pl-20 md:mt-0 md:text-left">
      <div class="">
        <h2 class="mb-3 text-sm font-medium tracking-widest text-gray-600 uppercase title-font">
          Fruta Polpa
        </h2>
        <div class="mb-10 list-none">
          <li class="mt-3">
            <a href="<?php echo $URI->base("institucional"); ?>" class="text-gray-600 cursor-pointer hover:text-orange-500">
              Institucional
            </a>
          </li>
          <li class="mt-3">
            <a href="<?php echo $URI->base("trabalhe-conosco"); ?>" class="text-gray-600 cursor-pointer hover:text-orange-500">
              Trabalhe Conosco
            </a>
          </li>
        </div>
      </div>

      <div>
        <h2 class="mb-3 text-sm font-medium tracking-widest text-gray-600 uppercase title-font">
          Polpas
        </h2>
        <div class="mb-10 list-none">
          <li class="mt-3">
            <a href="<?php echo $URI->base("polpas-tradicionais"); ?>" class="text-gray-600 cursor-pointer hover:text-orange-500">
              Polpas Tradicionais
            </a>
          </li>
          <li class="mt-3">
            <a href="<?php echo $URI->base("polpas-mixs"); ?>" class="text-gray-600 cursor-pointer hover:text-orange-500">
              Polpas Mix
            </a>
          </li>
          <li class="mt-3">
            <a class="text-gray-600 cursor-pointer hover:text-orange-500"></a>
          </li>
        </div>
      </div>
      <div>
        <p class="mb-3 text-sm font-medium tracking-widest text-gray-600 uppercase title-font">
          Contato
        </p>
        <div class="mb-10 list-none">
          <li class="mt-3">
            <a href="<?php echo $URI->base("contato"); ?>" class="text-gray-600 cursor-pointer hover:text-orange-500">
              Fale Conosco
          <li class="mt-3">
            <a href="<?php echo $URI->base("trabalhe-conosco"); ?>" class="text-gray-600 cursor-pointer hover:text-orange-500">
              Seja um Representante
            </a>
          </li>
        </div>
      </div>
      <div class="">
        <h2 class="mb-3 text-sm font-medium tracking-widest text-gray-600 uppercase title-font">
          Legalidade
        </h2>
        <div class="mb-10 list-none">
          <li class="mt-3">
            <a href="#" class="text-gray-600 cursor-pointer hover:text-orange-500">
              Política de Privacidade
            </a>
          </li>
        </div>
      </div>
    </div>
  </div>
  <div class="bg-gray-200 w-full">
    <div class="container px-5 py-4 mx-auto">
      <p class="text-sm text-gray-700 capitalize xl:text-center">
        © Fruta Polpa<br>Web Developer @cairocodes
      </p>
    </div>
  </div>
</footer>

</div>