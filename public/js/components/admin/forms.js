export function forms() {
    function validateUser(event) {
      const form = document.getElementById('user-create');
      const email = form.querySelector('input[name="email"]');
      const password = form.querySelector('input[name="password"]');
      const confirmPassword = form.querySelector('input[name="confirm_password"]');
      const sexo = form.querySelector('select[name="sexo"]');
      const rol = form.querySelector('select[name="rol"]');
      const membresia = form.querySelector('select[name="membresia"]');
      
      let isValid = true;
      let erros = [];
      
      if (!email.value.trim()) {
        isValid = false;
        erros.push('El email es requerido');
      }
      
      if (!password.value.trim() && password.value.length < 6) {
        isValid = false;
        erros.push('La contraseña es requerida y debe tener al menos 6 caracteres');
      }
      
      if (password.value !== confirmPassword.value) {
        isValid = false;
        erros.push('Las contraseñas no coinciden');
      }
      
      if (sexo.value === "") {
        isValid = false;
        erros.push('El sexo es requerido');
      }
      
      if (rol.value === "") {
        isValid = false;
        erros.push('El rol es requerido');
      }
      
      if (membresia.value === "") {
        isValid = false;
        erros.push('La membresia es requerida');
      }
      
      if (!isValid) {
        const errorContainer = document.getElementById('error-container');
        errorContainer.innerHTML = '';
        errorContainer.classList.add('pt-1');
        errorContainer.classList.remove('hidden');
        erros.forEach(error => {
            const errorElement = document.createElement('li');
            errorElement.innerText = error;
            errorElement.classList.add('text_red');
            errorContainer.appendChild(errorElement);
        });
        event.preventDefault();
      }
    }
  
    const userForm = document.getElementById('user-create');
    userForm.addEventListener('submit', validateUser);
  }
  