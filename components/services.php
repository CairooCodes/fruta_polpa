<section class="px-5 lg:py-24 py-12 lg:px-32" id="servicos">
  <h1 class="text-center mb-4 lg:text-5xl text-4xl font-extrabold leading-none tracking-tight text-black uppercase">
    Marketing Digital <span class="text-color1">Completo</span> para sua Empresa
  </h1>
  <p class="text-center mb-4 text-xl font-medium text-black">Conheça os serviços da <span class="text-color1">Boom Empresarial</span> essenciais para seu négocio</p>
  <div class="flex justify-center pb-10 pt-10">
    <a href="https://api.whatsapp.com/send?phone=5586994333489" class="uppercase bg-color1 inline-flex items-center justify-center w-full px-5 py-3 text-sm text-center text-xl font-regular text-white rounded-full sm:w-auto hover:bg-black-800 focus:ring-4 focus:ring-gray-100">
      Serviços Boom Empresarial
    </a>
  </div>

  <div class="lg:flex lg:justify-center">
    <div class="lg:w-2/2">
      <h3 class="mb-4 lg:text-4xl text-2xl font-bold text-black text-center"><span>Com a Boom, seu negócio cresce mais rápido com <br></span><span class="font-bold text-color1">Marketing Digital e Offline</span>
      </h3>
      <!-- START SERVICES MARKETING DIGITAL -->
      <header>
        <div class="gap-8 lg:grid lg:grid-cols-3 xl:gap-8 text-white mt-10">
          <?php foreach ($servicos1 as $servico1) { ?>
            <div class="card fade-in-up bg-white rounded-lg px-5 py-5 m-2 shadow-lg" id="card1">
              <div class="text-center gap-2 pb-4 items-center">
                <h1 class="text-lg uppercase text-center text-black pb-5 pt-5"><?php echo $servico1['name']; ?></h1>
                <div>
                  <h3 class="text-md text-center text-black mb-2"><?php echo $servico1['description']; ?></h3>
                </div>
                <?php echo $servico1['icon'] ?>
              </div>
              <div class="flex justify-center">
                <a href="<?php echo $URI->base('servico/' . slugify($servico1['name'])); ?>" class="shadow rounded-md focus:ring-4 rounded-md uppercase text-sm px-5 py-2 text-black text-center">Saiba mais</a>
              </div>
            </div>
          <?php
          }
          ?>
        </div>
      </header>
    </div>
  </div>
  <!-- END SERVICES MARKETING DIGITAL -->

  <div class="lg:flex lg:justify-center">
    <div class="lg:w-2/2">
      <!-- START SERVICES MARKETING OFFLINE -->
      <header>
        <div class="gap-8 lg:grid lg:grid-cols-2 xl:gap-8 text-white mt-10">
          <?php foreach ($servicos2 as $servico2) { ?>
            <div class="card fade-in-up bg-white rounded-lg px-5 py-5 m-2 shadow-lg" id="card1">
              <div class="text-center gap-2 pb-4 items-center">
                <h1 class="text-lg uppercase text-center text-black pb-5 pt-5"><?php echo $servico2['name']; ?></h1>
                <div>
                  <h3 class="text-md text-center text-black mb-2"><?php echo $servico2['description']; ?></h3>
                </div>
                <?php echo $servico2['icon'] ?>
              </div>
              <div class="flex justify-center">
                <a href="<?php echo $URI->base('servico/' . slugify($servico2['name'])); ?>" class="shadow rounded-md focus:ring-4 rounded-md uppercase text-sm px-5 py-2 text-black text-center">Saiba mais</a>
              </div>
            </div>
          <?php
          }
          ?>
        </div>
      </header>
    </div>
  </div>
  <!-- END SERVICES MARKETING OFFLINE -->
</section>