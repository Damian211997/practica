@extends('layouts.app')

@section('title', 'Gestión de Usuarios')

@section('content')
<div class="container mx-auto py-8">
  <h1 class="text-4xl font-light mb-4 animate__animated animate__fadeInUp">Gestión de Usuarios</h1>
  <div class="w-20 h-1 bg-gradient-to-r from-pink-500 to-blue-400 mx-auto mb-8"></div>
  <div class="flex justify-end mb-4">
    <a href="{{ route('usuarios.create') }}" class="bg-gradient-to-r from-purple-500 to-pink-600 hover:from-purple-600 hover:to-pink-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline transition duration-300 drop-shadow-md">Crear Usuario</a>
  </div>
  <div class="bg-white p-8 rounded-lg shadow-md">
    <table class="min-w-full table-auto">
      <thead class="bg-gray-200">
        <tr>
          <th class="px-4 py-2">Nombre</th>
          <th class="px-4 py-2">Email</th>
          <th class="px-4 py-2">Acciones</th>
        </tr>
      </thead>
      <tbody>
        @foreach($usuarios as $usuario)
        <tr>
          <td class="border px-4 py-2">{{ $usuario->name }}</td>
          <td class="border px-4 py-2">{{ $usuario->email }}</td>
          <td class="border px-4 py-2">
            <a href="{{ route('usuarios.edit', $usuario) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Editar</a>
            <form action="{{ route('usuarios.destroy', $usuario) }}" method="POST" class="inline-block">
              @csrf
              @method('DELETE')
              <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Eliminar</button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection
