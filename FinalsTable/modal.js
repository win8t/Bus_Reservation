// Get the modal element
var modal = document.getElementById("formDetails");

var btn = document.getElementById("formDetailsBtn");

var btn1 = document.getElementsByClassName("btn-close")[0];

btn.onclick = function() {
  modal.style.display = "block";
}

btn1.onclick = function() {
  modal.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
