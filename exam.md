
# Learning outcome 1

## Grade C

**Explain the basic principles of good website design.** Describe what you believe are the most important basic principles that contribute to a 'good' website design. For each principle you identify, briefly explain why it is important for a positive user experience.

> - Usability: A website should be easy to use and navigate so users can quickly find what they need without confusion.
> - Clarity: Information should be presented simply and clearly, avoiding clutter, so users can understand the message easily.
> - Visual Hierarchy: Elements should be arranged to guide the eye to the most important information first (e.g., using size or color), helping users quickly grasp key points.
> - Responsiveness: The site must work well on all devices (phone, tablet, desktop) so users have a consistent experience no matter how they access it.


## Grade B

**Explain the basic principles of good website design and evaluate whether the example website https://arngren.net/ meets those principles.** Evaluate its design against key principles such as usability, accessibility, visual hierarchy, and responsiveness. For each principle, assess whether the website effectively meets it, providing specific observations from the site to support your judgment.

> - Usability: Very poor. Navigation is impossible due to hundreds of unorganized links and images; no search bar.
> - Clarity: Non-existent. The page is extremely cluttered with too many images, flashing elements, and text, making it overwhelming and hard to understand.
Visual Hierarchy: Absent. All elements have equal visual weight, so nothing stands out, making it hard to find important information.
> - Responsiveness: Not met. The site's layout breaks on smaller screens, requiring frustrating horizontal scrolling and making content unreadable.


## Grade A

**As in B, and suggest improvements to better fulfill the website’s intended function.**
Based on your evaluation and assuming the website's primary intended function is to [Insert specific, realistic function for example.com, e.g., 'provide information about an organization,' or 'serve as a simple placeholder page'], propose concrete and actionable improvements to its design. For each suggested modification, clearly explain how it would enhance the website's ability to fulfill its intended function and improve the overall user experience. Justify your proposed changes with reference to design principles and potential impact.

> - Clear Navigation & Search: Add a main menu with product categories (e.g., "Electronics," "Gadgets") and a prominent search bar. This directly helps users find products, boosting sales (Usability).
> - Product-Focused Layout: Use clean, consistent product listings with clear images, titles, and prices. Group related information with white space. This improves readability and highlights sales items (Visual Hierarchy, Clarity).
> - Modern, Clean Visuals: Remove flashing elements, clashing colors, and excessive images. Use a consistent, professional design. This builds trust and makes the site more pleasant to browse, encouraging purchases (Clarity, Usability).
> - Mobile Responsiveness: Ensure the site adapts to phone and tablet screens. This allows shopping on any device, expanding customer reach and improving experience for all users (Responsiveness, Usability).


# Learning outcome 2

## Grade C

**Describe the general architecture of a web application.** Imagine you're explaining how a website works to someone who has never used the internet. Describe the fundamental components of a typical web application and explain how they interact with each other to deliver content to a user's browser. Use an example, like a simple blog, to illustrate your points.

>- Client (User's Browser): This is the web browser (like Chrome) on your device. It sends requests and displays what it receives.
> - Server (Web Server): This is a powerful computer that stores the website's files and code. When the client asks for a page, the server processes the request.
> - Database: This is where the website's information is stored (like blog posts or user details). The server often talks to the database to get or save information.
> 
> Interaction (Simple Blog Example): When you type a blog's address (Client), your browser sends a request to the Server. The Server then asks the Database for the latest blog posts. The Database sends the posts back to the Server, which then builds the webpage and sends it back to your Browser to display.

## Grade B

**Describe and assess whether the architecture of the given app https://arngren.net/ is appropriate.** Based on your understanding of common web application architectural patterns, identify potential strengths and weaknesses of this design. Justify your assessment by explaining why certain design choices are appropriate or potentially problematic for a typical website requirements (e.g., scalability, security, user experience).

> Based on observing https://arngren.net/, its architecture appears to be remarkably simple, likely a basic client-server model serving mostly static HTML files. There's no visible dynamic content generation, complex user interaction, or search functionality that would strongly imply a sophisticated backend application server or database. It looks like a large HTML document with embedded images and hardcoded links, served directly by a web server.

## Grade A

**As in B, and propose a new web application architecture for an online bookstore with user accounts, shopping cart, and admin panel.** 


> Proposed Architecture:
> Client-Side (User Interface):
> - Component: User's web browser or mobile app.
>   - Role: Displays the bookstore, handles user interaction (Browse, adding to cart, checkout).
>   - Technologies: HTML, CSS, JavaScript (possibly a modern framework like React/Vue for rich interactivity).
> Backend Application Servers (Business Logic):
> - Component: Servers running the core application code.
>   - Role: Processes user requests (e.g., login, add to cart, place order), interacts with the database and external services.
>   - Technologies: PHP (Laravel/Symfony), Python (Django/Flask), Node.js (Express), Ruby on Rails, etc.
>   - Justification: Provides dynamic functionality (user accounts, shopping carts, order processing) that a static site cannot. Multiple servers ensure scalability and high availability.
> Database Server(s):
> - Component: Stores all persistent data.
>   - Role: Manages user data, product catalogs, order details, reviews.
>   - Technologies: Relational databases like PostgreSQL or MySQL (for structured transactional data).
>   - Justification: Crucial for data persistence and integrity for user accounts, inventory, and orders. Enables dynamic content.
> Dedicated Services/Modules:
> - File Storage: Stores product images/book covers (e.g., cloud storage like AWS S3).
> - Admin Panel: A separate interface, often built on the same backend framework, allowing administrators to manage products, users, and orders.
>   - The admin panel ensures efficient content and user management, vital for business operations.

# Learning outcome 3

## Grade C

Describe the fundamental purpose of a scripting language in the context of web applications. Can you name one common scripting language used for web development and give a very simple example of what it might do?

## Grade B

Compare and contrast two different scripting languages commonly used for web application development (e.g., JavaScript and Python for web frameworks, or PHP and Node.js). Discuss a scenario where one might be a more suitable choice than the other for a specific project goal, justifying your reasoning.

## Grade A

Imagine you are tasked with building a complex, highly interactive web application. Beyond knowing basic scripting languages, what specific tools, frameworks, or libraries would you consider essential for facilitating its creation? Explain how these tools help in building 'extensive' web applications and provide a concrete example of how one such tool could be utilized in your hypothetical project.


