$('#accordion').on('show.bs.collapse', function() {
    $('#accordion .in').collapse('hide');
  });

  function swapValues() {
    // Get the selected values of origin and destination
    var originValue = document.getElementById('origin').value;
    var destinationValue = document.getElementById('destination').value;
    
    // Swap the values
    document.getElementById('origin').value = destinationValue;
    document.getElementById('destination').value = originValue;
  }


  function setMinDate() {
    // Get current date in Philippine time zone
    var philippineDate = new Date();
    var philippineOffset = 8 * 60; // Philippine time zone offset in minutes (UTC+8)
    var utc = philippineDate.getTime() + (philippineDate.getTimezoneOffset() * 60000);
    var philippineTime = new Date(utc + (60000 * philippineOffset));

    // Format date in yyyy-mm-dd format
    var formattedDate = philippineTime.toLocaleDateString('en-CA');

    // Set the minimum date and change input type to date
    document.getElementById("tripDate").setAttribute('type', 'date');
    document.getElementById("tripDate").setAttribute('min', formattedDate);
}

