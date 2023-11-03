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
    <div class="max-w-full px-4 pt-5 mx-auto lg:grid grid-cols-2">
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
                <a href="#" target="_blank" rel="noreferrer">
                  <span class="sr-only"> Twitter </span>
                  <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
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
      <!-- <div class="mx-auto bg-gray-500 rounded w-full">
        <form action="./admin/controllers/add_lead.php" method="post" class="mr-auto lg:p-16 place-self-center">
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
              WhatsApp
            </label>
            <input type="number" name="whatsapp" id="telephone" placeholder="(99) 9 9999-9999" class="mt-2 mb-4 w-full rounded-lg p-3 text-gray-900" />
          </div>
          <div>
            <label class="text-sm font-bold text-white">
              CNPJ
            </label>
            <input type="number" name="cnpj" id="cnpj" placeholder="Da Empresa ou Pessoa Física" class="mt-2 mb-4 w-full rounded-lg p-3 text-gray-900" />
          </div>
          <div>
            <label class="text-sm font-bold text-white">
              Mensagem
            </label><br>
            <textarea name="description" id="description" placeholder="Assunto..." rows="2" cols="50" class="mt-2 mb-4 w-full rounded-lg p-3 text-gray-900"></textarea>
          </div>
          <input type="hidden" value="CONTATO" name="type">
          <div class="mt-2 flex justify-center items-center">
            <input type="submit" class="my-2 w-full cursor-pointer rounded-lg bg-orange-500 py-2 px-4 font-medium text-white duration-300 ease-in-out hover:bg-gray-300 hover:text-black" value="Quero comprar Fruta Polpa">
          </div>
        </form>
      </div> -->
      <div class="mx-auto w-full py-28 px-16">
        <form action="./admin/controllers/add_lead.php" method="POST" class="bg-color1 p-8 rounded-lg w-full">
          <h2 class="text-center md:text-left text-3xl font-extrabold pb-5 tracking-wider text-white">Envie seu contato</h2>
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
          </div>
          <input type="hidden" value="CONTATO" name="type">
          <div>
            <button class="bg-white hover:bg-color1 text-sm text-color1 hover:text-white font-bold py-2 px-4 rounded-full border-2 border-white">
              Enviar
            </button>
          </div>
        </form>
      </div>
  </section>

  <?php include "./components/footer.php" ?>

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

  </script>
</body>

</html>