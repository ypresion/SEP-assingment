const button = document.getElementById('hamburger');
const menu = document.getElementById('menu');

button.addEventListener("click", function() {
    menu.classList.toggle('hidden');
});

