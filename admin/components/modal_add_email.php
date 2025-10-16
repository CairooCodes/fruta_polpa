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
                    <div>
                        <label class="text-sm font-medium text-gray-700">Sentimento</label>
                        <input type="number" name="sentimento" class="w-full border rounded-lg p-2 text-sm">
                    </div>
                    <div>
                        <label class="text-sm font-medium text-gray-700">Estado</label>
                        <input type="text" name="estado" class="w-full border rounded-lg p-2 text-sm">
                    </div>
                    <div>
                        <label class="text-sm font-medium text-gray-700">Cidade</label>
                        <input type="text" name="cidade" class="w-full border rounded-lg p-2 text-sm">
                    </div>
                    <div>
                        <label class="text-sm font-medium text-gray-700">Unidade da Loja</label>
                        <input type="text" name="unidade_loja" class="w-full border rounded-lg p-2 text-sm">
                    </div>
                </div>

                <div>
                    <label class="text-sm font-medium text-gray-700">O que deseja</label>
                    <input type="text" name="o_que_deseja" class="w-full border rounded-lg p-2 text-sm">
                </div>
                <div>
                    <label class="text-sm font-medium text-gray-700">Motivo do contato</label>
                    <input type="text" name="motivo_contato" class="w-full border rounded-lg p-2 text-sm">
                </div>
                <div>
                    <label class="text-sm font-medium text-gray-700">Qual a solicitação</label>
                    <input type="text" name="qual_solicitacao" class="w-full border rounded-lg p-2 text-sm">
                </div>
                <div>
                    <label class="text-sm font-medium text-gray-700">Mensagem</label>
                    <textarea name="mensagem" rows="4" class="w-full border rounded-lg p-2 text-sm"></textarea>
                </div>
                <div class="flex items-center space-x-2">
                    <input
                        type="checkbox"
                        id="enviarAgora"
                        name="enviar_agora"
                        class="w-4 h-4 text-orange-700 border-gray-300 rounded focus:ring-orange-600">
                    <label for="enviarAgora" class="text-sm font-medium text-gray-700">Enviar e-mail agora</label>
                </div>

                <div id="dataEnvioContainer">
                    <label class="text-sm font-medium text-gray-700">Enviar em</label>
                    <input type="datetime-local" name="send_email" class="w-full border rounded-lg p-2 text-sm">
                </div>
            </div>

            <script>
                document.getElementById('enviarAgora').addEventListener('change', function() {
                    const dataEnvioContainer = document.getElementById('dataEnvioContainer');
                    dataEnvioContainer.style.display = this.checked ? 'none' : 'block';
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