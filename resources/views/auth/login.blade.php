@extends('layouts.app')

@section('title', 'Login')

@section('content')

<div class="block mx-auto my-12 p-8 bg-gradient-to-r from-purple-400 to-pink-500 w-1/3 rounded-lg shadow-lg">
    <h1 class="text-3xl text-center font-bold text-white mb-6">Login</h1>
    <form class="mt-4" method="POST" action="{{ route('login.store') }}">
      @csrf
      <input type="email" class="rounded-md bg-white bg-opacity-20 w-full text-lg text-white placeholder-white placeholder-opacity-70 p-3 my-2 focus:outline-none focus:ring-2 focus:ring-white" placeholder="Email" id="email" name="email">
      <input type="password" class="rounded-md bg-white bg-opacity-20 w-full text-lg text-white placeholder-white placeholder-opacity-70 p-3 my-2 focus:outline-none focus:ring-2 focus:ring-white" placeholder="Contraseña" id="password" name="password">
      @error('message')
        <p class="rounded-md bg-red-100 bg-opacity-20 w-full text-white p-2 my-2">* {{ $message }}</p>
      @enderror
      <button type="submit" class="rounded-md bg-white bg-opacity-20 w-full text-lg text-white font-semibold p-3 my-3 hover:bg-opacity-30 transition duration-300">Iniciar Sesión</button>
    </form>
  </div>
@endsection
