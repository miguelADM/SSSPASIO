const sidebar = document.querySelector(".sidebar");
const btnSidebarToggle = document.querySelector(".sidebar__toggle");

btnSidebarToggle.addEventListener("click", () => {
    if (sidebar.style.display === "none") {
        sidebar.style.display = "block";
    }
    else {
        sidebar.style.display = "none";
    }
})

