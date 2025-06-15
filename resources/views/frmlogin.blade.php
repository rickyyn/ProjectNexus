@extends('template')
@section('titulo', 'Dashboard')
@section('conteudo')

<div class="max-w-md mx-auto mt-12 bg-white p-8 shadow-lg rounded-xl">
    <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">Área Restrita</h2>

    <form action="/logar" method="POST" class="space-y-4">
        @csrf

        <div>
            <label for="email" class="block text-gray-700 font-medium">E-mail</label>
            <input type="email" id="email" name="email" required
                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-100">
        </div>

        <div>
            <label for="senha" class="block text-gray-700 font-medium">Senha</label>
            <input type="password" id="senha" name="senha" required
                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-100">
        </div>

        <input type="submit" value="Entrar"
            class="w-full bg-black text-white py-2 rounded-lg hover:bg-black transition duration-200">
    </form>

    <div class="mt-6 text-center">
        <p class="text-gray-600">Não tem uma conta? 
            <a href="frmusuario" class="text-indigo-600 hover:underline">Cadastre-se aqui</a>
        </p>
    </div>
</div>

@endsection
