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