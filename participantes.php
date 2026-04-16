<?php
require "db_config.php";

/* ===============================
   CONTADORES
================================ */

$totalParticipants = $pdo->query("
    SELECT COUNT(*) FROM participants
")->fetchColumn();

$totalParticipants2 = $pdo->query("
    SELECT COUNT(*) FROM participants2
")->fetchColumn();

$totalIguais = $pdo->query("
    SELECT COUNT(*)
    FROM participants p
    INNER JOIN participants2 p2
        ON p.cpf COLLATE utf8mb4_unicode_ci
         = p2.cpf COLLATE utf8mb4_unicode_ci
")->fetchColumn();

/* ===============================
   LISTAGEM
================================ */

$sql = "
    SELECT
        p2.cpf,
        p2.full_name,
        p2.first_name,
        p2.phone,
        p2.created_at
    FROM participants2 p2
    LEFT JOIN participants p
        ON p.cpf COLLATE utf8mb4_unicode_ci
         = p2.cpf COLLATE utf8mb4_unicode_ci
    WHERE p.id IS NULL
      AND p2.cpf IS NOT NULL
    ORDER BY p2.id
";

$stmt = $pdo->prepare($sql);
$stmt->execute();

/* carregar resultados para contar */
$rows = [];
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $rows[] = $row;
}
$totalLista = count($rows);
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Participantes</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 p-6">

    <h1 class="text-2xl font-bold mb-6">Relatório de Participantes</h1>

    <?php if (isset($_GET['importados'])): ?>
        <div class="mb-6 bg-green-100 border border-green-300 text-green-800 p-4 rounded">
            <?= intval($_GET['importados']) ?> registros importados com sucesso.
        </div>
    <?php endif; ?>

    <!-- CARDS -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-8">
        <div class="bg-blue-100 p-4 rounded shadow">
            <p class="text-sm text-gray-600">participants</p>
            <p class="text-2xl font-bold"><?= number_format($totalParticipants) ?></p>
        </div>

        <div class="bg-green-100 p-4 rounded shadow">
            <p class="text-sm text-gray-600">participants2</p>
            <p class="text-2xl font-bold"><?= number_format($totalParticipants2) ?></p>
        </div>

        <div class="bg-purple-100 p-4 rounded shadow">
            <p class="text-sm text-gray-600">presentes nas duas</p>
            <p class="text-2xl font-bold"><?= number_format($totalIguais) ?></p>
        </div>
    </div>

    <!-- FORM IMPORTAÇÃO -->
    <div class="bg-white p-4 rounded shadow mb-6">
        <form method="POST" action="importar_participants.php"
            class="flex flex-col md:flex-row gap-4 items-end">

            <!-- DATA -->
            <div>
                <label class="block text-sm font-medium text-gray-700">
                    created_at para importação
                </label>
                <input
                    type="datetime-local"
                    name="created_at"
                    required
                    class="border rounded px-3 py-2">
            </div>

            <!-- QUANTIDADE -->
            <div>
                <label class="block text-sm font-medium text-gray-700">
                    Quantidade
                </label>
                <input
                    type="number"
                    name="limit"
                    min="1"
                    value="50"
                    required
                    class="border rounded px-3 py-2 w-28">
            </div>

            <!-- CEP -->
            <div>
                <label class="block text-sm font-medium text-gray-700">
                    CEP para todos
                </label>
                <textarea name="ceps" required class="border rounded px-3 py-2"
                    placeholder="Digite um CEP por linha"></textarea>
            </div>

            <button
                type="submit"
                class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded"
                onclick="return confirm('Importar registros?')">
                Importar
            </button>
        </form>
    </div>

    <!-- LEGENDA -->
    <div class="mb-3">
        <h2 class="text-lg font-semibold">
            participants2 <span class="text-gray-500">(não existentes em participants)</span>
        </h2>
        <p class="text-sm text-gray-600">
            Total exibidos: <strong><?= number_format($totalLista) ?></strong>
        </p>
    </div>

    <?php include 'components/participants_chart.php'; ?>
    <div class="bg-white rounded shadow overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-4 py-3 text-left text-sm font-semibold">CPF</th>
                    <th class="px-4 py-3 text-left text-sm font-semibold">Nome</th>
                    <th class="px-4 py-3 text-left text-sm font-semibold">Telefone</th>
                    <th class="px-4 py-3 text-left text-sm font-semibold">Criado em</th>
                </tr>
            </thead>
            <tbody class="divide-y">
                <?php if ($totalLista === 0): ?>
                    <tr>
                        <td colspan="4" class="px-4 py-6 text-center text-gray-500">
                            Nenhum registro encontrado
                        </td>
                    </tr>
                <?php else: ?>
                    <?php foreach ($rows as $row): ?>
                        <tr class="hover:bg-gray-50">
                            <td class="px-4 py-2 font-mono">
                                <?= htmlspecialchars($row['cpf'] ?? '') ?>
                            </td>
                            <td class="px-4 py-2">
                                <?= htmlspecialchars($row['full_name'] ?? $row['first_name'] ?? '') ?>
                            </td>
                            <td class="px-4 py-2">
                                <?= htmlspecialchars($row['phone'] ?? '') ?>
                            </td>
                            <td class="px-4 py-2 text-sm text-gray-500">
                                <?= $row['created_at'] ? date('d/m/Y H:i', strtotime($row['created_at'])) : '' ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

</body>

</html>