<div id="addServicoModal" tabindex="-1" aria-hidden="true" class="fixed z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
  <div class="relative w-full h-full max-w-7xl md:h-auto" style="padding-top:550px!important">
    <!-- Modal content -->
    <form action="./controllers/add_servico.php" method="post" enctype="multipart/form-data" class="relative bg-white rounded-lg shadow">
      <!-- Modal header -->
      <div class="flex items-start justify-between p-4 border-b rounded-t">
        <h3 class="text-xl font-semibold text-gray-900">
          Adicionar Serviço
        </h3>
        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-hide="addServicoModal">
          <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
          </svg>
        </button>
      </div>

      <div class="p-6 space-y-6">
        <div class="grid grid-cols-6 gap-6">
          <div class="col-span-6 sm:col-span-3">
            <label class="block mb-2 hidden text-sm font-medium text-gray-900">Nome</label>
            <input type="text" name="name" id="name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5" placeholder="Nome do Serviço" required="">
          </div>
          <div class="col-span-6 sm:col-span-3">
            <label class="block mb-2 text-sm font-medium text-gray-900">Imagem de Capa</label>
            <input type="file" id="img" name="img" accept="image/*">
          </div>
        </div>
        <div class="grid grid-cols-6 gap-6">
          <div class="col-span-6 sm:col-span-3">
            <label class="block text-sm font-medium text-gray-900">Link</label>
            <input type="text" name="link" id="link" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full" placeholder="Link de redirecionamento" required="">
          </div>
          <div class="col-span-6 sm:col-span-3">
            <label class="block text-sm font-medium text-gray-900">Icone</label>
            <input type="text" name="icon" id="icon" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full" placeholder="Icone da Home" required="">
          </div>
        </div>
        <label class="block text-sm font-medium text-gray-900">Descrição da Home</label>
        <textarea type="text" name="description" id="description" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5" placeholder="Texto do serviço na home" required=""></textarea>

        <label class="block text-sm font-medium text-gray-900">Texto 1 - Página</label>
        <textarea name="page_text1" id="description2"></textarea>

        <label class="block text-sm font-medium text-gray-900">Texto 2 - Página</label>
        <textarea name="page_text2" id="description3"></textarea>

        <div class="col-span-6 sm:col-span-3">
          <label for="categoria" class="block text-sm font-medium text-gray-900">Categorias de Serviços</label>
          <select class="uppercase shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2" name="categorie_id">
            <?php foreach ($categories as $categorie) { ?>
              <option value="<?php echo $categorie['id']; ?>"><?php echo $categorie['name']; ?></option>
            <?php } ?>
          </select>
          <a href="categorias.php" class="text-sm font-medium text-gray-700"><i class="bi bi-plus-circle"></i> Adicionar Categoria</a>
        </div>
        <div class="flex items-center">
          <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Cadastrar Serviço</button>
        </div>
    </form>
  </div>
</div>