<header class="w-full shadow z-10 bg-white lg:hidden fixed">
  <nav class="border-gray-200 py-2.5" x-data="{ show: true }">
    <div class="flex flex-wrap items-center justify-between max-w-screen-xl px-4 mx-auto">
      <a href="<?php echo $URI->base("home.php"); ?>" class="flex items-center">
        <img src="<?php echo $URI->base("/assets/img/logo.png"); ?>" class="w-40 h-12" alt="Boom Soluções Empresariais Logo" />
        <!-- <img :class="{'block': !show, 'hidden':show }" src="./assets/img/logobranca.png" class="w-40" alt="Boom Soluções Empresariais Logo" /> -->
      </a>
      <div class="flex items-center lg:order-2 space-x-2">
        <!-- <div id="theme_toggler">
          <i @click="show = !show" :class="{'hidden': !show, 'block':show }" class="bi bi-moon-stars-fill"></i>
          <i @click="show = !show" :class="{'block': !show, 'hidden':show }" class="bi bi-brightness-high-fill"></i>
        </div> -->
        <button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="mobile-menu-2" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
          </svg>
          <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
          </svg>
        </button>
      </div>
      <div class="items-center justify-between hidden w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
        <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
          <li>
            <a href="<?php echo $URI->base("/home.php"); ?>" class="uppercase block py-2 pl-3 pr-4 text-white bg-color1 rounded text-sm lg:bg-transparent lg:text-color1 font-semibold lg:p-0" aria-current="page">Home</a>
          </li>
          <li>
            <a href="<?php echo $URI->base("/quem_somos.php"); ?>" class="block py-2 pl-3 pr-4 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-color1 lg:p-0">Quem Somos</a>
          </li>
          <li>
            <a href="<?php echo $URI->base("/products.php"); ?>" class="uppercase block py-2 pl-3 pr-4 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent text-sm lg:border-0 lg:hover:text-color1 font-semibold lg:p-0">Polpas</a>
          </li>
          <li>
            <a href="<?php echo $URI->base("/blogs.php"); ?>" class="uppercase block py-2 pl-3 pr-4 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent text-sm lg:border-0 lg:hover:text-color1 font-semibold lg:p-0">Blog</a>
          </li>
          <li>
            <a href="<?php echo $URI->base(""); ?>" class="uppercase block py-2 pl-3 pr-4 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-color1 text-sm font-semibold lg:p-0">Promoções</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>
<header style="box-shadow: rgba(255, 255, 255, 0.1) 0px 1px 1px 0px inset, rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;" class="w-full shadow fixed z-10 bg-white hidden lg:block">
  <nav class="border-gray-200 py-2.5" x-data="{ show: true }">
    <div class="flex flex-wrap items-center justify-between max-w-screen-xl px-4 mx-auto">
      <a href="<?php echo $URI->base("home.php"); ?>" class="flex items-center">
        <img src="<?php echo $URI->base("/assets/img/logo.png"); ?>" class="w-auto h-16" alt="Boom Soluções Empresariais Logo" />
      </a>
      <div class="items-center justify-between hidden w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
        <ul class="flex items-center flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
          <li>
            <a href="<?php echo $URI->base("/home.php"); ?>" class="uppercase block py-2 pl-3 pr-4 text-white bg-color1 rounded text-sm lg:bg-transparent lg:text-color1 font-semibold lg:p-0" aria-current="page">Home</a>
          </li>
          <li>
            <a href="<?php echo $URI->base("/quem_somos.php"); ?>" class="uppercase block py-2 pl-3 pr-4 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent text-sm lg:border-0 lg:hover:text-color1 font-semibold lg:p-0">Quem Somos</a>
          </li>
          <li>
            <a href="<?php echo $URI->base("/products.php"); ?>" class="uppercase block py-2 pl-3 pr-4 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent text-sm lg:border-0 lg:hover:text-color1 font-semibold lg:p-0">Polpas</a>
          </li>
          <li>
            <a href="<?php echo $URI->base("/blogs.php"); ?>" class="uppercase block py-2 pl-3 pr-4 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent text-sm lg:border-0 lg:hover:text-color1 font-semibold lg:p-0">Blog</a>
          </li>
          <li>
            <a href="" class="uppercase block py-2 pl-3 pr-4 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent text-sm lg:border-0 lg:hover:text-color1 font-semibold lg:p-0">Promoções</a>
          </li>
          <li>
            <a href="https://www.facebook.com/FrutaPolpa/">
              <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path fillRule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clipRule="evenodd" />
              </svg>
            </a>
          </li>
          <li>
            <a href="https://www.instagram.com/frutapolpa/">
              <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path fillRule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clipRule="evenodd" />
              </svg>
            </a>
          </li>
          <li>
            <a href="https://api.whatsapp.com/send?phone=5586994293833&text=Olá%20Fruta%20Polpa-site">
              <svg class="h-9 w-8 mt-3" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
              </svg>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>