document.addEventListener("DOMContentLoaded", function() {
    const extendIcon = document.querySelector("#navbar i.bi-three-dots");
    const bodyContainer = document.getElementById("body-container");
    const opsiContainer = document.getElementById("opsi");

    const navbar = document.getElementById("navbar");
    opsiContainer.style.height = `calc(100vh - ${navbar.offsetHeight}px)`;

    extendIcon.addEventListener("click", function() {
        bodyContainer.classList.toggle("sidebar-extended");

        // Toggle visibility of text based on sidebar extension
        const isExpanded = bodyContainer.classList.contains("sidebar-extended");
        const textElements = document.querySelectorAll("ul li a .text");

        textElements.forEach(function(textElement) {
            textElement.style.display = isExpanded ? "block" : "none";
        });

        // Set the margin-left of opsi dynamically
        const sidebarWidth = isExpanded ? 270 : 100;
        opsiContainer.style.marginLeft = `${sidebarWidth}px`;
    });
});

