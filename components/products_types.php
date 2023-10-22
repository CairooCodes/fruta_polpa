<section class="bg-slate-100">
  <div class="swiper swiper_products_type pt-12 max-w-4xl rounded-2xl">
    <h6 class="lg:text-3xl text-xl pb-2 text-center "><span style="font-size: 20px;letter-spacing: 4px; font-weight: 300;" class="text-color1 uppercase bg-clip-text bg-gradient-to-r from-color2 to-color2">Nossos Produtos</span></h6>
    <h1 class="lg:text-5xl text-3xl pb-4 text-center mb-4"><span style="letter-spacing: 0.5px;color:#00284a;" class="font-black bg-clip-text bg-gradient-to-r from-color2 to-color2">Linhas de Produtos</span></h1>
    <div class="swiper-wrapper pb-4 pt-12">
      <div class="swiper-slide hover:-translate-y-4 transition duration-500 grid bg-white rounded-2xl shadow2 relative">
        <!-- Add this swiper container -->
        <div class="swiper-container swiper-products">
          <div class="swiper-wrapper">
            <?php
            foreach ($products1 as $product1) {
            ?>
              <div class="swiper-slide hover:-translate-y-4 transition duration-500 grid bg-white rounded-2xl shadow2 relative">
                <a href="<?php echo $product1['name']; ?>">
                  <img class='lazy w-full' data-src='./admin/uploads/products/<?php echo $product1['img'] ?>'>
                </a>
              </div>
            <?php
            }
            ?>
          </div>
          <div class="swiper-button-next text-orange-500"></div>
          <div class="swiper-button-prev text-orange-500"></div>
        </div>
        <!-- End swiper container -->
        <div style="background: rgb(252,114,0);
background: linear-gradient(15deg, rgba(252,114,0,1) 25%, rgba(224,148,148,1) 100%);" class="bg-bottom rounded-b-2xl">
          <div class="flex justify-center pb-5">
            <div>
              <h3 class="text-xl text-green-800 text-center font pt-6 mb-2" style="font-family: 'Poppins';">100% naturais</h3>
              <h3 class="text-4xl text-white text-center font-black mb-2">Polpas</h3>
              <a href="./polpas_tradicionais.php">
                <button class="hover:bg-slate-100 hover:text-gray-900 text-sm text-white py-2 px-4 rounded-full border-2 border-gray mt-4">
                  CONHEÇA
                  <i class="bi bi-caret-right-fill"></i>
                </button>
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="swiper-slide hover:-translate-y-4 transition duration-500 grid bg-white rounded-2xl shadow2 relative">
        <!-- Add this swiper container -->
        <div class="swiper-container swiper-products">
          <div class="swiper-wrapper">
            <?php
            foreach ($products2 as $product2) {
            ?>
              <div class="swiper-slide hover:-translate-y-4 transition duration-500 grid bg-white rounded-2xl shadow2 relative">
                <a href="<?php echo $product2['name']; ?>">
                  <img class='lazy w-full' data-src='./admin/uploads/products/<?php echo $product2['img'] ?>'>
                </a>
              </div>
            <?php
            }
            ?>
          </div>
          <div class="swiper-button-next text-orange-500"></div>
          <div class="swiper-button-prev text-orange-500"></div>
        </div>
        <!-- End swiper container -->
        <div style="background: linear-gradient(15deg, rgba(252,114,0,1) 25%, rgba(224,148,148,1) 100%);" class="bg-bottom rounded-b-2xl">
          <div class="flex justify-center pb-5">
            <div>
              <h3 class="text-xl text-green-800 text-center font pt-6 mb-2" style="font-family: 'Poppins';">100% naturais</h3>
              <h3 class="text-4xl text-white text-center font-black mb-2">Polpas</h3>
              <a href="./polpas_mixs.php">
                <button class="hover:bg-slate-100 hover:text-gray-900 text-sm text-white py-2 px-4 rounded-full border-2 border-gray mt-4">
                  CONHEÇA
                  <i class="bi bi-caret-right-fill"></i>
                </button>
              </a>
            </div>
          </div>
        </div>
      </div>

    </div>
    <!-- <div class="swiper-pagination swiper-pagination-products-main pt-12"></div> -->
  </div>
  <div class="slick-prev"><i class="bi bi-caret-left-fill"></i></div>
  <div class="slick-next"><i class="bi bi-caret-right-fill"></i></div>
</section>