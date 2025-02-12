const contenedor = document.getElementById('contenedor');
const registroBtn = document.getElementById('registro');
const inicioBtn = document.getElementById('sesionIni');

registroBtn.addEventListener('click', () => {
    container.classList.add("active");
});

sesionIniBtn.addEventListener('click', () => {
    container.classList.remove("active");
});