<section class="max-w-full bg-white">
  <div>
    <div class="max-w-full px-4 lg:pt-12 pb-12 mx-auto lg:grid grid-cols-2 mt-2">
      <div class="text-content col-md-6 lg:px-12">
        <div>
          <p><span style="font-size: 18px; color: #00284a; letter-spacing: 2px; font-weight: 300; padding-left: 10px;">MAIS DE</span></p>
        </div>
        <div class="counter" style="font-size: 56pt;" data-target="15" data-source="0" data-duration="2000" counter="0">
          15
        </div>
        <div class="mt-14 mb-4">
          <p>Trabalhamos com 25 sabores desde os mais tradicionais que são a acerola, goiaba e maracujá, como também contamos com a linha funcional,
          <p>montada com 6 sabores especialmente pensadas para trazer benefícios diretos a saúde e qualidade das milhares de famílias em 7 estados diferentes:
          <p>Piauí, Maranhão, Tocantins, Pará, Amapá, Goiás/DF e Ceará.
        </div>
        <a href="quemsomos.php" class="leia-mais-link">Leia mais</a>
      </div>
      <div class="text-content col-md-6 px-12">
        <img src="./assets/img/polpaquemsomos.png" class="w-full">
      </div>
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