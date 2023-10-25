<?php
require_once "db_config.php";
require "config/helper.php";
require "config/url.class.php";
require "./functions/get.php";

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
    <section>
        <div class="max-w-full px-4 pt-5 mx-auto lg:grid grid-cols-2">
            <div class="mx-auto flex items-center">
                <div>
                    <h1 class="font-medium text-orange-500 px-10">
                        FAÇA PARTE DESTA HISTÓRIA!
                    </h1>

                    <div class="py-2">
                        <div class="mt-4 flex flex-col space-y-2 text-gray-500">
                            <p class="text-orange-600 text-3xl font-extrabold leading-9 tracking-tight sm:text-4xl sm:leading-10 md:text-left md:text-3xl md:leading-14 px-4 mx-auto">Seja um Revendedor ou Representante</p>
                            <p class="px-10 mx-auto">Que tal representar ou revender os produtos De Marchi na sua região ou estabelecimento? Entre em contato por meio do formulário e converse com um de nossos consultores.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mx-auto bg-gray-500 rounded w-full">
                <form action="./admin/controllers/add_recruitment.php" method="post" class="mr-auto lg:p-16 place-self-center">
                    <h2 class="text-center md:text-left text-3xl font-extrabold pb-5 tracking-wider text-white">Envie uma mensagem</h2>
                    <div>
                        <label class="text-sm font-bold text-white">
                            Nome
                        </label>
                        <input type="text" name="name" id="name" placeholder="Seu nome completo" class="mt-2 mb-4 w-full rounded-lg p-3 text-gray-900" />
                    </div>
                    <div>
                        <label class="text-sm font-bold text-white">
                            Email
                        </label>
                        <input type="email" name="email" id="email" placeholder="Email@gmail.com" class="mt-2 mb-4 w-full rounded-lg p-3 text-gray-900" />
                    </div>
                    <div>
                        <label class="text-sm font-bold text-white">
                            Telefone
                        </label>
                        <input type="number" name="telephone" id="telephone" placeholder="(99) 9 9999-9999" class="mt-2 mb-4 w-full rounded-lg p-3 text-gray-900" />
                    </div>
                    <div>
                        <label class="text-sm font-bold text-white">
                            Cidade
                        </label>
                        <input type="text" name="city" id="city" placeholder="Cidade" class="mt-2 mb-4 w-full rounded-lg p-3 text-gray-900" />
                    </div>
                    <div>
                        <label class="text-sm font-bold text-white">
                            Estado
                        </label>
                        <input type="text" name="state" id="state" placeholder="Estado" class="mt-2 mb-4 w-full rounded-lg p-3 text-gray-900" />
                    </div>
                    <div>
                        <label class="text-sm font-bold text-white">
                            Área de Interesse
                        </label>
                        <input type="text" name="office" id="office" placeholder="Qual área que deseja trabalhar?" class="mt-2 mb-4 w-full rounded-lg p-3 text-gray-900" />
                    </div>
                    <input type="hidden" value="RECRUTAMENTO" name="type">
                    <div class="mt-2 flex justify-center items-center">
                        <input type="submit" class="my-2 w-full cursor-pointer rounded-lg bg-orange-500 py-2 px-4 font-medium text-white duration-300 ease-in-out hover:bg-gray-300 hover:text-black" value="Enviar">
                    </div>
                </form>
            </div>
    </section>
    
    <?php include "./components/footer.php" ?>

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