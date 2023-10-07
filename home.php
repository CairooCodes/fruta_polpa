<?php
require "db_config.php";
require "config/helper.php";
require "config/url.class.php";
require "./functions/get.php";

$banners = getBanners();
$products = getProducts();
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
  <!-- Start block -->
  <?php include "./components/navbar.php"; ?>
  <?php include "./components/banners.php"; ?>
  <?php include "./components/products.php"; ?>
  <?php include "./components/blog.php"; ?>
  <?php include "./components/form.php"; ?>


  <!-- <section id="clientes" class="max-w-screen-xl px-4 py-8 mx-auto lg:py-24 lg:px-6">
    <h3 class="text-2xl font-bold text-center">Clientes que confiam em nosso trabalho </h3>
    <div class="pt-10">
      <div class="grid grid-cols-3 gap-8">
        <div class="p-10 shadow rounded-b-xl">
          <img class="mb-2 w-56 h-full" src="./assets/img/clientes/adidas.jpg" alt="profile picture">
        </div>
        <div class="p-10 shadow rounded-b-xl">
          <img class="mb-2 w-56 h-full" src="./assets/img/clientes/ART FARMA.png">
        </div>
        <div class="p-10 shadow rounded-b-xl">
          <img class="mb-2 w-56 h-full" src="./assets/img/clientes/floriculturali.jpg">
        </div>
        <div class="p-10 shadow rounded-b-xl">
          <img class="mb-2 w-56 h-full" src="./assets/img/clientes/Piauiense.png">
        </div>
        <div class="p-5 shadow rounded-b-xl">
          <img class="mb-2" src="./assets/img/clientes/NorteLink.png">
        </div>
        <div class="p-5 shadow rounded-b-xl">
          <img class="mb-2" src="./assets/img/clientes/cci.png">
        </div>
      </div>
      <div class="swiper-pagination swiper-pacotes"></div>
    </div>
    <div id="#depoimentos" class="max-w-screen-xl lg:px-4 lg:py-8 mx-auto text-center lg:py-12 lg:px-6">
      <div class="swiper mySwiper2 pt-20 pb-20">
        <div class="swiper-wrapper pb-10">
          <div class="swiper-slide h-60 lg:h-32 flex p-10 items-center rounded-b-xl">
            <figure class="max-w-screen-md mx-auto">
              <svg class="h-12 mx-auto mb-3 text-color1" viewBox="0 0 24 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M14.017 18L14.017 10.609C14.017 4.905 17.748 1.039 23 0L23.995 2.151C21.563 3.068 20 5.789 20 8H24V18H14.017ZM0 18V10.609C0 4.905 3.748 1.038 9 0L9.996 2.151C7.563 3.068 6 5.789 6 8H9.983L9.983 18L0 18Z" fill="currentColor" />
              </svg>
              <blockquote>
                <p class="text-lg text-justify font-medium text-gray-900 md:text-2xl">"A Boom é uma parceira de peso para desenvolvimento da nossa marca no PI e MA através das redes sociais, nos ajudando a encantar os clientes, com estratégias assertivas e conteúdos que potencializam cada vez mais os nossos resultados! Sem dúvidas, a Boom faz parte do nosso melhor time de vendas!"</p>
              </blockquote>
              <figcaption class="flex items-center justify-center mt-6 space-x-3">
                <img class="w-6 h-6 rounded-full" src="./assets/img/clientes/adidas.jpg" alt="profile picture">
                <div class="flex items-center divide-x-2 divide-gray-500">
                  <div class="pr-3 font-medium text-gray-900">Andréa Sales </div>
                  <div class="pl-3 text-sm font-light text-color1">
                    Supervisora Adidas</div>
                </div>
              </figcaption>
            </figure>
          </div>
          <div class="swiper-slide h-60 lg:h-32 flex p-10 items-center rounded-b-xl">
            <figure class="max-w-screen-md mx-auto">
              <svg class="h-12 mx-auto mb-3 text-color1" viewBox="0 0 24 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M14.017 18L14.017 10.609C14.017 4.905 17.748 1.039 23 0L23.995 2.151C21.563 3.068 20 5.789 20 8H24V18H14.017ZM0 18V10.609C0 4.905 3.748 1.038 9 0L9.996 2.151C7.563 3.068 6 5.789 6 8H9.983L9.983 18L0 18Z" fill="currentColor" />
              </svg>
              <blockquote>
                <p class="text-xl text-justify font-medium text-gray-900 md:text-2xl">"Somos clientes da Boom há aproximadamente 01 ano e estamos muito satisfeitos com a resultado da parceria. O número de seguidores do Instagram e as vendas por canais digitais aumentaram e temos resultado satisfatório com o tráfego pago."</p>
              </blockquote>
              <figcaption class="flex items-center justify-center mt-6 space-x-3">
                <img class="w-6 h-6 rounded-full" src="./assets/img/clientes/Piauiense.png" alt="profile picture">
                <div class="flex items-center divide-x-2 divide-gray-500">
                  <div class="pr-3 font-medium text-gray-900">Lalinne Moura</div>
                  <div class="pl-3 text-sm font-light text-color1">
                    Proprietária Livraria Piauiense</div>
                </div>
              </figcaption>
            </figure>
          </div>
        </div>
        <div class="swiper-pagination swiper-pacotes"></div>
      </div>
    </div>
  </section> -->

  <?php include "./components/footer.php" ?>
  <?php include "./components/modal_form_whats.php" ?>
  <script src="assets/js/tw.js"></script>
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
	<script src="./assets/js/lz.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
 <script>
    const carousel3Dswiper = new Swiper(".carousel-3D-swiper", {
    loop: true,
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: 3,
    coverflowEffect: {
      rotate: 0,
      stretch: 0,
      depth: 350,
      modifier: 1,
      slideShadows: true
    },
		 navigation: {
      nextEl: ".swiper-button-next-blog",
      prevEl: ".swiper-button-prev-blog",
    },
    pagination: {
      el: ".swiper-pagination-blog"
    }
  });
 </script>
	<script>
		var swiper = new Swiper(".swiper_banners", {
			loop: true,
			autoplay: {
				delay: 5000,
				disableOnInteraction: false,
			},
			pagination: {
				el: ".swiper-pagination-banners-main",
				clickable: true,
			},
			navigation: {
				nextEl: ".swiper-button-next",
				prevEl: ".swiper-button-prev",
			},
		});
	</script>
  <script>
		var swiper = new Swiper(".swiper_products", {
			loop: true,
      freeMode: true,
			breakpoints: {
				300: {
					slidesPerView: 1.3,
					spaceBetween: 20,
				},
				640: {
					slidesPerView: 2,
					spaceBetween: 30,
				},
				768: {
					slidesPerView: 3,
					spaceBetween: 30,
				},
				1024: {
					slidesPerView: 4,
					spaceBetween: 30,
				},
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
    var swiper = new Swiper(".mySwiper", {
      autoplay: {
        delay: 3000, // Time between slides in milliseconds (3 seconds)
        disableOnInteraction: false, // Autoplay continues even when the user interacts with the swiper
      },
      freeMode: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      breakpoints: {
        640: {
          slidesPerView: 2,
          spaceBetween: 20,
        },
        768: {
          slidesPerView: 4,
          spaceBetween: 40,
        },
        1024: {
          slidesPerView: 5,
          spaceBetween: 50,
        },
      },
    });
  </script>
  <script>
    var swiper = new Swiper(".mySwiper2", {
      freeMode: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      breakpoints: {
        640: {
          slidesPerView: 1,
          spaceBetween: 20,
        },
        768: {
          slidesPerView: 1,
          spaceBetween: 30,
        },
        1024: {
          slidesPerView: 1,
          spaceBetween: 40,
        },
      },
      autoplay: {
        delay: 3000,
        disableOnInteraction: true,
      },
      loop: true,
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
    const cards = document.querySelectorAll('.fade-in-up');
    const options = {
      root: null,
      rootMargin: '0px',
      threshold: 0.2
    };

    const observer = new IntersectionObserver((entries, observer) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
          observer.unobserve(entry.target);
        }
      });
    }, options);

    cards.forEach(card => observer.observe(card));
  </script>
</body>

</html>