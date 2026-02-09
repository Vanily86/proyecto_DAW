document.addEventListener("DOMContentLoaded", function() {
    const formulario = document.querySelector("form");
    
    if(formulario) {
        formulario.addEventListener("submit", function(e) {
            let paciente = document.getElementById("paciente").value.trim();
            let fecha = document.getElementById("fecha").value;

            if (paciente.length < 5) {
                alert("El nombre del paciente debe tener al menos 5 caracteres.");
                e.preventDefault();
                return;
            }

            if (!fecha) {
                alert("La fecha es obligatoria.");
                e.preventDefault();
            }
        });
    }
});