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
(function ($) {

Drupal.behaviors.rooms_date_popup = {
  attach: function(context) {
    var dates = $( "#edit-rooms-start-date-datepicker-popup-0, #edit-rooms-end-date-datepicker-popup-0" ).datepicker({
    dateFormat: Drupal.settings.rooms.roomsDateFormat,
      //defaultDate: "+1w",
      minDate: "+" + Drupal.settings.rooms.roomsBookingStartDay + "d",
      //maxDate: "+2M +10D", // This can be set via a variable to somthing reasonable
      //changeMonth: true,
      //numberOfMonths: 1,
      onSelect: function( selectedDate ) {
        var option = this.id == "edit-rooms-start-date-datepicker-popup-0" ? "minDate" : "na", //can change na to maxDate to set the range
          instance = $( this ).data( "datepicker" ),
          date = $.datepicker.parseDate(
            instance.settings.dateFormat ||
            $.datepicker._defaults.dateFormat,
            selectedDate, instance.settings );
        dates.not( this ).datepicker( "option", option, date );
      },
      beforeShow: function()
      {
        setTimeout(function()
          {
            // If you think this is ugly you are right - read this though: http://blog.foersom.dk/post/598839422/dealing-with-z-index-in-jquery-uis-datepicker
            $(".ui-datepicker").css("z-index", 12);
          }, 10);
      }
    });
  }
};
})(jQuery);
;
(function ($) {

/**
 * A progressbar object. Initialized with the given id. Must be inserted into
 * the DOM afterwards through progressBar.element.
 *
 * method is the function which will perform the HTTP request to get the
 * progress bar state. Either "GET" or "POST".
 *
 * e.g. pb = new progressBar('myProgressBar');
 *      some_element.appendChild(pb.element);
 */
Drupal.progressBar = function (id, updateCallback, method, errorCallback) {
  var pb = this;
  this.id = id;
  this.method = method || 'GET';
  this.updateCallback = updateCallback;
  this.errorCallback = errorCallback;

  // The WAI-ARIA setting aria-live="polite" will announce changes after users
  // have completed their current activity and not interrupt the screen reader.
  this.element = $('<div class="progress" aria-live="polite"></div>').attr('id', id);
  this.element.html('<div class="bar"><div class="filled"></div></div>' +
                    '<div class="percentage"></div>' +
                    '<div class="message">&nbsp;</div>');
};

/**
 * Set the percentage and status message for the progressbar.
 */
Drupal.progressBar.prototype.setProgress = function (percentage, message) {
  if (percentage >= 0 && percentage <= 100) {
    $('div.filled', this.element).css('width', percentage + '%');
    $('div.percentage', this.element).html(percentage + '%');
  }
  $('div.message', this.element).html(message);
  if (this.updateCallback) {
    this.updateCallback(percentage, message, this);
  }
};

/**
 * Start monitoring progress via Ajax.
 */
Drupal.progressBar.prototype.startMonitoring = function (uri, delay) {
  this.delay = delay;
  this.uri = uri;
  this.sendPing();
};

/**
 * Stop monitoring progress via Ajax.
 */
Drupal.progressBar.prototype.stopMonitoring = function () {
  clearTimeout(this.timer);
  // This allows monitoring to be stopped from within the callback.
  this.uri = null;
};

/**
 * Request progress data from server.
 */
Drupal.progressBar.prototype.sendPing = function () {
  if (this.timer) {
    clearTimeout(this.timer);
  }
  if (this.uri) {
    var pb = this;
    // When doing a post request, you need non-null data. Otherwise a
    // HTTP 411 or HTTP 406 (with Apache mod_security) error may result.
    $.ajax({
      type: this.method,
      url: this.uri,
      data: '',
      dataType: 'json',
      success: function (progress) {
        // Display errors.
        if (progress.status == 0) {
          pb.displayError(progress.data);
          return;
        }
        // Update display.
        pb.setProgress(progress.percentage, progress.message);
        // Schedule next timer.
        pb.timer = setTimeout(function () { pb.sendPing(); }, pb.delay);
      },
      error: function (xmlhttp) {
        pb.displayError(Drupal.ajaxError(xmlhttp, pb.uri));
      }
    });
  }
};

/**
 * Display errors on the page.
 */
Drupal.progressBar.prototype.displayError = function (string) {
  var error = $('<div class="messages error"></div>').html(string);
  $(this.element).before(error).hide();

  if (this.errorCallback) {
    this.errorCallback(this);
  }
};

})(jQuery);
;
