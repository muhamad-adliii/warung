function showSection(section, title) {
    // hide semua section
    document.getElementById("kasirSection").classList.add("hidden");
    document.getElementById("transaksiSection").classList.add("hidden");
    document.getElementById("detailSection").classList.add("hidden");
    document.getElementById(section + "Section").classList.remove("hidden");
    document.getElementById("pageTitle").innerText = title;

    // reset tab
    document.querySelectorAll(".tab-btn").forEach((btn) => {
        btn.classList.remove("border-black", "text-black");
        btn.classList.add("border-transparent", "text-gray-500");
    });

    event.target.classList.remove("border-transparent", "text-gray-500");
    event.target.classList.add("border-black", "text-black");
}
