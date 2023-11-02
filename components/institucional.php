<section class="bg-white max-w-full header-institucional">
  <div class="max-w-full px-4 pt-4 lg:pl-24  mx-auto items-center lg:grid grid-cols-2 mt-2">
    <div class="lg:px-12">
      <div>
        <p>MAIS DE</p>
      </div>
      <div class="counter" data-target="15" data-source="0" data-duration="2000" counter="0">
        15
      </div>
      <div class="lg:mt-14 mt-4 mb-4 text-justify">
        <p>Trabalhamos com 25 sabores desde os mais tradicionais que são a acerola, goiaba e maracujá, como também contamos com a linha funcional, montada com 6 sabores especialmente pensadas para trazer benefícios diretos a saúde e qualidade das milhares de famílias em 7 estados diferentes: Piauí, Maranhão, Tocantins, Pará, Amapá, Goiás/DF e Ceará.</p>
      </div>
      <a href="<?php echo $URI->base("/institucional"); ?>" class="leia-mais-link">Leia mais</a>
    </div>
    <div class="">
      <img src="./assets/img/página institucional.png" class="w-full">
    </div>
  </div>
</section>
<script>
  var valor_inicial = 0;
  var intervalId;

  function updateCounter() {
    document.querySelector(".counter").textContent = valor_inicial;
    valor_inicial++;

    if (valor_inicial > 15) {
      clearInterval(intervalId);
    }
  }

  intervalId = setInterval(updateCounter, 180);
</script>