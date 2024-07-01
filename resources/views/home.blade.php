@extends('layouts.app')

@section('title', 'Panel de Administración')

@section('content')
<div class="min-h-screen bg-gradient-to-r from-pink-100 to-purple-300">
    <!-- Main Content -->
    <div class="p-4 sm:p-6 md:p-10 mt-16 md:mt-0 md:ml-64 animate__animated animate__fadeIn">
        <div class="bg-white p-6 rounded-lg shadow-lg transition-all duration-300 hover:shadow-xl">
            <h1 class="text-2xl sm:text-3xl font-bold text-purple-800 drop-shadow-md mb-4">
                ¡Bienvenido, {{ auth()->user()->name }}!
            </h1>
            <p class="text-base sm:text-lg font-medium text-gray-700">
                Hoy es {{ \Carbon\Carbon::now()->isoFormat('dddd, D [de] MMMM [de] YYYY') }}
                y son las <span class="font-semibold" id="current-time"></span>.
            </p>
            <p class="text-base sm:text-lg font-medium text-gray-700 mt-4">
                Esperamos que tengas un excelente día gestionando tu plataforma.
            </p>

            <!-- Quick Stats -->
            <div class="mt-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                @foreach(['Usuarios', 'Productos', 'Pedidos', 'Ingresos'] as $stat)
                    <div class="bg-purple-100 p-4 rounded-lg shadow transition-all duration-300 hover:shadow-md hover:bg-purple-200">
                        <h3 class="text-lg font-semibold text-purple-800">{{ $stat }}</h3>
                        <p class="text-2xl font-bold text-purple-600">{{ rand(100, 1000) }}</p>
                    </div>
                @endforeach
            </div>

            <!-- Recent Activity -->
            <div class="mt-8">
                <h2 class="text-xl font-semibold text-purple-800 mb-4">Actividad Reciente</h2>
                <ul class="space-y-2">
                    @for ($i = 0; $i < 5; $i++)
                        <li class="bg-gray-50 p-3 rounded-md shadow-sm transition-all duration-300 hover:bg-gray-100">
                            <span class="font-medium text-purple-700">Usuario {{ $i + 1 }}</span> realizó una acción
                        </li>
                    @endfor
                </ul>
            </div>
        </div>
        @yield('dashboard-content')
    </div>
</div>
@endsection

@section('footer')
<footer class="bg-purple-800 text-white py-4 text-center">
    <p class="drop-shadow-md">&copy; {{ date('Y') }} NutriLife. Todos los derechos reservados.</p>
</footer>
@endsection

@push('scripts')
<script>
    function updateTime() {
        const now = new Date();
        document.getElementById('current-time').textContent = now.toLocaleTimeString('es-ES');
    }

    setInterval(updateTime, 1000);
    updateTime(); // Initial call
</script>
@endpush
