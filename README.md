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
Header.php Code Explanation

This header.php file defines the consistent header section displayed at the top of every page on the Healthcare Info website.

It starts with the HTML5 doctype and sets the language attribute to English for accessibility and SEO.

The <head> section includes metadata and links the external CSS stylesheet (css/style.css) for styling across the site.

Inside the <body>, the header contains the site title wrapped in an <h1> tag for clear branding and SEO benefits.

A navigation bar (<nav>) follows, containing an unordered list (<ul>) of links (<a>) to the main website pages: Home, About, Contact, Health Tips, and Resources.

This modular header can be included in all pages via PHP includes to maintain consistency and simplify updates.

2. footer.php
Footer.php Code Explanation

This footer.php file defines the consistent footer section displayed at the bottom of every page on the Healthcare Info website.

The <footer> element contains a paragraph that dynamically displays the current year using PHP’s date("Y") function, ensuring the copyright year is always up to date.

It includes a simple copyright notice with the site name, reinforcing ownership and professionalism.

The footer closes the <body> and <html> tags, properly ending the HTML document structure.

Like the header, this modular footer can be included across all pages with PHP includes, promoting code reuse and easy maintenance.

3.Index.php
This index.php file serves as the homepage of the Healthcare Info website. It acts as the central landing page designed to welcome users and provide an overview of the site's key offerings related to health and wellness.

Key Components:

Header and Notice Inclusion:

The page starts by including a common header.php file, which likely contains the site’s navigation menu, logo, and meta information to ensure consistency across pages.

It also includes notice.html, which is probably a banner or announcement (e.g., legal disclaimer or project note) that appears site-wide.

Hero Section:

The <section class="hero"> introduces visitors to the site with a welcoming heading and a concise summary describing the purpose: providing practical health tips, wellness insights, and trusted resources for a healthier lifestyle.

This section sets the tone and encourages users to explore further.

Dynamic Daily Health Tip:

The <section class="tip-carousel infographic"> displays a “Daily Health Tip” that changes every few seconds.

This uses JavaScript to cycle through an array of health tips, enhancing user engagement by providing fresh content dynamically.

Top 5 Daily Health Tips:

The following section lists the top 5 actionable health tips with friendly emoji icons to make the content approachable and visually appealing.

It emphasizes simple but effective daily habits such as hydration, exercise, nutrition, sleep, and avoiding sugary drinks.

Healthy Living Benefits:

This section highlights the broader benefits of maintaining a healthy lifestyle, including prevention of chronic illnesses, mental clarity, mood improvement, and overall well-being.

It motivates users to prioritize their health long-term.

Call to Action (CTA):

The final section encourages users who want personalized wellness advice to reach out via the Contact page.

The CTA uses a visually distinct button and emoji to draw attention.

JavaScript Tip Carousel:

The embedded JavaScript rotates the daily health tip text every 4 seconds.

This small interactive element adds dynamic content without needing a full page reload.

Footer Inclusion:

Finally, the page includes a common footer.php to provide consistent footer content such as copyright notices and navigation links.

Overall Purpose and User Experience:

The index.php page is designed to be clean, accessible, and engaging. It provides useful health information in an easy-to-digest format with visual icons and interactive elements. By balancing static content with dynamic tips, it invites users to return regularly for updated wellness advice. The clear navigation, welcoming hero section, and prominent call to action collectively guide users smoothly through the site’s offerings.
4. About.php
About Page Code Explanation

This about.php page is structured using semantic HTML wrapped within PHP includes for modularity. It contains multiple <section> elements, each describing a key aspect of the project:

The first section introduces Healthcare Info as an educational platform focused on health awareness and wellness.

Subsequent sections detail the Project Purpose, emphasizing hands-on learning with HTML, CSS, and PHP.

The Design Highlights section lists important UI/UX features like responsive layout and minimalist design.

The Skills Demonstrated section highlights the core web development techniques used, such as semantic HTML and modular PHP includes.

Finally, the Credits section attributes the work to the developer.

Using PHP includes for the header and footer enables code reuse and maintains consistent site structure. The content is styled via CSS classes like about-section to keep presentation clean and organized.

5. Contact.php

Contact Page Code Explanation

This contact.php page provides a user-friendly contact form within a structured layout, wrapped by reusable PHP header and footer includes.

The page begins with a <section> containing a heading and introductory paragraph, inviting users to send questions or feedback.

The contact form uses the POST method to submit data to save_contact.php for processing.

It includes labeled input fields for Name and Email, both required and with placeholder text to guide users.

A textarea field collects the user’s Message, also required and with a placeholder prompt.

Each input is wrapped in a .form-group div for styling purposes.

The submit button features an emoji and a class for consistent button styling.

This approach emphasizes accessibility, usability, and clear visual cues using emojis and placeholders, while maintaining modular PHP includes for site-wide consistency.

6. tips.php

Tips Page Code Explanation

The tips.php page presents a curated list of daily health and wellness practices designed to encourage positive lifestyle habits.

The page is wrapped with modular PHP includes for the header and footer, ensuring consistent site navigation and layout.

The main content is enclosed within a <section> with the class tips-section to allow targeted styling.

A heading with an emoji introduces the focus on wellness tips, making the content inviting and visually engaging.

An introductory paragraph briefly describes the purpose of the list.

The tips themselves are presented as an unordered list (<ul>) with the class wellness-tips, featuring emoji icons to visually reinforce each recommendation.

This simple and accessible layout emphasizes clarity and ease of reading to motivate users to adopt healthier habits daily.

7.Resources.php

Resources Page Code Explanation

The resources.php page offers users a categorized collection of trusted health-related external links.

The page starts and ends with reusable PHP includes (header.php and footer.php) for consistent site structure.

Content is organized into three main sections: General Health, Mental Health, and Nutrition & Wellness, making it easy for users to find relevant resources.

Each section contains a heading and an unordered list (<ul>) of external links (<a>) to authoritative websites, opening in new tabs (target="_blank").

This clear, semantic layout enhances usability and trust by directing users to reputable organizations and informational sites.

The structure supports accessibility and responsive design through simple HTML and CSS styling.

8. save_contact.php

save_contact.php Code Explanation

This PHP script processes form submissions from the contact page and provides user feedback upon successful message saving.

It starts by checking if the form was submitted via the POST method.

User input fields — name, email, and message — are retrieved from the POST data, then trimmed and sanitized using htmlspecialchars() to prevent XSS attacks.

The data is formatted into a plain text entry with labels and line breaks.

The entry is appended to a text file data/contact_submissions.txt using file_put_contents() with the FILE_APPEND flag, ensuring all submissions are saved sequentially.

After processing, the page includes the standard site header and footer via PHP includes.

The main content displays a personalized thank-you message using the submitted name, confirming that the message was saved successfully.

A link is provided for users to return to the homepage easily.

9.style.css
CSS Style Sheet Explanation

This stylesheet defines the overall visual design and layout for the Healthcare Info website, ensuring a clean, readable, and user-friendly experience.

General layout: Uses Arial font with zero margins/padding on body for full-width control and sets comfortable line height and light background.

Header and Footer: Dark background (#333) with white text, centered content, and consistent padding for visual framing.

Navigation menu: Horizontal flexbox layout with evenly spaced, bold, white links that underline on hover for clear interactivity.

Main content area: Centered with a max width for readability, white background, and padding to separate content visually.

Forms: Styled with light backgrounds, subtle borders, rounded corners, full-width inputs and textareas, and a blue submit button with hover effects for usability.

Notice box: Yellow highlight with border accent to draw attention to important messages.

About section: Semi-transparent white background with padding, margin, rounded corners, and subtle box shadow for a card-like appearance.

Tips section and wellness tips: White background with shadows and padding for emphasis, using increased font size and line spacing for easy reading.

This CSS focuses on simplicity and clarity, creating a welcoming and accessible interface optimized for both desktop and mobile users.

Thank you for reviewing my Healthcare Info project. This website demonstrates my ability to create clean, accessible, and responsive web applications using PHP, HTML, CSS, and JavaScript. Through this project, I focused on delivering practical health information with an intuitive user experience, combining modular code structure with dynamic interactive elements. It reflects my commitment to best practices in web development, usability, and content clarity. I am excited to build on these skills and contribute to impactful digital solutions in future professional roles.
