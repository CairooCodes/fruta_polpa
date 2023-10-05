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
  </style>
</head>