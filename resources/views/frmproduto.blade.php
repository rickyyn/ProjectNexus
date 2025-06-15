@extends('template')
@section('titulo', 'Cadastro de Produto')
@section('conteudo')

<section class="flex flex-col items-center justify-center min-h-[80vh] px-6 py-16 text-gray-100">
  <div class="w-full max-w-xl bg-gray-950 rounded-md shadow-lg p-8 sm:p-10">

    <h1 class="text-3xl font-bold text-center text-violet-400 mb-6">Cadastrar Produto</h1>

    <form action="/addproduto" method="POST" enctype="multipart/form-data" class="space-y-6">
      @csrf

      <div>
        <label for="nome" class="block text-sm font-medium text-gray-300 mb-1">Nome do Produto</label>
        <input
          type="text"
          id="nome"
          name="nome"
          required
          class="w-full px-4 py-3 rounded-lg bg-gray-800 border border-gray-700 text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-violet-600"
          placeholder="Digite o nome do produto"
        />
      </div>

      <div>
        <label for="preco" class="block text-sm font-medium text-gray-300 mb-1">Preço</label>
        <input
          type="number"
          id="preco"
          name="preco"
          required
          step="0.01"
          min="0"
          class="w-full px-4 py-3 rounded-lg bg-gray-800 border border-gray-700 text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-violet-600"
          placeholder="Digite o preço"
        />
      </div>

      <div>
        <label for="quantidade" class="block text-sm font-medium text-gray-300 mb-1">Quantidade</label>
        <input
          type="number"
          id="quantidade"
          name="quantidade"
          required
          min="0"
          class="w-full px-4 py-3 rounded-lg bg-gray-800 border border-gray-700 text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-violet-600"
          placeholder="Digite a quantidade"
        />
      </div>

      <div>
        <label for="imagem" class="block text-sm font-medium text-gray-300 mb-1">Imagem</label>
        <input
          type="file"
          id="imagem"
          name="imagem"
          accept="image/*"
          class="w-full px-4 py-2 rounded-lg bg-gray-800 border border-gray-700 text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-violet-600"
        />
      </div>

      <div>
        <button
          type="submit"
          class="w-full py-3 px-4 bg-violet-600 hover:bg-violet-700 transition-colors duration-300 text-white font-medium rounded-xl focus:outline-none focus:ring-2 focus:ring-violet-600"
        >
          Cadastrar
        </button>
      </div>
    </form>
  </div>
</section>

@endsection
