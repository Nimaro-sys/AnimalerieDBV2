document.addEventListener("DOMContentLoaded", () => {
    console.log("DOM chargé !");

    const burgerButton = document.getElementById('burgerButton');
    const burgerMenu = document.getElementById('burgerMenu');

    console.log("burgerButton:", burgerButton);
    console.log("burgerMenu:", burgerMenu);

    if (burgerButton && burgerMenu) {
        burgerButton.addEventListener('click', () => {
            burgerMenu.style.display = burgerMenu.style.display === 'none' ? 'block' : 'none';
        });
    } else {
        console.error("Erreur : Vérifie les IDs de tes éléments !");
    }
});