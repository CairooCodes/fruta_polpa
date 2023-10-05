<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Boom Soluções Empresariais</title>

  <!-- Meta SEO -->
  <meta name="title" content="Boom Soluções Empresariais">
  <meta name="description" content="Boom Soluções Empresariais">
  <meta name="robots" content="index, follow">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="language" content="Portuguese">
  <meta name="author" content="Cairo dev">

  <!-- Social media share -->
  <meta property="og:title" content="Boom Soluções Empresariais">
  <meta property="og:site_name" content="">
  <meta property="og:url" content="">
  <meta property="og:description" content="Boom Soluções Empresariais">
  <meta property="og:image" content="https://boomempresarial.com.br/assets/img/logo.png">
  <!-- Favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="./assets/img/logo.png">
  <link rel="icon" type="image/png" sizes="32x32" href="./assets/img/icon.png">
  <link rel="icon" type="image/png" sizes="16x16" href="./assets/img/icon.png">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="./assets/css/style.css">
  <link rel="stylesheet" href="./assets/css/dark_mode.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css" rel="stylesheet" />
</head>

<body class="bg-gradient-to-r from-black from-35% via-gray-600 via-100%">
  <?php include "./components/navbar.php"; ?>
  <section class="lg:px-32">
    <div class="max-w-screen-xl px-4 py-8 mx-auto space-y-12 lg:space-y-20 lg:py-24 lg:px-6">
      <div class="items-center lg:grid lg:grid-cols-2">
        <img src="./assets/img/logobranca.png" class="w-full grayscale px-10 pt-16 lg:pt-0">
        <div>
          <h3 class="mb-2 lg:text-2xl text-lg lg:font-bold text-justify lg:mt-10 mt-5 text-gray-100"> A Boom Soluções Empresariais é hoje uma empresa de <span class="text-color1">consultoria e serviços nas áreas de gestão, comunicação, marketing e tecnologia.</span>
          </h3>
          <h3 class="mb-8 lg:text-xl text-lg font-medium text-justify mt-5 text-gray-100"> Nasceu com o propósito de trazer soluções rápidas e aplicáveis aos negócios de milhões de empreendedores que enfrentam dificuldades, burocracias e gargalos no seu dia a dia.
          </h3>
          <h3 class="mb-8 lg:text-xl text-lg font-medium text-justify mt-5 text-gray-100"> Inicialmente fundada com o propósito de oferecer consultoria de gestão empresarial com base na experiência profissional de uma consultora com mais  de 20 anos de experiência, hoje a Boom expandiu sua atuação e apresenta soluções para empresas privadas e públicas, do varejo a indústria, nos segmentos de saúde, energia, alimentos, negócios imobiliários e cosméticos.
             
          </h3>
          <h3 class="mb-8 lg:text-xl text-lg font-medium text-justify lg:mt-10 text-gray-100">
            Em constante expansão, a Boom oferece também capacitação técnica e formação para seus colaboradores, clientes e tem o propósito social e colaborar com a formação e aperfeiçoamento de novos talentos.
          </h3>
        </div>
      </div>
    </div>
    <div class="lg:flex lg:justify-center">
      <div class="lg:w-2/3 p-5">
        <form action="./config/api/create_lead.php" method="post">

          <p class="text-xl font-bold text-color1 md:text-2xl mb-5 text-justify">Preencha o formulário para ter um time de marketing montado pela Boom Soluções Empresariais.
          </p>
          <div class="space-y-3">
            <div>
              <input name="name" type="text" id="name" placeholder="Nome Completo" autocomplete="off" class="w-full mr-5 border-none bg-gray-50 focus:border-blue-500 focus:ring-2 focus:ring-blue-900 focus-ring-2 focus:ring-blue-500 focus:ring-opacity-20 rounded-md px-3 py-3 text-sm text-gray-800 placeholder-gray-600 focus:outline-none transition duration-400 ease-in-out">
            </div>
            <div>
              <input name="email" type="text" id="email" placeholder="Email" autocomplete="off" class="w-full mr-5 border-none bg-gray-50 focus:border-blue-500 focus:ring-2 focus:ring-blue-900 focus-ring-2 focus:ring-blue-500 focus:ring-opacity-20 rounded-md px-3 py-3 text-sm text-gray-800 placeholder-gray-600 focus:outline-none transition duration-400 ease-in-out">
            </div>
            <div>
              <input name="celular" type="number" id="celular" placeholder="Celular" autocomplete="off" class="w-full mr-5 border-none bg-gray-50 focus:border-blue-500 focus:ring-2 focus:ring-blue-900 focus-ring-2 focus:ring-blue-500 focus:ring-opacity-20 rounded-md px-3 py-3 text-sm text-gray-800 placeholder-gray-600 focus:outline-none transition duration-400 ease-in-out">
            </div>
            <div class="pt-2">
              <button type="submit" class="font-semibold bg-color1 p-2 rounded-lg w-full">
                <span class="text-white">Enviar</span>
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </section>
  <?php include "./components/footer.php" ?>
  <?php include "./components/modal_form_whats.php" ?>
  <script src="assets/js/dark_mode.js"></script>
  <script src="assets/js/tw.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>

</body>

</html>