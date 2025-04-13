<?php
session_start();
require "../db_config.php";

// Verifica se o usuário está logado
if (!isset($_SESSION['id'])) {
    header('Location: login.php');
    exit;
}

// Verifica se o ID do participante foi fornecido
if (!isset($_GET['id'])) {
    header('Location: participantes.php');
    exit;
}

$id = $_GET['id'];

// Busca os dados do participante
$sql = "SELECT * FROM participants WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->execute(['id' => $id]);
$participant = $stmt->fetch(PDO::FETCH_ASSOC);

// Verifica se o participante existe
if (!$participant) {
    header('Location: participantes.php');
    exit;
}

// Atualiza os dados do participante
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $cpf = $_POST['cpf'];
    $birth_date = $_POST['birth_date'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $cep = $_POST['cep'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    $neighborhood = $_POST['neighborhood'];
    $address = $_POST['address'];
    $number = $_POST['number'];
    $complement = $_POST['complement'];

    // Atualiza o banco de dados com os novos dados
    $sql = "UPDATE participants SET 
            first_name = :first_name, 
            last_name = :last_name, 
            cpf = :cpf, 
            birth_date = :birth_date, 
            phone = :phone, 
            email = :email, 
            cep = :cep, 
            state = :state, 
            city = :city, 
            neighborhood = :neighborhood, 
            address = :address, 
            number = :number, 
            complement = :complement 
            WHERE id = :id";
    
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        'first_name' => $first_name,
        'last_name' => $last_name,
        'cpf' => $cpf,
        'birth_date' => $birth_date,
        'phone' => $phone,
        'email' => $email,
        'cep' => $cep,
        'state' => $state,
        'city' => $city,
        'neighborhood' => $neighborhood,
        'address' => $address,
        'number' => $number,
        'complement' => $complement,
        'id' => $id
    ]);

    header('Location: participantes.php');
    exit;
}

$user_type = $_SESSION['type'];
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Editar Participante - Fruta Polpa</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../assets/img/logo.png" rel="icon">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css" rel="stylesheet" />
</head>

<body>
    <?php include "components/sidebar.php"; ?>
    <div class="ml-auto mb-6 lg:w-[75%] xl:w-[80%] 2xl:w-[85%]">
        <?php include "components/header.php"; ?>
        <div class="max-w-full px-4 pb-8 mx-auto py-8">
            <h1 class="text-2xl font-bold mb-4">Editar Participante</h1>
            <form method="post">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="first_name" class="block text-sm font-medium text-gray-700">Nome</label>
                        <input type="text" id="first_name" name="first_name" value="<?php echo htmlspecialchars($participant['first_name']); ?>" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                    </div>
                    <div>
                        <label for="last_name" class="block text-sm font-medium text-gray-700">Sobrenome</label>
                        <input type="text" id="last_name" name="last_name" value="<?php echo htmlspecialchars($participant['last_name']); ?>" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                    </div>
                    <div>
                        <label for="cpf" class="block text-sm font-medium text-gray-700">CPF</label>
                        <input type="text" id="cpf" name="cpf" value="<?php echo htmlspecialchars($participant['cpf']); ?>" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                    </div>
                    <div>
                        <label for="birth_date" class="block text-sm font-medium text-gray-700">Data de Nascimento</label>
                        <input type="date" id="birth_date" name="birth_date" value="<?php echo htmlspecialchars($participant['birth_date']); ?>" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                    </div>
                    <div>
                        <label for="phone" class="block text-sm font-medium text-gray-700">Telefone</label>
                        <input type="text" id="phone" name="phone" value="<?php echo htmlspecialchars($participant['phone']); ?>" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($participant['email']); ?>" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                    </div>
                    <div>
                        <label for="cep" class="block text-sm font-medium text-gray-700">CEP</label>
                        <input type="text" id="cep" name="cep" value="<?php echo htmlspecialchars($participant['cep']); ?>" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                    </div>
                    <div>
                        <label for="state" class="block text-sm font-medium text-gray-700">Estado</label>
                        <input type="text" id="state" name="state" value="<?php echo htmlspecialchars($participant['state']); ?>" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                    </div>
                    <div>
                        <label for="city" class="block text-sm font-medium text-gray-700">Cidade</label>
                        <input type="text" id="city" name="city" value="<?php echo htmlspecialchars($participant['city']); ?>" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                    </div>
                    <div>
                        <label for="neighborhood" class="block text-sm font-medium text-gray-700">Bairro</label>
                        <input type="text" id="neighborhood" name="neighborhood" value="<?php echo htmlspecialchars($participant['neighborhood']); ?>" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                    </div>
                    <div>
                        <label for="address" class="block text-sm font-medium text-gray-700">Endereço</label>
                        <input type="text" id="address" name="address" value="<?php echo htmlspecialchars($participant['address']); ?>" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                    </div>
                    <div>
                        <label for="number" class="block text-sm font-medium text-gray-700">Número</label>
                        <input type="text" id="number" name="number" value="<?php echo htmlspecialchars($participant['number']); ?>" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                    </div>
                    <div>
                        <label for="complement" class="block text-sm font-medium text-gray-700">Complemento</label>
                        <input type="text" id="complement" name="complement" value="<?php echo htmlspecialchars($participant['complement']); ?>" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                    </div>
                </div>
                <div class="mt-4">
                    <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md">Salvar Alterações</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
