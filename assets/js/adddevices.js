   // Animación al enviar el formulario
   document.getElementById('aparatoForm').addEventListener('submit', function(event) {
    event.preventDefault();
    
    // Puedes agregar una animación de "Cargando" aquí si lo deseas
    
    alert('Formulario enviado correctamente!');
    
    // Aquí puedes realizar la lógica de envío con AJAX o enviar el formulario como normalmente lo harías
});