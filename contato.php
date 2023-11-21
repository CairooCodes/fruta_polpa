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
      <div class="mx-auto py-28">
        <h1 class="lg:text-4xl text-3xl">
          <span style="letter-spacing: 0.5px" class="font-black bg-clip-text bg-gradient-to-r from-color1 to-color1 text-color1">
            Entre em Contato
          </span>
        </h1>

        <div class="py-8">
          <div class="mt-4 flex flex-col space-y-2 text-gray-500">
            <p class="font-bold bg-clip-text bg-gradient-to-r from-color1 to-color1 text-color1">Telefone</p>
            <p>+55 (86) 9 9429-3833</p>
          </div>
          <div class="mt-4 flex flex-col space-y-2 text-gray-500">
            <p class="font-bold bg-clip-text bg-gradient-to-r from-color1 to-color1 text-color1">Site</p>
            <a href="https://frutapolpa.com.br/">frutapolpa.com.br</a>
          </div>
          <div class="mt-4 flex flex-col space-y-2 text-gray-500">
            <p class="font-bold bg-clip-text bg-gradient-to-r from-color1 to-color1 text-color1">WhatsApp</p>
            <a href="https://api.whatsapp.com/send?phone=5586994293833&text=Olá%20Fruta%20Polpa-site" class="font-semibol">+55 (86) 9 9429-3833</a>
          </div>
          <div class="mt-4 flex flex-col space-y-2 bg-clip-text bg-gradient-to-r from-color1 to-color1 text-color1">
            <p class="font-semibold bg-clip-text bg-gradient-to-r from-color1 to-color1 text-color1">REDES SOCIAIS</p>
            <div class="mt-4 flex flex-col space-y-2 bg-clip-text bg-gradient-to-r from-color1 to-color1 text-color1">
              <div class="flex space-x-6 bg-clip-text bg-gradient-to-r from-color1 to-color1 text-color1">
                <a href="https://www.facebook.com/FrutaPolpa" target="_blank" rel="noreferrer">
                  <span class="sr-only"> Facebook </span>
                  <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path fillRule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clipRule="evenodd" />
                  </svg>
                </a>
                <a href="https://www.instagram.com/frutapolpa/" target="_blank" rel="noreferrer">
                  <span class="sr-only"> Instagram </span>
                  <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path fillRule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clipRule="evenodd" />
                  </svg>
                </a>
                <a href="https://www.linkedin.com/company/fruta-polpa/" target="_blank" rel="noreferrer">
                  <span class="sr-only"> Linkedin </span>
                  <i class="bi bi-linkedin"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="mx-auto bg-gray-400 rounded w-full px-4 py-2">
        <form action="./admin/controllers/add_lead.php" method="post" class="mr-auto lg:p-16 place-self-center">
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
              WhatsApp
            </label>
            <input type="text" name="telephone" id="telephone" placeholder="(99) 9 9999-9999" class="mt-2 mb-4 w-full rounded-lg p-3 text-gray-900" required="" />
          </div>
          <div>
            <label class="text-sm font-bold text-white">
              CNPJ
            </label>
            <input type="text" name="cnpj" id="cnpj" placeholder="Da Empresa ou Pessoa Física" class="mt-2 mb-4 w-full rounded-lg p-3 text-gray-900" required="" />
          </div>
          <div>
            <label class="text-sm font-bold text-white">
              Mensagem
            </label><br>
            <textarea name="description" id="description" placeholder="Assunto..." rows="2" cols="50" class="mt-2 mb-4 w-full rounded-lg p-3 text-gray-900" required=""></textarea>
          </div>
          <input type="hidden" value="CONTATO" name="type">
          <div class="flex justify-center mt-5">
            <button class="bg-white hover:bg-color1 text-sm text-color1 hover:text-black font-bold py-2 px-4 rounded-full border w-full md:w-60">
              Quero comprar Fruta Polpa
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