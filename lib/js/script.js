document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
      initialView: 'dayGridMonth',
      headerToolbar:{
        start: 'prev,next,today', 
        center: 'title',
        end: 'dayGridMonth, timeGridWeek, timeGridDay' 
      },
      buttonText:{
        today:    'Hoje',
        month:    'Mês',
        week:     'Semana',
        day:      'Dia',
        list:     'Lista'
      },

      locale:'pt-br',
      events:'/controllers/ControllerEvents.php'
    
    });

    calendar.render();
  });