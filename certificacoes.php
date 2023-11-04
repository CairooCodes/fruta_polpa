<?php
require_once "db_config.php";
require "config/helper.php";
require "config/url.class.php";
require "./functions/get.php";

$receitas = getAllReceitas();
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
    <section class="mx-auto max-w-7xl px-2 pt-10 pb-10">
        <div>
            <h1 class="text-orange-600 text-center text-3xl font-extrabold leading-9 tracking-tight sm:text-4xl sm:leading-10 md:text-left md:text-3xl md:leading-14">
                Certificações
            </h1>
            <p class="mt-6 text-justify">
                "Conquistamos selos e certificações de renome por meio de nossas marcas, resultado do nosso contínuo compromisso com a excelência na produção e entrega de produtos de alta qualidade aos nossos consumidores. Nosso empenho em garantir padrões rigorosos de qualidade abrange desde a seleção cuidadosa de matérias-primas até os processos de fabricação e distribuição, assegurando a satisfação e confiança de nossos clientes. Essas conquistas refletem nosso firme compromisso em superar as expectativas do mercado e manter um alto nível de integridade em tudo o que fazemos."
            </p>
        </div>
        <div class="text-center mt-16">
            <div class="lg:grid grid-rows-3 gap-8">
                <div class="mb-10">
                    <h2 class="text-orange-600 text-center font-bold text-xl">
                        Certificação FSSC 22000 pelo órgão DNV
                    </h2>
                    <div class="px-5 py-10 lg:grid grid-cols-2 gap-2">
                        <div class="flex justify-center">
                            <img src="./assets/img/certificado8.png" alt="" class="lg:w-2/4 md:w-full">
                        </div>
                        <div class="flex justify-center">
                            <img src="./assets/img/certificado7.jpg" alt="" class="lg:w-2/4 md:w-full">
                        </div>
                    </div>
                    <button class="saiba-mais hover:bg-color1 text-sm text-gray-800 font-bold py-2 px-4 rounded-full border-2 border-color1">Saiba Mais</button>
                    <div class="cert-description text-center m-2">
                        Somos Certificados FSSC 22000 pelo órgão DNV. Sabe o que isso representa?<br>
                        Isso quer dizer que somos uma empresa de alimentos com um sistema de segurança de alimentos internacional. A certificação FSSC 22000 garante um sistema de gestão robusto que controla os perigos, minimizando os riscos e garantindo uma produção de alimentos segura.
                        Para você nosso consumidor, trazemos toda a confiabilidade na entrega da segurança dos alimentos, contribuindo para a confiança e, eventualmente, a sua lealdade consumindo e indicando os nossos produtos.
                        Podemos nos orgulhar de estarmos no mesmo nível de qualidade e segurança das maiores empresas do mundo, podendo fornecer para os maiores varejistas do Brasil, além da Europa e dos EUA. Aqui você encontra:
                        <br>• Mais compromisso para identificar, avaliar e controlar os riscos à segurança de alimentos que podem ocorrer, a fim de evitar danos ao consumidor direta ou indiretamente;
                        <br>• Foco em construir e operar um sistema de gestão capaz de atender aos requisitos de qualidade e segurança de alimentos dentro das conformidades legais;
                        <br>• Fornecimento de uma ferramenta para a melhoria do nosso desempenho de segurança, através do monitoramento e medição de forma eficaz;
                        <br>• Além de desenvolver uma boa cultura de segurança de alimentos que, por sua vez, melhore a confiança dos nossos clientes, auxiliando na obtenção de vantagens competitivas.
                        <br>
                        Somos gratos a todos os envolvidos nesta conquista. Muito obrigado por confiarem tanto no nosso trabalho!
                    </div>
                </div>
                <div class="mb-10">
                    <h2 class="text-orange-600 text-center font-bold text-xl">
                        Certificações Orgânicas
                    </h2>
                    <div class="px-5 py-10 lg:grid grid-cols-3 gap-2">
                        <div class="flex justify-center">
                            <img src="./assets/img/certificado4.png" alt="" class="lg:w-11/12 md:w-full">
                        </div>
                        <div class="flex justify-center">
                            <img src="./assets/img/certificado5.png" alt="" class="lg:w-3/4 md:w-full">
                        </div>
                        <div class="flex justify-center">
                            <img src="./assets/img/certificado6.png" alt="" class="lg:w-3/4 md:w-full">
                        </div>
                    </div>
                    <button class="saiba-mais hover:bg-color1 text-sm text-gray-800 font-bold py-2 px-4 rounded-full border-2 border-color1">Saiba Mais</button>
                    <div class="cert-description text-center m-2">
                        Os produtos orgânicos certificados, que possuem selo de conformidade orgânica, são aqueles que durante toda a sua cadeia de produção seguiram as normas de produção orgânica, especificas para cada país. Isso quer dizer que em todos os processos, desde o cultivo, processamento, manipulação, embalagem e chegada até o consumidor final, os produtos seguiram uma série de regras e parâmetros que permitissem a sua integridade orgânica. Integridade essa que é garantida por um organismo de certificação responsável por avaliar todo o processo e verificar se está de acordo com a legislação, concedendo o certificado correspondente e permitindo assim a utilização ou não do selo.
                        <br>
                        Possuimos os selos da SisOrg (1) que atende o mercado brasileiro, USDA Organic (2) que atende o mercado europeu e Organic leaf (3) que atende o mercado estadunidense.
                    </div>
                </div>
                <div class="mb-10">
                    <h2 class="text-orange-600 text-center font-bold text-xl">
                        Certificação Kosher
                    </h2>
                    <div class="flex justify-center px-5 py-10">
                        <img src="./assets/img/certificado3.jpg" alt="" class="lg:w-1/4 h-1/4 md:w-full">
                    </div>
                    <button class="saiba-mais hover:bg-color1 text-sm text-gray-800 font-bold py-2 px-4 rounded-full border-2 border-color1">Saiba Mais</button>
                    <div class="cert-description text-center m-2">
                        É uma certificação mundialmente reconhecida como o mais alto padrão de qualidade para alimentos apropriados ao consumo segundo requisitos da lei judaica. A certificação garante a confiança a quem segue os preceitos judaicos ortodoxos de que o produto a ser consumido está de acordo com suas restrições alimentares, obedecendo a normas específicas tendo como base os fundamentos religiosos judaicos. Essa garantia é evidenciada através de um selo ou símbolo presente na embalagem dos produtos.
                        <br>
                        O certificado tem validade de um ano e nesse mesmo período são realizadas novas auditorias com o intuito de garantir que a empresa permanece seguindo os padrões exigidos pela alimentação kosher, possibilitando que a empresa renove a certificação
                        por mais um ano.
                    </div>
                </div>
                <div class="mb-10">
                    <h2 class="text-orange-600 text-center font-bold text-xl">
                        Certificação Halal
                    </h2>
                    <div class="flex justify-center px-5 py-10">
                        <img src="./assets/img/certificado2.jpeg" alt="" class="lg:w-1/4 h-1/4 md:w-full">
                    </div>
                    <button class="saiba-mais hover:bg-color1 text-sm text-gray-800 font-bold py-2 px-4 rounded-full border-2 border-color1">Saiba Mais</button>
                    <div class="cert-description text-center m-2">
                        É uma maneira de garantir que os produtos seguem as diretrizes da alimentação islâmica. Essas diretrizes estão relacionadas desde a maneira como o alimento é produzido até as procedências da matéria prima e distribuição. A certificação halal também determina quais alimentos podem ou não ser consumidos pelos mulçumanos, levando em consideração aspectos de higiene e armazenamento dos alimentos, de acordo com as normas sanitárias.
                        <br>
                        Com o objetivo de garantir o cumprimento. desses princípios, é feito uma inspeção e acompanhamento rígido e detalhado da produção de alimentos em empresas que pretendem obter o certificado. O processo de certificação conta com análise documental da empresa (como fichas técnicas, homologação de fornecedores e outras especificações) e segue para outras etapas de auditoria, ajustes e, por fim, caso esteja tudo dentro dos princípios da jurisprudência islâmica, a empresa é certificada.
                    </div>
                </div>
                <div class="mb-10">
                    <h2 class="text-orange-600 text-center font-bold text-xl">
                        Selo Eureciclo
                    </h2>
                    <div class="flex justify-center px-5 py-10">
                        <img src="./assets/img/certificado1.png" alt="" class="lg:w-2/4 h-2/4 md:w-full">
                    </div>
                    <button class="saiba-mais hover:bg-color1 text-sm text-gray-800 font-bold py-2 px-4 rounded-full border-2 border-color1">Saiba Mais</button>
                    <div class="cert-description text-center m-2">
                        O selo eureciclo garante que empresas fabricantes de bens de consumo contribuam para a reciclagem das embalagens colocadas no mercado. Basicamente, a presença do selo eureciclo em uma embalagem de produto é a garantia que a empresa responsável é comprometida com o engajamento sustentável, seja através do apoio financeiro a cooperativas de reciclagem ou a priorização da conscientização ambiental de todos os envolvidos em nosso processo produtivo.
                        <br>
                        O selo eureciclo contribui para que impactos negativos no meio ambiente sejam consideravelmente reduzidos, tendo como base uma logística sustentável e importantes ferramentas e para a valorização da educação ambiental. É como um canal de comunicação extremamente importante entre a empresa e o consumidor que garante a informação de que também levamos em consideração a preocupação com o meio ambiente e seus recursos naturais cada vez mais escassos.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include "./components/footer.php" ?>
    <?php include "./components/modal_form_whatsapp.php" ?>
    <script src="./assets/js/script.js"></script>
    <script src="./assets/js/lz.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
    <script src="assets/js/dark_mode.js"></script>
    <script src="assets/js/tw.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script>
        const saibaMaisButtons = document.querySelectorAll('.saiba-mais');

        saibaMaisButtons.forEach(button => {
            button.addEventListener('click', () => {
                const certDescription = button.nextElementSibling;
                if (certDescription.classList.contains('show-description')) {
                    certDescription.classList.remove('show-description');
                } else {
                    certDescription.classList.add('show-description');
                }
            });
        });
    </script>
    <script>
        // JavaScript para abrir o WhatsApp ao clicar no botão
        document.getElementById('openWhatsApp').addEventListener('click', function() {
            window.open('https://api.whatsapp.com/send?phone=5586994293833&text=Olá%20Fruta%20Polpa-site', '_blank');
        });
    </script>
</body>

</html>