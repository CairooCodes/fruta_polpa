<section class="max-w-full bg-white">
  <div>
    <div class="max-w-full px-4 pt-12 mx-auto lg:grid grid-cols-2 mt-2">
      <div class="text-content col-md-6 px-12">
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



<!-- <div class="container-fluid">
    <div class="botao1 botaoc col-xs-10 col-sm-12 col-md-12 col-xs-offset-1 col-sm-offset-0 col-md-offset-0" id="botaobanner"><a id="_428958716_1620157327" target="_self" class="col-xs-12 col-sm-12 col-md-12 col-xs-offset-0 col-sm-offset-0 col-md-offset-0 btn" href="#produtos"><i class="fa "></i>&nbsp;CONHEÇA NOSSOS PRODUTOS <i class="fas fa-angle-down"></i></a>
    </div>
    <style type="text/css">
        .counter {
            font-weight: 800;
            color: #00284a;
            font-size: 90px;
            line-height: 0.7;
        }

        .counter:after {
            content: ' anos sendo referência em tradição, qualidade e tecnologia.';
            color: #00284a;
            font-size: 47px;
        }

        @media (max-width: 767px) {
            .counter:after {
                font-size: 35px;
            }

            .counter {
                font-size: 60px;
                line-height: 0.7;
            }
        }

        .zindex-2 {
            z-index: -2;
        }

        #intro {
            min-height: 600px;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
        }

        #intro2 {
            position: relative;
        }
    </style>
    <div class=" meia-largura-esq botaolinha col-xs-12 col-sm-7 col-md-7 col-xs-offset-0 col-sm-offset-0 col-md-offset-0" id="intro">
        <div id="text_6503b080c101d" class="col-xs-12 col-sm-12 col-md-12 col-xs-offset-0 col-sm-offset-0 col-md-offset-0">
            <p><span style="font-size: 20px; color: #00284a; letter-spacing: 4px; font-weight: 300;">MAIS DE</span></p>
        </div>
        <div id="_1147258240_1620157562" data-target="75" data-source="0" data-duration="3000" class="col-xs-12 col-sm-12 col-md-12 col-xs-offset-0 col-sm-offset-0 col-md-offset-0 counter " counter="0">75</div>
        <div id="text_6503b080c144c" class="col-xs-12 col-sm-10 col-md-9 col-xs-offset-0 col-sm-offset-0 col-md-offset-0">
            <p><span style="font-size: 12pt;">Em 1942, o imigrante italiano Giuseppe De Marchi deu início a partir da agricultura, a história do grupo De Marchi, conglomerado de empresas que atua desde o cultivo em grande escala de frutas, legumes e verduras, até a produção de uma ampla gama de alimentos congelados e comercialização de alimentos “in natura” para o Brasil e Exterior.</span></p>
        </div>
        <div class=" col-xs-12 col-sm-12 col-md-12 col-xs-offset-0 col-sm-offset-0 col-md-offset-0" href="/assets/img/quemsomos.jpg"><a href="/assets/img/quemsomos.jpg" target="_self" class="col-xs-12 col-sm-12 col-md-12 col-xs-offset-0 col-sm-offset-0 col-md-offset-0 btn" href="quem_somos.php"><i class="fa "></i>&nbsp;Leia mais</a>
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
    </div>
    <div class=" zindex-2 col-xs-12 col-sm-5 col-md-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-0" id="_5e7e6476e1e45_1585341558">
        <div class="container-fluid  zindex-2 wow fadeInRight animated" name="Container_6503b080c18e5" id="_287120308_1620157562" style="visibility: visible; animation-name: fadeInRight;">
            <div class="clear"></div>
        </div>
        <style type="text/css">
            @media (min-width: 768px) and (max-width: 991px) {
                #_5e7e6476e1e45_1585341558 {
                    margin-left: -150px;
                    width: calc(40% + 162px);
                }
            }
        </style>
        <div class="clear"></div>
    </div>
    <div class="clear"></div>
</div>
    <style type="text/css">
        @media (min-width: 768px) and (max-width: 991px) {
            #_5e7e6476e1e45_1585341558 {
                margin-left: -150px;
                width: calc(40% + 162px);
            }
        }
    </style>
    <div class="clear"></div>
</div>
</div> -->