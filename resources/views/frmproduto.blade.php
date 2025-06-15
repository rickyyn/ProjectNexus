@extends('template')
@section('titulo', 'Cadastro de Produto')
@section('conteudo')

<div class="max-w-md mx-auto mt-12 bg-white p-8 shadow-lg rounded-xl">
    <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">Cadastrar Produto</h2>

    <form action="/addproduto" method="POST" enctype="multipart/form-data" class="space-y-4">
        @csrf

        <div>
            <label for="nome" class="block text-gray-700 font-medium">Nome do Produto</label>
            <input type="text" id="nome" name="nome" required
                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-100">
        </div>

        <div>
            <label for="preco" class="block text-gray-700 font-medium">Preço</label>
            <input type="number" id="preco" name="preco" required step="0.01"
                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-100">
        </div>

        <div>
            <label for="quantidade" class="block text-gray-700 font-medium">Quantidade</label>
            <input type="number" id="quantidade" name="quantidade" required
                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-100">
        </div>

        <div>
            <label for="imagem" class="block text-gray-700 font-medium">Imagem</label>
            <input type="file" id="imagem" name="imagem" accept="image/*"
                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-100">
        </div>

        <input type="submit" value="Cadastrar"
            class="w-full bg-black text-white py-2 rounded-lg hover:bg-gray-900 transition duration-200">
    </form>
</div>

@endsection
