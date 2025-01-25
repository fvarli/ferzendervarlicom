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
const emailElement = document.getElementById("contactEmail");
emailElement.innerHTML = `<a href="mailto:${user}@${domain}">${user}[@]${domain}</a>`;

document.getElementById('contactForm').addEventListener('submit', function (e) {
e.preventDefault(); // Prevent page reload

const formData = new FormData(this);
const responseMessage = document.getElementById('responseMessage');
const submitButton = document.getElementById('submitButton');

// Disable the button and add loading spinner
submitButton.disabled = true;
submitButton.innerHTML = `<span class="loader"></span> Sending...`;

    fetch('http://localhost/includes/contents/send_email.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        // Load the success message
        responseMessage.innerHTML = `<p class="text-green-600">${data}</p>`;
    })
    .catch(error => {
        // Load the error message
        responseMessage.innerHTML = `<p class="text-red-600">An error occurred: ${error.message}</p>`;
    })
    .finally(() => {
        submitButton.disabled = false;
        submitButton.innerHTML = 'Send Message';
    setTimeout(() => {
        responseMessage.innerHTML = ''; // Clear message after 5 seconds
    }, 5000);
});
});