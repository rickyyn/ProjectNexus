@extends('template')
@section('titulo', 'Lista de Produtos')
@section('conteudo')

<div class="container mx-auto px-6 py-4">
  <div class="mb-4 text-right">
    <a href="/frmproduto"
       class="bg-violet-600 hover:bg-violet-700 text-white font-bold py-2 px-4 rounded transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-violet-400">
      Adicionar Produto
    </a>
  </div>
</div>

<div class="flex flex-col">
  <div class="overflow-x-auto sm:mx-0.5 lg:mx-0.5">
    <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
      <div class="overflow-hidden rounded-lg shadow-md bg-gray-900">
        <table class="min-w-full table-auto border-collapse">
          <thead class="bg-gray-800 border-b border-violet-600">
            <tr>
              <th class="text-sm font-semibold text-violet-400 px-6 py-3 text-left">#</th>
              <th class="text-sm font-semibold text-violet-400 px-6 py-3 text-left">Nome</th>
              <th class="text-sm font-semibold text-violet-400 px-6 py-3 text-left">Preço</th>
              <th class="text-sm font-semibold text-violet-400 px-6 py-3 text-left">Quantidade</th>
              <th class="text-sm font-semibold text-violet-400 px-6 py-3 text-left">Imagem</th>
              <th class="text-sm font-semibold text-violet-400 px-6 py-3 text-left">Ações</th>
            </tr>
          </thead>
          <tbody>
            @foreach($prod as $p)
              <tr class="bg-gray-800 border-b border-gray-700 hover:bg-violet-900 transition-colors duration-150">
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-violet-300">{{ $p->id }}</td>
                <td class="text-sm text-gray-300 font-light px-6 py-4 whitespace-nowrap">{{ $p->nome }}</td>
                <td class="text-sm text-gray-300 font-light px-6 py-4 whitespace-nowrap">R$ {{ number_format($p->preco, 2, ',', '.') }}</td>
                <td class="text-sm text-gray-300 font-light px-6 py-4 whitespace-nowrap">{{ $p->quantidade }}</td>
                <td class="px-6 py-4 whitespace-nowrap">
                  @if($p->imagem)
                    <img src="{{ asset('storage/' . $p->imagem) }}" alt="Imagem de {{ $p->nome }}" class="w-16 h-16 object-cover rounded-md" />
                  @else
                    <span class="text-gray-500 italic text-sm">Sem Imagem</span>
                  @endif
                </td>
                <td class="px-6 py-4 whitespace-nowrap flex space-x-2">
                  <a href="/frmeditproduto/{{$p->id}}"
                     class="bg-violet-600 hover:bg-violet-700 text-white font-medium py-2 px-4 rounded-md transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-violet-400">
                    Editar
                  </a>

                  <form action="/excluirproduto/{{$p->id}}" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir este produto?');" class="inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                      class="bg-red-700 hover:bg-red-800 text-white font-medium py-2 px-4 rounded-md transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-red-500">
                      Excluir
                    </button>
                  </form>
                </td>
              </tr>
            @endforeach

            @if($prod->isEmpty())
              <tr>
                <td colspan="6" class="text-center py-6 text-gray-500 italic">Nenhum produto encontrado.</td>
              </tr>
            @endif
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

@endsection
