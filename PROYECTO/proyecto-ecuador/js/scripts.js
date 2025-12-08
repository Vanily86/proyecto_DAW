// Slideshow (solo en inicio)
if(document.getElementById("slideImage")){
    const images = [
        {src: 'img/costa.jpg', alt: 'Costa del Ecuador'},
        {src: 'img/sierra.jpg', alt: 'Sierra del Ecuador'},
        {src: 'img/oriente.jpg', alt: 'Oriente del Ecuador'}
    ];
    let currentIndex = 0;
    const slideImage = document.getElementById("slideImage");
    const prevBtn = document.getElementById("prev");
    const nextBtn = document.getElementById("next");

    function showSlide(index){
        slideImage.src = images[index].src;
        slideImage.alt = images[index].alt;
    }

    // Botón siguiente
    nextBtn.addEventListener('click', () => {
        currentIndex = (currentIndex + 1) % images.length;
        showSlide(currentIndex);
    });

    // Botón anterior
    prevBtn.addEventListener('click', () => {
        currentIndex = (currentIndex - 1 + images.length) % images.length;
        showSlide(currentIndex);
    });

    // Mostrar la primera imagen al cargar la página
    showSlide(currentIndex);
}

// Dark/light mode
const toggleThemeBtn = document.getElementById("toggleTheme");
let darkMode = false;
if(toggleThemeBtn){
    toggleThemeBtn.addEventListener("click", () => {
        darkMode = !darkMode;
        if(darkMode){
            document.body.style.background = "#121212";
            document.body.style.color = "#ddd";
            document.querySelector("header").style.background = "#222";
            document.querySelector("footer").style.background = "#222";
            toggleThemeBtn.textContent = "☀️";
        } else {
            document.body.style.background = "white";
            document.body.style.color = "var(--text)";
            document.querySelector("header").style.background = "var(--azul)";
            document.querySelector("footer").style.background = "var(--azul)";
            toggleThemeBtn.textContent = "🌙";
        }
    });
}

// Formulario de contacto
if(document.getElementById("contactForm")){
    const form = document.getElementById("contactForm");
    const status = document.getElementById("formStatus");
    form.addEventListener("submit", (e)=>{
        e.preventDefault();
        const name = document.getElementById("name").value.trim();
        const email = document.getElementById("email").value.trim();
        const message = document.getElementById("message").value.trim();
        if(name && email && message){
            status.textContent = "¡Mensaje enviado correctamente!";
            status.style.color = "green";
            form.reset();
        } else {
            status.textContent = "Por favor, completa todos los campos.";
            status.style.color = "red";
        }
    });
}
