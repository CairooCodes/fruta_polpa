<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fruta Polpa</title>

  <!-- Meta SEO -->
  <meta name="title" content="Fruta Polpa">
  <meta name="description" content="Fruta Polpa">
  <meta name="robots" content="index, follow">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="language" content="Portuguese">
  <meta name="author" content="Cairo dev">

  <!-- Social media share -->
  <meta property="og:title" content="Fruta Polpa">
  <meta property="og:site_name" content="">
  <meta property="og:url" content="https://boomempresarial.com.br/">
  <meta property="og:description" content="Fruta Polpa">
  <meta property="og:image" content="https://boomempresarial.com.br/assets/img/logo.png">
  <!-- Favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="./assets/img/logo.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $URI->base("/assets/img/icon.png"); ?>">
  <link rel="icon" type="image/png" sizes="16x16" href="./assets/img/assinatura.png">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="<?php echo $URI->base("/assets/css/style.css"); ?>">
  <!-- <link rel="stylesheet" href="./assets/css/dark_mode.css"> -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/intersection-observer@0.12.2/intersection-observer.min.js"></script>
  <style>
    /* Estilo para esconder a navbar inicialmente */
    #navbar {
      top: -100px;
      transition: top 0.3s;
    }

    #navbar.active {
      top: 0;
    }

    /* Definindo a classe para aplicar o efeito fade-in-up */
    .fade-in-up {
      opacity: 0;
      transform: translateY(20px);
      transition: opacity 0.5s ease-out, transform 0.5s ease-out;
    }

    .fade-in-up.visible {
      opacity: 1;
      transform: translateY(0);
    }

    /* teste aqui */
    /* Estilize os links no navbar */
    nav ul {
      list-style: none;
      display: flex;
      justify-content: center;
    }

    nav li {
      margin: 0 20px;
      text-align: center;
      position: relative;
      /* Adicione isso para controlar o posicionamento da imagem */
    }

    /* Estilo para o link no hover */
    nav a:hover+.hover-image,
    .hover-image:hover {
      display: block;
    }

    /* Estilo para a imagem normal */
    .hover-image {
      display: none;
      position: absolute;
      left: 50%;
      /* Posicione a imagem no centro horizontalmente */
      transform: translateX(-50%);
      top: 30px;
      /* Posicione a imagem um pouco abaixo do texto */
      width: 60px;
      /* Defina o tamanho desejado para a imagem */
      height: auto;
      /* Mantém a proporção original da imagem */
    }

    /* Estilo para o link no hover */
    /* nav a:hover { */
    /* Adicione estilos para o link no hover, se desejar */
    /* } */

    /* final do teste */
    .footer-link2 {
      position: relative;
      text-decoration: none;
    }

    .footer-link2:hover::after {
      content: "";
      position: absolute;
      left: 0;
      right: 0;
      bottom: -4px;
      height: 2px;
      background-color: white;
    }
  </style>

</head>