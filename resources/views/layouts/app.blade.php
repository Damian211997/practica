<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title') - NutriLife</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <style>
    .bg-gradient-purple {
      background: linear-gradient(90deg, #9333ea, #4d1d9f);
    }
    .hover-bg-gradient-purple:hover {
      background: linear-gradient(90deg, #4d1d9f, #9333ea);
    }
    .footer-light {
      background-color: #f8f8f8;
      color: #333;
    }
  </style>
</head>
<body class="bg-gradient-to-r from-pink-100 to-purple-200 text-gray-900">
  <nav class="flex py-5 bg-gradient-purple text-white">
    <div class="w-1/2 px-4 mr-auto">
      <p class="text-2xl font-bold drop-shadow-md">NutriLife</p>
    </div>
    <ul class="w-1/2 px-4 ml-auto flex justify-end pt-1">
      @if(!auth()->check())
        <li class="mx-2 md:mx-6">
          <a href="{{ route('about') }}" class="font-semibold hover-bg-gradient-purple py-3 px-4 rounded-md drop-shadow-md">Nosotros</a>
        </li>
      @endif
      @if(auth()->check())
        <li class="mx-2 md:mx-8">
          <p class="text-xl drop-shadow-md">Bienvenido <b>{{ auth()->user()->name }}</b></p>
        </li>
        <li class="mx-2">
          <a href="{{ route('login.destroy') }}" class="font-bold py-3 px-4 rounded-md bg-red-500 hover:bg-red-600 drop-shadow-md">Cerrar Sesión</a>
        </li>
      @else
        <li class="mx-2 md:mx-6">
          <a href="{{ route('login.index') }}" class="font-semibold hover-bg-gradient-purple py-3 px-4 rounded-md drop-shadow-md">Iniciar Sesión</a>
        </li>
        <li class="mx-2">
          <a href="{{ route('register.index') }}" class="font-semibold border-2 border-white py-2 px-4 rounded-md hover:bg-white hover:text-purple-700 hover-bg-gradient-purple drop-shadow-md">Registrarse</a>
        </li>
      @endif
    </ul>
  </nav>
  <div class="flex min-h-screen bg-gradient-to-r from-pink-100 to-purple-300">
    @auth
      <!-- Sidebar -->
      <aside class="fixed left-0 top-0 h-screen w-64 bg-white text-purple-800 flex flex-col justify-between shadow-lg">
        <div>
          <div class="p-4">
            <h2 class="text-2xl font-bold drop-shadow-md">Menu</h2>
          </div>
          <nav class="mt-5">
            <ul class="text-left">
              <li class="py-2 hover:bg-purple-100 transition duration-300">
<<<<<<< HEAD
                <a href="{{ route('calendar.index') }}" class="flex items-center px-4">
                  <span class="mr-2 drop-shadow-md"><i class="fas fa-calendar-alt"></i></span> Calendario
                </a>
              </li>
              <li class="py-2 hover:bg-purple-100 transition duration-300">
=======
>>>>>>> 517b251 (logical general actualizada)
                <a href="{{ route('citas.index') }}" class="flex items-center px-4">
                  <span class="mr-2 drop-shadow-md"><i class="fas fa-users"></i></span> Citas
                </a>
              </li>
              @if(auth()->user()->role === 'admin' || auth()->user()->role === 'editor')
                <li class="py-2 hover:bg-purple-100 transition duration-300">
                  <a href="{{ route('usuarios.index') }}" class="flex items-center px-4">
                    <span class="mr-2 drop-shadow-md"><i class="fas fa-users-cog"></i></span> Gestión Usuarios
                  </a>
                </li>
                <li class="py-2 hover:bg-purple-100 transition duration-300">
                  <a href="{{ route('configuracion.index') }}" class="flex items-center px-4">
                    <span class="mr-2 drop-shadow-md"><i class="fas fa-cogs"></i></span> Configuración
                  </a>
                </li>
              @endif
            </ul>
          </nav>
        </div>
        <div class="p-4">
          <a href="{{ route('login.destroy') }}" class="block py-2 px-4 bg-red-600 hover:bg-red-700 text-white text-center rounded-md transition duration-300 drop-shadow-md">Salir</a>
        </div>
      </aside>
    @endauth

    <!-- Main Content -->
    <div class="flex-1 p-10 ml-{{ auth()->check() ? '64' : '0' }}">
      @yield('content')
    </div>
  </div>

  @if (in_array(Route::currentRouteName(), ['about', 'login.index', 'register.index']))
    <footer class="py-12 bg-gray-800 text-white">
      <div class="container mx-auto text-center transform transition-all duration-500 hover:scale-105">
        <div class="flex flex-wrap justify-between items-center">
          <div class="w-full md:w-1/3 text-left mb-4 md:mb-0">
            <h4 class="text-xl font-semibold">NutriLife</h4>
            <p class="mt-2">Promoting healthy living through balanced nutrition and active lifestyles.</p>
          </div>
          <div class="w-full md:w-1/3 mb-4 md:mb-0">
            <nav class="flex justify-center space-x-4">
              <a href="#header" class="hover:underline">Home</a>
              <a href="#about" class="hover:underline">About</a>
              <a href="#services" class="hover:underline">Services</a>
              <a href="#portfolio" class="hover:underline">Work</a>
              <a href="#contact" class="hover:underline">Contact</a>
            </nav>
          </div>
          <div class="w-full md:w-1/3 text-right">
            <div class="flex justify-center md:justify-end space-x-4">
              <a href="https://www.facebook.com" class="hover:text-gray-400"><span class="fab fa-facebook text-3xl"></span></a>
              <a href="https://www.instagram.com" class="hover:text-gray-400"><span class="fab fa-instagram text-3xl"></span></a>
              <a href="https://www.google.com" class="hover:text-gray-400"><span class="fab fa-google-plus text-3xl"></span></a>
              <a href="https://www.linkedin.com" class="hover:text-gray-400"><span class="fab fa-linkedin text-3xl"></span></a>
            </div>
          </div>
        </div>
        <div class="mt-8">
          <p>&copy; 2024 NutriLife. All rights reserved.</p>
        </div>
      </div>
    </footer>
  @endif
</body>
</html>
