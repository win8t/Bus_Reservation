// Get the modal element
var modal = document.getElementById("formDetails");

// Get the button that opens the modal
var btn = document.getElementById("formDetailsBtn");

// Get the <span> element that closes the modal
var btn1 = document.getElementsByClassName("btn-close")[0];

// When the user clicks the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
btn1.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}