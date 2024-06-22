@extends('layouts.app')

@section('title', 'Admin Dashboard')

@section('content')
<div class="flex min-h-screen bg-gradient-to-r from-pink-100 to-purple-300">
  <!-- Sidebar -->
  <aside class="fixed left-0 top-0 h-screen w-64 bg-white text-purple-800 flex flex-col justify-between shadow-lg">
    <div>
      <div class="p-4">
        <h2 class="text-2xl font-bold drop-shadow-md">Menu</h2>
      </div>
      <nav class="mt-5">
        <ul class="text-left">
          <li class="py-2 hover:bg-purple-100 transition duration-300">
            <a href="{{ route('calendar.index') }}" class="flex items-center px-4">
              <span class="mr-2 drop-shadow-md"><i class="fas fa-calendar-alt"></i></span> Calendario
            </a>
          </li>
          <li class="py-2 hover:bg-purple-100 transition duration-300">
            <a href="{{ route('citas.index') }}" class="flex items-center px-4">
              <span class="mr-2 drop-shadow-md"><i class="fas fa-users"></i></span> Citas
            </a>
          </li>
          <li class="py-2 hover:bg-purple-100 transition duration-300">
            <a class="flex items-center px-4">
              <span class="mr-2 drop-shadow-md"><i class="fas fa-users-cog"></i></span> Gestión Usuarios
            </a>
          </li>
          <li class="py-2 hover:bg-purple-100 transition duration-300">
            <a class="flex items-center px-4">
              <span class="mr-2 drop-shadow-md"><i class="fas fa-cogs"></i></span> Configuración
            </a>
          </li>
        </ul>
      </nav>
    </div>
    <div class="p-4">
      <a href="{{ route('login.destroy') }}" class="block py-2 px-4 bg-red-600 hover:bg-red-700 text-white text-center rounded-md transition duration-300 drop-shadow-md">Salir</a>
    </div>
  </aside>

  <!-- Main Content -->
  <div class="ml-64 flex-1 p-10">
    @yield('dashboard-content')
  </div>
</div>
@endsection

@section('footer')
<p class="text-purple-800 drop-shadow-md">&copy; 2024 NutriLife. Todos los derechos reservados.</p>
@endsection
