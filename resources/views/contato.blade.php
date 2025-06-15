@extends('template')
@section('titulo', 'Sobre')
@section('conteudo')


<div class="flex flex-col justify-center py-12 sm:px-6 lg:px-8">

  <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
    <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
      <h1 class="text-2xl font-bold text-center text-black">Fale Conosco</h1>
      <form method="POST" action="/addcontato">
        @csrf
        <div>
          <label class="block text-sm font-medium text-gray-700" for="username">
            Nome:
          </label>
          <div class="mt-1">
            <input class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required="" name="nome" type="text">
          </div>
        </div>

        <div class= "mt-6">
          <label class="block text-sm font-medium text-gray-700" for="email">
            E-mail:
          </label>
          <div class="mt-1">
            <input class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required="" name="email" type="email">
          </div>
        </div>

        <div class="mt-6">
          <label class="block text-sm font-medium text-gray-700" for="assunto">
            Assunto:
          </label>
          <div class="mt-1">
            <input class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required="" name="assunto" type="text">
          </div>
        </div>

        <div class="mt-6">
          <label class="block text-sm font-medium text-gray-700" for="mensagem">
            Mensagem:
          </label>
        <div class="mt-1">
            <input class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required="" name="mensagem" type="text">
          </div>
        </div>

        <div class="mt-6">
          <button class="bg-blue-950 group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white transition transform-colors duration-300 hover:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" type="submit" value="Cadastrar" style="cursor:pointer;">
            Enviar
          </button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection