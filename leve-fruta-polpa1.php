<?php
require "db_config.php";
require "config/helper.php";
require "config/url.class.php";

$URI = new URI();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php include "./components/heads.php"; ?>
</head>

<body>
    <?php include "./components/navbar.php"; ?>
    <section class="flex items-center justify-center md:min-h-screen w-full bg-no-repeat bg-center bg-cover premiadas">
        <div class="grid grid-cols-1 md:grid-cols-3 items-center">
            <div class="md:col-span-2 md:px-40 py-5">
                <img src="./assets/img/polpapremiada.png" class="w-full" alt="Logo">
            </div>
            <div class="md:col-span-1 flex flex-col space-y-6 mb-5">
                <div class="bg-[#E36204] md:mx-10 mx-2 p-5 rounded-xl">
                    <h1 class="text-4xl font-black italic text-[#F8E38F]">
                        PARTICIPE AGORA.
                    </h1>
                    <p class="text-xl font-bold text-white">
                        Informe seu WhatsApp para logar ou fazer seu cadastro:
                    </p>
                    <form action="verificar_phone.php" method="POST">
                        <div>
                            <div class="flex space-x-2 items-end w-full">
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
                                        class="lg:w-72 w-46 border border-gray-200 p-2 rounded-md text-center"
                                        pattern="\d{8}" placeholder="Número do WhatsApp"
                                        oninput="this.value = this.value.replace(/[^0-9]/g, '')">
                                </div>
                            </div>
                        </div>

                        <div class="flex justify-end items-center pt-3">
                            <button type="submit"
                                class="w-1/2 p-2 bg-green-800 text-white rounded-xl text-lg hover:bg-green-700">
                                Enviar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <div>
        <img src="./assets/img/promocao/pop.jpg" class="w-full" loading="lazy" alt="Logo">
    </div>
    <section class="py-3 bg-[#FF9000]">
        <div class="p-5">
            <h1 class="text-white text-5xl font-black italic uppercase text-center">Como participar?</h1>
        </div>
        <div class="flex flex-col items-center">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 pt-3 w-full">
                <div class="flex flex-col items-center">
                    <div class="flex items-center justify-center">
                        <img src="./assets/img/promocao/1.png" alt="" loading="lazy" class="h-40 object-cover">
                    </div>
                    <div class="bg-[#DD4408] rounded-full mx-2 text-white p-5 my-2">
                        <h1 class="text-center font-bold text-xl">
                            Compre a partir de 3 pacotes de fruta polpa
                        </h1>
                    </div>
                </div>

                <div class="flex flex-col items-center">
                    <div class="flex items-center justify-center">
                        <img src="./assets/img/promocao/2.png" alt="" loading="lazy" class="h-40 object-cover">
                    </div>
                    <div class="bg-[#DD4408] rounded-full mx-2 text-white p-5 my-2">
                        <h1 class="text-center font-bold text-xl">
                            Faça seu cadastro pelo site
                        </h1>
                    </div>
                </div>

                <div class="flex flex-col items-center">
                    <div class="flex items-center justify-center">
                        <img src="./assets/img/promocao/3.png" alt="" loading="lazy" class="h-40 object-cover">
                    </div>
                    <div class="bg-[#DD4408] rounded-full mx-2 text-white p-5 my-2">
                        <h1 class="text-center font-bold text-xl">
                            Guarde seus cupons fiscais
                        </h1>
                    </div>
                </div>
            </div>

            <div class="p-5">
                <h1 class="text-white text-5xl font-black italic uppercase text-center">Na Plataforma</h1>
            </div>
            <div class="flex flex-wrap justify-center gap-8 pt-3 w-full">
                <div class="flex flex-col items-center">
                    <div class="flex items-center justify-center">
                        <img src="./assets/img/promocao/4.png" alt="" loading="lazy" class="h-40 object-cover">
                    </div>
                    <div class="bg-[#DD4408] rounded-full mx-2 text-white p-5 my-2">
                        <h1 class="text-center font-bold text-xl">
                            Confira seus números da sorte
                        </h1>
                    </div>
                </div>
                <div class="flex flex-col items-center">
                    <div class="flex items-center justify-center">
                        <img src="./assets/img/promocao/5.png" alt="" loading="lazy" class="h-40 object-cover">
                    </div>
                    <div class="bg-[#DD4408] rounded-full mx-2 text-white p-5 my-2">
                        <h1 class="text-center font-bold text-xl">
                            Cadastre mais cupons para obter mais chances
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div>
        <img src="./assets/img/promocao/produtos.jpg" class="w-full" loading="lazy" alt="Logo">
    </div>
    <?php include "./components/footer.php"; ?>
    <script src="assets/js/tw.js"></script>

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>

</html>