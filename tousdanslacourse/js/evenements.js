$(document).ready(function() {
    $('#calendar').fullCalendar({
        header: {
            left: 'prev',
            center: 'title',
            right: 'next'
        },
        filterResourcesWithEvents: true,
        defaultView: 'listWeek',
        defaultDate: '2017-07-26',
        aspectRatio: 1.09,
            navLinks: false, // can click day/week names to navigate views
            editable: false,
            eventLimit: true, // allow "more" link when too many events
            displayEventTime : true,
            events: [
            {
                title: 'Rendez-vous à l’accueil pour le départ',
                start: '2017-07-26T12:00:00'
            },
            {
                title: 'Départ',
                start: '2017-07-26T12:15:00'
            },
            {
                title: 'Retour et versement de dons',
                start: '2017-07-26T13:30:00'
            },
            {
                title: 'Rendez-vous à l’accueil pour le départ',
                start: '2017-08-30T12:00:00'
            },
            {
                title: 'Départ',
                start: '2017-08-30T12:15:00'
            },
            {
                title: 'Retour et versement de dons',
                start: '2017-08-30T13:30:00'
            },
            {
                title: 'Petit déjeuner collectif',
                start: '2017-09-02T08:00:00'
            },
            {
                title: 'A venir',
                start: '2017-09-02T15:00:00'
            }
            ],
            timeFormat: 'H:mm',
            eventClick: function(event,element) {
                if (event.url) {
                    window.open(event.url);
                    return false;
                }
            },
        });
});
