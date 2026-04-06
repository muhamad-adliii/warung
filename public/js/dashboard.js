const sidebar = document.getElementById("sidebar");
const overlay = document.getElementById("overlay");
const mainContent = document.getElementById("mainContent");
const profileBtn = document.getElementById("profileBtn");
const profileMenu = document.getElementById("profileMenu");

// State
let isCollapsed = false;
let resizeTimer = null;

profileBtn.addEventListener("click", () => {
    profileMenu.classList.toggle("hidden");
});
document.addEventListener("click", (e) => {
    if (!profileBtn.contains(e.target) && !profileMenu.contains(e.target)) {
        profileMenu.classList.add("hidden");
    }
});

// Sidebar open/close function
function openSidebar() {
    if (window.innerWidth < 768) {
        // MOBILE MODE
        sidebar.classList.remove("-translate-x-full");
        overlay.classList.remove("hidden");
        document.body.style.overflow = "hidden";
    } else {
        // DESKTOP MODE - Collapse/Expand
        isCollapsed = !isCollapsed;

        if (isCollapsed) {
            // Collapsed state (icon mode)
            sidebar.style.width = "0";
            sidebar.classList.remove("w-72");
            mainContent.classList.remove("md:ml-72");
            mainContent.classList.add("md:ml-0");
        } else {
            // Expanded state
            sidebar.style.width = "";
            sidebar.classList.add("w-72");
            mainContent.classList.remove("md:ml-0");
            mainContent.classList.add("md:ml-72");
        }
    }

    // Resize chart after transition (gunakan fungsi dari chart.js)
    setTimeout(() => {
        if (typeof window.resizeChart === "function") {
            window.resizeChart();
        }
    }, 350);
}

// Close mobile sidebar
function closeMobileSidebar() {
    if (window.innerWidth < 768) {
        sidebar.classList.add("-translate-x-full");
        overlay.classList.add("hidden");
        document.body.style.overflow = "";
    }
}

// Handle sidebar initial state berdasarkan ukuran layar
function initSidebarState() {
    if (window.innerWidth >= 768) {
        // Desktop mode
        sidebar.classList.remove("-translate-x-full");
        mainContent.classList.add("md:ml-72");
        sidebar.style.width = "";
        sidebar.classList.add("w-72");
        isCollapsed = false;
    } else {
        // Mobile mode
        sidebar.classList.add("-translate-x-full");
        mainContent.classList.remove("md:ml-72");
        overlay.classList.add("hidden");
        document.body.style.overflow = "";
    }
}

// Handle window resize
function handleWindowResize() {
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(function () {
        if (window.innerWidth >= 768) {
            // Desktop mode
            overlay.classList.add("hidden");
            document.body.style.overflow = "";

            if (!isCollapsed) {
                sidebar.classList.remove("-translate-x-full");
                mainContent.classList.add("md:ml-72");
                sidebar.style.width = "";
                sidebar.classList.add("w-72");
            } else {
                sidebar.style.width = "0";
                sidebar.classList.remove("w-72");
                mainContent.classList.remove("md:ml-72");
                mainContent.classList.add("md:ml-0");
            }
        } else {
            // Mobile mode
            if (!sidebar.classList.contains("-translate-x-full")) {
                overlay.classList.remove("hidden");
            } else {
                overlay.classList.add("hidden");
            }
            mainContent.classList.remove("md:ml-72", "md:ml-0");
        }

        // Resize chart
        if (typeof window.resizeChart === "function") {
            window.resizeChart();
        }
    }, 250);
}

// Setup event listeners
function setupEventListeners() {
    // Overlay click
    if (overlay) {
        overlay.addEventListener("click", closeMobileSidebar);
    }

    // Window resize
    window.addEventListener("resize", handleWindowResize);
}

// Initialize dashboard
function initDashboard() {
    initSidebarState();
    setupEventListeners();

    // Initialize chart (dari chart.js)
    if (typeof window.initChart === "function") {
        window.initChart();
    }
}

// Cleanup function (opsional, untuk SPA)
function destroyDashboard() {
    if (resizeTimer) {
        clearTimeout(resizeTimer);
    }

    window.removeEventListener("resize", handleWindowResize);

    if (overlay) {
        overlay.removeEventListener("click", closeMobileSidebar);
    }

    if (typeof window.destroyChart === "function") {
        window.destroyChart();
    }
}

// Start when DOM is ready
document.addEventListener("DOMContentLoaded", function () {
    initDashboard();
});

// Export functions ke global scope
window.openSidebar = openSidebar;
window.closeMobileSidebar = closeMobileSidebar;
window.initDashboard = initDashboard;
window.destroyDashboard = destroyDashboard;
