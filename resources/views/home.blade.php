@extends('template')
@section('titulo', 'Home')
@section('conteudo')

<main class="flex flex-col md:flex-row items-center rounded-md justify-between lg:px-16 px-4 py-12 bg-gray-950 text-gray-300 min-h-[70vh]">

  <!-- Texto -->
  <section class="md:w-1/2 max-w-lg">
    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-semibold text-violet-50 leading-tight mb-6">
      COMPRE JOGOS
      <span
        id="typed"
        class="text-violet-700 inline-block min-w-[8ch]"
      >
        <noscript>FÁCIL</noscript>
      </span>
      NA PROJECT NEXUS
    </h1>

    <p class="mb-8 text-gray-500 text-base leading-relaxed">
      Aqui vai um texto explicativo, direto ao ponto, destacando o valor da sua solução ou produto, com clareza e objetividade para engajar o usuário.
    </p>

    <a
  href="/sobre"
  class="bg-violet-600 hover:bg-violet-700 transition-colors duration-200 text-white font-medium py-3 px-6 rounded-md cursor-pointer focus:outline-none focus:ring-2 focus:ring-violet-700 inline-block text-center"
>
  SAIBA MAIS!
</a>

  </section>

  <!-- Imagem -->
  <section class="md:w-1/2 mt-10 md:mt-0 flex justify-center">
    <img
      src="/assets/catalogo.jpg"
      alt="Descrição da imagem"
      class="max-w-full h-auto rounded-md shadow-md"
      loading="lazy"
    />
  </section>
</main>

<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const el = document.getElementById('typed');
    el.innerHTML = '';

    new Typed(el, {
      strings: ['RÁPIDO', 'SEGURO', 'COM DESCONTO', 'ONLINE', 'FÁCIL'],
      typeSpeed: 60,
      backSpeed: 40,
      backDelay: 1800,
      loop: true,
      showCursor: false
    });
  });
</script>

@endsection
