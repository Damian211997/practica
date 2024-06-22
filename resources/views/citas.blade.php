@extends('layouts.app')

@section('title', 'Gestión de Citas - NutriLife')

@section('content')
<div class="container mx-auto py-12 px-4 sm:px-6 lg:px-8">
  <h1 class="text-5xl font-extrabold text-center text-purple-800 mb-6 animate__animated animate__fadeInDown">
    Gestión de Citas
  </h1>
  <div class="w-32 h-2 bg-gradient-to-r from-pink-500 to-purple-600 mx-auto mb-12 rounded-full animate__animated animate__fadeInUp"></div>

  <div class="max-w-6xl mx-auto">
    <div class="bg-white p-6 sm:p-8 rounded-2xl shadow-xl transition-all duration-300 hover:shadow-2xl overflow-hidden animate__animated animate__zoomIn">
      <div class="overflow-x-auto">
        <table class="min-w-full table-auto">
          <thead class="bg-purple-100">
            <tr>
              <th class="px-4 py-3 text-left text-xs font-semibold text-purple-800 uppercase tracking-wider animate__animated animate__fadeInDown animate__delay-1s">Nombre</th>
              <th class="px-4 py-3 text-left text-xs font-semibold text-purple-800 uppercase tracking-wider animate__animated animate__fadeInDown animate__delay-2s">Email</th>
              <th class="px-4 py-3 text-left text-xs font-semibold text-purple-800 uppercase tracking-wider animate__animated animate__fadeInDown animate__delay-3s">Teléfono</th>
              <th class="px-4 py-3 text-left text-xs font-semibold text-purple-800 uppercase tracking-wider animate__animated animate__fadeInDown animate__delay-4s">Fecha</th>
              <th class="px-4 py-3 text-left text-xs font-semibold text-purple-800 uppercase tracking-wider animate__animated animate__fadeInDown animate__delay-5s">Hora</th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y divide-purple-200">
            @foreach($citas as $cita)
            <tr class="hover:bg-purple-50 transition-colors duration-200 animate__animated animate__fadeIn animate__delay-{{ $loop->iteration }}s">
              <td class="px-4 py-4 whitespace-nowrap">{{ $cita->nombre }}</td>
              <td class="px-4 py-4 whitespace-nowrap">{{ $cita->email }}</td>
              <td class="px-4 py-4 whitespace-nowrap">{{ $cita->telefono }}</td>
              <td class="px-4 py-4 whitespace-nowrap">{{ $cita->fecha }}</td>
              <td class="px-4 py-4 whitespace-nowrap">{{ $cita->hora }}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<style>
  @media (max-width: 640px) {
    table {
      font-size: 0.875rem;
    }
  }

  .animate__delay-1s { --animate-delay: 0.2s; }
  .animate__delay-2s { --animate-delay: 0.4s; }
  .animate__delay-3s { --animate-delay: 0.6s; }
  .animate__delay-4s { --animate-delay: 0.8s; }
  .animate__delay-5s { --animate-delay: 1s; }
</style>

<!-- Incluye la librería Animate.css -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
@endsection
