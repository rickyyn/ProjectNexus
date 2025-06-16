@extends('template')
@section('titulo', 'Sobre')
@section('conteudo')

<div class="min-h-screen bg-gray-900 text-gray-100 flex flex-col">

  <section class="bg-gradient-to-r from-violet-900 via-purple-900 to-violet-800 py-20 px-6 text-center md:px-12 rounded-md">
    <h1 class="text-6xl font-extrabold max-w-4xl mx-auto leading-tight drop-shadow-lg">
      Sobre o <span class="text-violet-400">Project Nexus</span>
    </h1>
    <p class="mt-6 max-w-3xl mx-auto text-xl text-gray-300 font-light tracking-wide">
      Uma plataforma inovadora para amantes de jogos — focada em usabilidade, tecnologia de ponta e design responsivo.
    </p>
  </section>

  <section class="flex-grow max-w-5xl mx-auto px-6 md:px-12 py-16 grid grid-cols-1 md:grid-cols-2 gap-16">

  
    <article class="space-y-6">
      <h2 class="text-3xl font-semibold border-b border-violet-600 pb-3 max-w-max">
        O que é o Project Nexus?
      </h2>
      <p class="text-gray-300 leading-relaxed text-lg">
        Criado por <strong class="text-violet-400">Leonardo Mendonça</strong> e <strong class="text-violet-400">Ricardo Monteiro</strong>, este site conecta jogadores por meio de uma interface intuitiva, rápida e segura. Construído com tecnologias sólidas — Laravel e TailwindCSS — o foco é garantir uma experiência fluida e acessível em todos os dispositivos.
      </p>
      <p class="text-gray-400 leading-relaxed text-lg">
        Nosso compromisso é com a qualidade técnica e com a comunidade gamer, proporcionando cadastro fácil, catálogo de jogos completo e suporte contínuo.
      </p>
      <button
        class="cursor-pointer mt-6 inline-block bg-violet-600 hover:bg-violet-700 text-white font-semibold py-3 px-8 rounded-md transition-colors duration-200 focus:outline-none focus:ring-4 focus:ring-violet-500"
        onclick="window.location.href='contato'"
        aria-label="Entre em contato com o Project Nexus"
      >
        FALE CONOSCO
      </button>
    </article>

    
    <aside class="bg-gray-800 rounded-xl p-8 flex flex-col justify-center shadow-lg">
      <h3 class="text-2xl font-semibold mb-6 text-center text-violet-300 tracking-wide">
        Nossa Equipe
      </h3>
      <ul role="list" class="space-y-6 text-center text-lg text-gray-300">
        <li class="relative group">
          <span class="block text-violet-400 font-semibold text-xl">Leonardo Mendonça</span>
          <p class="mt-1 text-gray-400 group-hover:text-violet-300 transition-colors">
            Desenvolvedor FullStack & UX Designer
          </p>
        </li>
        <li class="relative group">
          <span class="block text-violet-400 font-semibold text-xl">Ricardo Monteiro</span>
          <p class="mt-1 text-gray-400 group-hover:text-violet-300 transition-colors">
            Desenvolvedor Back-end & Especialista Laravel
          </p>
        </li>
      </ul>
    </aside>

  </section>


</div>

@endsection
