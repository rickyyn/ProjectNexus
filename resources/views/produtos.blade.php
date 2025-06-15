
@extends('template')
@section('titulo', 'Sobre')
@section('conteudo')
<div class="container mt-8 grid grid-cols-3 grid-rows-3 gap-4">


    @foreach ($prod as $p)
<!-- From Uiverse.io by emmanuelh-dev --> 
<div class="flex flex-col bg-white rounded-3xl">
  
  <div class="px-6 py-8 sm:p-10 sm:pb-6">
    <div class="grid items-center justify-center w-full grid-cols-1 text-left">
      <div>
        <img src="{{ asset('storage/' . $p['imagem']) }}" alt="img" width="150">
        <h2
          class="text-lg font-medium tracking-tighter text-gray-600 lg:text-3xl"
        >
        {{$p['nome']}}
        </h2>
        <p class="mt-2 text-sm text-gray-500">Suitable to grow steadily.</p>
      </div>
      <div class="mt-6">
        <p>
          <span class="text-5xl font-light tracking-tight text-black">
            R$ {{$p['preco']}}
          </span>
          <span class="text-base font-medium text-gray-500"> /mo </span>
        </p>
      </div>
    </div>
  </div>
  <div class="flex px-6 pb-8 sm:px-8">
    <a
      aria-describedby="tier-company"
      class="flex items-center justify-center w-full px-6 py-2.5 text-center text-white duration-200 bg-black border-2 border-black rounded-full nline-flex hover:bg-transparent hover:border-black hover:text-black focus:outline-none focus-visible:outline-black text-sm focus-visible:ring-black"
      href="#"
    >
      Get started
    </a>
  </div>
</div>



<h3></h3>

@endforeach
</div>
@endsection
</div>
