document.addEventListener("DOMContentLoaded", () => {
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
});