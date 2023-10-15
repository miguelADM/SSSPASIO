const sidebar = document.querySelector(".sidebar");
const btnSidebarToggle = document.querySelector(".sidebar__toggle");

btnSidebarToggle.addEventListener("click", () => {
    sidebar.classList.toggle("show-sidebar");
})

