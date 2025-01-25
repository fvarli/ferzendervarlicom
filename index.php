<!DOCTYPE html>
<html lang="en">
<head>
    <?php include'includes/header.php'; ?>
</head>
<body>
    <div class="flex h-screen">
        <!-- Sidebar -->
        <?php include'includes/sidebar.php'; ?>

        <!-- Main Content -->
        <div class="flex-grow bg-gray-100">
            <!-- Header for mobile -->
            <?php include'includes/mobile-sidebar.php'; ?>

            <!-- Main Content -->
            <main class="flex-grow p-6 overflow-y-auto lg:ml-64 bg-gray-100 md:flex md:justify-center">
                <?php include'includes/main.php'; ?>
                <?php include'includes/footer.php'; ?>
            </main>
        </div>
    </div>

    <script>
    const homeContact = document.getElementById('homeContact');
    const menuButton = document.getElementById('menuButton');
    const mobileMenu = document.getElementById('mobileMenu');
    const closeMenu = document.getElementById('closeMenu');
    const links = document.querySelectorAll('#navLinks li a');

    homeContact.addEventListener('click', () => {
        document.querySelector("#navLinks > .home > a").classList.remove('bg-gray-500');
        document.querySelector("#navLinks > .contact > a").classList.add('bg-gray-500');
    });

    menuButton.addEventListener('click', () => {
        mobileMenu.classList.remove('hidden');
    });

    closeMenu.addEventListener('click', () => {
        mobileMenu.classList.add('hidden');
    });

    // Add event listener to each link to close the menu when clicked
    links.forEach(link => {
        link.addEventListener('click', () => {
            mobileMenu.classList.add('hidden');  // Close the menu when any link is clicked
            links.forEach(l => l.classList.remove('bg-gray-500')); // Reset the active class on all links
            link.classList.add('bg-gray-500'); // Add the active class to the clicked link
        });
    });

    // Set active link on page load
    window.addEventListener('load', () => {
        const currentHash = window.location.hash || "#home"; // Get current hash or default to #home
        links.forEach(link => {
            if (link.getAttribute('href') === currentHash) {
                link.classList.add('bg-gray-500'); // Add active class
            } else {
                link.classList.remove('bg-gray-500'); // Remove active class
            }
        });

        handleHashChange(); // Handle tab visibility on page load
    });

    // Function to handle tab switching
    function handleHashChange() {
        const hash = window.location.hash || "#home"; // Default to #home
        const tabs = document.querySelectorAll(".tab-content");

        // Hide all tabs and show the active one
        tabs.forEach(tab => {
            tab.classList.add("hidden");
            if ("#" + tab.id === hash) {
                tab.classList.remove("hidden");
            }
        });
    }

    window.addEventListener('hashchange', handleHashChange);

    const user = "contact";
    const domain = "ferzendervarli.com";
    const emailElement = document.getElementById("email");
    emailElement.innerHTML = `<a href="mailto:${user}@${domain}">${user}[@]${domain}</a>`;
</script>
</body>
</html>
