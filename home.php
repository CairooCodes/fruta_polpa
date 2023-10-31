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
  <?php include "./components/footer.php" ?>

  <script src="assets/js/tw.js"></script>
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
  <script src="./assets/js/lz.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

  <script>
    var swiper = new Swiper(".swiper_products_type", {
      effect: "flip",
      // grabCursor: true,
      autoplay: {
        delay: 4000,
        disableOnInteraction: false,
      },
      pagination: {
        el: ".swiper-pagination",
      },
      // navigation: {
      //   nextEl: ".swiper-button-next",
      //   prevEl: ".swiper-button-prev",
      // },
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