<div id="addReceitaModal" tabindex="-1" aria-hidden="true" class="fixed z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
  <div class="relative w-full h-full max-w-7xl md:h-auto">
    <!-- Modal content -->
    <form action="./controllers/add_receita.php" method="post" enctype="multipart/form-data" class="relative bg-white rounded-lg shadow">
      <!-- Modal header -->
      <div class="flex items-start justify-between p-4 border-b rounded-t">
        <h3 class="text-xl font-semibold text-gray-900">
          Adicionar Nutricionais
        </h3>
        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-hide="addReceitaModal">
          <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
          </svg>
        </button>
      </div>

      <div class="p-6 space-y-6">
        <div class="grid grid-cols-6 gap-6">
          <div class="col-span-6 sm:col-span-3">
            <label class="block mb-2 text-sm font-medium text-gray-900">Valor Energético</label>
            <input type="number" name="valor_energetico" id="valor_energetico" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-orange-600 focus:border-orange-600 block w-full p-2.5" placeholder="Nome da Receita" required="">
          </div>
          <div class="col-span-6 sm:col-span-3">
            <label class="block mb-2 text-sm font-medium text-gray-900">Carboidratos</label>
            <input type="number" name="carboidratos" id="carboidratos" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-orange-600 focus:border-orange-600 block w-full p-2.5" placeholder="Nome da Receita" required="">
          </div>
          <div class="col-span-6 sm:col-span-3">
            <label class="block mb-2 text-sm font-medium text-gray-900">Proteínas</label>
            <input type="number" name="proteinas" id="proteinas" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-orange-600 focus:border-orange-600 block w-full p-2.5" placeholder="Nome da Receita" required="">
          </div>
          <div class="col-span-6 sm:col-span-3">
            <label class="block mb-2 text-sm font-medium text-gray-900">Gorduras totais</label>
            <input type="number" name="gorduras_totais" id="gorduras_totais" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-orange-600 focus:border-orange-600 block w-full p-2.5" placeholder="Nome da Receita" required="">
          </div>
          <div class="col-span-6 sm:col-span-3">
            <label class="block mb-2 text-sm font-medium text-gray-900">Gorduras saturadas</label>
            <input type="number" name="gorduras_saturadas" id="gorduras_saturadas" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-orange-600 focus:border-orange-600 block w-full p-2.5" placeholder="Nome da Receita" required="">
          </div>
          <div class="col-span-6 sm:col-span-3">
            <label class="block mb-2 text-sm font-medium text-gray-900">Gorduras trans</label>
            <input type="number" name="gorduras_trans" id="gorduras_trans" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-orange-600 focus:border-orange-600 block w-full p-2.5" placeholder="Nome da Receita" required="">
          </div>
          <div class="col-span-6 sm:col-span-3">
            <label class="block mb-2 text-sm font-medium text-gray-900">Fibra alimentar	</label>
            <input type="number" name="fibra_alimentar" id="fibra_alimentar" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-orange-600 focus:border-orange-600 block w-full p-2.5" placeholder="Nome da Receita" required="">
          </div>
          <div class="col-span-6 sm:col-span-3">
            <label class="block mb-2 text-sm font-medium text-gray-900">Sódio</label>
            <input type="number" name="sodio" id="sodio" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-orange-600 focus:border-orange-600 block w-full p-2.5" placeholder="Nome da Receita" required="">
          </div>
          <div class="col-span-6 sm:col-span-3">
            <label class="block mb-2 text-sm font-medium text-gray-900">Cálcio</label>
            <input type="number" name="calcio" id="calcio" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-orange-600 focus:border-orange-600 block w-full p-2.5" placeholder="Nome da Receita" required="">
          </div>
          <div class="col-span-6 sm:col-span-3">
            <label class="block mb-2 text-sm font-medium text-gray-900">Ferro</label>
            <input type="number" name="ferro" id="ferro" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-orange-600 focus:border-orange-600 block w-full p-2.5" placeholder="Nome da Receita" required="">
          </div>
          <div class="col-span-6 sm:col-span-3">
            <label for="product_id" class="block text-sm font-medium text-gray-900">Polpas</label>
            <select class="uppercase shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-orange-600 focus:border-orange-600 block w-full p-2" name="product_id">
              <?php foreach ($polpas as $polpa) { ?>
                <option value="<?php echo $polpa['id']; ?>"><?php echo $polpa['name']; ?></option>
              <?php } ?>
            </select>
            <a href="polpas.php" class="text-sm font-medium text-gray-700"><i class="bi bi-plus-circle"></i> Adicionar Polpa</a>
          </div>
        </div>

        <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b">
          <button type="submit" class="text-white bg-orange-700 hover:bg-orange-800 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Cadastrar Receita</button>
        </div>
    </form>
  </div>
</div>