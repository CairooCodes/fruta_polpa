<div id="addEmailModal" tabindex="-1" aria-hidden="true" class="fixed z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
    <div class="relative w-full h-full max-w-4xl md:h-auto mt-40">
        <form action="./controllers/add_email.php" method="post" enctype="multipart/form-data" class="relative bg-white rounded-lg shadow">
            <div class="flex items-start justify-between p-4 border-b rounded-t">
                <h3 class="text-xl font-semibold text-gray-900">Adicionar E-mail</h3>
                <button type="button" data-modal-hide="addEmailModal" class="text-gray-400 hover:bg-gray-200 rounded-lg p-1.5">
                    <i class="bi bi-x-lg"></i>
                </button>
            </div>

            <div class="p-6 space-y-4">
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="text-sm font-medium text-gray-700">CPF</label>
                        <input type="text" name="cpf" class="w-full border rounded-lg p-2 text-sm">
                    </div>
                    <div>
                        <label class="text-sm font-medium text-gray-700">Nome</label>
                        <input type="text" name="nome" class="w-full border rounded-lg p-2 text-sm" required>
                    </div>
                    <div>
                        <label class="text-sm font-medium text-gray-700">E-mail</label>
                        <input type="email" name="email" class="w-full border rounded-lg p-2 text-sm" required>
                    </div>
                    <div>
                        <label class="text-sm font-medium text-gray-700">Celular</label>
                        <input type="text" name="celular" class="w-full border rounded-lg p-2 text-sm">
                    </div>
                    <div>
                        <label class="text-sm font-medium text-gray-700">Data de Nascimento</label>
                        <input type="date" name="data_nascimento" class="w-full border rounded-lg p-2 text-sm">
                    </div>
                    <div>
                        <label class="text-sm font-medium text-gray-700">Sexo</label>
                        <select name="sexo" class="w-full border rounded-lg p-2 text-sm">
                            <option value="Male">Masculino</option>
                            <option value="Female">Feminino</option>
                            <option value="Other">Outro</option>
                        </select>
                    </div>
                </div>

                <!-- Estado igual ao Assaí -->
                <div>
                    <label class="text-sm font-medium text-gray-700">Estado</label>
                    <select name="estado" id="estadoSelect" class="w-full border rounded-lg p-2 text-sm">
                        <option value="">Selecione</option>
                        <option value="Acre">Acre</option>
                        <option value="Alagoas">Alagoas</option>
                        <option value="Amapá">Amapá</option>
                        <option value="Amazonas">Amazonas</option>
                        <option value="Bahia">Bahia</option>
                        <option value="Ceará">Ceará</option>
                        <option value="Distrito Federal">Distrito Federal</option>
                        <option value="Espírito Santo">Espírito Santo</option>
                        <option value="Goiás">Goiás</option>
                        <option value="Maranhão">Maranhão</option>
                        <option value="Mato Grosso">Mato Grosso</option>
                        <option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
                        <option value="Minas Gerais">Minas Gerais</option>
                        <option value="Pará">Pará</option>
                        <option value="Paraíba">Paraíba</option>
                        <option value="Paraná">Paraná</option>
                        <option value="Pernambuco">Pernambuco</option>
                        <option value="Piauí">Piauí</option>
                        <option value="Rio de Janeiro">Rio de Janeiro</option>
                        <option value="Rio Grande do Norte">Rio Grande do Norte</option>
                        <option value="Rondônia">Rondônia</option>
                        <option value="Roraima">Roraima</option>
                        <option value="São Paulo">São Paulo</option>
                        <option value="Sergipe">Sergipe</option>
                        <option value="Tocantins">Tocantins</option>
                    </select>
                </div>

                <!-- <div>
                    <label class="text-sm font-medium text-gray-700">Cidade</label>
                    <input type="text" name="cidade" id="cidadeInput" class="w-full border rounded-lg p-2 text-sm" readonly>
                </div>

                <div>
                    <label class="text-sm font-medium text-gray-700">Unidade da Loja</label>
                    <input type="text" name="unidade_loja" id="unidadeInput" class="w-full border rounded-lg p-2 text-sm" readonly>
                </div> -->

                <!-- Campos fixos e desabilitados -->
                <div class="grid grid-cols-2 gap-4">
                    <input type="hidden" name="sentimento" value="5" class="w-full border rounded-lg p-2 text-sm bg-gray-100" readonly>

                    <div>
                        <label class="text-sm font-medium text-gray-700">O que deseja</label>
                        <input type="text" name="o_que_deseja" value="Solicitação" class="w-full border rounded-lg p-2 text-sm bg-gray-100" readonly>
                    </div>
                    <div>
                        <label class="text-sm font-medium text-gray-700">Motivo do contato</label>
                        <input type="text" name="motivo_contato" value="Disponibilidade de produto" class="w-full border rounded-lg p-2 text-sm bg-gray-100" readonly>
                    </div>
                    <div>
                        <label class="text-sm font-medium text-gray-700">Qual a solicitação</label>
                        <input type="text" name="qual_solicitacao" value="Voltar a vender algum produto" class="w-full border rounded-lg p-2 text-sm bg-gray-100" readonly>
                    </div>
                </div>

                <div>
                    <label class="text-sm font-medium text-gray-700">Mensagem</label>
                    <textarea name="mensagem" rows="4" class="w-full border rounded-lg p-2 text-sm">Participar Polpa Premiada Fruta Polpa</textarea>
                </div>

                <div class="flex items-center space-x-2">
                    <input type="checkbox" id="enviarAgora" name="enviar_agora" class="w-4 h-4 text-orange-700 border-gray-300 rounded focus:ring-orange-600">
                    <label for="enviarAgora" class="text-sm font-medium text-gray-700">Enviar e-mail agora</label>
                </div>

                <div id="dataEnvioContainer">
                    <label class="text-sm font-medium text-gray-700">Enviar em</label>
                    <input type="datetime-local" name="send_email" class="w-full border rounded-lg p-2 text-sm">
                </div>
            </div>

            <script>
                // Oculta data de envio se "enviar agora" estiver marcado
                document.getElementById('enviarAgora').addEventListener('change', function() {
                    const dataEnvioContainer = document.getElementById('dataEnvioContainer');
                    dataEnvioContainer.style.display = this.checked ? 'none' : 'block';
                });

                // Gera cidade e unidade aleatoriamente
                const cidades = ["São Paulo", "Campinas", "Ribeirão Preto", "Santos", "Sorocaba", "Jundiaí"];
                const unidades = ["Assaí Central", "Assaí Leste", "Assaí Sul", "Assaí Norte"];

                document.getElementById('estadoSelect').addEventListener('change', function() {
                    document.getElementById('cidadeInput').value = cidades[Math.floor(Math.random() * cidades.length)];
                    document.getElementById('unidadeInput').value = unidades[Math.floor(Math.random() * unidades.length)];
                });
            </script>

            <div class="flex justify-end p-4 border-t">
                <button type="submit" class="bg-orange-700 hover:bg-orange-800 text-white font-medium rounded-lg text-sm px-5 py-2.5">
                    Salvar
                </button>
            </div>
        </form>
    </div>
</div>