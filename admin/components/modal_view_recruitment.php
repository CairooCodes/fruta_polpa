<div id="modal" class="modal fixed w-full h-full top-0 left-0 flex items-center justify-center hidden z-50">
  <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>
  <div class="modal-container overflow-auto max-h-[80vh] bg-white w-11/12 mx-auto rounded shadow-lg z-50 overflow-y-auto">
    <div class="modal-content py-4 text-left px-6">
      <div class="flex justify-between items-center pb-3">
        <div class="modal-close cursor-pointer z-50">
          <svg class="fill-current text-black modal-close" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
            <path d="M18 1.5L16.5 0 9 7.5 1.5 0 0 1.5 7.5 9 0 16.5 1.5 18 9 10.5 16.5 18 18 16.5 10.5 9z" />
          </svg>
        </div>
      </div>
      <form action="./controllers/edit_recruitment.php" method="POST" class="relative bg-white rounded-lg shadow">

        <!-- Modal body -->
        <div class="p-6 space-y-6">
          <div class="grid grid-cols-6 gap-6">
            <div class="col-span-6 sm:col-span-3">
              <label class="block mb-2 text-sm font-medium text-gray-900">Nome</label>
              <h3 id="name" class=" bg-gray-50 h-10  text-gray-900 text-sm rounded-lg block w-full p-2.5"></h3>
              <input name="name" id="name2" type="text" value="" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5" placeholder="Nome" required="">
            </div>
            <div class="col-span-6 sm:col-span-3">
              <label for="last-name" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
              <h3 id="email" class="bg-gray-50 h-10  text-gray-900 text-sm rounded-lg block w-full p-2.5"></h3>
              <input name="email" id="email2" type="text" value="" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5" placeholder="Email" required="">
            </div>
            <div class="col-span-6 sm:col-span-3">
              <label for="last-name" class="block mb-2 text-sm font-medium text-gray-900">Telefone</label>
              <h3 id="telephone" class=" bg-gray-50 h-10  text-gray-900 text-sm rounded-lg block w-full p-2.5"></h3>
              <input name="telephone" id="telephone2" type="text" value="" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5" placeholder="telephone" required="">
            </div>
            <div class="col-span-6 sm:col-span-3">
              <label for="last-name" class="block mb-2 text-sm font-medium text-gray-900">Cidade</label>
              <h3 id="city" class=" bg-gray-50 h-10  text-gray-900 text-sm rounded-lg block w-full p-2.5"></h3>
              <input name="city" id="city2" type="text" value="" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5" placeholder="city" required="">
            </div>
            <div class="col-span-6 sm:col-span-3">
              <label for="last-name" class="block mb-2 text-sm font-medium text-gray-900">Estado</label>
              <h3 id="state" class=" bg-gray-50 h-10  text-gray-900 text-sm rounded-lg block w-full p-2.5"></h3>
            </div>
            <div class="col-span-6 sm:col-span-3">
              <label for="last-name" class="block mb-2 text-sm font-medium text-gray-900">Área de Interesse</label>
              <h3 id="office" class=" bg-gray-50 h-10  text-gray-900 text-sm rounded-lg block w-full p-2.5"></h3>
            </div>
            <div class="col-span-6 sm:col-span-3">
              <label for="last-name" class="block mb-2 text-sm font-medium text-gray-900">Currículo</label>
              <h3 id="curriculo" class=" bg-gray-50 h-10  text-gray-900 text-sm rounded-lg block w-full p-2.5"></h3>
            </div>
           
            <div class="col-span-6 sm:col-span-3">
              <label for="last-name" class="block mb-2 text-sm font-medium text-gray-900">Status atual</label>
              <h3 id="status" class="font-bold bg-gray-50 h-10  text-gray-900 text-sm rounded-lg block w-full p-2.5">Indefinido</h3>
              <select class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5" name="status">
                <option value="Pendente">Pendente</option>
                <option value="Confirmado">Confirmado</option>
                <option value="Recusado">Recusado</option>
              </select>
            </div>
            <input id="id2" name="id" type="hidden" value="">
          </div>
          <!-- Modal footer -->
          <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b">
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Editar</button>
          </div>
      </form>

    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  const modal = document.querySelector('#modal');
  const closeButton = document.querySelector('.modal-close');

  closeButton.addEventListener('click', () => {
    modal.remove();
  });

  const btnsAbrirModal = document.querySelectorAll(".btnAbrirModal");
  const valorParametro = document.getElementById("valorParametro");

  btnsAbrirModal.forEach(function(btn) {
    btn.addEventListener("click", function() {
      const parametro = JSON.parse(this.getAttribute("data-parametro"));
      console.log(parametro);
      document.getElementById('name').innerText = parametro.name
      document.getElementById('name2').value = parametro.name
      document.getElementById('email').innerText = parametro.email
      document.getElementById('email2').value = parametro.email
      document.getElementById('telephone').innerText = parametro.telephone
      document.getElementById('telephone2').value = parametro.telephone
      document.getElementById('id2').value = parametro.id
      document.getElementById('city').innerText = parametro.city
      document.getElementById('city2').value = parametro.city
      document.getElementById('state').innerText = parametro.state
      document.getElementById('office').innerText = parametro.office
      document.getElementById('curriculo').innerText = parametro.curriculo
      modal.style.display = "flex";
      document.body.appendChild(modal);

    });
  });

  const fecharModal = function() {
    modal.style.display = "none";
  };

  modal.addEventListener("click", function(event) {
    const target = event.target;
    if (target.classList.contains("modal-overlay") || target.classList.contains("modal-close")) {
      fecharModal();
    }
  });

  document.addEventListener("keydown", function(event) {
    if (event.key === "Escape") {
      fecharModal();
    }
  });
</script>