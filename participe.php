<?php
require "config/helper.php";
require "config/url.class.php";
require "db_config.php";

$URI = new URI();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php include "components/heads.php"; ?>
</head>

<body class="bg-gray-100">
    <?php include "./components/navbar.php"; ?>

    <div class="mx-auto bg-gray-100 pt-10">
        <!-- Exibir cupons e códigos -->
        <div class="max-w-3xl mx-auto p-8 bg-white rounded-lg shadow text-center mt-10">

            <h2 class="lg:text-3xl text-2xl font-semibold mb-4 text-orange-600 font-sans">
                Promoção encerrada 🎉
            </h2>

            <p class="text-gray-700 mb-6 text-lg">
                Agradecemos imensamente a todos que participaram da nossa promoção.
                Foi um sucesso graças a vocês! 💛
            </p>

            <hr class="my-6">

            <h3 class="text-xl font-semibold text-gray-800 mb-4">
                🎊 Vencedora da Promoção
            </h3>

            <div class="flex justify-center mb-6">
                <img
                    src="./assets/img/Ganhador.jpg"
                    alt="Vencedora da promoção"
                    class="rounded-lg shadow-md max-w-full h-auto">
            </div>

            <p class="text-gray-700 mb-6">
                Parabéns à vencedora! Obrigado a todos que participaram e fizeram parte desse momento especial.
            </p>

            <hr class="my-6">

            <h3 class="text-xl font-semibold text-gray-800 mb-4">
                📹 Confira o vídeo do sorteio
            </h3>

            <div class="flex justify-center">
                <video
                    controls
                    class="rounded-lg shadow-md w-full max-w-2xl">
                    <source src="./assets/img/sorteio.MOV" type="video/mp4">
                    Seu navegador não suporta a reprodução de vídeo.
                </video>
            </div>

        </div>
    </div>

    <?php include "./components/footer.php"; ?>
    <?php include "./components/btn-whatsapp.php"; ?>
</body>

</html>