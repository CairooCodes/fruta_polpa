<section class="bg-yellow-50 max-w-full header-institucional" id="produtos">
  <h6 class="lg:text-3xl text-xl pb-2 text-center pt-14"><span style="font-size: 20px;letter-spacing: 4px; font-weight: 300;" class="text-color1 uppercase">Conheça nossas</span></h6>
  <h1 class="lg:text-7xl text-3xl text-center"><span style="letter-spacing: 0.5px;" class="font-black bg-clip-text bg-gradient-to-r from-color1 to-color1 text-color1">Polpas</span></h1>
  <div class="max-w-full px-4 lg:pt-12 pb-12 lg:grid grid-cols-2 mt-2">
    <div class="lg:pl-72 px-5 pt-14">
      <div class="swiper swiper_products_type z-0">
        <div class="swiper-wrapper">
          <?php foreach ($polpas1 as $polpa1) { ?>
            <div class="swiper-slide pb-5">
              <div class="transition duration-500 bg-white rounded-2xl shadow2">
                <div class="h-full">
                  <img loading="lazy" src='./admin/uploads/polpas/<?php echo $polpa1['img']; ?>'>
                </div>
                <div class="bg-bottom rounded-b-2xl" style="background: rgb(252,114,0); background: linear-gradient(15deg, rgba(252,114,0,1) 25%, rgba(255,198,0,1) 100%);">
                  <div class="flex justify-center pb-5">
                    <a href="https://frutapolpa.com.br/polpas-tradicionais">
                      <h3 class="text-xl text-white text-center font-bold pt-6 mb-2">100%
                        naturais</h3>
                      <h3 class="text-3xl text-white text-center font-black mb-2">Polpas Tradicionais</h3>
                      <button class="hover:bg-slate-100 hover:text-gray-900 text-sm text-white py-2 px-4 rounded-full border-2 border-gray mt-4 ml-20">
                        CONHEÇA
                        <i class="bi bi-caret-right-fill"></i>
                      </button>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          <?php }
          ?>
        </div>
        <!-- <div class="swiper-pagination"></div> -->
      </div>
    </div>
    <div class="lg:pr-72 px-5 pt-14">
      <div class="swiper swiper_products_type2 z-0">
        <div class="swiper-wrapper">
          <?php foreach ($polpas2 as $polpa2) { ?>
            <div class="swiper-slide">
              <div class=" transition duration-500 bg-white rounded-2xl shadow2 ">
                <div class="h-full">
                <img loading="lazy" src='./admin/uploads/polpas/<?php echo $polpa2['img']; ?>'>
                </div>
                <div class="bg-bottom rounded-b-2xl" style="background: rgb(252,114,0);background: linear-gradient(15deg, rgba(252,114,0,1) 25%, rgba(255,198,0,1) 100%);">
                  <div class="flex justify-center pb-5">
                    <a href="https://frutapolpa.com.br/polpas-mixs">
                      <h3 class="text-xl text-white text-center font-bold pt-6 mb-2">100%
                        naturais</h3>
                      <h3 class="text-3xl text-white text-center font-black mb-2">Polpas Mix</h3>
                      <button class="hover:bg-slate-100 hover:text-gray-900 text-sm text-white py-2 px-4 rounded-full border-2 border-gray mt-4 ml-4">
                        CONHEÇA
                        <i class="bi bi-caret-right-fill"></i>
                      </button>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          <?php }
          ?>
        </div>
        <!-- <div class="swiper-pagination2"></div> -->
      </div>
    </div>
  </div>
  </div>
</section>