<?php
require "db_config.php";
require "config/helper.php";
require "config/url.class.php";
require "./functions/get.php";

$banners = getBanners();
$polpas = getAllPolpas();
$polpas1 = getPolpas1();
$polpas2 = getPolpas2();
$blogs = getBlogs();
$abouts = getAbouts();

$URI = new URI();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <?php include "./components/heads.php"; ?>
</head>

<body>

  <?php include "./components/navbar.php"; ?>
  <?php include "./components/banners.php"; ?>
  <?php include "./components/institucional.php"; ?>
  <?php include "./components/polpas-types.php"; ?>
  <?php include "./components/premium-quality.php"; ?>

  <section>
    <div class="max-w-full px-4 pt-5 mx-auto lg:grid grid-cols-2 mb-10">
      <div class="mx-auto py-28">
        <h1 class="text-orange-600 text-3xl font-extrabold leading-9 tracking-tight sm:text-4xl sm:leading-10 md:text-left md:text-3xl md:leading-14 text-center mt-8">
          Entre em Contato
        </h1>
        <div class="py-8">
          <div class="mt-4 flex flex-col space-y-2 text-gray-500">
            <p class="font-bold text-orange-500">Telefone</p>
            <p>+55 (86) 9 9429-3833</p>
          </div>
          <div class="mt-4 flex flex-col space-y-2 text-gray-500">
            <p class="font-bold text-orange-500">Site</p>
            <a href="https://frutapolpa.com.br/">frutapolpa.com.br</a>
          </div>
          <div class="mt-4 flex flex-col space-y-2 text-gray-500">
            <p class="font-bold text-orange-500">WhatsApp</p>
            <a href="https://api.whatsapp.com/send?phone=5586994293833&text=Olá%20Fruta%20Polpa-site" class="font-semibol">+55 (86) 9 9429-3833</a>
          </div>
          <div class="mt-4 flex flex-col space-y-2 text-orange-500">
            <p class="font-semibold text-orange-500">REDES SOCIAIS</p>
            <div class="mt-4 flex flex-col space-y-2 text-orange-500">
              <div class="flex space-x-6 text-orange-500">
                <a href="#" target="_blank" rel="noreferrer">
                  <span class="sr-only"> Facebook </span>
                  <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path fillRule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clipRule="evenodd" />
                  </svg>
                </a>
                <a href="#" target="_blank" rel="noreferrer">
                  <span class="sr-only"> Instagram </span>
                  <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path fillRule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clipRule="evenodd" />
                  </svg>
                </a>
                <a href="send?phone=5586994293833&text=Olá%20Fruta%20Polpa-site" class="">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                    <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="mt-12">
          <h1 class="text-orange-600 text-xl font-extrabold leading-9 tracking-tight sm:text-2xl sm:leading-10 md:text-left md:text-xl md:leading-14 text-center">Deseja ser um Revendedor ou Representante?</h1>
          <a href="./trabalhe-conosco.php" class="flex justify-center py-5">
            <button class="hover:bg-color1 text-sm text-gray-800 font-bold py-2 px-4 rounded-full border-2 border-color1">
              Clique aqui e Trabalhe Conosco!
            </button>
          </a>
        </div>
      </div>
      <div class="mx-auto rounded w-full px-4 py-6">
        <div class="mx-auto w-full py-28 px-16">
          <form action="./admin/controllers/add_lead.php" method="POST" class="bg-color1 p-8 rounded-lg w-full">
            <h2 class="text-center md:text-left text-3xl font-extrabold pb-5 tracking-wider text-white">
              Envie sua Mensagem</h2>
            <div class="mb-5">
              <label for="name" class="mb-3 block text-base font-medium text-white">
                Nome
              </label>
              <input type="text" name="name" id="name" placeholder="Nome completo" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
            </div>
            <div class="mb-5">
              <label for="email" class="mb-3 block text-base font-medium text-white">
                Email
              </label>
              <input type="email" name="email" id="email" placeholder="email@gmail.com" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
            </div>
            <div class="mb-5">
              <label for="subject" class="mb-3 block text-base font-medium text-white">
                WhatsApp
              </label>
              <input type="number" name="telephone" id="telephone" placeholder="(99) 9 9999-9999" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
            </div>
            <div class="mb-5">
              <label for="subject" class="mb-3 block text-base font-medium text-white">
                CNPJ/CPF
              </label>
              <input type="number" name="cnpj" id="cnpj" placeholder="CNPJ da Empresa ou CPF pessoa fisica" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
              <div>
                <label for="subject" class="text-sm font-bold text-white">
                  Mensagem
                </label><br>
                <textarea type="text" name="description" id="description" placeholder="Assunto..." rows="2" cols="50" class="mt-2 mb-4 w-full rounded-lg p-3 text-gray-900"></textarea>
              </div>
              <input type="hidden" value="CONTATO" name="type">
              <div class="flex justify-center mt-4">
                <button class="bg-white hover:bg-gray-500 text-base text-color1 hover:text-white font-bold py-2 px-4 rounded-md lg:w-full sm:w-80 uppercase">
                  Enviar
                </button>
              </div>
          </form>
        </div>
      </div>
  </section>

  <?php include "./components/footer.php" ?>
  <?php include "./components/modal_form_whatsapp.php" ?>
  <script src="assets/js/tw.js"></script>
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
  <script src="./assets/js/lz.js"></script>
  <script src="./assets/js/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

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
  <script>
    $('a[href^="#"]').on('click', function(e) {
      e.preventDefault();
      var id = $(this).attr('href'),
        targetOffset = $(id).offset().top;

      $('html, body').animate({
        scrollTop: targetOffset - 100
      }, 500);
    });
  </script>
  <script>
    let prevScrollpos = window.pageYOffset;
    window.onscroll = function() {
      const currentScrollPos = window.pageYOffset;
      const navbar = document.getElementById("navbar");

      if (prevScrollpos > currentScrollPos) {
        navbar.classList.add("active");
      } else {
        navbar.classList.remove("active");
      }

      prevScrollpos = currentScrollPos;
    }
  </script>
  <script>
    // JavaScript para abrir o WhatsApp ao clicar no botão
    document.getElementById('openWhatsApp').addEventListener('click', function() {
      window.open('https://api.whatsapp.com/send?phone=5586994293833&text=Olá%20Fruta%20Polpa-site', '_blank');
    });
  </script>
</body>

</html>