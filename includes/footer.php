<footer>
    © <?php echo date("Y"); ?> 1M English School. All rights reserved.
</footer>

<script>
// Wait until DOM loaded
document.addEventListener("DOMContentLoaded", function() {
    const pageWrapper = document.querySelector(".page-wrapper");

    // FADE-IN on page load
    setTimeout(() => {
        pageWrapper.classList.add("loaded");
    }, 50);

    // FADE-OUT on link click
    const links = document.querySelectorAll("a[href*='.php']");

    links.forEach(link => {
        link.addEventListener("click", function(e) {
            e.preventDefault();
            const target = this.href;

            pageWrapper.classList.add("fade-out");

            // Force reflow to make sure fade-out starts
            void pageWrapper.offsetWidth;

            // Navigate after transition
            setTimeout(() => {
                window.location.href = target;
            }, 400);
        });
    });

    // =========================
    // MOBILE MENU TOGGLE (ADDED)
    // =========================
    const menuToggle = document.getElementById("menuToggle");
    const navMenu = document.getElementById("navMenu");

    if (menuToggle && navMenu) {
        menuToggle.addEventListener("click", function() {
            navMenu.classList.toggle("active");
        });
    }
});
</script>

</body>
</html>