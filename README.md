# Healthcare Info Website

This repository contains the full source code for the Healthcare Info website — a responsive, accessible, and user-friendly platform providing health awareness, wellness tips, and trusted resources.

---

## Project Structure Overview

The project is built with modular PHP includes for header and footer, semantic HTML, CSS styling, and basic JavaScript for dynamic content. The backend stores contact form submissions in a text file without a database, ideal for simple hosting.

---

## Header.php Code Explanation

This `header.php` file defines the consistent header section displayed at the top of every page on the Healthcare Info website.

- It starts with the HTML5 doctype and sets the language attribute to English for accessibility and SEO.
- The `<head>` section includes metadata and links the external CSS stylesheet (`css/style.css`) for styling across the site.
- Inside the `<body>`, the header contains the site title wrapped in an `<h1>` tag for clear branding and SEO benefits.
- A navigation bar (`<nav>`) follows, containing an unordered list (`<ul>`) of links (`<a>`) to the main website pages: Home, About, Contact, Health Tips, and Resources.
- This modular header can be included in all pages via PHP includes to maintain consistency and simplify updates.

---

## Footer.php Code Explanation

This `footer.php` file defines the consistent footer section displayed at the bottom of every page on the Healthcare Info website.

- The `<footer>` element contains a paragraph that dynamically displays the current year using PHP’s `date("Y")` function, ensuring the copyright year is always up to date.
- It includes a simple copyright notice with the site name, reinforcing ownership and professionalism.
- The footer closes the `<body>` and `<html>` tags, properly ending the HTML document structure.
- Like the header, this modular footer can be included across all pages with PHP includes, promoting code reuse and easy maintenance.

---

## Index.php (Home Page) Code Explanation

This `index.php` file serves as the homepage and central landing page of the Healthcare Info website.

- It begins by including the common `header.php` and a site-wide `notice.html` banner or announcement.
- The **Hero Section** introduces visitors with a welcoming heading and concise site purpose.
- The **Dynamic Daily Health Tip** section uses JavaScript to rotate health tips every few seconds, increasing engagement.
- The **Top 5 Daily Health Tips** section displays actionable health advice with emojis for visual appeal.
- The **Healthy Living Benefits** section highlights the positive outcomes of a healthy lifestyle.
- A **Call to Action (CTA)** encourages users to contact for personalized wellness tips.
- The page ends by including a common `footer.php` for consistent footer content.

---

## About.php Code Explanation

This `about.php` page provides an overview of the Healthcare Info project.

- Structured with semantic HTML sections wrapped by PHP includes for modularity.
- Describes the platform’s purpose as an educational tool for health awareness and wellness.
- Details the project purpose highlighting hands-on experience with HTML, CSS, and PHP.
- Lists design highlights such as responsive layouts, clean UI, and modular PHP components.
- Describes the key skills demonstrated, including semantic HTML, responsive CSS, and content organization.
- Credits the developer, emphasizing professional ownership.
- The modular header and footer includes maintain consistency across pages.

---

## Contact.php Code Explanation

This `contact.php` page offers a simple, accessible contact form for user feedback.

- Includes the reusable header and footer with PHP includes.
- Contains a section with a heading and introductory text encouraging users to send messages.
- The contact form uses the POST method and submits to `save_contact.php`.
- Inputs include Name and Email fields with placeholders and validation (`required`).
- A textarea collects user messages.
- The submit button features styling and emoji for user-friendly interaction.
- Form inputs are wrapped in styled divs for consistent layout.

---

## Tips.php Code Explanation

The `tips.php` page shares daily health and wellness tips to encourage healthy habits.

- Wrapped with modular header and footer includes.
- Main content is in a `<section>` with a descriptive heading and introductory paragraph.
- Displays a list of wellness tips as an unordered list with emojis enhancing readability.
- CSS classes enable targeted styling for spacing, font size, and layout.
- Designed for clarity and motivation to adopt positive lifestyle changes.

---

## Resources.php Code Explanation

The `resources.php` page organizes external links to trusted health organizations and informational sites.

- Includes common header and footer PHP includes.
- Content divided into three sections: General Health, Mental Health, and Nutrition & Wellness.
- Each section contains a heading and a list of external links opening in new tabs.
- Uses semantic HTML for accessibility and ease of navigation.
- Provides users quick access to reliable information for health education and decision-making.

---

## Save_contact.php Code Explanation

This `save_contact.php` script processes contact form submissions.

- Checks if the form was submitted via the POST method.
- Retrieves and sanitizes user inputs (name, email, message) using `htmlspecialchars()` and `trim()`.
- Formats the data into a plain-text entry.
- Appends the entry to a text file (`data/contact_submissions.txt`) for storage.
- Includes standard header and footer PHP includes for consistent layout.
- Displays a personalized thank-you message confirming submission.
- Provides a link for users to return to the homepage.
- Suitable for simple backend data collection without a database.

---

## Style.css Code Explanation

This stylesheet defines the visual appearance and layout of the Healthcare Info website.

- Sets global font, margin, padding, line-height, and background color for clean readability.
- Styles the header and footer with dark backgrounds, centered white text, and consistent padding.
- Uses flexbox for a horizontal, centered navigation menu with spacing and hover effects.
- Defines main content area with maximum width, padding, and white background.
- Styles forms with light backgrounds, borders, rounded corners, full-width inputs, and styled submit buttons.
- Adds a notice box with yellow background and border to highlight important messages.
- Styles sections like `.about-section` and `.tips-section` with background, padding, border-radius, and subtle shadows for card-like appearance.
- Enhances list readability with spacing and font size adjustments.
- Designed for simplicity, clarity, and accessibility across devices.

---

## How to Use This Repository

1. Clone or download this repository to your local PHP-enabled server environment.
2. Ensure the `data` directory is writable for storing contact form submissions.
3. Place the project files in your web server's root or a subdirectory.
4. Access the site via `index.php` in your browser to view the homepage.
5. Navigate to other pages via the header menu links.
6. Use the contact form to submit messages; submissions are saved locally in a text file.
7. Modify `css/style.css` for custom styling adjustments.

---

Thank you for exploring the Healthcare Info project!  
Designed and developed by **Nithin Merugu**.

---

*Feel free to customize this README or let me know if you want me to generate a README file you can upload directly!*
