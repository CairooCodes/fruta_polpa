<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Inclua o link para o arquivo CSS do Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Estilo para o efeito da linha laranja */
        .nav-link {
            position: relative;
            text-decoration: none;
        }

        .nav-link:hover::after {
            content: "";
            position: absolute;
            left: 0;
            right: 0;
            bottom: -4px;
            height: 2px;
            background-color: orange;
        }
    </style>
    <title>Sua Página</title>
</head>
<body>
    <nav class="bg-orange-800 text-black py-4">
        <div class="container mx-auto flex justify-between items-center">
            <div class="text-2xl font-bold">Logo</div>
            <ul class="flex space-x-4">
                <li>
                    <a href="#" class="nav-link">Página Inicial</a>
                </li>
                <li>
                    <a href="#" class="nav-link">Sobre</a>
                </li>
                <li>
                    <a href="#" class="nav-link">Serviços</a>
                </li>
                <li>
                    <a href="#" class="nav-link">Contato</a>
                </li>
            </ul>
        </div>
    </nav>
</body>
</html>
