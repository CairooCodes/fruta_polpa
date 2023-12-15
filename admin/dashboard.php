<?php
session_start();
require "../db_config.php";
require "../functions/get.php";

if (!isset($_SESSION['id'])) {
  header('Location: login.php');
  exit;
}

$user_id = $_SESSION['id'] ?? null;

$sql = "SELECT name, email, img FROM users WHERE id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$user_id]);
$user = $stmt->fetch();

$page = 'dash';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>Dashboard - Fruta Polpa</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta content="" name="keywords">
  <meta content="" name="description">
  <meta name="author" content="Cairo Felipe Developer">

  <meta property="og:title" content="" />
  <meta property="og:url" content="" />
  <meta property="og:image" content="" />
  <meta property="og:description" content="" />

  <link rel="stylesheet" href="./assets/css/style.css">
  <link href="../assets/img/logo.png" rel="icon">
  <link href="../assets/img/logo.png" rel="apple-touch-icon">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css" rel="stylesheet" />
  <script src="../assets/js/tw.js"></script>
</head>

<body>
  <?php include "components/sidebar.php" ?>
  <div class="ml-auto mb-6 lg:w-[75%] xl:w-[80%] 2xl:w-[85%]">
    <?php include "components/header.php" ?>
    <div class="max-w-7xl px-4 pb-8 mx-auto py-8">
      <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <div class="flex items-center justify-between py-4 bg-white">
          <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3 pb-6">
            <div class="md:col-span-2 lg:col-span-1">
              <a href="banners.php">
                <div class="h-full py-8 px-6 space-y-6 rounded-xl text-2xl border border-gray-200 bg-color1 text-white">
                  <div class="flex space-x-2">
                    <i class="bi bi-images"></i>
                    <h6>
                      BANNERS
                      <?php
                      $sth = $pdo->prepare("SELECT count(*) as total from banners");
                      $sth->execute();
                      print_r($sth->fetchColumn());
                      ?>
                    </h6>
                  </div>
                </div>
              </a>
            </div>
            <div class="md:col-span-2 lg:col-span-1">
              <a href="trabalhe-conosco.php">
                <div class="h-full py-8 px-6 space-y-6 rounded-xl text-2xl border border-gray-200 bg-color1 text-white">
                  <div class="flex space-x-2">
                    <i class="bi bi-people"></i>
                    <h6>
                      TRABALHE CONOSCO
                      <?php
                      $sth = $pdo->prepare("SELECT count(*) as total from recruitment");
                      $sth->execute();
                      print_r($sth->fetchColumn());
                      ?>
                    </h6>
                  </div>
                </div>
              </a>
            </div>
            <div class="md:col-span-2 lg:col-span-1">
              <a href="servicos.php">
                <div class="h-full py-8 px-6 space-y-6 rounded-xl text-2xl border border-gray-200 bg-color1 text-white">
                  <div class="flex space-x-2">
                    <i class="bi bi-journals"></i>
                    <h6>
                      BLOGS
                      <?php
                      $sth = $pdo->prepare("SELECT count(*) as total from blogs");
                      $sth->execute();
                      print_r($sth->fetchColumn());
                      ?>
                    </h6>
                  </div>
                </div>
              </a>
            </div>
            <div class="md:col-span-2 lg:col-span-1">
              <a href="polpas.php">
                <div class="h-full py-8 px-6 space-y-6 rounded-xl text-2xl border border-gray-200 bg-color1 text-white">
                  <div class="flex space-x-2">
                    <i class="bi bi-cart"></i>
                    <h6>
                      POLPAS
                      <?php
                      $sth = $pdo->prepare("SELECT count(*) as total from products");
                      $sth->execute();
                      print_r($sth->fetchColumn());
                      ?>
                    </h6>
                  </div>
                </div>
              </a>
            </div>
            <div class="md:col-span-2 lg:col-span-1">
              <a href="receitas.php">
                <div class="h-full py-8 px-6 space-y-6 rounded-xl text-2xl border border-gray-200 bg-color1 text-white">
                  <div class="flex space-x-2">
                    <i class="bi bi-file-text"></i>
                    <h6>
                      RECEITAS
                      <?php
                      $sth = $pdo->prepare("SELECT count(*) as total from receitas");
                      $sth->execute();
                      print_r($sth->fetchColumn());
                      ?>
                    </h6>
                  </div>
                </div>
              </a>
            </div>
            <div class="md:col-span-2 lg:col-span-1">
              <a href="leads.php">
                <div class="h-full py-8 px-6 space-y-6 rounded-xl text-2xl border border-gray-200 bg-color1 text-white">
                  <div class="flex space-x-2">
                    <i class="bi bi-inboxes"></i>
                    <h6>
                      LEADS
                      <?php
                      $sth = $pdo->prepare("SELECT count(*) as total from leads");
                      $sth->execute();
                      print_r($sth->fetchColumn());
                      ?>
                    </h6>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script>
    const inputBusca = document.querySelector('#busca');
    inputBusca.addEventListener('input', () => {
      const termoBusca = inputBusca.value.toLowerCase();
      filtrarLinhas(termoBusca);
    });

    function filtrarLinhas(termo) {
      const tbody = document.querySelector('table tbody');
      const linhas = tbody.querySelectorAll('tr');

      linhas.forEach((linha) => {
        const textoLinha = linha.textContent.toLowerCase();
        if (textoLinha.includes(termo)) {
          linha.classList.remove('hidden');
        } else {
          linha.classList.add('hidden');
        }
      });
    }
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
</body>

</html>