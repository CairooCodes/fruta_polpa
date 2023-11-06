<?php
require "db_config.php";
require "config/helper.php";
require "config/url.class.php";
require "./functions/get.php";

$banners = getBanners();
$polpas = getAllPolpas();
$polpas1 = getPolpas1();
$polpas2 = getPolpas2();

$URI = new URI();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <?php include "./components/heads.php"; ?>
  <link rel="stylesheet" href="<?php echo $URI->base("/assets/css/maps.css"); ?>">
</head>

<body>

  <?php include "./components/navbar.php"; ?>

  <!-- Body -->
  <?php include "./components/banners.php"; ?>
  <?php include "./components/institucional.php"; ?>
  <?php include "./components/polpas-types.php"; ?>
  <?php include "./components/premium-quality.php"; ?>
  <?php include "./components/form-maps.php"; ?>
  <?php include "./components/parceiros.php"; ?>
  <!-- End Body -->

  <?php include "./components/footer.php" ?>
  <?php include "./components/btn-whatsapp.php" ?>

  <script src="assets/js/tw.js"></script>
  <script src="./assets/js/lz.js"></script>
  <script src="./assets/js/main.js"></script>
  <script src="./assets/js/maps.js"></script>

  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>

  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAet9s5aUCXCW8LCVn3GgnSixUcrXhSANc&callback=initMap&v=weekly" defer></script>
  <script>
    var swiper = new Swiper(".swiper-portfolio", {
      loop: true,
      freeMode: true,
      spaceBetween: 0,
      grabCursor: false,
      speed: 5000,
      freeModeMomentum: false,
      noSwiping: true,
      noSwipingClass: 'swiper-slide',
      autoplay: {
        delay: 1,
        disableOnInteraction: true
      },
      breakpoints: {
        200: {
          slidesPerView: 2,
          spaceBetween: 20
        },
        300: {
          slidesPerView: 3,
          spaceBetween: 20
        },
        640: {
          slidesPerView: 6,
          spaceBetween: 45
        }
      },
      loopedSlides: 6,
    });
  </script>

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