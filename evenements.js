// On a le choix entre 9 formes pour le calendrier
// month
// basicWeek 
// basicDay 
// agendaWeek 
// agendaDay 
// listYear
// listMonth
// listWeek
// listDay

$(document).ready(function() {
        $('#calendar').fullCalendar({
            header: {
                left: 'prev,next today', //Gestion des boutons du widget
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
            },
            defaultDate: null,
            defaultView: 'month', // Changer la forme ici
            navLinks: true, // Pour naviguer aux autres mois/jours
            editable: false,
            eventLimit: true, 
            displayEventTime : true,

            events: [
            {
                title: 'Journée entière',
                start: '2017-07-01'
            },
            {
                title: 'Evenement de 3 jours',
                start: '2017-07-07',
                end: '2017-07-10'
            },
            {
                title: 'Evenement de 2 jours',
                start: '2017-07-19',
                end: '2017-07-21'
            },
            {
                id: 999,
                title: 'Evenement hebdomadaire',
                start: '2017-07-09T16:30:00'
            },
            {
                id: 999,
                title: 'Evenement hebdomadaire',
                start: '2017-07-16T16:30:00'
            },
            {
                id: 999,
                title: 'Evenement hebdomadaire',
                start: '2017-07-23T16:30:00'
            },
            {
                title: 'Conference',
                start: '2017-07-11',
                end: '2017-07-13'
            },
            {
                title: 'Réunion',
                start: '2017-07-12T10:30:00',
                end: '2017-07-12T12:30:00'
            },
            {
                title: 'Pause midi',
                start: '2017-07-12T12:00:00'
            },
            {
                title: 'Réunion (encore)',
                start: '2017-07-12T14:30:00'
            },
            {
                title: 'Afterwork',
                start: '2017-07-12T17:30:00'
            },
            {
                title: 'Diner',
                start: '2017-07-12T20:00:00'
            },
            {
                title: 'Evenement avec un titre très très long qui necessite que tu mettes ta souris dessus',
                start: '2017-07-13T07:00:00'
            },
            {
                title: 'Lien hypertext',
                url: 'http://google.com/',
                start: '2017-07-28'
            }
            ],
            timeFormat: 'H:mm',
            eventClick: function(event,element) {
                if (event.url) {
                    window.open(event.url);
                    return false;
                }
            },
            eventMouseover: function(calEvent, jsEvent) {
                var tooltip = '<div class="tooltipevent">' + calEvent.title + '</div>';
                var $tooltip = $(tooltip).appendTo('body');

                $(this).mouseover(function(e) {
                    $(this).css('z-index', 10000);
                    $tooltip.fadeIn('500');
                    $tooltip.fadeTo('10', 1.9);
                }).mousemove(function(e) {
                    $tooltip.css('top', e.pageY + 10);
                    $tooltip.css('left', e.pageX + 20);
                });
            },
            eventMouseout: function(calEvent, jsEvent) {
                $(this).css('z-index', 8);
                $('.tooltipevent').remove();
            },
        });
    });
