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
        <div class="max-w-full px-4 pt-5 mt-1 mx-auto lg:grid grid-cols-2 bg-yellow-50">
            <div class="mx-auto py-10 flex items-center">
                <div>
                    <h1 class="text-center">
                        <span style="letter-spacing: 0.5px" class="font-medium bg-clip-text bg-gradient-to-r from-color1 to-color1 text-color1">
                            FAÇA PARTE DESTA HISTÓRIA!
                        </span>
                    </h1>

                    <div class="py-2">
                        <div class="mt-4 flex flex-col space-y-2 text-gray-500">
                            <h1 class="lg:text-3xl text-3xl text-center">
                                <span style="letter-spacing: 0.5px" class="font-black bg-clip-text bg-gradient-to-r from-color1 to-color1 text-color1">
                                    Seja um Revendedor ou Representante
                                </span>
                            </h1>
                            <p class="px-10 mx-auto">Que tal representar ou revender os produtos De Marchi na sua região ou estabelecimento?<br> Entre em contato por meio do formulário e converse com um de nossos consultores.</p>
                        </div>
                    </div>
                    <div class="mt-28 flex justify-center">
                        <!-- <form action="./admin/controllers/add_vaga.php" method="post"> -->
                        <form action="" method="post">
                            <label for="cargo">
                                <span style="letter-spacing: 0.5px" class="font-medium bg-clip-text bg-gradient-to-r from-color1 to-color1 text-color1">
                                    Escolha o cargo desejado:
                                </span>
                            </label>
                            <select name="cargo" id="cargo" class="rounded-full w-72">
                                <option value="Administração" class="text-center">Administração</option>
                                <option value="Recursos Humanos" class="text-center">Recursos Humanos</option>
                                <option value="Representante de Vendas" class="text-center">Representante de Vendas</option>
                                <option value="Consultor de Vendas" class="text-center">Consultor de Vendas</option>
                                <option value="Promotor de Vendas" class="text-center">Promotor de Vendas</option>
                                <option value="Motorista" class="text-center">Motorista</option>
                            </select>
                            <br><br>
                            <input type="hidden" value="Vagas" name="type">
                            <div class="flex justify-center mt-2">
                                <button style="background: rgb(252,114,0); background: linear-gradient(15deg, rgba(252,114,0,1) 25%, rgba(255,198,0,1) 100%);" class="text-sm text-black hover:text-white font-bold py-2 px-4 rounded-full w-full md:w-80">
                                    Buscar Vagas
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="mx-auto bg-gray-400 rounded w-full px-4 py-2">
                <form action="./admin/controllers/add_recruitment.php" method="post" class="mr-auto lg:p-16 place-self-center">
                    <h2 class="text-center md:text-left text-3xl font-extrabold pb-5 tracking-wider text-white">Envie uma mensagem</h2>
                    <div>
                        <label class="text-sm font-bold text-white">
                            Nome
                        </label>
                        <input type="text" name="name" id="name" placeholder="Seu nome completo" class="mt-2 mb-4 w-full rounded-lg p-3 text-gray-900" required="" />
                    </div>
                    <div>
                        <label class="text-sm font-bold text-white">
                            Email
                        </label>
                        <input type="email" name="email" id="email" placeholder="Email@gmail.com" class="mt-2 mb-4 w-full rounded-lg p-3 text-gray-900" required="" />
                    </div>
                    <div>
                        <label class="text-sm font-bold text-white">
                            Telefone
                        </label>
                        <input type="text" name="telephone" id="telephone" placeholder="(99) 9 9999-9999" class="mt-2 mb-4 w-full rounded-lg p-3 text-gray-900" required="" />
                    </div>
                    <div>
                        <label class="text-sm font-bold text-white">
                            Cidade
                        </label>
                        <input type="text" name="city" id="city" placeholder="Cidade" class="mt-2 mb-4 w-full rounded-lg p-3 text-gray-900" required="" />
                    </div>
                    <div>
                        <label class="text-sm font-bold text-white">
                            Estado
                        </label>
                        <input type="text" name="state" id="state" placeholder="Estado" class="mt-2 mb-4 w-full rounded-lg p-3 text-gray-900" required="" />
                    </div>
                    <div>
                        <label class="text-sm font-bold text-white">
                            Área de Interesse
                        </label>
                        <input type="text" name="office" id="office" placeholder="Qual área que deseja trabalhar?" class="mt-2 mb-4 w-full rounded-lg p-3 text-gray-900" required="" />
                    </div>
                    <div class="">
                        <label class="mt-2 mr-5 text-sm font-bold text-white">
                            Envie seu currículo em PDF
                        </label>
                        <input type="file" name="curriculo" required="">
                    </div>
                    <input type="hidden" value="RECRUTAMENTO" name="type">
                    <div class="flex justify-center mt-5">
                        <button class="bg-white hover:bg-color1 text-sm text-color1 hover:text-black font-bold py-2 px-4 rounded-full border w-full md:w-60">
                            Enviar
                        </button>
                    </div>
                </form>
            </div>
    </section>

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
    <script>
        // JavaScript para abrir o WhatsApp ao clicar no botão
        document.getElementById('openWhatsApp').addEventListener('click', function() {
            window.open('https://api.whatsapp.com/send?phone=5586994293833&text=Olá%20Fruta%20Polpa-site', '_blank');
        });
    </script>
</body>

</html>