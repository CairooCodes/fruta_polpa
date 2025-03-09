<?php
require "config/helper.php";
require "config/url.class.php";

$URI = new URI();

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php include "components/heads.php"; ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="./assets/css/swiper.css">
</head>

<body>
    <?php include "./components/navbar.php" ?>
    <div class="mx-auto bg-gray-200 pt-10">
        <div class="max-w-7xl mx-auto p-6">
            <h2 class="text-3xl font-bold mb-4 font-sans text-center">PREENCHA OS CAMPOS ABAIXO PARA SE CADASTRAR</h2>
            <form action="./admin/controllers/register.php" method="POST" class="space-y-4">
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium">CPF *</label>
                        <input type="text" name="cpf" class="w-full border p-2 rounded-md" required>
                    </div>
                    <div>
                        <label class="block text-sm font-medium">Nome *</label>
                        <input type="text" name="first_name" class="w-full border p-2 rounded-md" required>
                    </div>
                    <div>
                        <label class="block text-sm font-medium">Sobrenome *</label>
                        <input type="text" name="last_name" class="w-full border p-2 rounded-md" required>
                    </div>
                    <div>
                        <label class="block text-sm font-medium">Data de Nascimento *</label>
                        <input type="date" name="birth_date" class="w-full border p-2 rounded-md" required>
                    </div>
                </div>
                <div class="grid grid-cols-3 gap-4">
                    <div>
                        <label class="block text-sm font-medium">Celular *</label>
                        <input type="text" name="phone" class="w-full border p-2 rounded-md" required>
                    </div>
                    <div>
                        <label class="block text-sm font-medium">E-mail *</label>
                        <input type="email" name="email" class="w-full border p-2 rounded-md" required>
                    </div>
                    <div>
                        <label class="block text-sm font-medium">CEP *</label>
                        <input type="text" name="cep" class="w-full border p-2 rounded-md" required>
                    </div>
                    <div>
                        <label class="block text-sm font-medium">Estado *</label>
                        <input type="text" name="state" class="w-full border p-2 rounded-md" required>
                    </div>
                    <div>
                        <label class="block text-sm font-medium">Cidade *</label>
                        <input type="text" name="city" class="w-full border p-2 rounded-md" required>
                    </div>
                    <div>
                        <label class="block text-sm font-medium">Bairro *</label>
                        <input type="text" name="neighborhood" class="w-full border p-2 rounded-md" required>
                    </div>
                    <div>
                        <label class="block text-sm font-medium">Endereço *</label>
                        <input type="text" name="address" class="w-full border p-2 rounded-md" required>
                    </div>
                    <div>
                        <label class="block text-sm font-medium">Número *</label>
                        <input type="text" name="number" class="w-full border p-2 rounded-md" required>
                    </div>
                    <div>
                        <label class="block text-sm font-medium">Complemento</label>
                        <input type="text" name="complement" class="w-full border p-2 rounded-md">
                    </div>
                </div>
                <label class="block text-sm font-medium">Crie uma senha *</label>
                <input type="password" name="password" class="w-full border p-2 rounded-md" required>

                <div class="space-y-2">
                    <label class="flex items-center">
                        <input type="checkbox" name="novidades" class="mr-2">
                        Sim, aceito receber novidades e ofertas personalizadas sobre os produtos da Bauducco®.
                    </label>
                    <label class="flex items-center">
                        <input type="checkbox" name="privacidade" required class="mr-2">
                        Estou ciente da Política de Privacidade.
                    </label>
                    <label class="flex items-center">
                        <input type="checkbox" name="termos" required class="mr-2">
                        Sim, estou ciente dos Termos de Uso e concordo com os Regulamentos da Promoção.
                    </label>
                </div>

                <div class="col-span-2">
                    <label class="block text-sm font-medium">Como você ficou sabendo do programa?</label>
                    <select name="origem" class="w-full border p-2 rounded-md">
                        <option value="supermercado">Vi uma comunicação no supermercado</option>
                        <option value="redes_sociais">Vi um post nas redes sociais</option>
                        <option value="banner_site">Vi um banner em um site</option>
                        <option value="indicacao">Uma pessoa me indicou</option>
                        <option value="busca_online">Sites de busca (Google, Bing, Yahoo)</option>
                        <option value="lojas_bauducco">Vi uma comunicação nas Lojas Bauducco</option>
                    </select>
                </div>

                <div class="col-span-2">
                    <button type="submit" class="w-full bg-orange-600 text-white py-2 rounded-md hover:bg-blue-600">
                        Cadastrar
                    </button>
                </div>
            </form>
        </div>
    </div>
    </div>
    </div>

    <?php include "./components/footer.php" ?>
    <?php include "./components/btn-whatsapp.php" ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
    <script src="assets/js/tw.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script>
        // JavaScript para abrir o WhatsApp ao clicar no botão
        document.getElementById('openWhatsApp').addEventListener('click', function() {
            window.open('https://api.whatsapp.com/send?phone=5586994293833&text=Olá%20Fruta%20Polpa-site', '_blank');
        });
    </script>
</body>

</html>