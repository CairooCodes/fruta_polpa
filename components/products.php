<section class="bg-color1  my-12 mx-8 rounded-2xl">
    <div class="swiper swiper_products pt-12 pb-6  px-5 rounded-2xl shadow2">
        <h1 class="lg:text-4xl text-3xl pb-4 text-center mb-4"><span class="font-extrabold text-white bg-clip-text bg-gradient-to-r from-color2 to-color2">Nossos Produtos</span></h1>
        <div class="swiper-wrapper pb-4">
            <?php
            foreach ($products as $product) {
            ?>
                <div class="swiper-slide grid bg-white p-4 rounded-2xl shadow2">
                    <h3 class="text-xl text-color1 text-center font-bold pt-4"><?php echo $product['name'] ?></h3>
                    <img class='lazy max-h-2/3 object-cover' data-src='./admin/uploads/products/<?php echo $product['img'] ?>'>
                    <div class="flex justify-evenly pb-5">
                        <button class="bg-color1 hover:bg-orange-700 text-sm text-white font-bold py-2 px-4 rounded">
                            PEÇA JÁ
                        </button>
                        <a href="<?php echo $URI->base('/product/' . slugify($product['name'])); ?>">
                            <button class="bg-gray-400 hover:bg-gray-600 text-sm text-white font-bold py-2 px-4 rounded">
                            BENEFÍCIOS
                        </button>
                        </a>
                    </div>
                </div>
<!-- 
                <div class="swiper-slide grid bg-white p-4 rounded-2xl shadow2">
                    <h3 class="text-xl text-color1 text-center font-bold pt-4"><?php echo $product['name'] ?></h3>
                    <img class='lazy max-h-2/3 object-cover' data-src='./admin/uploads/products/<?php echo $product['img'] ?>'>
                    <div class="flex justify-evenly pb-5">
                        <button class="bg-color1 hover:bg-orange-700 text-sm text-white font-bold py-2 px-4 rounded">
                            PEÇA JÁ
                        </button>
                        <button class="bg-gray-400 hover:bg-gray-600 text-sm text-white font-bold py-2 px-4 rounded">
                            BENEFÍCIOS
                        </button>
                    </div>
                </div>

                <div class="swiper-slide grid bg-white p-4 rounded-2xl shadow2">
                    <h3 class="text-xl text-color1 text-center font-bold pt-4"><?php echo $product['name'] ?></h3>
                    <img class='lazy max-h-2/3 object-cover' data-src='./admin/uploads/products/<?php echo $product['img'] ?>'>
                    <div class="flex justify-evenly pb-5">
                        <button class="bg-color1 hover:bg-orange-700 text-sm text-white font-bold py-2 px-4 rounded">
                            PEÇA JÁ
                        </button>
                        <button class="bg-gray-400 hover:bg-gray-600 text-sm text-white font-bold py-2 px-4 rounded">
                            BENEFÍCIOS
                        </button>
                    </div>
                </div>

                <div class="swiper-slide grid bg-white p-4 rounded-2xl shadow2">
                    <h3 class="text-xl text-color1 text-center font-bold pt-4"><?php echo $product['name'] ?></h3>
                    <img class='lazy max-h-2/3 object-cover' data-src='./admin/uploads/products/<?php echo $product['img'] ?>'>
                    <div class="flex justify-evenly pb-5">
                        <button class="bg-color1 hover:bg-orange-700 text-sm text-white font-bold py-2 px-4 rounded">
                            PEÇA JÁ
                        </button>
                        <button class="bg-gray-400 hover:bg-gray-600 text-sm text-white font-bold py-2 px-4 rounded">
                            BENEFÍCIOS
                        </button>
                    </div>
                </div>

                <div class="swiper-slide grid bg-white p-4 rounded-2xl shadow2">
                    <h3 class="text-xl text-color1 text-center font-bold pt-4"><?php echo $product['name'] ?></h3>
                    <img class='lazy max-h-2/3 object-cover' data-src='./admin/uploads/products/<?php echo $product['img'] ?>'>
                    <div class="flex justify-evenly pb-5">
                        <button class="bg-color1 hover:bg-orange-700 text-sm text-white font-bold py-2 px-4 rounded">
                            PEÇA JÁ
                        </button>
                        <button class="bg-gray-400 hover:bg-gray-600 text-sm text-white font-bold py-2 px-4 rounded">
                            BENEFÍCIOS
                        </button>
                    </div>
                </div>
                <div class="swiper-slide grid bg-white p-4 rounded-2xl shadow2">
                    <h3 class="text-xl text-color1 text-center font-bold pt-4"><?php echo $product['name'] ?></h3>
                    <img class='lazy max-h-2/3 object-cover' data-src='./admin/uploads/products/<?php echo $product['img'] ?>'>
                    <div class="flex justify-evenly pb-5">
                        <button class="bg-color1 hover:bg-orange-700 text-sm text-white font-bold py-2 px-4 rounded">
                            PEÇA JÁ
                        </button>
                        <button class="bg-gray-400 hover:bg-gray-600 text-sm text-white font-bold py-2 px-4 rounded">
                            BENEFÍCIOS
                        </button>
                    </div>
                </div> -->
            <?php
            }
            ?>
        </div>
        <div class="swiper-pagination swiper-pagination-products-main pt-12"></div>
    </div>
</section>