document.addEventListener('DOMContentLoaded', function() {
  var calendarEl = document.getElementById('calendar');
  var calendar = new FullCalendar.Calendar(calendarEl, {
    initialView: 'dayGridMonth',
    headerToolbar: {
      start: 'prev,next,today', 
      center: 'title',
      end: 'dayGridMonth, timeGridWeek, timeGridDay' 
    },
    buttonText: {
      today: 'Hoje',
      month: 'Mês',
      week: 'Semana',
      day: 'Dia',
      list: 'Lista'
    },
    locale: 'pt-br',

    // URL do controller que retorna os eventos
    events: '/controllers/ControllerEvents.php', 

    // Ajuste para garantir que as datas estão no formato correto
    eventDataTransform: function(eventData) {
      eventData.start = eventData.start ? moment(eventData.start).format() : null;
      eventData.end = eventData.end ? moment(eventData.end).format() : null;
      return eventData;
    }
  });

  calendar.render();
});
