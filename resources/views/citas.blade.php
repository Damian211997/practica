@extends('layouts.app')

@section('title', 'Gestión de Citas - NutriLife')

@section('content')
<div class="container mx-auto py-4 px-4 sm:px-6 lg:px-8">
    <div class="bg-white rounded-lg shadow-lg p-6 mb-4">
        <h2 class="text-2xl font-semibold mb-4">Calendario de Citas</h2>
        <div id='calendar' class="w-full h-[calc(100vh-300px)]"></div>
    </div>

    <!-- Card view for upcoming appointments -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($citas as $cita)
        <div class="bg-white rounded-lg shadow-lg p-4">
            <h3 class="text-lg font-semibold text-purple-800">{{ $cita->nombre }}</h3>
            <p class="text-sm text-gray-600"><strong>Fecha:</strong> {{ $cita->fecha }}</p>
            <p class="text-sm text-gray-600"><strong>Hora:</strong> {{ $cita->hora }}</p>
            <p class="text-sm text-gray-600"><strong>Email:</strong> {{ $cita->email }}</p>
            <p class="text-sm text-gray-600"><strong>Teléfono:</strong> {{ $cita->telefono }}</p>
        </div>
        @endforeach
    </div>
</div>

<!-- Modal para agregar cita -->
<div id="addCitaModal" class="fixed z-10 inset-0 overflow-y-auto hidden">
    <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 transition-opacity" aria-hidden="true">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>

        <!-- Modal panel -->
        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
            <form action="{{ route('citas.store') }}" method="POST">
                @csrf
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="mb-4">
                        <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre</label>
                        <input type="text" name="nombre" id="nombre" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-purple-500 focus:ring-purple-500 sm:text-sm">
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="email" name="email" id="email" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-purple-500 focus:ring-purple-500 sm:text-sm">
                    </div>
                    <div class="mb-4">
                        <label for="telefono" class="block text-sm font-medium text-gray-700">Teléfono</label>
                        <input type="text" name="telefono" id="telefono" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-purple-500 focus:ring-purple-500 sm:text-sm">
                    </div>
                    <div class="mb-4">
                        <label for="fecha" class="block text-sm font-medium text-gray-700">Fecha</label>
                        <input type="date" name="fecha" id="fecha" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-purple-500 focus:ring-purple-500 sm:text-sm">
                    </div>
                    <div class="mb-4">
                        <label for="hora" class="block text-sm font-medium text-gray-700">Hora</label>
                        <input type="time" name="hora" id="hora" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-purple-500 focus:ring-purple-500 sm:text-sm">
                    </div>
                </div>
                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                    <button type="submit" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-purple-600 text-base font-medium text-white hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500 sm:ml-3 sm:w-auto sm:text-sm">
                        Agregar Cita
                    </button>
                    <button type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 sm:mt-0 sm:w-auto sm:text-sm" onclick="closeModal()">
                        Cancelar
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal para mostrar información de la cita -->
<div id="infoCitaModal" class="fixed z-10 inset-0 overflow-y-auto hidden">
    <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 transition-opacity" aria-hidden="true">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>

        <!-- Modal panel -->
        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline-info">
            <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-headline-info">Información de la Cita</h3>
                <div class="mt-2">
                    <p class="text-sm text-gray-500" id="citaInfo"></p>
                </div>
            </div>
            <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                <button type="button" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm" onclick="cancelCita()">
                    Cancelar Cita
                </button>
                <button type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 sm:mt-0 sm:w-auto sm:text-sm" onclick="closeInfoModal()">
                    Cerrar
                </button>
            </div>
        </div>
    </div>
</div>

<link href='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.14/index.global.min.css' rel='stylesheet' />
<script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.14/index.global.min.js'></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            locale: 'es',
            headerToolbar: {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,timeGridWeek,listWeek'
            },
            buttonText: {
                today: 'Hoy',
                month: 'Mes',
                week: 'Semana',
                list: 'Lista'
            },
            selectable: true,
            select: function(info) {
                document.getElementById('fecha').value = info.startStr;
                openModal();
            },
            eventClick: function(info) {
                var eventObj = info.event;
                document.getElementById('citaInfo').innerHTML = `
                    <strong>Nombre:</strong> ${eventObj.title}<br>
                    <strong>Fecha:</strong> ${eventObj.start.toLocaleDateString()}<br>
                    <strong>Hora:</strong> ${eventObj.start.toLocaleTimeString()}
                `;
                document.getElementById('infoCitaModal').dataset.eventId = eventObj.id; // Store the event ID
                openInfoModal();
            },
            events: [
                @foreach($citas as $cita)
                {
                    id: '{{ $cita->id }}', // Add the event ID here
                    title: '{{ $cita->nombre }}',
                    start: '{{ $cita->fecha }}T{{ $cita->hora }}',
                    backgroundColor: '#8b5cf6',
                    borderColor: '#7c3aed'
                },
                @endforeach
            ]
        });
        calendar.render();
    });

    function openModal() {
        document.getElementById('addCitaModal').classList.remove('hidden');
    }

    function closeModal() {
        document.getElementById('addCitaModal').classList.add('hidden');
    }

    function openInfoModal() {
        document.getElementById('infoCitaModal').classList.remove('hidden');
    }

    function closeInfoModal() {
        document.getElementById('infoCitaModal').classList.add('hidden');
    }

    function cancelCita() {
        var eventId = document.getElementById('infoCitaModal').dataset.eventId;
        fetch(`/citas/${eventId}`, {
            method: 'DELETE',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                'Content-Type': 'application/json'
            }
        })
        .then(response => {
            if (response.ok) {
                location.reload(); // Refresh the page to reflect changes
            } else {
                alert('Error al cancelar la cita.');
            }
        });
    }
</script>

<style>
    .fc {
        font-family: 'Arial', sans-serif;
    }
    .fc-toolbar-title {
        font-size: 1.5em !important;
        color: #5a1e96;
    }
    .fc-button-primary {
        background-color: #7c3aed !important;
        border-color: #7c3aed !important;
    }
    .fc-day-today {
        background-color: #f3e8ff !important;
    }
    .fc-event {
        background-color: #8b5cf6;
        border-color: #7c3aed;
    }
    @media (max-width: 640px) {
        .fc-toolbar {
            flex-direction: column;
        }
        .fc-toolbar-title {
            font-size: 1.2em !important;
        }
    }
</style>

@endsection
