<style>
  .swiper-portfolio .swiper-wrapper {
    -webkit-transition-timing-function: linear !important;
    -o-transition-timing-function: linear !important;
    transition-timing-function: linear !important;
  }
</style>
<section style="margin-bottom: -5%;" class="bg-white">
  <div style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;" class="swiper swiper-container swiper-portfolio bg-white py-4 mb-4 z-0">
    <div class="swiper-wrapper cursor-default">
      <?php for ($i = 1; $i <= 20; $i++) { ?>
        <div class="swiper-slide flex justify-center items-center">
          <img class="object-contain md:h-28 h-16" loading="lazy" src='<?php echo ('https://frutapolpa.com.br/assets/img/parceiros/img' . $i . '.png') ?>' alt="">
        </div>
      <?php } ?>

    </div>
  </div>
</section>