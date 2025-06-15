@extends('template')
@section('titulo', 'Lista de Produtos') 
@section('conteudo')


<div class="container mx-auto px-6 py-4">
    <div class="mb-4 text-right"> 
        <a href="/frmproduto" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Adicionar Produto
        </a>
    </div>
</div>

<div class="flex flex-col">
    <div class="overflow-x-auto sm:mx-0.5 lg:mx-0.5">
        <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
            
            <div class="overflow-hidden">
                <table class="min-w-full">
                    
                    <thead class="bg-white border-b">
                        <tr>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                #
                            </th>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                Nome
                            </th>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                Preço
                            </th>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                Quantidade
                            </th>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                Imagem
                            </th>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                Ações
                            </th>
                           
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($prod as $p) 
                        <tr class="bg-gray-100 border-b">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{$p->id}}</td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                {{$p->nome}}
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                R$ {{ number_format($p->preco, 2, ',', '.') }}
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                {{$p->quantidade}}
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                @if($p->imagem)
                                <img src="{{ asset('storage/' . $p->imagem) }}" alt="Imagem" class="w-16 h-16 object-cover rounded-md">
                                @else
                                Sem Imagem
                                @endif
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                <a href="/frmeditproduto/{{$p->id}}" class="bg-yellow-600 hover:bg-yellow-700 text-white font-medium py-2 px-4 rounded-md inline-block mr-2">Editar</a>

                                <form action="/excluirproduto/{{$p->id}}" method="POST" class="inline-block">
                                    @csrf
                                    @method('DELETE') 
                                    <button type="submit" class="bg-red-700 hover:bg-red-800 text-white font-medium py-2 px-4 rounded-md" onclick="return confirm('Tem certeza que deseja excluir este produto?');">Excluir</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection