# Ferzender Varli | Senior Software Developer Portfolio

This repository contains the source code for Ferzender Varli's personal portfolio website, showcasing projects, skills, experience, and other professional information.

Website: [www.ferzendervarli.com](https://www.ferzendervarli.com/)

## Table of Contents

- [About](#about)
- [Features](#features)
- [Directory Structure](#directory-structure)
- [Technologies Used](#technologies-used)
- [Installation](#installation)
- [Usage](#usage)
- [License](#license)

---

## About

This portfolio website was designed and developed by Ferzender Varli, a Senior Software Developer with expertise in full-stack development. The site highlights Ferzender's professional journey, skills, and projects while also serving as a platform for networking and collaboration.

---

## Features

- **Dynamic Content**: Modular structure using PHP includes for reusable components like the header, footer, and navigation.
- **Responsive Design**: Fully responsive layout optimized for both desktop and mobile devices, including a **mobile sidebar**.
- **Custom Styling**: Tailored CSS for a clean and professional appearance.
- **Interactive Navigation**: JavaScript-enabled tab-based navigation and mobile menu toggling.
- **Dynamic Data Management**: JSON files are used to handle dynamic data efficiently.
- **SEO-Optimized**: Meta tags, Open Graph, and Twitter Cards for better search engine visibility and social sharing.
- **Social Media Integration**: Links to GitHub, LinkedIn, Fiverr, Upwork, and more.
- **Dynamic Email Display**: Protects email visibility with JavaScript-generated links.

---

## Directory Structure

```
└── fvarli-ferzendervarlicom/
    ├── README.md                     # Project documentation and instructions
    ├── LICENSE                       # License information for the project
    ├── index.php                     # Main entry point
    ├── assets/
    │   ├── css/
    │   │   └── custom.css            # Custom styles
    │   ├── data/
    │   │   └── json/
    │   │       └── stacks.json       # JSON file for technology stacks or related data
    │   ├── images/
    │   │   └── logos/                # Directory for logo assets
    │   └── js/
    │       └── main.js               # Main JavaScript file for interactivity
    └── includes/
        ├── footer.php                # Footer component
        ├── header.php                # Header component with meta tags
        ├── links.php                 # Navigation links and social media links
        ├── main.php                  # Central content loader
        ├── mobile-sidebar.php        # Sidebar for mobile devices
        ├── sidebar.php               # Sidebar for desktop devices
        └── contents/
            ├── home.php              # Home tab content
            ├── projects.php          # Projects tab content
            ├── resume.php            # Resume tab content
            └── stacks.php            # Technology stacks content
```

---

## Technologies Used

- **Frontend**:
  - HTML5, CSS3 (TailwindCSS for utility-first styling)

- **Backend**:
  - PHP for dynamic content rendering

- **Other Tools**:
  - Google Analytics for tracking website traffic
  - Schema.org for structured data
  - Git for version control

---

## Installation

To run this project locally, follow the steps below:

1. **Clone the Repository**:
   ```bash
   git clone https://github.com/fvarli/ferzendervarlicom.git
   cd ferzendervarlicom
   ```

2. **Setup a Local Server**:
   Ensure you have a local PHP server (e.g., XAMPP, WAMP, or MAMP) or use PHP's built-in server:
   ```bash
   php -S localhost:8000
   ```

3. **Access the Website**:
   Open your browser and navigate to `http://localhost:8000`.

---

## Usage

This project is structured to be modular and scalable:

- **Adding Content**: New pages or sections can be added under the `includes/contents/` folder. Each page uses PHP includes for dynamic and reusable components.
- **Styling**: Modify `assets/css/custom.css` for global styles or create additional CSS files for specific pages.
- **Scripts**: Add new interactive features in `assets/js/main.js`. Ensure that custom scripts are clean and modular to maintain readability.
- **Dynamic Data Management**:  
  - The `assets/data/json/` folder contains JSON files that manage dynamic content, such as technology stacks (`stacks.json`) or other structured data.
  - You can edit these JSON files to update content dynamically without modifying the PHP code.
  - To fetch and render JSON data, the website uses PHP functions that parse JSON into dynamic HTML elements.
- **Dynamic Navigation**:  
  - Links and navigation items are centralized in `includes/links.php`.  
  - Add or remove navigation links here to ensure changes propagate site-wide.

---

## Connect with Ferzender

- Website: [www.ferzendervarli.com](https://www.ferzendervarli.com/)
- GitHub: [github.com/fvarli](https://github.com/fvarli)
- LinkedIn: [linkedin.com/in/fvarli](https://www.linkedin.com/in/fvarli)
- Fiverr: [fiverr.com/f_varli](https://www.fiverr.com/f_varli)
- Upwork: [upwork.com/~01f9931d59f0daa010](https://www.upwork.com/freelancers/~01f9931d59f0daa010)

---

## License

This project is licensed under the MIT License. You are free to use, modify, and distribute the code, but attribution is appreciated.
