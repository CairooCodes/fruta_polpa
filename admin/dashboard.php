<?php
session_start();
require "../db_config.php";

if (!isset($_SESSION['id'])) {
  header('Location: login.php');
  exit;
}

$user_id = $_SESSION['id'] ?? null;
$sql = "SELECT name, email, img FROM users WHERE id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$user_id]);
$user = $stmt->fetch();

try {
  $stmt = $pdo->prepare("SELECT * FROM leads");
  $stmt->execute();
  $leads = $stmt->fetchAll();
} catch (PDOException $e) {
  echo "Erro ao recuperar dados: " . $e->getMessage();
}

$pdo = null;

$page = 'dash';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>Leads Boom - Soluções Empresariais</title>
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
      <div class="relative overflow-x-auto sm:rounded-lg pb-10">
        <div class="flex flex-wrap justify-between h-full">
          <!-- Card pequeña 1 -->

          <div class="flex-1 bg-gradient-to-r from-orange-400 to-orange-700 rounded-lg flex flex-col items-center justify-center p-4 space-y-2 border border-gray-200 m-2">
            <a href="cursos.php">
              <i class="bi bi-mortarboard-fill text-white text-4xl"></i>
              <p class="text-white">Cursos</p>
            </a>
          </div>
          <!-- Caja pequeña 2 -->
          <div class="flex-1 bg-gradient-to-r from-orange-400 to-orange-700 rounded-lg flex flex-col items-center justify-center p-4 space-y-2 border border-gray-200 m-2">
            <a href="servicos.php">
              <i class="bi bi-wallet-fill text-white text-4xl"></i>
              <p class="text-white">Serviços</p>
            </a>
          </div>
          <!-- Caja pequeña 3 -->
          <div class="flex-1 bg-gradient-to-r from-orange-400 to-orange-700 rounded-lg flex flex-col items-center justify-center p-4 space-y-2 border border-gray-200 m-2">
            <a href="leads.php">
              <i class="bi bi-person-fill text-white text-4xl"></i>
              <p class="text-white">Usuários</p>
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