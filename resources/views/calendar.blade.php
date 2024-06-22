@extends('layouts.app')

@section('title', 'Calendario - NutriLife')

@section('content')
<div class="container mx-auto py-8">
  <h1 class="text-4xl font-light mb-4 animate__animated animate__fadeInUp">Calendario</h1>
  <div class="w-20 h-1 bg-gradient-to-r from-pink-500 to-blue-400 mx-auto mb-8"></div>
  <div class="flex justify-center">
    <div class="bg-white p-8 rounded-lg shadow-md w-full md:w-3/4 lg:w-1/2">
      <!-- Aquí puedes integrar tu calendario -->
      <div id="calendar"></div>
    </div>
  </div>
</div>

<!-- Incluye cualquier librería de calendario que necesites -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>
<script>
  $(document).ready(function() {
    $('#calendar').fullCalendar({
      // Configura tu calendario aquí
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,agendaWeek,agendaDay'
      },
      editable: true,
      events: [
        // Ejemplo de eventos
        {
          title: 'Evento 1',
          start: '2024-06-01'
        },
        {
          title: 'Evento 2',
          start: '2024-06-07',
          end: '2024-06-10'
        }
      ]
    });
  });
</script>
@endsection
