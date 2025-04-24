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
                <div class="lg:grid lg:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium">Nome *</label>
                        <input type="text" name="first_name" class="w-full border p-2 rounded-md" required>
                    </div>
                </div>

                <div class="lg:grid lg:grid-cols-3 gap-4">
                    <div>
                        <label class="block text-sm font-medium">WhatsApp *</label>
                        <div class="flex space-x-2 items-end">
                            <div>
                                <label class="block text-sm font-medium">DDD *</label>
                                <input type="text" id="ddd" name="ddd" maxlength="2" required
                                    class="w-16 border p-2 rounded-md text-center" pattern="\d{2}">
                            </div>
                            <div>
                                <label class="block text-sm font-medium invisible">9</label>
                                <input type="text" value="9" disabled
                                    class="w-8 border p-2 rounded-md text-center bg-gray-100 text-gray-500">
                            </div>
                            <div>
                                <label class="block text-sm font-medium">Telefone *</label>
                                <input type="text" id="phone_number" name="phone_number" maxlength="8" required
                                    class="w-32 border p-2 rounded-md text-center" pattern="\d{8}">
                            </div>
                        </div>
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
                        <label class="block text-sm font-medium">Cidade *</label>
                        <input type="text" name="city" class="w-full border p-2 rounded-md" required>
                    </div>
                    <div>
                        <label class="block text-sm font-medium">Bairro *</label>
                        <input type="text" name="neighborhood" class="w-full border p-2 rounded-md" required>
                    </div>
                </div>

                <label class="block text-sm font-medium">Crie uma senha *</label>
                <input type="password" name="password" class="w-full border p-2 rounded-md" required>

                <div class="space-y-2">
                    <label class="flex items-center">
                        <input type="checkbox" name="novidades" class="mr-2">
                        Sim, aceito receber novidades e ofertas personalizadas sobre os produtos da Fruta Polpa.
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
                        <option value="comunicacao">Vi uma comunicação da Fruta Polpa</option>
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
    <script>
        const phoneInput = document.getElementById('phone');

        phoneInput.addEventListener('input', function() {
            let input = this.value.replace(/\D/g, ''); // só números

            // Limita a 10 dígitos totais (2 do DDD + 8 do número)
            input = input.slice(0, 10);

            if (input.length >= 2) {
                const ddd = input.slice(0, 2); // força DDD com 2 dígitos
                const number = input.slice(2);

                let formatted = `(${ddd}) `;

                if (number.length > 0) {
                    formatted += `9${number.slice(0, 4)}`;
                    if (number.length > 4) {
                        formatted += `-${number.slice(4)}`;
                    }
                }

                this.value = formatted;
            } else {
                this.value = input;
            }
        });
    </script>

</body>

</html>