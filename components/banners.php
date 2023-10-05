<section class="swiper swiper_banners">
  <div class="swiper-wrapper">
    <?php
    foreach ($banners as $banners) {
    ?>
      <a class="swiper-slide" href="<?php echo $banners['link']; ?>">
        <img class='lazy w-full' data-src='./admin/uploads/banners/<?php echo $banners['img'] ?>'>
      </a>
    <?php
    }
    ?>
  </div>
  <div class="swiper-button-next text-white"></div>
  <div class="swiper-button-prev text-white"></div>
  <div class="swiper-pagination swiper-pagination-banners-main"></div>
</section>