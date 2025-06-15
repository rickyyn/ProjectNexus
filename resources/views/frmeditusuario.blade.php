@extends('template')
@section('titulo', 'Editar Usuário')
@section('conteudo')

<div class="flex flex-col justify-center min-h-[80vh] py-12 px-4 sm:px-6 lg:px-8 bg-gray-900">
  <div class="sm:mx-auto sm:w-full sm:max-w-md">
    <div class="bg-gray-800 py-8 px-6 shadow-lg rounded-lg sm:px-10">
      <form action="/atualizarusuario/{{ $user->id }}" method="POST" class="space-y-6" novalidate>
        @csrf
        @method('put')

        <div>
          <label for="nome" class="block text-sm font-medium text-gray-300">Nome</label>
          <input
            type="text"
            name="nome"
            id="nome"
            value="{{ old('nome', $user->nome) }}"
            required
            autocomplete="name"
            class="mt-1 block w-full rounded-md border border-gray-600 bg-gray-900 px-3 py-2 text-gray-100 placeholder-gray-500 shadow-sm focus:outline-none focus:ring-2 focus:ring-violet-500 focus:border-violet-500 sm:text-sm"
          >
          @error('nome')
            <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
          @enderror
        </div>

        <div>
          <label for="email" class="block text-sm font-medium text-gray-300">E-mail</label>
          <input
            type="email"
            name="email"
            id="email"
            value="{{ old('email', $user->email) }}"
            required
            autocomplete="email"
            class="mt-1 block w-full rounded-md border border-gray-600 bg-gray-900 px-3 py-2 text-gray-100 placeholder-gray-500 shadow-sm focus:outline-none focus:ring-2 focus:ring-violet-500 focus:border-violet-500 sm:text-sm"
          >
          @error('email')
            <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
          @enderror
        </div>

        <div>
          <label for="senha" class="block text-sm font-medium text-gray-300">Senha</label>
          <input
            type="password"
            name="senha"
            id="senha"
            placeholder="Deixe em branco para manter a senha atual"
            autocomplete="new-password"
            class="mt-1 block w-full rounded-md border border-gray-600 bg-gray-900 px-3 py-2 text-gray-100 placeholder-gray-500 shadow-sm focus:outline-none focus:ring-2 focus:ring-violet-500 focus:border-violet-500 sm:text-sm"
          >
          @error('senha')
            <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
          @enderror
        </div>

        <div>
          <button
            type="submit"
            class="w-full rounded-md bg-violet-700 py-2 px-4 text-white text-sm font-semibold transition hover:bg-violet-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-violet-500 cursor-pointer"
          >
            Atualizar
          </button>
        </div>
      </form>
    </div>
  </div>
</div>

@endsection
