@extends('template')
@section('titulo', 'Sobre')
@section('conteudo')

<section class="flex flex-col items-center justify-center min-h-[80vh] px-6 py-16  text-gray-100">
  <div class="w-full max-w-xl bg-gray-950 rounded-md shadow-lg p-8 sm:p-10">

    <h1 class="text-3xl font-bold text-center text-violet-400 mb-6">Fale Conosco</h1>

    <form method="POST" action="/addcontato" class="space-y-6">
      @csrf

      <div>
        <label class="block text-sm font-medium text-gray-300 mb-1" for="nome">Nome</label>
        <input
          type="text"
          name="nome"
          required
          class="w-full px-4 py-3 rounded-lg bg-gray-800 border border-gray-700 text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-violet-600"
          placeholder="Digite seu nome"
        />
      </div>

      <div>
        <label class="block text-sm font-medium text-gray-300 mb-1" for="email">E-mail</label>
        <input
          type="email"
          name="email"
          required
          class="w-full px-4 py-3 rounded-lg bg-gray-800 border border-gray-700 text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-violet-600"
          placeholder="Digite seu e-mail"
        />
      </div>

      <div>
        <label class="block text-sm font-medium text-gray-300 mb-1" for="assunto">Assunto</label>
        <input
          type="text"
          name="assunto"
          required
          class="w-full px-4 py-3 rounded-lg bg-gray-800 border border-gray-700 text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-violet-600"
          placeholder="Sobre o que quer falar?"
        />
      </div>

      <div>
        <label class="block text-sm font-medium text-gray-300 mb-1" for="mensagem">Mensagem</label>
        <textarea
          name="mensagem"
          required
          rows="4"
          class="w-full px-4 py-3 rounded-lg bg-gray-800 border border-gray-700 text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-violet-600 resize-none"
          placeholder="Escreva sua mensagem"
        ></textarea>
      </div>

      <div>
        <button
          type="submit"
          class="w-full py-3 px-4 bg-violet-600 hover:bg-violet-700 transition-colors duration-300 text-white font-medium rounded-xl focus:outline-none focus:ring-2 focus:ring-violet-600"
        >
          Enviar
        </button>
      </div>
    </form>
  </div>
</section>

@endsection
