<!DOCTYPE html>
<html lang="en" x-data="{ open: false, mobileMenuOpen: false, openDropdown: false }" class="h-full">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="//unpkg.com/alpinejs" defer></script>
  <link rel="stylesheet" href="/css/style.css" />
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <link rel="icon" href="{{ asset('favicon.png') }}">
  <title>@yield('titulo', 'Project Nexus')</title>
</head>
<body class="bg-gray-900 text-gray-800 h-full flex flex-col min-h-screen">

  <header class="lg:px-16 px-4 bg-gray-950 flex flex-wrap items-center py-4 shadow-md justify-between" x-data="{ mobileMenuOpen: false }">
    <div class="flex-1 flex justify-between items-center">
      <a href="home" class="text-2xl font-semibold flex items-center text-violet-700">
        <img src="{{ asset('assets/logo.png') }}" alt="Logo" width="96" height="24" class="mr-2"> Project Nexus
      </a>

      <button
        @click.stop="mobileMenuOpen = !mobileMenuOpen"
        class="md:hidden block text-gray-300 hover:text-violet-700 focus:outline-none focus:ring-2 focus:ring-violet-700 rounded transition-colors duration-200"
        aria-label="Toggle menu"
        :aria-expanded="mobileMenuOpen.toString()"
      >
        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
      </button>
    </div>

    <!-- Mobile Menu -->
    <div
      x-show="mobileMenuOpen"
      @click.away="mobileMenuOpen = false"
      x-transition:enter="transition ease-out duration-200"
      x-transition:enter-start="opacity-0 scale-95"
      x-transition:enter-end="opacity-100 scale-100"
      x-transition:leave="transition ease-in duration-150"
      x-transition:leave-start="opacity-100 scale-100"
      x-transition:leave-end="opacity-0 scale-95"
      class="md:hidden w-full mt-2 bg-gray-900/20 rounded-md shadow-md origin-top"
      x-cloak
    >
      <ul class="flex flex-col items-start text-base text-gray-700 py-2">
        <li><a href="home" class="py-2 px-4 block hover:text-violet-700 transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-violet-700 rounded">Home</a></li>
        <li><a href="sobre" class="py-2 px-4 block hover:text-violet-700 transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-violet-700 rounded">Sobre</a></li>
        <li><a href="produtos" class="py-2 px-4 block hover:text-violet-700 transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-violet-700 rounded">Produtos</a></li>
        <li><a href="contato" class="py-2 px-4 block hover:text-violet-700 transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-violet-700 rounded">Contato</a></li>

        @unless (session()->has('usuario_id'))
          <li class="w-full px-4 mt-2">
            <button
              class="bg-violet-600 w-full flex justify-center py-2 px-4 text-sm font-medium rounded-md text-white hover:bg-violet-700 focus:outline-none focus:ring-2 focus:ring-violet-700 transition-colors duration-200"
              onclick="window.location.href='frmlogin'"
            >
              Logar
            </button>
          </li>
        @endunless

        @if (session()->has('usuario_id'))
          <li x-data="{ openDropdown: false }" class="w-full px-4 relative mt-2">
            <button
              @click="openDropdown = !openDropdown"
              class="cursor-pointer bg-violet-600 text-white text-sm font-medium py-2 px-4 rounded inline-flex items-center w-full justify-between hover:bg-violet-700 focus:outline-none focus:ring-2 focus:ring-violet-600 transition-colors duration-200"
            >
              Olá, {{ session('usuario_nome') }}
              <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
              </svg>
            </button>

            <div
              x-show="openDropdown"
              @click.away="openDropdown = false"
              x-transition:enter="transition ease-out duration-200"
              x-transition:enter-start="opacity-0 scale-95"
              x-transition:enter-end="opacity-100 scale-100"
              x-transition:leave="transition ease-in duration-150"
              x-transition:leave-start="opacity-100 scale-100"
              x-transition:leave-end="opacity-0 scale-95"
              class="absolute right-0 mt-2 w-32 bg-gray-950 rounded-md shadow-lg ring-1 ring-black ring-opacity-5 z-10"
              x-cloak
            >
              <a href="dashboard" class="rounded-md block px-4 py-2 text-sm text-gray-300 hover:bg-gray-900/50 focus:outline-none focus:bg-gray-900/50">Dashboard</a>
              <a href="logout" class="rounded-md block px-4 py-2 text-sm text-gray-300 hover:bg-gray-900/50 focus:outline-none focus:bg-gray-900/50">Logout</a>
            </div>

          </li>
        @endif
      </ul>
    </div>

    <!-- Desktop Menu -->
    <nav class="hidden md:flex md:items-center md:w-auto w-full">
      <ul class="md:flex items-center text-base text-gray-700 space-x-4">
        <li><a href="home" class="py-2 px-4 block hover:text-violet-700 transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-violet-700 rounded">Home</a></li>
        <li><a href="sobre" class="py-2 px-4 block hover:text-violet-700 transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-violet-700 rounded">Sobre</a></li>
        <li><a href="produtos" class="py-2 px-4 block hover:text-violet-700 transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-violet-700 rounded">Produtos</a></li>
        <li><a href="contato" class="py-2 px-4 block hover:text-violet-700 transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-violet-700 rounded">Contato</a></li>

        @unless (session()->has('usuario_id'))
          <li>
            <button
              class="cursor-pointer bg-violet-600 py-2 px-4 text-sm font-medium rounded-md text-white hover:bg-violet-700 focus:outline-none focus:ring-2 focus:ring-violet-700 transition-colors duration-200"
              onclick="window.location.href='frmlogin'"
            >
              Logar
            </button>
          </li>
        @endunless

        @if (session()->has('usuario_id'))
          <li x-data="{ openDropdown: false }" class="relative">
            <button
              @click="openDropdown = !openDropdown"
              class="cursor-pointer bg-violet-600 text-white text-sm font-medium py-2 px-4 rounded inline-flex items-center hover:bg-violet-700 focus:outline-none focus:ring-2 focus:ring-violet-600 transition-colors duration-200"
            >
              Olá, {{ session('usuario_nome') }}
              <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
              </svg>
            </button>

            <div
              x-show="openDropdown"
              @click.away="openDropdown = false"
              x-transition:enter="transition ease-out duration-200"
              x-transition:enter-start="opacity-0 scale-95"
              x-transition:enter-end="opacity-100 scale-100"
              x-transition:leave="transition ease-in duration-150"
              x-transition:leave-start="opacity-100 scale-100"
              x-transition:leave-end="opacity-0 scale-95"
              class="absolute right-0 mt-2 w-32 bg-gray-950 rounded-md shadow-lg ring-1 ring-black ring-opacity-5 z-10"
              x-cloak
            >
              <a href="dashboard" class="rounded-md block px-4 py-2 text-sm text-gray-700 hover:bg-gray-900/50 focus:outline-none focus:bg-gray-100">Dashboard</a>
              <a href="logout" class="rounded-md block px-4 py-2 text-sm text-gray-700 hover:bg-gray-900/50 focus:outline-none focus:bg-gray-100">Logout</a>
            </div>
          </li>
        @endif
      </ul>
    </nav>
  </header>

  <main class="p-6 flex-grow">
    @yield('conteudo')
  </main>

  <footer class="py-4 text-gray-700 text-center">
    <div class="container mx-auto">
      <p class="text-sm">© 2025 Project Nexus. Todos os direitos reservados.</p>
    </div>
  </footer>

</body>
</html>
