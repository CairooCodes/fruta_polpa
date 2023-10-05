<?php
require_once "db_config.php";
require "config/helper.php";
require "config/url.class.php";
require "./functions/get.php";
$servicos1 = getServicos1();
$servicos2 = getServicos2();

$cursos;
$URI = new URI();

function remove_simbolos_acentos($string)
{
  $string = trim(strtolower($string));
  $a = 'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûüýýþÿŔŕ?';
  $b = 'aaaaaaaceeeeiiiidnoooooouuuuybsaaaaaaaceeeeiiiidnoooooouuuuyybyRr-';
  $string = strtr($string, utf8_decode($a), $b);
  $string = str_replace(".", "-", $string);
  $string = preg_replace("/[^0-9a-zA-Z\.]+/", '-', $string);
  return utf8_decode(rtrim($string, "-"));
}


$url = explode("/", $_SERVER['REQUEST_URI']);
$idpost = $url[3];

$idpost2 = "";

$stmt = $pdo->prepare("SELECT * FROM cursos");
$stmt->execute();
if ($stmt->rowCount() > 0) {
  while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    extract($row);
    $string1 = remove_simbolos_acentos(utf8_decode($idpost));
    $string2 = remove_simbolos_acentos(utf8_decode($name));
    if ($string1 == $string2) {
      $idpost2 = $name;
      $curso = getCurso($id);
    }
  }
}


?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <?php include "components/heads.php"; ?>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>

<body>
  <?php include "./components/navbar.php" ?>

  <section class="mx-auto max-w-7xl px-2 pt-32">
    <div class="pb-8">
      <ul>
        <li class="flex gap-6">
          <div>
            <div class="w-10 h-10 rounded-full bg-color1 flex items-center justify-center">
              <i class="bi bi-tv text-black text-xl"></i>
            </div>
          </div>
          <div>
            <span class="font-extrabold text-md">Sobre o Curso</span>
            <p class="text-sm mt-2">Descubra o mundo do marketing digital com o Curso de Formação de Social Media da BOOM!</p>
            <p class="text-sm mt-1">Aprenda com os melhores profissionais da área e domine as ferramentas que fazem a diferença nas redes sociais. De estratégias de conteúdo à análise de métricas, você estará pronto para se destacar no mercado de trabalho.</p>
            <p class="text-sm mt-1">Destaque-se! Os dois melhores alunos terão a oportunidade de um estágio de 2 meses na BOOM. Uma chance única de ganhar experiência na prática.</p>
            <p class="text-sm mt-1">Investimento acessível: Aproveite o preço promocional de R$899 no primeiro lote, com opção de parcelamento em até 12x no cartão.</p>
          </div>
        </li>

        <li class="flex gap-6 mt-8">
          <div>
            <div class="w-10 h-10 rounded-full bg-color1 flex items-center justify-center">
              <i class="bi bi-star text-black text-xl"></i>
            </div>
          </div>
          <div class="grid">
            <span class="font-extrabold text-md">Carga Horária/Local</span>
            <span class="font-extrabold text-md mt-2 text-orange-600">Certificado de 30 horas</span>
            <p class="text-sm mt-2">Curso Presencial: Teresina - PI</p>
          </div>
        </li>

        <li class="flex gap-6 mt-8">
          <div>
            <div class="w-10 h-10 rounded-full bg-color1 flex items-center justify-center">
              <i class="bi bi-people-fill text-black text-xl"></i>
            </div>
          </div>
          <div class="grid">
            <span class="font-extrabold text-md">Público</span>
            <p class="text-sm mt-2">
              Alunos de Publicidade/Jornalismo/Marketing que queiram adentrar no mundo do marketing digital
            </p>
          </div>
        </li>

        <li class="flex gap-6 mt-8">
          <div>
            <div class="w-10 h-10 rounded-full bg-color1 flex items-center justify-center">
              <i class="bi bi-calendar-week text-black text-xl"></i>
            </div>
          </div>
          <div class="grid">
            <span class="font-extrabold text-md">Cronograma</span>
            <div class="my-3">
              <div x-data="{ open1: false }" class="bg-white grid py-1">
                <div @click="open1 = !open1" class="relative border-b-4 border-transparent" :class="{'border-orange-500 transform transition duration-300 ': open1}" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100">
                  <div class="flex items-center space-x-3 cursor-pointer">
                    <div class="bg-orange-600 rounded-full">
                      <svg fill="white" viewBox="0 0 20 20" x-bind:style="open1 ? 'transform: rotate(360deg);' : 'transform: rotate(270deg);'" class="w-4 h-4 transition-transform duration-200 transform ">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                      </svg>
                    </div>
                    <span class="font-extrabold text-sm uppercase">Módulo 1</span>
                  </div>
                  <div x-show="open1" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class=" px-5 py-3 rounded-lg">
                    <ul class="list-disc">
                      <li class="text-sm">21/10 - Ideias iniciais, introdução ao curso</li>
                      <li class="text-sm">28/10 - Os primeiros passos com um cliente</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div x-data="{ open2: false }" class="bg-white grid py-1">
                <div @click="open2 = !open2" class="relative border-b-4 border-transparent" :class="{'border-orange-500 transform transition duration-300 ': open2}" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100">
                  <div class="flex items-center space-x-3 cursor-pointer">
                    <div class="bg-orange-600 rounded-full">
                      <svg fill="white" viewBox="0 0 20 20" x-bind:style="open2 ? 'transform: rotate(360deg);' : 'transform: rotate(270deg);'" class="w-4 h-4 transition-transform duration-200 transform ">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                      </svg>
                    </div>
                    <span class="font-extrabold text-sm uppercase">Módulo 2</span>
                  </div>
                  <div x-show="open2" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class=" px-5 py-3 rounded-lg">
                    <ul class="list-disc">
                      <li class="text-sm">11/11 - Copy, Gatilhos, Planejamento</li>
                      <li class="text-sm">18/11 - Produção de Conteúdo</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div x-data="{ open3: false }" class="bg-white grid py-1">
                <div @click="open3 = !open3" class="relative border-b-4 border-transparent" :class="{'border-orange-500 transform transition duration-300 ': open3}" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100">
                  <div class="flex items-center space-x-3 cursor-pointer">
                    <div class="bg-orange-600 rounded-full">
                      <svg fill="white" viewBox="0 0 20 20" x-bind:style="open3 ? 'transform: rotate(360deg);' : 'transform: rotate(270deg);'" class="w-4 h-4 transition-transform duration-200 transform ">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                      </svg>
                    </div>
                    <span class="font-extrabold text-sm uppercase">Módulo 3</span>
                  </div>
                  <div x-show="open3" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class=" px-5 py-3 rounded-lg">
                    <ul class="list-disc">
                      <li class="text-sm">02/12 - Aula Prática</li>
                      <li class="text-sm"> 09/12 - Orçamento, Métricas, Como encantar seu cliente?</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </li>
        <li class="flex gap-6 mt-8">
          <div>
            <div class="w-10 h-10 rounded-full bg-color1 flex items-center justify-center">
              <i class="bi bi-people-fill text-black text-xl"></i>
            </div>
          </div>
          <div class="grid">
            <span class="font-extrabold text-md">Vagas</span>
            <p class="text-sm mt-2">Vagas Limitadas.</p>
          </div>
        </li>

        <li class="flex gap-6 mt-8">
          <div>
            <div class="w-10 h-10 rounded-full bg-color1 flex items-center justify-center">
              <i class="bi bi-plus text-black text-xl"></i>
            </div>
          </div>
          <div class="grid">
            <span class="font-extrabold text-md">Informações Adicionais</span>
            <p class="text-sm mt-2"> - As datas dos cursos ou treinamentos estão sujeitas a remarcação em até 48hr antes da data
              estipulada em caso de não conter a quantidade mínima de quórum para fechamento de turma<br>
              - O aluno só terá direito ao certificado, após concluir 75% do curso. Em casos de falta por
              motivos de saúde, o aluno precisará entrar em contato com a central e apresentar atestado médico
              com até 24h de antecedência às aulas.</p>
          </div>
        </li>

        <li class="flex gap-6 mt-8">
          <div>
            <div class="w-10 h-10 rounded-full bg-color1 flex items-center justify-center">
              <i class="bi bi-cash text-black text-xl"></i>
            </div>
          </div>
          <div class="grid">
            <span class="font-extrabold text-md">Investimento</span>
            <p class="text-sm mt-2">
              <s>De: R$1199,99 </s><br>
              <b>Por: R$899,99<br></b><b>em até 12x no cartão de crédito</b><br>
            </p>
            <!-- inicio botão whatsapp -->
            <a href="https://api.whatsapp.com/send?phone=5586994333489" target="_blank" rel="noopener noreferrer">
              <button class="flex items-center justify-center px-6 py-1 gap-2 mt-4" style="background-image: linear-gradient(45deg, #3f3f3f,#000000); border: none; outline: none; color: #fff; border-radius: 6px; cursor: pointer; font-size: 1rem; font-weight: bold;">
                Faça sua matricula aqui!
              </button>
            </a>
            <img src="<?php echo $URI->base('/assets/img/symplalogo.png'); ?>" class="w-40 mt-2">
            <!-- fim botão whatsapp -->
          </div>
        </li>

        <li class="flex gap-6 mt-8">
          <div>
            <div class="w-10 h-10 rounded-full bg-color1 flex items-center justify-center">
              <i class="bi bi-exclamation-lg text-black text-xl"></i>
            </div>
          </div>
          <div class="grid">
            <p class="text-sm">
              <b>Atenção:</b> <i><b style="font-size:14px"> Devolução de investimento só será realizada em
                  casos previstos em lei. Ressaltamos que a simples impossibilidade de comparecimento ao
                  curso após a realização da inscrição não caracteriza justificativa para reembolso ou
                  emissão de certificado. Para os demais casos de falta, o aluno poderá realizar o
                  pagamento da taxa de reposição de aula no valor de R$147,00 (cento e quarenta e sete
                  reais).</b></i>
            </p>
          </div>
        </li>
      </ul>
    </div>
  </section>

  <?php include "./components/footer.php" ?>
  <?php include "./components/modal_form_whats.php" ?>

  <script src="./assets/js/script.js"></script>
  <script src="./assets/js/lz.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
  <script src="assets/js/dark_mode.js"></script>
  <script src="<?php echo $URI->base('/assets/js/tw.js'); ?>"></script>
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
</body>

</html>