

@extends('template')
@section('titulo', 'Editar Produto')
@section('conteudo')

<div class="flex flex-col justify-center py-12 sm:px-6 lg:px-8">
    <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
        <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">

            
            <form action="/atualizarproduto/{{$prod->id}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT') 

                <div>
                    <label class="block text-sm font-medium text-gray-700" for="nome">
                        Nome do Produto:
                    </label>
                    <div class="mt-1">
                        <input type="text" name="nome" id="nome" value="{{$prod->nome}}" class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required="" autocomplete="off">
                    </div>
                </div>

                <div class="mt-6">
                    <label class="block text-sm font-medium text-gray-700" for="preco">
                        Preço:
                    </label>
                    <div class="mt-1">
                        <input type="number" step="0.01" name="preco" id="preco" value="{{$prod->preco}}" class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required="">
                    </div>
                </div>

                <div class="mt-6">
                    <label class="block text-sm font-medium text-gray-700" for="quantidade">
                        Quantidade:
                    </label>
                    <div class="mt-1">
                        <input type="number" name="quantidade" id="quantidade" value="{{$prod->quantidade}}" class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required="">
                    </div>
                </div>

                <div class="mt-6">
                    <label class="block text-sm font-medium text-gray-700" for="imagem">
                        Imagem Atual:
                    </label>
                    @if($prod->imagem)
                        <div class="mt-1">
                            <img src="{{ asset('storage/' . $prod->imagem) }}" alt="Imagem do Produto" class="w-24 h-24 object-cover rounded-md">
                        </div>
                    @else
                        <p class="text-sm text-gray-500 mt-1">Nenhuma imagem atual.</p>
                    @endif
                    <label class="block text-sm font-medium text-gray-700 mt-4" for="nova_imagem">
                        Nova Imagem (opcional):
                    </label>
                    <div class="mt-1">
                        <input type="file" name="imagem" id="imagem" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none">
                    </div>
                </div>
                
                <div class="mt-6">
                    <button class="bg-blue-950 group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white transition transform-colors duration-300 hover:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" type="submit" value="atualizar" style="cursor:pointer;">
                        Atualizar Produto
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection