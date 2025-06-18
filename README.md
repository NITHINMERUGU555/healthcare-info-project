# healthcare-info-project
A responsive, user-friendly website built with HTML, CSS, and PHP to provide practical health tips, wellness insights, and trusted resources. Designed to promote healthier lifestyle choices through clean UI, modular code structure, and accessibility best practices.
Project Overview:

Healthcare Info is a clean, responsive, and highly accessible website designed to empower users with essential wellness tips, COVID-19 updates, and reliable health resources. The site’s goal is to deliver an intuitive, visually balanced experience that supports informed health decisions through clear, content-focused design.

Developed as a personal web design portfolio piece, this project emphasizes modular PHP architecture, accessible UI/UX principles, and responsive layouts that adapt smoothly across devices and screen sizes.

Key Features:

Simple navigation with modular includes for maintainability

Clear typography and visual hierarchy optimized for readability

Engaging use of icons and subtle color palettes for calm, trustworthiness

Trusted health data and resources curated for user confidence

Accessibility best practices ensuring usability for diverse audiences

This project demonstrates my commitment to thoughtful web design that balances aesthetics, usability, and content clarity, crafted using modern HTML, CSS, and PHP development techniques.

Tools and Technologies Used:

Developed the website using HTML5, ensuring semantic markup that improves accessibility and SEO, with CSS3 to create a responsive and visually appealing design adaptable to various screen sizes and devices.

Employed PHP to modularize the website’s structure by including reusable components like headers and footers, streamlining code maintenance and consistency across pages, and handling form submissions securely on the server side.

Utilized JavaScript to add dynamic interactivity, such as the rotating daily health tips, enhancing user engagement without requiring page reloads.

Used Visual Studio Code as the primary development environment, benefiting from its code completion, debugging tools, and integrated terminal to improve development efficiency.

Leveraged browser developer tools (e.g., Chrome DevTools) for real-time inspection, debugging, performance testing, and ensuring cross-browser compatibility to deliver a polished user experience.

Created and refined visual assets and layout prototypes using Adobe Photoshop or Figma, aiding in consistent branding and professional UI design (if applicable).

Below are screenshots of all website pages, each accompanied by a brief description.

About Home Page: Welcome to Healthcare Info, your trusted source for practical health tips, wellness insights, and reliable resources. This site is designed to help you stay informed and make healthier lifestyle choices every day. Discover daily health tips to boost your mood and energy, along with the top five habits for a balanced and vibrant life. Learn how healthy living supports long-term wellness, mental clarity, and emotional well-being. Our content is focused on clarity, accessibility, and practical guidance for all users. Explore the site and take control of your health journey with confidence.

About:

Healthcare Info is an educational platform dedicated to providing clear, practical health awareness and wellness guidance. The site focuses on delivering reliable tips, COVID-19 insights, and curated health resources to empower individuals in making smarter and healthier lifestyle decisions.

This project was developed as part of a personal web design portfolio to showcase clean, responsive UI/UX design, modular PHP structure, and strong emphasis on accessibility and content clarity.

The Contact Us page provides visitors with a simple and accessible way to communicate directly with the website owner or team. It includes a user-friendly form where users can submit their name, email, and message. This facilitates feedback, questions, or support requests related to the site’s health content, helping to build trust and engagement with users.

Health Tips: This page offers practical and easy-to-follow wellness advice aimed at improving daily health habits. It highlights simple actions like hydration, stretching, and sleep hygiene that contribute to overall well-being. The goal is to empower users with actionable tips they can integrate into their routines for a healthier lifestyle.

Resources Page: This page provides carefully curated links to trusted health organizations and informational sites. It is divided into categories covering general health, mental health, and nutrition & wellness. The goal is to offer users quick access to reliable external resources to support their health education and informed decision-making

Project File Structure Overview

This project is organized into a modular folder structure designed for clarity and maintainability. Below is an overview of the main directories and files that make up the website:

css/: Contains all styling files, including the main stylesheet style.css.

data/: Stores persistent data files like contact_submissions.txt.

includes/: Contains reusable components such as header.php and footer.php.

Root PHP Files: Core pages of the site, including:

index.php — Homepage

about.php — About page

contact.php — Contact form page

resources.php — Health resources page

tips.php — Daily health tips page

notice.html — Informational banner included on pages

save_contact.php — Server-side script to process contact form submissions

Below you will find the complete code for each page, alongside a detailed description of its purpose and functionality.

1. header.php
This header.php file defines the consistent header section displayed at the top of every page on the Healthcare Info website.

It starts with the HTML5 doctype and sets the language attribute to English for accessibility and SEO.

The <head> section includes metadata and links the external CSS stylesheet (css/style.css) for styling across the site.

Inside the <body>, the header contains the site title wrapped in an <h1> tag for clear branding and SEO benefits.

A navigation bar (<nav>) follows, containing an unordered list (<ul>) of links (<a>) to the main website pages: Home, About, Contact, Health Tips, and Resources.

This modular header can be included in all pages via PHP includes to maintain consistency and simplify updates.

2. footer.php
This footer.php file defines the consistent footer section displayed at the bottom of every page on the Healthcare Info website.

The <footer> element contains a paragraph that dynamically displays the current year using PHP’s date("Y") function, ensuring the copyright year is always current.

It includes a simple copyright notice with the site name, reinforcing ownership and professionalism.

The footer closes the <body> and <html> tags, properly ending the HTML document structure.

Like the header, this modular footer is reusable across pages via PHP includes, promoting code reuse and easy maintenance.

3. index.php (Home Page)
This index.php file serves as the homepage and landing page of the Healthcare Info website.

Starts by including common header.php and notice.html for consistent site-wide header and announcements.

The Hero Section welcomes visitors and describes the site’s purpose: sharing practical health tips, wellness insights, and trusted resources.

A Dynamic Daily Health Tip uses JavaScript to cycle through health tips every 4 seconds, engaging users with fresh content.

The Top 5 Daily Health Tips section lists simple, effective habits with emojis for friendly visual appeal.

Healthy Living Benefits highlights why maintaining health is important for long-term wellness and mood.

The Call to Action encourages users to contact for personalized wellness advice, using a styled button.

Finally, includes footer.php for consistent footer content.

This page balances static information with interactive elements to invite users to return regularly and explore the site.

4. about.php
The about.php page introduces the Healthcare Info project.

Explains that Healthcare Info is an educational platform focused on clear, practical health awareness and wellness tips.

Outlines the project’s purpose as a hands-on learning experience using HTML, CSS, and PHP.

Highlights design features like responsive layout, minimalist UI, easy navigation, and modular PHP components.

Lists skills demonstrated: semantic HTML, CSS responsiveness, modular code structure, and user-focused content.

Credits the developer, showcasing professional ownership.

Includes header and footer via PHP includes to keep consistent site structure.

5. contact.php
The contact.php page provides a user-friendly contact form.

Contains a heading and intro paragraph inviting users to send questions or feedback.

A form with labeled inputs for Name, Email, and a Message textarea.

Uses POST method to submit data to save_contact.php.

Inputs are required with placeholders for guidance.

The submit button uses consistent styling and emoji for visual cues.

Wrapped with modular header and footer includes.

Designed for accessibility and usability.

6. tips.php
The tips.php page lists daily health and wellness tips.

Wrapped by reusable header and footer includes.

Introduces wellness tips with an emoji-enhanced heading.

Describes purpose briefly in a paragraph.

Lists actionable daily tips using emojis for easy recognition.

Layout uses semantic HTML and CSS classes for styling.

Simple, clear, and encouraging to motivate healthy habits.

7. resources.php
The resources.php page offers categorized external health links.

Organized into General Health, Mental Health, and Nutrition & Wellness sections.

Each section has heading and unordered lists linking to authoritative sites.

Links open in new tabs for convenience.

Wrapped by modular header and footer for consistent structure.

Enhances trust and usability by connecting users to reputable sources.

8. save_contact.php
The save_contact.php script handles contact form submissions.

Processes form data submitted via POST.

Sanitizes input fields (name, email, message) with htmlspecialchars() and trim() for security.

Appends the sanitized data into a text file data/contact_submissions.txt.

After saving data, displays a thank you message personalized with the user's name.

Includes header and footer for consistent site look.

Enables simple backend data storage without a database.

Provides immediate feedback to users upon submission.

9. style.css
The style.css file defines the visual styling for the entire site.

Sets a clean, readable font (Arial) with consistent spacing and light background.

Styles header and footer with dark background and white text for strong framing.

Uses flexbox for horizontal, centered navigation menus with hover effects.

Centers main content with max-width and padding on a white background.

Styles forms with light backgrounds, borders, rounded corners, and clear input fields.

Adds visual emphasis on notices, about sections, and wellness tips using backgrounds, padding, shadows, and larger fonts.

Focuses on simplicity, clarity, and responsiveness for usability across devices.

Thank you for reviewing my Healthcare Info project. This website demonstrates my ability to create clean, accessible, and responsive web applications using PHP, HTML, CSS, and JavaScript. Through this project, I focused on delivering practical health information with an intuitive user experience, combining modular code structure with dynamic interactive elements. It reflects my commitment to best practices in web development, usability, and content clarity. I am excited to build on these skills and contribute to impactful digital solutions in future professional roles.
