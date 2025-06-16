@extends('template')
@section('titulo', 'Usuarios')
@section('conteudo')

<div class="overflow-x-auto px-4 py-8 bg-gray-900 min-h-[80vh]">
  <table class="min-w-full border border-gray-700 rounded-md overflow-hidden text-gray-200">
    <thead class="bg-gray-800 border-b border-gray-700">
      <tr>
        <th class="text-left text-sm font-semibold text-violet-400 px-6 py-3 border-r border-gray-700">#</th>
        <th class="text-left text-sm font-semibold text-violet-400 px-6 py-3 border-r border-gray-700">Nome</th>
        <th class="text-left text-sm font-semibold text-violet-400 px-6 py-3 border-r border-gray-700">Email</th>
        <th class="text-center text-sm font-semibold text-violet-400 px-6 py-3 border-r border-gray-700">Excluir</th>
        <th class="text-center text-sm font-semibold text-violet-400 px-6 py-3">Editar</th>
      </tr>
    </thead>
    <tbody>
      @foreach($users as $u)
      <tr class="bg-gray-800 border-b border-gray-700 hover:bg-violet-900 transition-colors">
        <td class="px-6 py-4 text-sm font-medium text-gray-200 whitespace-nowrap">{{ $u->id }}</td>
        <td class="px-6 py-4 text-sm text-gray-300 whitespace-nowrap">{{ $u->nome }}</td>
        <td class="px-6 py-4 text-sm text-gray-300 whitespace-nowrap">{{ $u->email }}</td>
        <td class="px-6 py-4 text-center whitespace-nowrap">
          <form action="/excluirusuario/{{ $u->id }}" method="POST" onsubmit="return confirm('Confirma exclusão do usuário?')">
            @csrf
            @method('delete')
            <button type="submit"
              class="bg-red-700 hover:bg-red-800 text-white text-xs px-3 py-1 rounded transition">
              Excluir
            </button>
          </form>
        </td>
        <td class="px-6 py-4 text-center whitespace-nowrap">
          <a href="/frmeditusuario/{{ $u->id }}"
            class="bg-violet-600 hover:bg-violet-700 text-white text-xs px-3 py-1 rounded transition inline-block">
            Editar
          </a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

@endsection
