<!-- component -->
<footer class="w-full text-gray-700 bg-gray-200 body-font mt-10">
    <div class="container flex flex-col flex-wrap px-5 py-12 mx-auto md:items-center lg:items-start md:flex-row md:flex-no-wrap">
        <div class="flex-shrink-0 w-64 mx-auto text-center md:mx-0 md:text-left">
            <div>
                <a href="<?php echo $URI->base("/home"); ?>" class="flex justify-center">
                <img data-src="<?php echo $URI->base("/assets/img/$logo"); ?>" class="logo lazy" alt="<?php echo $title; ?>" />
                    <!-- <img src="./assets/img/logo.png" alt="FrutaPolpaLogo" class="w-2xl h-auto mx-auto md:mx-0"> -->
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
                    <a class="ml-3 text-gray-500 cursor-pointer hover:text-gray-700">
                        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                            <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                            </path>
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
                        <a href="home.php" class="text-gray-600 cursor-pointer hover:text-orange-500">
                            Home
                        </a>
                    </li>
                    <li class="mt-3">
                        <a href="quemsomos.php" class="text-gray-600 cursor-pointer hover:text-orange-500">
                            Institucional
                        </a>
                    </li>
                    <li class="mt-3">
                        <a href="blogs.php" class="text-gray-600 cursor-pointer hover:text-orange-500">
                            Blog
                        </a>
                    </li>
                </div>
            </div>

            <div class="">
                <h2 class="mb-3 text-sm font-medium tracking-widest text-gray-600 uppercase title-font">
                    Polpas
                </h2>
                <div class="mb-10 list-none">
                    <li class="mt-3">
                        <a href="products.php" class="text-gray-600 cursor-pointer hover:text-orange-500">
                            Polpas Tradicionais
                        </a>
                    </li>
                    <li class="mt-3">
                        <a href="products.php" class="text-gray-600 cursor-pointer hover:text-orange-500">
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
                        <a href="contato.php" class="text-gray-600 cursor-pointer hover:text-orange-500">
                            Fale Conosco
                        </a>
                    </li>
                    <li class="mt-3">
                        <a href="trabalhe-conosco.php" class="text-gray-600 cursor-pointer hover:text-orange-500">
                            Trabalhe Conosco
                        </a>
                    </li>
                    <li class="mt-3">
                        <a href="#" class="text-gray-600 cursor-pointer hover:text-orange-500">
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
    <div class="bg-orange-500 w-full">
        <div class="container px-5 py-4 mx-auto">
            <p class="text-sm text-gray-700 capitalize xl:text-center">
                © Fruta Polpa<br>Web Developer @cairocodes
            </p>
        </div>
    </div>
</footer>

</div>