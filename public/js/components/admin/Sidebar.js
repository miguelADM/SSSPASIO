export function sidebar() {
    // Toggle sidebar
    const sidebar = document.querySelector(".sidebar");
    const btnSidebarToggle = document.querySelector(".sidebar__toggle");

    btnSidebarToggle.addEventListener("click", () => {
        sidebar.classList.toggle("show-sidebar");
    })

    // Active sidebar
    const sidebarItem = document.querySelectorAll(".sidebar__list-item");
    const url = window.location.pathname;

    sidebarItem?.forEach((item) => {
        const { pathname: href } = new URL(item.href);

        if (href === url) {
            item.classList.add("active");
        }
    })
}
