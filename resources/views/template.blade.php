<!DOCTYPE html>
<html lang="en" x-data="{ open: false, mobileMenuOpen: false, openDropdown: false }">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="//unpkg.com/alpinejs" defer></script>
  <link rel="stylesheet" href="/css/style.css" />
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <title>Home</title>
</head>
<body class="bg-blue-950 text-gray-800">

  <header class="lg:px-16 px-4 bg-white flex flex-wrap items-center py-4 shadow-md justify-between">
    
    <div class="flex-1 flex justify-between items-center">
      <a href="home" class="text-xl font-semibold">Project Nexus</a>

      <button @click="mobileMenuOpen = !mobileMenuOpen" class="md:hidden block">
        <svg class="w-6 h-6 text-gray-900" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
      </button>
    </div>

    <!-- Mobile Menu -->
    <div x-show="mobileMenuOpen" @click.away="mobileMenuOpen = false" class="md:hidden w-full mt-2 bg-white rounded-md shadow-md">
      <ul class="flex flex-col items-start text-base text-gray-700 py-2">
        <li><a class="py-2 px-4 block" href="home">Home</a></li>
        <li><a class="py-2 px-4 block" href="sobre">Sobre</a></li>
        <li><a class="py-2 px-4 block" href="produtos">Produtos</a></li>
        <li><a class="py-2 px-4 block" href="contato">Contato</a></li>

        @unless (session()->has('usuario_id'))
          <li class="w-full px-4">
            <button class="bg-purple-800 w-full flex justify-center py-2 px-4 text-sm font-medium rounded-md text-white hover:bg-violet-500"
              onclick="window.location.href='frmlogin'">
              Logar
            </button>
          </li>
        @endunless

        @if (session()->has('usuario_id'))
          <li x-data="{ openDropdown: false }" class="w-full px-4 relative">
            <button @click="openDropdown = !openDropdown"
              class="bg-red-600 text-white text-sm font-medium py-2 px-4 rounded inline-flex items-center w-full justify-between hover:bg-red-700">
              Olá, {{ session('usuario_nome') }}
              <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
              </svg>
            </button>

            <div x-show="openDropdown" @click.away="openDropdown = false"
              class="absolute right-0 mt-2 w-32 bg-white rounded-md shadow-lg ring-1 ring-black ring-opacity-5 z-10">
              <!-- Dashboard -->
              <a href="dashboard" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Dashboard</a>
              <!-- Logout -->
              <a href="logout" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Logout</a>
            </div>
          </li>
        @endif
      </ul>
    </div>

    <!-- Desktop Menu -->
    <nav class="hidden md:flex md:items-center md:w-auto w-full">
      <ul class="md:flex items-center text-base text-gray-700 space-x-4">
        <li><a class="py-2 px-4 block" href="home">Home</a></li>
        <li><a class="py-2 px-4 block" href="sobre">Sobre</a></li>
        <li><a class="py-2 px-4 block" href="produtos">Produtos</a></li>
        <li><a class="py-2 px-4 block" href="contato">Contato</a></li>

        @unless (session()->has('usuario_id'))
          <li>
            <button class="bg-purple-800 py-2 px-4 text-sm font-medium rounded-md text-white hover:bg-violet-500"
              onclick="window.location.href='frmlogin'">
              Logar
            </button>
          </li>
        @endunless

        @if (session()->has('usuario_id'))
          <li x-data="{ openDropdown: false }" class="relative">
            <button @click="openDropdown = !openDropdown"
              class="bg-red-600 text-white text-sm font-medium py-2 px-4 rounded inline-flex items-center hover:bg-red-700">
              Olá, {{ session('usuario_nome') }}
              <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
              </svg>
            </button>
            <div x-show="openDropdown" @click.away="openDropdown = false"
              class="absolute right-0 mt-2 w-32 bg-white rounded-md shadow-lg ring-1 ring-black ring-opacity-5 z-10">
              <!-- Dashboard -->
              <a href="dashboard" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Dashboard</a>
              <!-- Logout -->
              <a href="logout" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Logout</a>
            </div>
          </li>
        @endif
      </ul>
    </nav>
  </header>

  <main class="p-6">
    @yield('conteudo')
  </main>

</body>
</html>
