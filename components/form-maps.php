<section class="bg-slate-100 pt-10 pb-5">
  <div class="max-w-screen-xl px-4 pt-5 mx-auto lg:grid grid-cols-2 lg:space-x-10">
    <div>
      <h1 class="font-sm text-xl" style="color: #1c5503">
        Deseja ser um Revendedor ou Representante? <br><span class="font-bold lg:text-4xl" style="color: #1c5503">PREENCHA O FORMULÁRIO</span>
      </h1>
      <form action="./admin/controllers/add_lead.php" method="POST" class="rounded-lg w-full mt-8">
        <input type="text" name="name" id="name" placeholder="Nome completo" class="w-full rounded-md border border-bg-sky-950 bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
        <label for="email" class="mb-3 block text-base font-medium text-white">
          Email
        </label>
        <input type="email" name="email" id="email" placeholder="email@gmail.com" class="w-full rounded-md border border-bg-sky-950 bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
        <label for="subject" class="mb-3 block text-base font-medium text-white">
          WhatsApp
        </label>
        <input type="number" name="telephone" id="telephone" placeholder="(99) 9 9999-9999" class="w-full rounded-md border border-bg-sky-950 bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
        <label for="subject" class="mb-3 block text-base font-medium text-white">
          CNPJ/CPF
        </label>
        <input type="number" name="cnpj" id="cnpj" placeholder="CNPJ da Empresa ou CPF pessoa fisica" class="w-full rounded-md border border-bg-sky-950 bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
        <label for="subject" class="text-sm font-bold text-white">
          Mensagem
        </label>
        <textarea type="text" name="description" id="description" placeholder="Deixe uma mensagem" rows="2" cols="50" class="mt-2 mb-4 w-full rounded-lg p-3 text-gray-900"></textarea>
        <input type="hidden" value="CONTATO" name="type">
        <button class="bg-sky-950 hover:bg-gray-500 text-base text-white hover:text-white font-bold py-2 px-4 rounded-md lg:w-full sm:w-80">
          Enviar
        </button>
      </form>
    </div>
    <div class="pt-2 pb-10">
      <div id="map"></div>
    </div>
  </div>
</section>