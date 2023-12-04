<section class="bg-white max-w-full header-institucional px-4">
  <div class="max-w-full lg:pl-24  mx-auto lg:pt-32 pt-12 lg:grid grid-cols-2">
    <div class="lg:px-12">
      <div>
        <p style="color: rgb(252,114,0);
color: linear-gradient(15deg, rgba(252,114,0,1) 25%, rgba(255,198,0,1) 100%); font-size: 20px;letter-spacing: 4px; font-weight: 300;">MAIS DE</p>
      </div>
      <div style="color: rgb(252,114,0);
color: linear-gradient(15deg, rgba(252,114,0,1) 25%, rgba(255,198,0,1) 100%);" class="counter" data-target="15" data-source="0" data-duration="2000" counter="0">
        15
      </div>
      <div class="lg:mt-14 mt-4 mb-4 text-justify">
        <p style="letter-spacing: 0.5px;" class="text-gray-800">Há mais de 15 anos, a <span class="font-black text-color1">Fruta Polpa</span> é presença marcante na mesa dos piauienses. Aliada da saúde e do bem-estar, é uma das maiores do Brasil no segmento de polpa de frutas, sendo reconhecida como “A Melhor do Brasil” por sua qualidade, sabor e excelência em todos os processos.</p>
        <p style="letter-spacing: 0.5px;" class="text-gray-800 pt-3">Nossa história começa em 1994, graças à visão e perseverança do fundador Sr. Marcelo Teixeira e Sra. Denise Teixeira, que iniciaram o negócio de forma artesanal, com pouquíssima estrutura e uma única ideia: Levar mais qualidade de vida e sabor para os piauienses...</p>
        <!-- <p style="letter-spacing: 0.5px;" class="text-gray-800 pt-3">O negócio cresceu, e o desejo de melhoria contínua fez com que a indústria passasse por inúmeras transformações, desde sua localização até o processo de produção, passando pelos produtos e logística.</p>
        <p style="letter-spacing: 0.5px;" class="text-gray-800 pt-3">Atualmente temos abrangência nacional, além do mercado piauiense, atendemos também Maranhão, Ceará, Paraíba, Pernambuco, Bahia, Pará, Tocantins, Goiás, Rio de Janeiro e Distrito Federal.</p>
        <p style="letter-spacing: 0.5px;" class="text-gray-800 pt-3">Nossa meta é ser líder de mercado no Brasil até 2028, e para isso contamos com um time de excelência, processos bem estruturados, logística e claro produtos diferenciados que agradam não apenas pelo sabor, mas pelo compromisso em levar até a milhões de famílias brasileiras um produto de alta confiabilidade.</p> -->
      </div>
      <a href="<?php echo $URI->base("institucional"); ?>" class="leia-mais-link">Leia mais</a>
    </div>
    <div class="pt-10 lg:pr-32 lg:pb-20">
      <img src="./assets/img/pagina_institucionalnova.jpg" class="w-full">
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