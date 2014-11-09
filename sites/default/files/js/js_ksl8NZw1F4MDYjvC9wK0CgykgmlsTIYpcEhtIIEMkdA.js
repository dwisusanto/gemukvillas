/**
 * Attaches the calendar behavior to all required fields
 */
(function ($) {
Drupal.behaviors.date_popup = {
  attach: function (context) {
  for (var id in Drupal.settings.datePopup) {
    $('#'+ id).bind('focus', Drupal.settings.datePopup[id], function(e) {
      if (!$(this).hasClass('date-popup-init')) {
        var datePopup = e.data;
        // Explicitely filter the methods we accept.
        switch (datePopup.func) {
          case 'datepicker':
            $(this)
              .datepicker(datePopup.settings)
              .addClass('date-popup-init')
            $(this).click(function(){
              $(this).focus();
            });
            break;

          case 'timeEntry':
            $(this)
              .timeEntry(datePopup.settings)
              .addClass('date-popup-init')
            $(this).click(function(){
              $(this).focus();
            });
            break;
          case 'timepicker':
            // Translate the PHP date format into the style the timepicker uses.
            datePopup.settings.timeFormat = datePopup.settings.timeFormat
              // 12-hour, leading zero,
              .replace('h', 'hh')
              // 12-hour, no leading zero.
              .replace('g', 'h')
              // 24-hour, leading zero.
              .replace('H', 'HH')
              // 24-hour, no leading zero.
              .replace('G', 'H')
              // AM/PM.
              .replace('A', 'p')
              // Minutes with leading zero.
              .replace('i', 'mm')
              // Seconds with leading zero.
              .replace('s', 'ss');

            datePopup.settings.startTime = new Date(datePopup.settings.startTime);
            $(this)
              .timepicker(datePopup.settings)
              .addClass('date-popup-init');
            $(this).click(function(){
              $(this).focus();
            });
            break;
        }
      }
    });
  }
  }
};
})(jQuery);
;
(function ($) {


Drupal.behaviors.rooms_availability_reference = {
  attach: function(context) {
    var minDate =new Date();
    var i = 0;

    $('.cal').once('cal', function() {
      var j = i;
      var lastSource;

      $(this).fullCalendar({
        ignoreTimezone:false,
        editable:false,
        month:minDate.getMonth(),
        year:minDate.getFullYear(),
        header:{
          left: '',
          center: 'title',
          right: ''
        },
        viewDisplay: function(view) {
          if (view.name == 'month') {
            view.calendar.removeEventSource(lastSource);
            view.calendar.refetchEvents();

            url = '?q=rooms/units/unit/' + Drupal.settings.roomsAvailabilityRef[j].unitID + '/availability/json/'
                      + view.start.getFullYear() + '/' + (view.start.getMonth() + 1) + '/1/' //start day
                      + view.end.getFullYear() +'/' + (view.end.getMonth() + 1) +'/0/' // end day
                      + Drupal.settings.roomsAvailabilityRef[j].style;

            view.calendar.addEventSource(url);

            lastSource = url;
          }
        }
      });

      i++;
    });
		i = 0;
		$('.cal2').once('cal2', function() {
      var j = i;
      var lastSource;

      $(this).fullCalendar({
        ignoreTimezone:false,
        editable:false,
        month:minDate.getMonth()+1,
        year:minDate.getFullYear(),
        header:{
          left: '',
          center: 'title',
          right: ''
        },
        viewDisplay: function(view) {
          if (view.name == 'month') {
            view.calendar.removeEventSource(lastSource);
            view.calendar.refetchEvents();

            url = '?q=rooms/units/unit/' + Drupal.settings.roomsAvailabilityRef[j].unitID + '/availability/json/'
                      + view.start.getFullYear() + '/' + (view.start.getMonth() + 1) + '/1/' //start day
                      + view.end.getFullYear() +'/' + (view.end.getMonth() + 1) +'/0/' // end day
                      + Drupal.settings.roomsAvailabilityRef[j].style;

            view.calendar.addEventSource(url);

            lastSource = url;
          }
        }
      });

      i++;
    });
		$('#prevbutton').click(function() {
        $('.cal').fullCalendar('prev').fullCalendar('prev');
        $('.cal2').fullCalendar('prev').fullCalendar('prev');
    });
    $('#nextbutton').click(function() {
        $('.cal').fullCalendar('next').fullCalendar('next');
        $('.cal2').fullCalendar('next').fullCalendar('next');
    });
		$('#todaybutton').click(function() {
        $('.cal').fullCalendar('today');
        $('.cal2').fullCalendar('today').fullCalendar('next');
    });
    // Resize takes care of some quirks on occasion
    $(window).resize();

  }
};
})(jQuery);
;
