@extends('template')
@section('titulo', 'Produtos')
@section('conteudo')

<section class="max-w-6xl mx-auto px-6 py-12 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">

  @foreach($prod as $p)
  <article class="bg-gray-950 rounded-3xl shadow-lg flex flex-col min-h-[50vh] overflow-hidden">
    <div class="p-2">
      {{$p->imagem}}
    </div>
    <div class="px-4 py-4 text-center mt-auto">
      <h3 class="text-xl font-semibold text-violet-400 mb-1">{{$p->nome}}</h3>
      <p class="text-violet-200 font-medium">{{$p->preco}}</p>
      <p class="text-violet-200 font-medium">{{$p->quantidade}}</p>
    </div>
  </article>
@endforeach
</section>

@endsection
