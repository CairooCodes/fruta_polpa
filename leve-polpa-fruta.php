<?php
    // Aqui pode adicionar validação do CPF no backend se necessário
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
<?php include "./components/heads.php"; ?>
  <link rel="stylesheet" href="https://frutapolpa.com.br/assets/css/maps.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <style>
        @keyframes jump {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-5px); }
        }
    </style>
</head>
<body> 
<?php include "./components/navbar.php"; ?>
<div class="flex items-center justify-center min-h-screen w-full bg-no-repeat bg-center bg-cover polpas">
    <div class="bg-white bg-opacity-80 p-16 rounded-lg shadow-lg w-full max-w-4xl">
        <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-28">
            <img src="./assets/img/logo.png" alt="Logo" class="w-72 mx-auto animate-bounce" style="animation-duration: 5s;">
            <div class="flex flex-col space-y-6">
                <h1 class="text-center text-4xl font-bold text-emerald-800">PARTICIPE AQUI! <br> É FÁCIL E RÁPIDO.</h1>
                <p class="text-center text-xl font-bold text-emerald-800">Informe seu cpf para logar ou se cadastrar:</p>
                <input type="text" placeholder="Digite seu CPF" class="p-5 border border-color1 rounded-full w-full text-lg">
                <div class="flex justify-center items-center"><button class="w-1/2 p-3 bg-green-600 text-white rounded-full text-lg hover:bg-green-700">Enviar</button></div>
            </div>
        </div>
    </div>
</div>
<script src="assets/js/tw.js"></script>
  <script src="./assets/js/main.js"></script>
  <script src="./assets/js/maps.js"></script>

  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAet9s5aUCXCW8LCVn3GgnSixUcrXhSANc&callback=initMap&v=weekly" defer></script>
</body>

</html>
