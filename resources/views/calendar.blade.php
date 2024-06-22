@extends('layouts.app')

@section('title', 'Calendario - NutriLife')

@section('content')
<div class="container mx-auto py-12 px-4 sm:px-6 lg:px-8">
  <h1 class="text-5xl font-extrabold text-center text-purple-800 mb-6 animate__animated animate__fadeInDown">
    Calendario NutriLife
  </h1>
  <div class="w-32 h-2 bg-gradient-to-r from-pink-500 to-purple-600 mx-auto mb-12 rounded-full animate__animated animate__fadeInUp"></div>

  <div class="max-w-2xl mx-auto">
    <div class="bg-white p-6 sm:p-8 rounded-2xl shadow-xl transition-all duration-300 hover:shadow-2xl animate__animated animate__zoomIn">
      <div id="calendar" class="animate__animated animate__fadeIn animate__delay-1s"></div>
    </div>
  </div>
</div>

<!-- Estilos adicionales -->
<style>
  .fc-view-container {
    background-color: white;
    border-radius: 0.5rem;
    overflow: hidden;
  }
  .fc-toolbar {
    margin-bottom: 1.5rem !important;
  }
  .fc-button-primary {
    background-color: #8B5CF6 !important;
    border-color: #7C3AED !important;
  }
  .fc-button-primary:hover {
    background-color: #7C3AED !important;
    border-color: #6D28D9 !important;
  }
  .fc-event {
    background-color: #F472B6 !important;
    border-color: #EC4899 !important;
    border-radius: 0.25rem !important;
  }
  .fc-today {
    background-color: #F3E8FF !important;
  }
  .fc-day-header {
    background-color: #F9FAFB;
    padding: 0.75rem 0 !important;
  }

  .animate__delay-1s { --animate-delay: 0.5s; }
  .animate__delay-2s { --animate-delay: 0.7s; }
</style>

<!-- Incluye cualquier librería de calendario que necesites -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>
<script>
  $(document).ready(function() {
    $('#calendar').fullCalendar({
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,agendaWeek,agendaDay'
      },
      buttonText: {
        today: 'Hoy',
        month: 'Mes',
        week: 'Semana',
        day: 'Día'
      },
      editable: true,
      eventLimit: true,
      events: [
        {
          title: 'Consulta Nutricional',
          start: '2024-06-01T10:00:00',
          end: '2024-06-01T11:00:00'
        },
        {
          title: 'Taller de Nutrición',
          start: '2024-06-07T15:00:00',
          end: '2024-06-07T17:00:00'
        }
      ],
      eventRender: function(event, element) {
        element.css('font-size', '0.9em');
        element.addClass('animate__animated animate__fadeIn animate__delay-2s');
      },
      viewRender: function(view, element) {
        $(element).find('.fc-row').addClass('animate__animated animate__fadeIn');
        $(element).find('.fc-day-header').addClass('animate__animated animate__fadeInDown');
      }
    });
  });
</script>
@endsection
