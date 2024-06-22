@extends('layouts.app')

@section('title', 'Gestión de Citas')

@section('content')
<div class="container mx-auto py-8">
  <h1 class="text-4xl font-light mb-4 animate__animated animate__fadeInUp">Gestión de Citas</h1>
  <div class="w-20 h-1 bg-gradient-to-r from-pink-500 to-blue-400 mx-auto mb-8"></div>
  <div class="flex justify-center">
    <div class="bg-white p-8 rounded-lg shadow-md w-full md:w-3/4 lg:w-1/2">
      <table class="min-w-full table-auto">
        <thead class="bg-gray-200">
          <tr>
            <th class="px-4 py-2">Nombre</th>
            <th class="px-4 py-2">Email</th>
            <th class="px-4 py-2">Teléfono</th>
            <th class="px-4 py-2">Fecha</th>
            <th class="px-4 py-2">Hora</th>
          </tr>
        </thead>
        <tbody>
          @foreach($citas as $cita)
          <tr>
            <td class="border px-4 py-2">{{ $cita->nombre }}</td>
            <td class="border px-4 py-2">{{ $cita->email }}</td>
            <td class="border px-4 py-2">{{ $cita->telefono }}</td>
            <td class="border px-4 py-2">{{ $cita->fecha }}</td>
            <td class="border px-4 py-2">{{ $cita->hora }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection
