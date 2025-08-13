<?php
require "db_config.php";
require "config/helper.php";
require "config/url.class.php";
require "./functions/get.php";

$polpas = getAllPolpas();
$polpas1 = getPolpas1();
$polpas2 = getPolpas2();

$URI = new URI();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php include "./components/heads.php"; ?>
    <link rel="stylesheet" href="https://frutapolpa.com.br/assets/css/maps.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <style>
        @keyframes jump {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-5px);
            }
        }
    </style>
</head>

<body>
    <?php include "./components/navbar.php"; ?>
    <section class="flex items-center justify-center min-h-screen w-full bg-no-repeat bg-center bg-cover premiadas">
        <div class="max-w-7xl">
            <div class="grid grid-cols-1 md:grid-cols-2 items-center">
                <img src="./assets/img/polpapremiada.png" class="w-full" alt="Logo">
                <div class="flex flex-col space-y-6">
                    <h1 class="text-4xl font-bold text-emerald-800">
                        PARTICIPE AQUI! <br> É FÁCIL E RÁPIDO.
                    </h1>
                    <p class="text-xl font-bold text-emerald-800">
                        Informe seu telefone para logar ou se cadastrar:
                    </p>
                    <form action="verificar_phone.php" method="POST">
                        <div>
                            <label class="block text-sm font-medium">WhatsApp *</label>
                            <div class="flex space-x-2 items-end">
                                <div>
                                    <input type="text" id="ddd" name="ddd" maxlength="2" required
                                        class="w-20 border border-gray-200 p-2 rounded-md text-center"
                                        pattern="\d{2}" placeholder="DDD"
                                        oninput="this.value = this.value.replace(/[^0-9]/g, '')">
                                </div>
                                <div>
                                    <input type="text" value="9" disabled
                                        class="w-14 border border-gray-200 p-2 rounded-md text-center bg-gray-100 text-gray-500">
                                </div>
                                <div>
                                    <input type="text" id="phone_number" name="phone_number" maxlength="8" required
                                        class="border border-gray-200 p-2 rounded-md text-center"
                                        pattern="\d{8}" placeholder="Número do WhatsApp"
                                        oninput="this.value = this.value.replace(/[^0-9]/g, '')">
                                </div>
                            </div>
                        </div>

                        <div class="flex justify-center items-center pt-3">
                            <button type="submit"
                                class="w-1/2 p-3 bg-green-600 text-white rounded-full text-lg hover:bg-green-700">
                                Enviar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class="py-3 bg-color3">
        <div class="p-5 text-3xl font-bold uppercase text-center">
            <h1>Como participar?</h1>
        </div>
        <div class="flex items-center justify-center">
            <div class="lg:grid grid-cols-3 gap-8 pt-3">
                <div class="flex flex-col items-center lg:pb-0 pb-5">
                    <div class="flex items-center justify-center">
                        <img src="./assets/img/logo.png" alt="Logo" class="w-20">
                    </div>
                    <div>
                        <h1 class="text-center font-bold"><span class="text-3xl">Compre</span> <br> <span
                                class="text-xl">qualquer produto Fruta Polpas</span></h1>
                    </div>
                </div>
                <div class="flex flex-col items-center lg:pb-0 pb-5">
                    <div class="flex items-center justify-center">
                        <div class="bg-green-600 w-16 h-16 rounded-full flex items-center justify-center">
                            <i class="bi bi-whatsapp text-white text-3xl"></i>
                        </div>
                    </div>
                    <div>
                        <h1 class="text-center font-bold"><span class="text-3xl uppercase">Cadastre</span> <br> <span
                                class="text-xl"><a href="https://frutapolpa.com.br/" class="underline">aqui no site</a>
                                <br> ou pelo WhatsApp (xx) xxxx-xxxx</span></h1>
                    </div>
                </div>
                <div class="flex flex-col items-center lg:pb-0 pb-5">
                    <div class="flex items-center justify-center">
                        <div class="bg-green-600 w-16 h-16 rounded-full flex items-center justify-center">
                            <i class="bi bi-gift text-white text-3xl"></i>
                        </div>
                    </div>
                    <div>
                        <h1 class="text-center font-bold"><span class="text-3xl uppercase">Concorra</span> <br> <span
                                class="text-xl">a prêmios que não <br> dá para esquecer</span></h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include "./components/footer.php"; ?>
    <script src="assets/js/tw.js"></script>
    <script src="./assets/js/main.js"></script>
    <script src="./assets/js/maps.js"></script>

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAet9s5aUCXCW8LCVn3GgnSixUcrXhSANc&callback=initMap&v=weekly"
        defer></script>

    <script>
        var swiper = new Swiper(".swiper_products_type", {
            effect: "flip",
            // grabCursor: true,
            autoplay: {
                delay: 3500,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
            },
        });
    </script>
    <script>
        var swiper = new Swiper(".swiper_products_type2", {
            effect: "flip",
            // grabCursor: true,
            autoplay: {
                delay: 4500,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
            },
        });
    </script>
</body>

</html>