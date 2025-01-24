<header class="lg:hidden bg-gray-800 text-white p-4 flex justify-between items-center">
    <a href="/">
        <p class="text-xl font-bold sm:text-2xl">Ferzender Varli</p>
        <p class="text-sm sm:text-lg font-medium text-center">Senior Software Developer</p>
    </a>
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
    <?php include'links.php'; ?>
</aside>