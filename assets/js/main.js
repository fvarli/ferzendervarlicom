const menuButton = document.getElementById('menuButton');
const mobileMenu = document.getElementById('mobileMenu');
const closeMenu = document.getElementById('closeMenu');
const links = document.querySelectorAll('#navLinks li a');
const validHashes = Array.from(links)
    .map(link => link.getAttribute('href'))
    .filter(href => href.startsWith('#'))
    .filter((value, index, self) => self.indexOf(value) === index);

// Toggle mobile menu visibility
menuButton.addEventListener('click', () => {
    mobileMenu.classList.remove('hidden');
});

closeMenu.addEventListener('click', () => {
    mobileMenu.classList.add('hidden');
});

// Add event listener to each link to close the menu when clicked and set active link
links.forEach(link => {
    link.addEventListener('click', () => {
        mobileMenu.classList.add('hidden');  // Close the menu when any link is clicked
        links.forEach(l => l.classList.remove('bg-gray-500')); // Reset the active class on all links
        link.classList.add('bg-gray-500'); // Add the active class to the clicked link
    });
});

// Function to handle tab switching and invalid hash handling
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

    // Handle invalid hash by redirecting to #home
    if (!validHashes.includes(hash)) {
        window.location.hash = "#home"; // Redirect to valid hash
    }

    // Set active link based on hash
    links.forEach(link => {
        if (link.getAttribute('href') === hash) {
            link.classList.add('bg-gray-500'); // Add active class
        } else {
            link.classList.remove('bg-gray-500'); // Remove active class
        }
    });
}

// Listen for hash changes and handle accordingly
window.addEventListener('hashchange', handleHashChange);

// Set active link on page load
window.addEventListener('load', handleHashChange);

// Set email elements dynamically
const user = "contact";
const domain = "ferzendervarli.com";
const emailElement = document.getElementById("contactEmail");
emailElement.innerHTML = `<a title="Contact Me" href="mailto:${user}@${domain}">${user}[@]${domain}</a>`;
const emailHomeElement = document.getElementById("contactHomeEmail");
emailHomeElement.innerHTML = `<a title="Contact Me" href="mailto:${user}@${domain}" class="bg-teal-500 text-white px-4 py-2 rounded-lg shadow-md hover:bg-teal-600 text-sm sm:text-base" target="_blank" rel="noopener noreferrer">Email Me</a>`;
