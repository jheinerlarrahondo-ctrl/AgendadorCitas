document.addEventListener("DOMContentLoaded", () => {

    function loadComponent(id, file) {
        const element = document.getElementById(id);

        // 🔒 Si el contenedor no existe en la página, no hace nada
        if (!element) return;

        fetch(file)
            .then(response => {
                if (!response.ok) {
                    throw new Error("No se pudo cargar " + file);
                }
                return response.text();
            })
            .then(data => {
                element.innerHTML = data;
            })
            .catch(error => console.error(error));
    }

    // Cargar componentes solo si existen
    loadComponent("header", "components/header.html");
    loadComponent("formulario", "components/form-cita.html");
    loadComponent("footer", "components/footer.html");

});


/* =========================
   VALIDACIÓN DEL FORMULARIO
========================= */

document.addEventListener("submit", function(e) {

    if (e.target.id !== "citaForm") return;

    e.preventDefault();

    const fechaInput = document.getElementById("fecha");
    const mensaje = document.getElementById("mensaje");

    // 🔒 Validar que existan
    if (!fechaInput || !mensaje) return;

    const fecha = fechaInput.value;
    const hoy = new Date().toISOString().split("T")[0];

    if (fecha < hoy) {
        mensaje.innerHTML =
            "<p class='error'>No puedes seleccionar una fecha pasada.</p>";
        return;
    }

    mensaje.innerHTML =
        "<p class='success'>Formulario listo para enviar al backend.</p>";
});