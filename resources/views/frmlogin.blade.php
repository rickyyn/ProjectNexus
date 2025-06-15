@extends('template')
@section('titulo', 'Login')
@section('conteudo')

<section class="flex flex-col items-center justify-center min-h-[80vh] px-6 py-16 text-gray-100">
  <div class="w-full max-w-xl bg-gray-950 rounded-md shadow-lg p-8 sm:p-10">

    <h1 class="text-3xl font-bold text-center text-violet-400 mb-6">Login</h1>

    <form method="POST" action="/logar" class="space-y-6">
      @csrf

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
        <label class="block text-sm font-medium text-gray-300 mb-1" for="senha">Senha</label>
        <input
          type="password"
          name="senha"
          required
          class="w-full px-4 py-3 rounded-lg bg-gray-800 border border-gray-700 text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-violet-600"
          placeholder="Digite sua senha"
        />
      </div>

      <div>
        <button
          type="submit"
          class="w-full py-3 px-4 bg-violet-600 hover:bg-violet-700 transition-colors duration-300 text-white font-medium rounded-xl focus:outline-none focus:ring-2 focus:ring-violet-600"
        >
          Entrar
        </button>
      </div>
    </form>

    <div class="mt-6 text-center">
      <p class="text-sm text-gray-400">
        Não tem uma conta?
        <a href="frmusuario" class="text-violet-500 hover:underline">Cadastre-se aqui</a>
      </p>
    </div>

  </div>
</section>

@endsection
