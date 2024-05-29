//Confirm Password
(() => {
    'use strict'
    const forms = document.querySelectorAll('.needs-validation')

    Array.from(forms).forEach(form => {
      form.addEventListener('submit', event => {
        
        const password = form.querySelector('input[name="pass"]');
        const confirmPassword = form.querySelector('input[name="confirmpass"]');
  
        if (password.value !== confirmPassword.value) {
          event.preventDefault();
          event.stopPropagation();
          confirmPassword.setCustomValidity("Passwords do not match");
        } else {
          confirmPassword.setCustomValidity(""); 
        }
  
        if (!form.checkValidity()) {
          event.preventDefault();
          event.stopPropagation();
        }
  
        form.classList.add('was-validated');
      }, false);
    });
  })();
  