/* global bootstrap: false */
(function () {
  'use strict'
  var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
  tooltipTriggerList.forEach(function (tooltipTriggerEl) {
    new bootstrap.Tooltip(tooltipTriggerEl)
  })
})

const navLinkEls = document.querySelectorAll('.nav-link');

navLinkEls.forEach(navLinkEl => {
  navLinkEl.addEventListener('click', () => {
  document.querySelector('.active')?.classList.remove('active');
  navLinkEl.classList.add('active');
});
});


