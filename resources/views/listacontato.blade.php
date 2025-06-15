@extends('template')
@section('titulo', 'Sobre')
@section('conteudo')
<div class="flex flex-col">
    <div class="overflow-x-auto sm:mx-0.5 lg:mx-0.5">
        <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
            <div class="overflow-hidden">
                <table class="min-w-full">
                    <thead class="bg-white border-b">
                        
                        <tr>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                Nome
                            </th>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                Email
                            </th>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                Assunto
                            </th>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                Mensagem
                            </th>
                             <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                Ações
                            </th>
                        </tr>
                        
                    </thead>
                    @foreach($cont as $c)
                    <tbody>
                        <tr class="bg-gray-100 border-b">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{$c->nome}}</td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                            {{$c->email}}
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                               {{$c->assunto}}
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                               {{$c->mensagem}}
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
    <form action="/excluircontato/{{$c->id}}" method="POST">
        @csrf
        @method('delete')
        <input 
            type="submit" 
            value="Excluir" 
            class="bg-red-700 hover:bg-red-800 text-white text-sm px-3 py-1 rounded inline-block cursor-pointer"
        />
    </form>
</td>

<td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
    <div x-data="{ open: false, mensagem: '' }">
        <button 
            @click="open = !open" 
            class="bg-yellow-600 hover:bg-yellow-700 text-white text-sm px-3 py-1 rounded inline-block text-center"
        >
            Responder
        </button>

        <div x-show="open" class="mt-2 space-y-2">
            <textarea 
                x-model="mensagem" 
                rows="2"
                class="w-48 px-2 py-1 text-sm border rounded resize-none"
                placeholder="Digite a resposta..."
            ></textarea>
            <button 
                @click="
                    if (mensagem.trim() !== '') {
                        alert('Mensagem enviada');
                        location.reload();
                    }
                " 
                class="bg-blue-600 hover:bg-blue-700 text-white text-sm px-3 py-1 rounded"
            >
                Enviar
            </button>
        </div>
    </div>
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