@extends('template')
@section('titulo', 'Sobre')
@section('conteudo')

<div class="max-w-4xl mx-auto p-6 bg-white shadow-md rounded-xl mt-8 space-y-6">
    <h1 class="text-3xl font-bold text-center text-black">Project Nexus</h1>

    <p class="text-lg text-gray-700 text-justify">
        Desenvolvido por <span class="font-semibold">Leonardo Mendonça</span> e <span class="font-semibold">Ricardo Monteiro</span>, 
        o projeto é um site dedicado ao universo dos games, com jogos e cadastro de usuários. Criado com foco em design responsivo 
        e boa usabilidade, utiliza tecnologias como HTML, CSS, PHP e Laravel. O objetivo é informar e conectar apaixonados por jogos.
    </p>

    <div class="border-t pt-4">
        <h2 class="text-2xl font-semibold text-gray-800 mb-2 text-center">Equipe do Projeto</h2>
        <ul class="flex justify-center space-x-8 text-lg text-gray-600">
            <li>Leonardo Mendonça</li>
            <li>Ricardo Monteiro</li>
        </ul>
    </div>
</div>

@endsection
