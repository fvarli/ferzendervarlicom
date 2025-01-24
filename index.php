<!DOCTYPE html>
<html lang="en" data-theme="lofi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ferzender Varli | Senior Software Developer</title>
    <meta name="description" content="Ferzender Varli - Senior Software Developer with expertise in MERN stack, PHP, and Laravel.">
    <meta name="keywords" content="Senior Software Developer, MERN stack, PHP, Laravel, React, Node.js, MongoDB, MySQL">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .hidden { display: none; }
    </style>
</head>
<body>
    <div class="flex h-screen">
        <!-- Sidebar -->
        <aside class="hidden lg:flex w-64 bg-gray-800 text-white flex-col">
            <!-- Header -->
            <div class="p-4">
                <h1 class="text-2xl font-bold text-center">Ferzender Varli</h1>
                <h2 class="text-base font-semibold text-center">Senior Software Developer</h2>
            </div>

            <!-- Links -->
            <ul class="space-y-4 p-4 flex-grow">
                <li>
                    <a href="#home" class="block px-4 py-2 bg-gray-700 hover:bg-gray-600 rounded">Home</a>
                </li>
                <li>
                    <a href="#projects" class="block px-4 py-2 bg-gray-700 hover:bg-gray-600 rounded">Projects</a>
                </li>
                <li>
                    <a href="#contact" class="block px-4 py-2 bg-gray-700 hover:bg-gray-600 rounded">Contact</a>
                </li>
            </ul>

            <!-- Social Media Links -->
            <div class="p-4 border-t border-gray-700">
                <div class="flex justify-center space-x-6 text-gray-300">
                    <a href="https://www.linkedin.com/in/fvarli/" target="_blank" aria-label="LinkedIn" rel="noopener noreferrer" class="hover:text-gray-400">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M9.237 8.855v12.139h3.769v-6.003c0-1.584.298-3.118 2.262-3.118 1.937 0 1.961 1.811 1.961 3.218v5.904H21v-6.657c0-3.27-.704-5.783-4.526-5.783-1.835 0-3.065 1.007-3.568 1.96h-.051v-1.66H9.237zm-6.142 0H6.87v12.139H3.095z"></path>
                            <circle cx="4.983" cy="5.009" r="2.188"></circle>
                        </svg>
                    </a>
                    <a href="https://github.com/fvarli" target="_blank" aria-label="GitHub" rel="noopener noreferrer" class="hover:text-gray-400">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12.026 2c-5.509 0-9.974 4.465-9.974 9.974 0 4.406 2.857 8.145 6.821 9.465.499.09.679-.217.679-.481 0-.237-.008-.865-.011-1.696-2.775.602-3.361-1.338-3.361-1.338-.452-1.152-1.107-1.459-1.107-1.459-.905-.619.069-.605.069-.605 1.002.07 1.527 1.028 1.527 1.028.89 1.524 2.336 1.084 2.902.829.091-.645.351-1.085.635-1.334-2.214-.251-4.542-1.107-4.542-4.93 0-1.087.389-1.979 1.024-2.675-.101-.253-.446-1.268.099-2.64 0 0 .837-.269 2.742 1.021a9.582 9.582 0 012.496-.336 9.554 9.554 0 012.496.336c1.906-1.291 2.742-1.021 2.742-1.021.545 1.372.203 2.387.099 2.64.64.696 1.024 1.587 1.024 2.675 0 3.833-2.33 4.675-4.552 4.922.355.308.675.916.675 1.846 0 1.334-.012 2.41-.012 2.737 0 .267.178.577.687.479C19.146 20.115 22 16.379 22 11.974 22 6.465 17.535 2 12.026 2z"></path>
                        </svg>
                    </a>
                    <a href="https://x.com/f_varli" target="_blank" aria-label="X" rel="noopener noreferrer" class="hover:text-gray-400">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 72 72" fill="currentColor">
                            <path d="M40.7568 32.1716L59.3704 11H54.9596L38.7974 29.383L25.8887 11H11L30.5205 38.7983L11 61H15.4111L32.4788 41.5869L46.1113 61H61L40.7557 32.1716H40.7568ZM34.7152 39.0433L32.7374 36.2752L17.0005 14.2492H23.7756L36.4755 32.0249L38.4533 34.7929L54.9617 57.8986H48.1865L34.7152 39.0443V39.0433Z"></path>
                        </svg>
                    </a>
                    <a href="https://instagram.com/f_varli" target="_blank" aria-label="Instagram" rel="noopener noreferrer" class="hover:text-gray-400" style="filter: invert(1)">
                    <svg width="24px" height="24px" viewBox="0 0 24 24" role="img" xmlns="http://www.w3.org/2000/svg"><title>Instagram icon</title><path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/></svg>
                    </a>
                </div>
            </div>
        </aside>

        <!-- Main Content -->
        <div class="flex-grow bg-gray-100">
            <!-- Header for mobile -->
            <header class="lg:hidden bg-gray-800 text-white p-4 flex justify-between items-center">
                <p class="text-xl font-bold sm:text-2xl">Ferzender Varli</p>
                <p class="text-sm sm:text-lg font-medium text-center">Senior Software Developer</p>

                <button id="menuButton" class="text-white focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </header>

            <!-- Mobile Sidebar -->
            <aside id="mobileMenu" class="hidden fixed top-0 left-0 w-64 h-full bg-gray-800 text-white flex flex-col z-50">
                <!-- Close Button -->
                <button id="closeMenu" class="self-end m-4 text-gray-400 hover:text-white focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>

                <!-- Links -->
                <ul class="space-y-4 p-4">
                    <li>
                        <a href="#home" class="block px-4 py-2 bg-gray-700 hover:bg-gray-600 rounded">Home</a>
                    </li>
                    <li>
                        <a href="#projects" class="block px-4 py-2 bg-gray-700 hover:bg-gray-600 rounded">Projects</a>
                    </li>
                    <li>
                        <a href="#contact" class="block px-4 py-2 bg-gray-700 hover:bg-gray-600 rounded">Contact</a>
                    </li>
                </ul>
                <!-- Social Media Links -->
                <div class="p-4 border-t border-gray-700">
                    <div class="flex justify-center space-x-6 text-gray-300">
                        <a href="https://www.linkedin.com/in/fvarli/" target="_blank" aria-label="LinkedIn" rel="noopener noreferrer" class="hover:text-gray-400">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M9.237 8.855v12.139h3.769v-6.003c0-1.584.298-3.118 2.262-3.118 1.937 0 1.961 1.811 1.961 3.218v5.904H21v-6.657c0-3.27-.704-5.783-4.526-5.783-1.835 0-3.065 1.007-3.568 1.96h-.051v-1.66H9.237zm-6.142 0H6.87v12.139H3.095z"></path>
                            <circle cx="4.983" cy="5.009" r="2.188"></circle>
                        </svg>
                        </a>
                        <a href="https://github.com/fvarli" target="_blank" aria-label="GitHub" rel="noopener noreferrer" class="hover:text-gray-400">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12.026 2c-5.509 0-9.974 4.465-9.974 9.974 0 4.406 2.857 8.145 6.821 9.465.499.09.679-.217.679-.481 0-.237-.008-.865-.011-1.696-2.775.602-3.361-1.338-3.361-1.338-.452-1.152-1.107-1.459-1.107-1.459-.905-.619.069-.605.069-.605 1.002.07 1.527 1.028 1.527 1.028.89 1.524 2.336 1.084 2.902.829.091-.645.351-1.085.635-1.334-2.214-.251-4.542-1.107-4.542-4.93 0-1.087.389-1.979 1.024-2.675-.101-.253-.446-1.268.099-2.64 0 0 .837-.269 2.742 1.021a9.582 9.582 0 012.496-.336 9.554 9.554 0 012.496.336c1.906-1.291 2.742-1.021 2.742-1.021.545 1.372.203 2.387.099 2.64.64.696 1.024 1.587 1.024 2.675 0 3.833-2.33 4.675-4.552 4.922.355.308.675.916.675 1.846 0 1.334-.012 2.41-.012 2.737 0 .267.178.577.687.479C19.146 20.115 22 16.379 22 11.974 22 6.465 17.535 2 12.026 2z"></path>
                        </svg>
                        </a>
                        <a href="https://x.com/f_varli" target="_blank" aria-label="X" rel="noopener noreferrer" class="hover:text-gray-400">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 72 72" fill="currentColor">
                            <path d="M40.7568 32.1716L59.3704 11H54.9596L38.7974 29.383L25.8887 11H11L30.5205 38.7983L11 61H15.4111L32.4788 41.5869L46.1113 61H61L40.7557 32.1716H40.7568ZM34.7152 39.0433L32.7374 36.2752L17.0005 14.2492H23.7756L36.4755 32.0249L38.4533 34.7929L54.9617 57.8986H48.1865L34.7152 39.0443V39.0433Z"></path>
                        </svg>
                        </a>
                        <a href="https://instagram.com/f_varli" target="_blank" aria-label="Instagram" rel="noopener noreferrer" class="hover:text-gray-400" style="filter: invert(1)">
                    <svg width="24px" height="24px" viewBox="0 0 24 24" role="img" xmlns="http://www.w3.org/2000/svg"><title>Instagram icon</title><path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/></svg>
                        </a>
                    </div>
                </div>
            </aside>
            <!-- Main Content -->
            <main class="flex-grow p-6 bg-gray-100">
                <div id="home" class="tab-content">
                    <h3 class="text-3xl font-bold">Welcome to Home</h3>
                    <p>This is the home section. Explore the site for more!</p>
                </div>

                <div id="projects" class="tab-content hidden">
                    <h3 class="text-3xl font-bold">My Projects</h3>
                    <p>This page is being updated. Check back soon!</p>
                </div>

                <div id="contact" class="tab-content hidden">
                    <h3 class="text-3xl font-bold">Contact Me</h3>
                    <p>Feel free to reach out via LinkedIn or GitHub.</p>
                    <form class="mt-4 space-y-4" action="send_email.php" method="POST">
                        <div>
                            <label class="block text-gray-700">Name</label>
                            <input type="text" name="name" class="w-full px-4 py-2 border rounded" required>
                        </div>
                        <div>
                            <label class="block text-gray-700">Email</label>
                            <input type="email" name="email" class="w-full px-4 py-2 border rounded" required>
                        </div>
                        <div>
                            <label class="block text-gray-700">Message</label>
                            <textarea name="message" class="w-full px-4 py-2 border rounded" rows="4" required></textarea>
                        </div>
                        <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded">Send</button>
                    </form>
                </div>
            </main>
        </div>
    </div>

    <script>
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
