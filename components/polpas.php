<section class="bg-color1  my-12 mx-8 rounded-2xl">
    <div class="swiper swiper_products pt-12 pb-6  px-5 rounded-2xl shadow2">
        <h1 class="lg:text-5xl text-3xl text-center">
            <span style="letter-spacing: 0.5px" class="font-black bg-clip-text bg-gradient-to-r from-color1 to-color1 text-color1">
                Nossos Produtos
            </span>
        </h1>
        <h1 class="lg:text-4xl text-3xl pb-4 text-center mb-4"><span class="font-extrabold text-white bg-clip-text bg-gradient-to-r from-color2 to-color2">Nossos Produtos</span></h1>
        <div class="swiper-wrapper pb-4">
            <?php
            foreach ($products as $product) {
            ?>
                <div class="swiper-slide grid bg-white p-4 rounded-2xl shadow2">
                    <img class='lazy max-h-2/3 object-cover' data-src='./admin/uploads/products/<?php echo $product['img'] ?>'>
                    <div class="flex justify-evenly pb-5 bg-green-600">
                        <a href="<?php echo $URI->base('/product/' . slugify($product['name'])); ?>">
                            </button>
                            <h3 class="text-xl text-white text-center font-bold pt-4 mb-2"><?php echo $product['name'] ?></h3>
                            <button class="hover:bg-color1 text-sm text-gray-800 font-bold py-2 px-4 rounded-full border-2 border-gray mt-4">
                                BENEFÍCIOS
                            </button>
                        </a>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</section>