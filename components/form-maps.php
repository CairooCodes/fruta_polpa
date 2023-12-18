<section class="bg-yellow-50 lg:py-20">
  <div class="max-w-screen-xl px-4 mx-auto lg:grid grid-cols-2 lg:space-x-10 pt-5">
    <div class="mx-auto rounded w-full px-4" style="background: rgb(252,114,0); background: linear-gradient(15deg, rgba(252,114,0,1) 25%, rgba(255,198,0,1) 100%);">
      <form action="./functions/send-email.php" method="post" class="mr-auto lg:p-8 place-self-center pt-5 mb-5 pb-5">
        <h2 class="text-center md:text-left text-2xl font-extrabold tracking-wider text-white text-center">Fale Conosco</h2>
        <div>
          <label class="text-sm font-bold text-white">
            Nome
          </label>
          <input type="text" name="name" id="name" placeholder="Seu nome completo" class="mt-1 mb-2 w-full rounded-lg p-3 text-gray-900" required="" />
        </div>
        <div>
          <label class="text-sm font-bold text-white">
            E-mail
          </label>
          <input type="email" name="email" id="email" placeholder="Seu melhor email" class="mt-1 mb-2 w-full rounded-lg p-3 text-gray-900" required="" />
        </div>
        <div>
          <label class="text-sm font-bold text-white">
            WhatsApp
          </label>
          <input type="text" name="telephone" id="telephone" placeholder="(DD) 9 9999-9999" class="mt-1 mb-2 w-full rounded-lg p-3 text-gray-900" required="" />
        </div>
        <div>
          <label class="text-sm font-bold text-white">
            CNPJ ou CPF
          </label>
          <input type="text" name="cnpj" id="cnpj" placeholder="CNPJ ou CPF" class="mt-1 mb-2 w-full rounded-lg p-3 text-gray-900" required="" />
        </div>
        <div>
          <label class="text-sm font-bold text-white">
            Mensagem
          </label><br>
          <textarea name="description" id="description" placeholder="Deixe uma mensagem (Opcional)" rows="2" cols="50" class="mt-1 mb-2 w-full rounded-lg p-3 text-gray-900"></textarea>
        </div>
        <input type="hidden" value="CONTATO" name="type">
        <div class="flex justify-center mt-1">
          <button style="background: rgb(252,114,0); background: linear-gradient(15deg, rgba(252,114,0,1) 25%, rgba(255,198,0,1) 100%);" class="text-white bg-white rounded-full font-semibold text-lg px-5 py-2 text-center hover:bg-orange-600 hover:text-black">
            Enviar contato
          </button>
        </div>
      </form>
    </div>
    <div class="">
      <div id="mapa"></div>
      <div id="map"></div>
    </div>
  </div>
</section>