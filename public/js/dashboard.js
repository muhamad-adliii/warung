const profileBtn = document.getElementById("profileBtn");
const profileMenu = document.getElementById("profileMenu");
const sidebar = document.getElementById("sidebar");
const overlay = document.getElementById("overlay");

profileBtn.addEventListener("click", () => {
    profileMenu.classList.toggle("hidden");
});

document.addEventListener("click", (e) => {
    if (!profileBtn.contains(e.target) && !profileMenu.contains(e.target)) {
        profileMenu.classList.add("hidden");
    }
});

// sidebar
function openSidebar() {
    sidebar.classList.toggle("-translate-x-full");

    if (window.innerWidth < 1024) {
        overlay.classList.toggle("hidden");
    }

    setTimeout(() => {
        if (window.myChart) {
            window.myChart.resize();
        }
    }, 300);
}

overlay.addEventListener("click", () => {
    sidebar.classList.add("-translate-x-full");
    overlay.classList.add("hidden");
});
