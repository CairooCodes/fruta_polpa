<section class="py-12 bg-color1 shadow2">
  <div class="lg:flex lg:justify-center">
    <div class="w-full">
      <h3 class="mb-8 lg:text-4xl text-2xl font-bold text-center text-white">Blog Fruta Polpa</h3>
      <section class="carousel-3D-swiper-section">
        <!-- Slider main container -->
        <div class="carousel-3D-swiper">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper py-6">
            <!-- Slides -->
            <?php foreach ($blogs as $blog) { ?>
              <div class="swiper-slide">
                <div class="lazy max-h-2/3 object-cover">
                  <img src='./admin/uploads/blogs/<?php echo $blog['img'] ?>'>
                  <div class="details rounded-b-2xl absolute bottom-0 w-full h-2/5">
                    <h3><?php echo $blog['name'] ?></h3>
                  </div>
                </div>
              </div>
            <?php }
            ?>
          </div>

          <!-- <div class="swiper-slide">
            <div style="background-image: url(https://avatars.githubusercontent.com/u/108219612?v=4);" class="shadow1 bg-no-repeat bg-cover rounded-2xl h-[550px]">
              <div class="details rounded-b-2xl absolute bottom-0 w-full h-2/5">
                <h3>Título</h3>
                <span>Subtitulo</span>
                <p>Lorem ipsum dolor</p>
              </div>
            </div>
          </div>

          <div class="swiper-slide">
            <div style="background-image: url(https://avatars.githubusercontent.com/u/108219612?v=4);" class="shadow1 bg-no-repeat bg-cover rounded-2xl h-[550px]">
              <div class="details rounded-b-2xl absolute bottom-0 w-full h-2/5">
                <h3>Título</h3>
                <span>Subtitulo</span>
                <p>Lorem ipsum dolor</p>
              </div>
            </div>
          </div>

          <div class="swiper-slide">
            <div style="background-image: url(https://avatars.githubusercontent.com/u/108219612?v=4);" class="shadow1 bg-no-repeat bg-cover rounded-2xl h-[550px]">
              <div class="details rounded-b-2xl absolute bottom-0 w-full h-2/5">
                <h3>Título</h3>
                <span>Subtitulo</span>
                <p>Lorem ipsum dolor</p>
              </div>
            </div>
          </div>

          <div class="swiper-slide">
            <div style="background-image: url(https://avatars.githubusercontent.com/u/108219612?v=4);" class="shadow1 bg-no-repeat bg-cover rounded-2xl h-[550px]">
              <div class="details rounded-b-2xl absolute bottom-0 w-full h-2/5">
                <h3>Título</h3>
                <span>Subtitulo</span>
                <p>Lorem ipsum dolor</p>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div style="background-image: url(https://avatars.githubusercontent.com/u/108219612?v=4);" class="shadow1 bg-no-repeat bg-cover rounded-2xl h-[550px]">
              <div class="details rounded-b-2xl absolute bottom-0 w-full h-2/5">
                <h3>Título</h3>
                <span>Subtitulo</span>
                <p>Lorem ipsum dolor</p>
              </div>
            </div>
          </div>
        </div> -->
          <!-- pagination -->
          <div class="swiper-button-prev swiper-button-prev-blog shadow1 text-white bg-color1 hover:bg-white hover:text-color1 p-8 py-9 rounded-full pr-10"></div>
          <div class="swiper-button-next swiper-button-next-blog shadow1 text-white bg-color1 hover:bg-white hover:text-color1 p-8 py-9 rounded-full pl-10"></div>
          <div class="swiper-pagination swiper-button-prev-blog" style="bottom: -50px;"></div>
        </div>
      </section>
      <div class="flex justify-center mt-6">
        <a href="./blogs.php">
          <button class="shadow1 bg-color1 mx-auto hover:bg-white hover:text-color1 text-md text-white font-bold py-2 px-4 rounded">
            Ver Todos
          </button>
        </a>
      </div>
    </div>
</section>