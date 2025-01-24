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
            <main class="flex-grow p-6 bg-gray-100">
                <?php include'includes/main.php'; ?>
                <?php include'includes/footer.php'; ?>
            </main>
        </div>
    </div>

    <script>
        const links = document.querySelectorAll('#navLinks li a');

        // Set active link on page load
        window.addEventListener('load', () => {
            const currentHash = window.location.hash; // Get current hash
            links.forEach(link => {
                if (link.getAttribute('href') === currentHash) {
                    link.classList.add('bg-gray-500'); // Add active class
                } else {
                    link.classList.remove('bg-gray-500'); // Remove active class
                }
            });
        });

        // Add event listener to each link
        links.forEach(link => {
            link.addEventListener('click', function() {
                links.forEach(l => l.classList.remove('bg-gray-500')); // Remove active class from all links
                this.classList.add('bg-gray-500'); // Add active class to clicked link
            });
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

        // Initialize on page load
        window.addEventListener("DOMContentLoaded", handleHashChange);

        // Update tabs on hash change
        window.addEventListener("hashchange", handleHashChange);
    
        const menuButton = document.getElementById('menuButton');
        const mobileMenu = document.getElementById('mobileMenu');
        const closeMenu = document.getElementById('closeMenu');

        menuButton.addEventListener('click', () => {
            mobileMenu.classList.remove('hidden');
        });
    
        closeMenu.addEventListener('click', () => {
            mobileMenu.classList.add('hidden');
        });
    </script>
</body>
</html>
