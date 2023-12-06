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
    <section class="mx-auto max-w-7xl px-2 py-10 lg:px-16">
        <div class="px-4 py-3">
            <h1 class="lg:text-4xl text-3xl text-center lg:text-start">
                <span style="letter-spacing: 0.5px" class="font-semibold text-gray-800">
                    Certificações
                </span>
            </h1>
            <p class="mt-6 text-justify">
                Nosso empenho em garantir padrões rigorosos de qualidade abrange desde a seleção cuidadosa de matérias-primas até os processos de fabricação e distribuição, assegurando a satisfação e confiança de nossos clientes. Essas conquistas refletem nosso firme compromisso em superar as expectativas do mercado e manter um alto nível de integridade em tudo o que fazemos.
            </p>
        </div>
        <div class="text-justify lg:pt-6 mt-5">
            <div class="">
                <div class="fade-in-up">
                    <div class="px-4 py-3">
                        <h1 class="lg:text-3xl text-3xl text-center">
                            <span style="letter-spacing: 0.5px" class="font-semibold text-gray-800">
                                Smart Energia
                            </span>
                        </h1>
                        <p class="lg:text-base lg:text-base text-xl py-6 lg:py-8">
                            Os resíduos orgânicos gerados dos despolpamento das frutas (cascas e sementes de frutas) no processo de produção, são acumulados em caixas dispostas em pallets e enviadas para sítios onde será utilizado para a alimentação de animais e transformado em adubo para as plantas pelo processo de compostagem.
                        </p>
                        <div class="flex justify-center px-5 py-10">
                            <img src="./assets/img/smart-energia.png" alt="" class="lg:w-1/4 h-2/4 md:w-full">
                        </div>
                    </div>
                    <div class="fade-in-up border-t border-gray-300 py-4">
                        <div class="lg:grid grid-cols-3 gap-8 p-5 text-center px-2">
                            <div>
                                <div class="flex justify-center p-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" fill="currentColor" class="bi bi-hand-thumbs-up" viewBox="0 0 16 16">
                                        <path d="M8.864.046C7.908-.193 7.02.53 6.956 1.466c-.072 1.051-.23 2.016-.428 2.59-.125.36-.479 1.013-1.04 1.639-.557.623-1.282 1.178-2.131 1.41C2.685 7.288 2 7.87 2 8.72v4.001c0 .845.682 1.464 1.448 1.545 1.07.114 1.564.415 2.068.723l.048.03c.272.165.578.348.97.484.397.136.861.217 1.466.217h3.5c.937 0 1.599-.477 1.934-1.064a1.86 1.86 0 0 0 .254-.912c0-.152-.023-.312-.077-.464.201-.263.38-.578.488-.901.11-.33.172-.762.004-1.149.069-.13.12-.269.159-.403.077-.27.113-.568.113-.857 0-.288-.036-.585-.113-.856a2.144 2.144 0 0 0-.138-.362 1.9 1.9 0 0 0 .234-1.734c-.206-.592-.682-1.1-1.2-1.272-.847-.282-1.803-.276-2.516-.211a9.84 9.84 0 0 0-.443.05 9.365 9.365 0 0 0-.062-4.509A1.38 1.38 0 0 0 9.125.111zM11.5 14.721H8c-.51 0-.863-.069-1.14-.164-.281-.097-.506-.228-.776-.393l-.04-.024c-.555-.339-1.198-.731-2.49-.868-.333-.036-.554-.29-.554-.55V8.72c0-.254.226-.543.62-.65 1.095-.3 1.977-.996 2.614-1.708.635-.71 1.064-1.475 1.238-1.978.243-.7.407-1.768.482-2.85.025-.362.36-.594.667-.518l.262.066c.16.04.258.143.288.255a8.34 8.34 0 0 1-.145 4.725.5.5 0 0 0 .595.644l.003-.001.014-.003.058-.014a8.908 8.908 0 0 1 1.036-.157c.663-.06 1.457-.054 2.11.164.175.058.45.3.57.65.107.308.087.67-.266 1.022l-.353.353.353.354c.043.043.105.141.154.315.048.167.075.37.075.581 0 .212-.027.414-.075.582-.05.174-.111.272-.154.315l-.353.353.353.354c.047.047.109.177.005.488a2.224 2.224 0 0 1-.505.805l-.353.353.353.354c.006.005.041.05.041.17a.866.866 0 0 1-.121.416c-.165.288-.503.56-1.066.56z" />
                                    </svg>
                                </div>
                                <h1 class="text-xl font-bold pb-2">Sustentabilidade</h1>
                                <p class="text-justify p-5">
                                A energia solar é sustentável porque sua matéria prima é originada da natureza, ou seja, a captação de energia elétrica é feita pela luz do sol. Desta forma, os recursos naturais podem ser usados de forma abundante e renovável, não afetando o meio ambiente.
                                </p>
                            </div>
                            <div>
                                <div class="flex justify-center p-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" fill="currentColor" class="bi bi-lightbulb" viewBox="0 0 16 16">
                                        <path d="M2 6a6 6 0 1 1 10.174 4.31c-.203.196-.359.4-.453.619l-.762 1.769A.5.5 0 0 1 10.5 13a.5.5 0 0 1 0 1 .5.5 0 0 1 0 1l-.224.447a1 1 0 0 1-.894.553H6.618a1 1 0 0 1-.894-.553L5.5 15a.5.5 0 0 1 0-1 .5.5 0 0 1 0-1 .5.5 0 0 1-.46-.302l-.761-1.77a1.964 1.964 0 0 0-.453-.618A5.984 5.984 0 0 1 2 6m6-5a5 5 0 0 0-3.479 8.592c.263.254.514.564.676.941L5.83 12h4.342l.632-1.467c.162-.377.413-.687.676-.941A5 5 0 0 0 8 1" />
                                    </svg>
                                </div>
                                <h1 class="text-xl font-bold pb-2">Energia Renovável e Limpa</h1>
                                <p class="text-justify p-5">
                                A produção de energia elétrica através de um recurso renovável, a luz solar. Por isso, não emite gases poluentes como: óxidos de nitrogênio (NOx), dióxido de carbono (CO2) e dióxido de enxofre (SO2), que são prejudiciais à saúde e ao meio ambiente.
                                </p>
                            </div>
                            <div>
                                <div class="flex justify-center p-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" fill="currentColor" class="bi bi-recycle" viewBox="0 0 16 16">
                                        <path d="M9.302 1.256a1.5 1.5 0 0 0-2.604 0l-1.704 2.98a.5.5 0 0 0 .869.497l1.703-2.981a.5.5 0 0 1 .868 0l2.54 4.444-1.256-.337a.5.5 0 1 0-.26.966l2.415.647a.5.5 0 0 0 .613-.353l.647-2.415a.5.5 0 1 0-.966-.259l-.333 1.242-2.532-4.431zM2.973 7.773l-1.255.337a.5.5 0 1 1-.26-.966l2.416-.647a.5.5 0 0 1 .612.353l.647 2.415a.5.5 0 0 1-.966.259l-.333-1.242-2.545 4.454a.5.5 0 0 0 .434.748H5a.5.5 0 0 1 0 1H1.723A1.5 1.5 0 0 1 .421 12.24l2.552-4.467zm10.89 1.463a.5.5 0 1 0-.868.496l1.716 3.004a.5.5 0 0 1-.434.748h-5.57l.647-.646a.5.5 0 1 0-.708-.707l-1.5 1.5a.498.498 0 0 0 0 .707l1.5 1.5a.5.5 0 1 0 .708-.707l-.647-.647h5.57a1.5 1.5 0 0 0 1.302-2.244l-1.716-3.004z" />
                                    </svg>
                                </div>
                                <h1 class="text-xl font-bold pb-2">Impactos ambientais e benefícios da energia solar solar</h1>
                                <p class="text-justify p-5">
                                O impacto ambiental da energia solar é totalmente benéfico à natureza, já que ele fornece energia de um recurso natural (sol) para a conversão em eletricidade. 
                                </p>
                            </div>
                        </div>

                        <div class="px-4 py-3 lg:pt-16">
                            <h1 class="lg:text-3xl text-3xl text-center">
                                <span style="letter-spacing: 0.5px" class="font-semibold text-gray-800">
                                    Energia Renovável
                                </span>
                            </h1>
                            <p class="lg:text-base lg:text-base text-xl py-6 lg:py-8">
                                Os resíduos orgânicos gerados dos despolpamento das frutas (cascas e sementes de frutas) no processo de produção, são acumulados em caixas dispostas em pallets e enviadas para sítios onde será utilizado para a alimentação de animais e transformado em adubo para as plantas pelo processo de compostagem.
                            </p>
                            <p class="lg:text-base lg:text-base text-xl">
                                A Fruta Polpa utiliza energia de fonte renováveis como (Eólica, Biomassa, PCH, Solar) de baixo impacto em suas instalações. Através do consumo de energia renovável e ambientalmente sustentável.
                            </p>
                            <div class="flex justify-center px-5 py-10">
                                <img src="./assets/img/Selo-Energia-Renovavel.png" alt="" class="lg:w-1/4 h-2/4 md:w-full">
                            </div>
                        </div>
                        <div class="fade-in-up border-t border-gray-300 py-2">
                            <!-- <button style="background: rgb(252,114,0); background: linear-gradient(15deg, rgba(252,114,0,1) 25%, rgba(255,198,0,1) 100%);" class="saiba-mais text-white border-2 border-white bg-white rounded-full font-semibold text-lg px-5 py-2 text-center hover:bg-orange-600 hover:text-black">Saiba Mais</button> -->
                            <!-- <div class="cert-description"> -->
                            <div class="px-4">
                                <h2 class="py-6 text-gray-500 lg:text-xl text-base lg:text-start text-center">Vantagens da energia renovável</h2>
                                <h1 class="lg:text-start text-center">
                                    <p class="lg:text-4xl text-2xl font-semibold text-green-700">Natureza e inovação para o </p>
                                    <pl class="lg:text-4xl text-2xl font-semibold text-green-700"> desenvolvimento sustentável</p>
                                </h1>
                                <div class="lg:flex lg:justify-center">
                                    <p class="lg:py-12 py-5 lg:text-start text-center lg:text-xl text-base">Produzir energia renovável é bom para o meio ambiente, para a economia e para as pessoas</p>
                                </div>
                            </div>
                            <div class="lg:grid grid-cols-3 gap-8 p-5 text-center px-2">
                                <div>
                                    <div class="flex justify-center p-5">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" fill="currentColor" class="bi bi-arrow-repeat" viewBox="0 0 16 16">
                                            <path d="M11.534 7h3.932a.25.25 0 0 1 .192.41l-1.966 2.36a.25.25 0 0 1-.384 0l-1.966-2.36a.25.25 0 0 1 .192-.41zm-11 2h3.932a.25.25 0 0 0 .192-.41L2.692 6.23a.25.25 0 0 0-.384 0L.342 8.59A.25.25 0 0 0 .534 9z" />
                                            <path fill-rule="evenodd" d="M8 3c-1.552 0-2.94.707-3.857 1.818a.5.5 0 1 1-.771-.636A6.002 6.002 0 0 1 13.917 7H12.9A5.002 5.002 0 0 0 8 3M3.1 9a5.002 5.002 0 0 0 8.757 2.182.5.5 0 1 1 .771.636A6.002 6.002 0 0 1 2.083 9z" />
                                        </svg>
                                    </div>
                                    <h1 class="text-xl font-bold pb-2">Inesgotável</h1>
                                    <p class="text-justify p-5">
                                        As fontes renováveis estão sempre disponíveis na natureza
                                    </p>
                                </div>
                                <div>
                                    <div class="flex justify-center p-5">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" fill="currentColor" class="bi bi-feather" viewBox="0 0 16 16">
                                            <path d="M15.807.531c-.174-.177-.41-.289-.64-.363a3.765 3.765 0 0 0-.833-.15c-.62-.049-1.394 0-2.252.175C10.365.545 8.264 1.415 6.315 3.1c-1.95 1.686-3.168 3.724-3.758 5.423-.294.847-.44 1.634-.429 2.268.005.316.05.62.154.88.017.04.035.082.056.122A68.362 68.362 0 0 0 .08 15.198a.528.528 0 0 0 .157.72.504.504 0 0 0 .705-.16 67.606 67.606 0 0 1 2.158-3.26c.285.141.616.195.958.182.513-.02 1.098-.188 1.723-.49 1.25-.605 2.744-1.787 4.303-3.642l1.518-1.55a.528.528 0 0 0 0-.739l-.729-.744 1.311.209a.504.504 0 0 0 .443-.15c.222-.23.444-.46.663-.684.663-.68 1.292-1.325 1.763-1.892.314-.378.585-.752.754-1.107.163-.345.278-.773.112-1.188a.524.524 0 0 0-.112-.172ZM3.733 11.62C5.385 9.374 7.24 7.215 9.309 5.394l1.21 1.234-1.171 1.196a.526.526 0 0 0-.027.03c-1.5 1.789-2.891 2.867-3.977 3.393-.544.263-.99.378-1.324.39a1.282 1.282 0 0 1-.287-.018Zm6.769-7.22c1.31-1.028 2.7-1.914 4.172-2.6a6.85 6.85 0 0 1-.4.523c-.442.533-1.028 1.134-1.681 1.804l-.51.524-1.581-.25Zm3.346-3.357C9.594 3.147 6.045 6.8 3.149 10.678c.007-.464.121-1.086.37-1.806.533-1.535 1.65-3.415 3.455-4.976 1.807-1.561 3.746-2.36 5.31-2.68a7.97 7.97 0 0 1 1.564-.173Z" />
                                        </svg>
                                    </div>
                                    <h1 class="text-xl font-bold pb-2">Respeitoso com o meio ambiente</h1>
                                    <p class="text-justify p-5">
                                        Produzir energia a partir de fontes renováveis reduz drasticamente as emissões de CO2 na atmosfera
                                    </p>
                                </div>
                                <div>
                                    <div class="flex justify-center p-5">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" fill="currentColor" class="bi bi-globe-americas" viewBox="0 0 16 16">
                                            <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0M2.04 4.326c.325 1.329 2.532 2.54 3.717 3.19.48.263.793.434.743.484-.08.08-.162.158-.242.234-.416.396-.787.749-.758 1.266.035.634.618.824 1.214 1.017.577.188 1.168.38 1.286.983.082.417-.075.988-.22 1.52-.215.782-.406 1.48.22 1.48 1.5-.5 3.798-3.186 4-5 .138-1.243-2-2-3.5-2.5-.478-.16-.755.081-.99.284-.172.15-.322.279-.51.216-.445-.148-2.5-2-1.5-2.5.78-.39.952-.171 1.227.182.078.099.163.208.273.318.609.304.662-.132.723-.633.039-.322.081-.671.277-.867.434-.434 1.265-.791 2.028-1.12.712-.306 1.365-.587 1.579-.88A7 7 0 1 1 2.04 4.327Z" />
                                        </svg>
                                    </div>
                                    <h1 class="text-xl font-bold pb-2">Versátil</h1>
                                    <p class="text-justify p-5">
                                        Graças às diferentes tecnologias, é possível produzir energia renovável em praticamente todos os cantos do mundo
                                    </p>
                                </div>
                                <div>
                                    <div class="flex justify-center p-5">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" fill="currentColor" class="bi bi-graph-up-arrow" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M0 0h1v15h15v1H0zm10 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V4.9l-3.613 4.417a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61L13.445 4H10.5a.5.5 0 0 1-.5-.5" />
                                        </svg>
                                    </div>
                                    <h1 class="text-xl font-bold pb-2">Em evolução contínua</h1>
                                    <p class="text-justify p-5">
                                        A inovação tecnológica torna a produção de energia renovável cada vez mais eficiente
                                    </p>
                                </div>
                                <div>
                                    <div class="flex justify-center p-5">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" fill="currentColor" class="bi bi-piggy-bank" viewBox="0 0 16 16">
                                            <path d="M5 6.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0m1.138-1.496A6.613 6.613 0 0 1 7.964 4.5c.666 0 1.303.097 1.893.273a.5.5 0 0 0 .286-.958A7.602 7.602 0 0 0 7.964 3.5c-.734 0-1.441.103-2.102.292a.5.5 0 1 0 .276.962" />
                                            <path fill-rule="evenodd" d="M7.964 1.527c-2.977 0-5.571 1.704-6.32 4.125h-.55A1 1 0 0 0 .11 6.824l.254 1.46a1.5 1.5 0 0 0 1.478 1.243h.263c.3.513.688.978 1.145 1.382l-.729 2.477a.5.5 0 0 0 .48.641h2a.5.5 0 0 0 .471-.332l.482-1.351c.635.173 1.31.267 2.011.267.707 0 1.388-.095 2.028-.272l.543 1.372a.5.5 0 0 0 .465.316h2a.5.5 0 0 0 .478-.645l-.761-2.506C13.81 9.895 14.5 8.559 14.5 7.069c0-.145-.007-.29-.02-.431.261-.11.508-.266.705-.444.315.306.815.306.815-.417 0 .223-.5.223-.461-.026a.95.95 0 0 0 .09-.255.7.7 0 0 0-.202-.645.58.58 0 0 0-.707-.098.735.735 0 0 0-.375.562c-.024.243.082.48.32.654a2.112 2.112 0 0 1-.259.153c-.534-2.664-3.284-4.595-6.442-4.595zM2.516 6.26c.455-2.066 2.667-3.733 5.448-3.733 3.146 0 5.536 2.114 5.536 4.542 0 1.254-.624 2.41-1.67 3.248a.5.5 0 0 0-.165.535l.66 2.175h-.985l-.59-1.487a.5.5 0 0 0-.629-.288c-.661.23-1.39.359-2.157.359a6.558 6.558 0 0 1-2.157-.359.5.5 0 0 0-.635.304l-.525 1.471h-.979l.633-2.15a.5.5 0 0 0-.17-.534 4.649 4.649 0 0 1-1.284-1.541.5.5 0 0 0-.446-.275h-.56a.5.5 0 0 1-.492-.414l-.254-1.46h.933a.5.5 0 0 0 .488-.393zm12.621-.857a.565.565 0 0 1-.098.21.704.704 0 0 1-.044-.025c-.146-.09-.157-.175-.152-.223a.236.236 0 0 1 .117-.173c.049-.027.08-.021.113.012a.202.202 0 0 1 .064.199z" />
                                        </svg>
                                    </div>
                                    <h1 class="text-xl font-bold pb-2">Econômica</h1>
                                    <p class="text-justify p-5">
                                        Produzir energia renovável em larga escala é cada vez mais conveniente
                                    </p>
                                </div>
                                <div>
                                    <div class="flex justify-center p-5">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                                            <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5" />
                                        </svg>
                                    </div>
                                    <h1 class="text-xl font-bold pb-2">Novas vagas de empregos</h1>
                                    <p class="text-justify p-5">
                                        A Economia Verde exige e continuará exigindo no futuro um número crescente de profissionais capacitados
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include "./components/footer.php" ?>
    <?php include "./components/btn-whatsapp.php" ?>
    <script src="assets/js/tw.js"></script>
    <script src="./assets/js/lz.js"></script>
    <script src="./assets/js/main.js"></script>
    <script src="./assets/js/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
    <script src="assets/js/dark_mode.js"></script>
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