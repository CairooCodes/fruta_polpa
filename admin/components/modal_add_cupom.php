<div id="addCupomModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 items-center justify-center hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
  <div class="relative w-full h-full max-w-4xl md:h-auto">
    <form action="./controllers/add_cupom.php" method="post" enctype="multipart/form-data" class="relative bg-white rounded-lg shadow">
      <!-- Modal header -->
      <div class="flex items-start justify-between p-4 border-b rounded-t">
        <h3 class="text-xl font-semibold text-gray-900">
          Adicionar Cupom
        </h3>
        <button type="button" class="text-gray-400 hover:bg-gray-200 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-hide="addCupomModal">
          <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
          </svg>
        </button>
      </div>

      <!-- Modal body -->
      <div class="p-6 space-y-6">
        <div class="grid grid-cols-6 gap-6">
          <input type="hidden" name="participant_id" value="<?php echo $participant_id; ?>">

          <div class="col-span-6 sm:col-span-3">
            <label class="block mb-2 text-sm font-medium text-gray-900">Quantidade de Polpas</label>
            <input type="number" name="quantity" min="1" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-orange-600 focus:border-orange-600 block w-full p-2.5" required>
          </div>

          <div class="col-span-6 sm:col-span-3">
            <label class="block mb-2 text-sm font-medium text-gray-900">Imagem</label>
            <input type="file" name="img" accept="image/*" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50">
          </div>
        </div>
      </div>

      <!-- Modal footer -->
      <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b">
        <button type="submit" class="text-white bg-orange-700 hover:bg-orange-800 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
          Cadastrar Cupom
        </button>
      </div>
    </form>
  </div>
</div>
