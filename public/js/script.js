let navLinks = document.querySelectorAll(".nav-link")

navLinks.forEach(navLink => {
    if (document.URL == navLink.href) {
        navLink.classList.add("active")
    }
})