document.addEventListener("DOMContentLoaded", () => {
    // Gestion des icônes de bascule
    document.querySelectorAll(".toggle-icon").forEach(icon => {
        icon.addEventListener("click", () => {
            const target = document.querySelector(icon.getAttribute("data-target"));
            if (target.style.display === "none" || target.style.display === "") {
                target.style.display = "block";
                icon.textContent = "▲"; // Flèche vers le haut
            } else {
                target.style.display = "none";
                icon.textContent = "▼"; // Flèche vers le bas
            }
        });
    });

    // Gestion du menu burger (votre script)
    const burgerButton = document.getElementById('burgerButton');
    const burgerMenu = document.getElementById('burgerMenu');
    
    burgerButton.addEventListener('click', function() {
        if (burgerMenu.style.display === 'none') {
            burgerMenu.style.display = 'block';
        } else {
            burgerMenu.style.display = 'none';
        }
    });
});