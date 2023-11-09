<section class="bg-slate-100 pt-10 pb-5">
  <div class="max-w-screen-xl px-4 pt-5 mx-auto lg:grid grid-cols-2 lg:space-x-10">
    <div class="mx-auto bg-gray-400 rounded w-full">
      <form action="./admin/controllers/add_lead.php" method="post" class="mr-auto px-8 pt-2 pb-2 place-self-center">
        <h1 class="font-sm text-xl text-white mb-4">
          Deseja ser um Revendedor ou Representante? <br><span class="font-bold lg:text-4xl text-white">Preencha o formulário</span>
        </h1>
        <div>
          <label class="text-sm font-bold text-white">
            Nome
          </label>
          <input type="text" name="name" id="name" placeholder="Seu nome completo" class="mb-2 w-full rounded-lg p-3 text-gray-900" />
        </div>
        <div>
          <label class="text-sm font-bold text-white">
            Email
          </label>
          <input type="email" name="email" id="email" placeholder="Email@gmail.com" class="mb-2 w-full rounded-lg p-3 text-gray-900" />
        </div>
        <div>
          <label class="text-sm font-bold text-white">
            WhatsApp
          </label>
          <input type="text" name="telephone" id="telephone" placeholder="(99) 9 9999-9999" class="mb-2 w-full rounded-lg p-3 text-gray-900" />
        </div>
        <div>
          <label class="text-sm font-bold text-white">
            CNPJ
          </label>
          <input type="number" name="cnpj" id="cnpj" placeholder="Da Empresa ou Pessoa Física" class="mb-2 w-full rounded-lg p-3 text-gray-900" />
        </div>
        <div>
          <label class="text-sm font-bold text-white">
            Mensagem
          </label><br>
          <textarea name="description" id="description" placeholder="Assunto..." rows="2" cols="50" class="mb-2 w-full rounded-lg p-3 text-gray-900"></textarea>
        </div>
        <input type="hidden" value="CONTATO" name="type">
        <div class="flex justify-center mt-4">
          <button class="bg-white hover:bg-color1 text-sm text-color1 hover:text-white font-bold py-2 px-4 rounded-full border-2 border-white w-full md:w-80">
            Enviar
          </button>
        </div>
      </form>
    </div>
    <div class="">
      <div id="map"></div>
      <div id="mapa"></div>
    </div>
  </div>
</section>