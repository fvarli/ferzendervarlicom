const menuButton = document.getElementById('menuButton');
const mobileMenu = document.getElementById('mobileMenu');
const closeMenu = document.getElementById('closeMenu');
const links = document.querySelectorAll('#navLinks li a');

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
const emailElement = document.getElementById("contactEmail");
emailElement.innerHTML = `<a title="Contact Me" href="mailto:${user}@${domain}">${user}[@]${domain}</a>`;
const emailHomeElement = document.getElementById("contactHomeEmail");
emailHomeElement.innerHTML = `<a title="Contact Me" href="mailto:${user}@${domain}" class="bg-teal-500 text-white px-4 py-2 rounded-lg shadow-md hover:bg-teal-600 text-sm sm:text-base" target="_blank" rel="noopener noreferrer">Email Me</a>`;