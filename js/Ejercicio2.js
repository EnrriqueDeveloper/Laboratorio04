$(document).ready(function() {
    $("#user-form").submit(function(event) {
      // Validar edad
      var edad = $("#edad").val();
      if (isNaN(edad) || edad < 18) {
        alert("Solo se admiten usuarios mayores de edad");
        event.preventDefault();
      }
    });
  });