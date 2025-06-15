@extends('template')
@section('titulo', 'Dashboard')
@section('conteudo')


 <div class="container mx-auto px-4">

         <div class="text-center mb-12">
             <h2 class="text-3xl font-bold text-white-800">Bem-vindo(a), {{session('usuario_nome') }}</h2>
         </div>

         <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">

             <a href="frmusuario" class="block p-6 bg-white rounded-xl shadow-md hover:shadow-xl hover:scale-105 transition-transform duration-200 ease-in-out text-center">
                 <div class="flex flex-col items-center justify-center h-full">
                     <img src="https://cdn-icons-png.flaticon.com/512/153/153643.png" alt="Ícone de Usuário" class="h-16 w-16 mb-4">
                     <h5 class="text-lg font-bold text-red-600">Cadastro de Usuários</h5>
                     <p class="text-sm text-gray-500 mt-1">Criar novo usuário</p>
                 </div>
             </a>

             <a href="frmproduto" class="block p-6 bg-white rounded-xl shadow-md hover:shadow-xl hover:scale-105 transition-transform duration-200 ease-in-out text-center">
                 <div class="flex flex-col items-center justify-center h-full">
                     <img src="https://cdn-icons-png.flaticon.com/512/7033/7033070.png" alt="Ícone de Produto" class="h-16 w-16 mb-4">
                     <h5 class="text-lg font-bold text-yellow-500">Cadastro de Produtos</h5>
                     <p class="text-sm text-gray-500 mt-1">Adicionar novo produto</p>
                 </div>
             </a>

             <a href="usuarios" class="block p-6 bg-white rounded-xl shadow-md hover:shadow-xl hover:scale-105 transition-transform duration-200 ease-in-out text-center">
                 <div class="flex flex-col items-center justify-center h-full">
                     <img src="https://cdn-icons-png.flaticon.com/512/74/74472.png" alt="Ícone de Lista de Usuários" class="h-16 w-16 mb-4">
                     <h5 class="text-lg font-bold text-gray-700">Lista de Usuários</h5>
                     <p class="text-sm text-gray-500 mt-1">Visualizar todos os usuários</p>
                 </div>
             </a>

             
             <a href="listaproduto" class="block p-6 bg-white rounded-xl shadow-md hover:shadow-xl hover:scale-105 transition-transform duration-200 ease-in-out text-center">
                 <div class="flex flex-col items-center justify-center h-full">
                     <img src="https://images.vexels.com/media/users/3/151870/isolated/preview/8b1a89d3f271913146d4cd63f3920464-icone-de-traco-da-lista-de-verificacao-medica.png" alt="Ícone de Lista de Produtos" class="h-16 w-16 mb-4">
                     <h5 class="text-lg font-bold text-gray-700">Lista de Produtos</h5>
                     <p class="text-sm text-gray-500 mt-1">Visualizar todos os produtos</p>
                 </div>
             </a>

             <a href="listacontato" class="block p-6 bg-white rounded-xl shadow-md hover:shadow-xl hover:scale-105 transition-transform duration-200 ease-in-out text-center">
                 <div class="flex flex-col items-center justify-center h-full">
                     <img src="https://cdn-icons-png.flaticon.com/512/88/88271.png" alt="Ícone de Lista de Contatos" class="h-16 w-16 mb-4">
                     <h5 class="text-lg font-bold text-gray-700">Lista de Contatos</h5>
                     <p class="text-sm text-gray-500 mt-1">Visualizar todos os contatos e seus feedbacks</p>
                 </div>
             </a>

         </div>
     </div>


@endsection