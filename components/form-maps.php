<section class="bg-slate-100 pb-5">
  <div class="max-w-screen-xl px-4 mx-auto lg:grid grid-cols-2 lg:space-x-10 pt-5">
    <div class="mx-auto px-2 bg-white rounded w-full mb-5">
      <form action="./admin/controllers/add_lead.php" method="post" class="mr-auto lg:px-4 pt-2 pb-2 place-self-center">
        <h6 class="lg:text-2xl text-xl pt-2">
          <span style="color:#1c5503; font-size: 20px;letter-spacing: 4px; font-weight: 300;" class="text-white bg-clip-text bg-gradient-to-r from-white to-white">
            Deseja ser um Revendedor ou Representante?
          </span>
        </h6>
        <div>
          <label class="text-sm font-bold text-black">
            Nome
          </label>
          <input type="text" name="name" id="name" placeholder="Seu nome completo" class="mb-2 w-full rounded-lg p-3 text-gray-900" required=""/>
        </div>
        <div>
          <label class="text-sm font-bold text-black">
            Email
          </label>
          <input type="email" name="email" id="email" placeholder="Email@gmail.com" class="mb-2 w-full rounded-lg p-3 text-gray-900" required=""/>
        </div>
        <div>
          <label class="text-sm font-bold text-black">
            WhatsApp
          </label>
          <input type="text" name="telephone" id="telephone" placeholder="(99) 9 9999-9999" class="mb-2 w-full rounded-lg p-3 text-gray-900" required=""/>
        </div>
        <div>
          <label class="text-sm font-bold text-black">
            CNPJ
          </label>
          <input type="number" name="cnpj" id="cnpj" placeholder="Da Empresa ou Pessoa Física" class="mb-2 w-full rounded-lg p-3 text-gray-900" required=""/>
        </div>
        <div>
          <label class="text-sm font-bold text-black">
            Mensagem
          </label><br>
          <textarea name="description" id="description" placeholder="Assunto..." rows="2" cols="50" class="mb-2 w-full rounded-lg p-3 text-gray-900" required=""></textarea>
        </div>
        <input type="hidden" value="CONTATO" name="type">
        <div class="flex justify-center mt-2">
          <button style="background: rgb(252,114,0); background: linear-gradient(15deg, rgba(252,114,0,1) 25%, rgba(255,198,0,1) 100%);" class="text-sm text-black hover:text-white font-bold py-2 px-4 rounded-full w-full md:w-80">
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