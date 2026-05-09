const openButtons = document.querySelectorAll("[data-modal-target]");
const closeButtons = document.querySelectorAll("[data-close-modal]");

// buka modal
openButtons.forEach((button) => {
    button.addEventListener("click", () => {
        const modalId = button.dataset.modalTarget;
        const modal = document.getElementById(modalId);

        modal.classList.remove("hidden");
        modal.classList.add("flex");
    });
});

// tutup modal tombol
closeButtons.forEach((button) => {
    button.addEventListener("click", () => {
        const modalId = button.dataset.closeModal;
        const modal = document.getElementById(modalId);

        modal.classList.remove("flex");
        modal.classList.add("hidden");
    });
});

// klik overlay
document.querySelectorAll(".modal-overlay").forEach((overlay) => {
    overlay.addEventListener("click", (e) => {
        if (e.target === overlay) {
            overlay.classList.remove("flex");
            overlay.classList.add("hidden");
        }
    });
});
