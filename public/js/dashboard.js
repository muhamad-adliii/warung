const sidebar = document.getElementById("sidebar");
const overlay = document.getElementById("overlay");
const mainContent = document.getElementById("mainContent");

let isCollapsed = false;

// INIT (desktop default buka)
window.addEventListener("load", () => {
    if (window.innerWidth >= 768) {
        sidebar.classList.remove("-translate-x-full");
    }
});

function openSidebar() {
    if (window.innerWidth < 768) {
        // MOBILE
        sidebar.classList.remove("-translate-x-full");
        overlay.classList.remove("hidden");
    } else {
        // DESKTOP COLLAPSE
        isCollapsed = !isCollapsed;

        if (isCollapsed) {
            // kecil (icon mode)
            sidebar.classList.remove("w-72");
            sidebar.classList.add("w-0");

            mainContent.classList.remove("md:ml-72");
            mainContent.classList.add("md:ml-0");
        } else {
            // normal
            sidebar.classList.remove("w-0");
            sidebar.classList.add("w-72");

            mainContent.classList.remove("md:ml-0");
            mainContent.classList.add("md:ml-72");
        }
    }

    // FIX CHART RESIZE
    setTimeout(() => {
        if (window.myChart) {
            window.myChart.resize();
        }
    }, 300);
}

// CLOSE MOBILE
overlay.addEventListener("click", () => {
    sidebar.classList.add("-translate-x-full");
    overlay.classList.add("hidden");
});
