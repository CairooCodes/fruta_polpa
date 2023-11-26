<section class="mx-8 my-12">
  <div class="mx-auto">
    <div class="lg:grid lg:grid-cols-2 xl:gap-8 text-white">
      <div class="map shadow2 p-4 bg-color1 rounded-2xl w-full h-full mb-5">
        <iframe class="rounded-2xl" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.453412524498!2d-42.79456131892036!3d-5.191183823910481!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x78e34855075724b%3A0xe5ee1775cd297150!2sFruta%20Polpa!5e0!3m2!1spt-BR!2sbr!4v1571687809241!5m2!1spt-BR!2sbr" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
      </div>
      <form action="./config/api/create_lead.php" class="py-5 shadow2 rounded-2xl bg-color1" method="post">
        <div class="max-w-screen-xl px-4 pt-8 mx-auto mb-3 text-center">
          <h1 class="mt-5 text-white font-semibold lg:text-2xl text-xl">Procura outro serviço?</h1>
          <h2 class="text-white text-md mt-1">Solicite consultoria com nossa equipe preenchendo o formulário</h2>
        </div>
        <div class="justify-center m-5">
          <div class="grid grid-rows-3 grid-flow-col gap-4">
            <div>
              <input class="w-full mr-5 border-none mt-2 bg-gray-50 focus:border-blue-500 focus:ring-2 focus:ring-blue-500 focus-ring-2 focus:ring-blue-500 focus:ring-opacity-20 rounded-md px-3 py-3 text-sm text-gray-800 placeholder-gray-600 focus:outline-none transition duration-400 ease-in-out" name="name" type="text" id="name" placeholder="Nome Completo">
            </div>
            <div>
              <input class="w-full mr-5 border-none mt-2 bg-gray-50 focus:border-blue-500 focus:ring-2 focus:ring-blue-500 focus-ring-2 focus:ring-blue-500 focus:ring-opacity-20 rounded-md px-3 py-3 text-sm text-gray-800 placeholder-gray-600 focus:outline-none transition duration-400 ease-in-out" name="celular" type="text" id="celular" placeholder="WhatsApp">
            </div>
            <div>
              <input class="w-full  mr-5 border-none mt-2 bg-gray-50 focus:border-blue-500 focus:ring-2 focus:ring-blue-500 focus-ring-2 focus:ring-blue-500 focus:ring-opacity-20 rounded-md px-3 py-3 text-sm text-gray-800 placeholder-gray-600 focus:outline-none transition duration-400 ease-in-out" name="email" type="text" id="email" placeholder="Email">
            </div>
            <input type="hidden" name="type" id="type" value="2">
          </div>
          <div class="mt-8 ml-2">
            <button type="submit" class="mt-2 flex text-white justify-center items-center w-full h-12 bg-green-400 rounded-lg">
              <span>Enviar Formulário</span>
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>
</section>