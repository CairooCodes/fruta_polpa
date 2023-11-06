<!-- component -->
<footer class="w-full text-gray-700 bg-white body-font border-t">
  <div class="max-w-screen-xl px-4 flex flex-col flex-wrap py-12 mx-auto md:items-center lg:items-start md:flex-row md:flex-no-wrap">
    <div class="flex-shrink-0 w-64 mx-auto text-center md:mx-0 md:text-left">
      <div>
        <a href="<?php echo $URI->base("/home"); ?>" class="flex justify-center">
          <img data-src="<?php echo $URI->base("/assets/img/$logo"); ?>" class="logo lazy" alt="<?php echo $title; ?>" />
        </a>
      </div>
      <div class="text-center mt-2">
        <p class="mb-3 text-sm font-medium tracking-widest text-gray-600">"Fruta Polpa: Sabor que Inspira, Saúde que Transforma!"</p>
      </div>
      <div class="mt-4 text-center">
        <span class="inline-flex justify-center mt-2 sm:ml-auto sm:mt-0 sm:justify-start">
          <a href="https://www.facebook.com/FrutaPolpa" class="text-gray-500 cursor-pointer hover:text-gray-700">
            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
              <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
            </svg>
          </a>
          <a href="send?phone=5586994293833&text=Olá%20Fruta%20Polpa-site" class="ml-3 text-gray-500 cursor-pointer hover:text-gray-700">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
              <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
            </svg>
          </a>
          <a href="https://www.instagram.com/frutapolpa/" class="ml-3 text-gray-500 cursor-pointer hover:text-gray-700">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
              <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
              <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
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
            <a href="<?php echo $URI->base("/home"); ?>" class="text-gray-600 cursor-pointer hover:text-orange-500">
              Home
            </a>
          </li>
          <li class="mt-3">
            <a href="<?php echo $URI->base("/institucional"); ?>" class="text-gray-600 cursor-pointer hover:text-orange-500">
              Institucional
            </a>
          </li>
          <li class="mt-3">
            <a href="<?php echo $URI->base("/blogs"); ?>" class="text-gray-600 cursor-pointer hover:text-orange-500">
              Blog
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
            <a href="<?php echo $URI->base("/polpas-tradicionais"); ?>" class="text-gray-600 cursor-pointer hover:text-orange-500">
              Polpas Tradicionais
            </a>
          </li>
          <li class="mt-3">
            <a href="<?php echo $URI->base("/polpas-mixs"); ?>" class="text-gray-600 cursor-pointer hover:text-orange-500">
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
            <a href="<?php echo $URI->base("/contato"); ?>" class="text-gray-600 cursor-pointer hover:text-orange-500">
              Fale Conosco
            </a>
          </li>
          <li class="mt-3">
            <a href="<?php echo $URI->base("/trabalhe-conosco"); ?>" class="text-gray-600 cursor-pointer hover:text-orange-500">
              Trabalhe Conosco
            </a>
          </li>
          <li class="mt-3">
            <a href="<?php echo $URI->base("/trabalhe-conosco"); ?>" class="text-gray-600 cursor-pointer hover:text-orange-500">
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