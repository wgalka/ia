---
layout: with_alerts
---
# 🌐 Project Requirements: Web Applications 2025/2026

This document defines the grading criteria and expected learning outcomes for the project carried out as part of the course.

---

## 🏆 Grading Criteria

| Grade | Scope of Requirements |
| :---: | :--- |
| **3.0** | **Basic CRUD functionality**<br>• Creation of an application providing public resources.<br>• Handling CRUD operations (Create, Read, Update, Delete).<br>• "Administrator" role managing resources. |
| **4.0** | **Extended permissions system**<br>• Introduction of users with different roles.<br>• Users managing their own resources.<br>• Extension of the administrator role to full management of user profiles and resources. |
| **5.0** | **Advanced business logic**<br>• Implementation of additional, non-trivial business logic.<br>• Functionalities dedicated to end-users going beyond simple CRUD. |

**Technological requirements:** The project is to be implemented in **PHP 8.5** using the **Laravel 13** framework. The frontend framework is **flexible**.

> [!IMPORTANT]
> The learning outcome is considered passed when the project meets the requirements specified for at least a **satisfactory (3.0)** grade.

---

## 🎯 Learning Outcomes (LO_03)

### 💻 Design and Implementation
The student can design and implement a web application using the technologies learned. The application must have a user interface (UI) enabling:

*   Data exchange.
*   Information processing.

### 📚 Working with Documentation
The student can independently analyze documentation and specifications of modern tools and technologies, and then effectively use them in the application development process.

### 🛠️ Technologies and Frameworks
The student demonstrates proficiency in using:

*   **Web languages and technologies**: HTML, CSS, PHP, etc.
*   **Supporting tools**: Appropriate frameworks and packages to improve implementation and management of the application.


## Project Topics 2025/2026

### Problem 1

When searching for apartments for rent, users very often encounter problems resulting from the low quality of advertisements. Property owners do not always correctly define the amount of rent (e.g., no distinction between rent and additional fees), omit important information, or do not post photos, making it difficult to assess the actual condition of the apartment or individual rooms. An additional challenge is that some owners — especially the elderly — are digitally excluded due to overly complicated login processes and operation of advertising platforms. The goal of the project is to create a system that solves these problems by simplifying the process of adding advertisements, forcing key information (e.g., fee structure, photos), and providing an intuitive, accessible interface for all users, regardless of their level of digital competence.

### Problem 2

In social media, such as Facebook groups, advertisements for carpooling often appear. Despite the high popularity of this solution, it is associated with many problems — communication with organizers can be difficult, information is incomplete (e.g., no clearly defined travel price), and the selection of passengers often takes place in a discretionary manner. There is also a lack of transparency and standardization of advertisements, which reduces user trust and makes it difficult to make decisions. An alternative is dedicated platforms, but their pricing model often discourages users. The goal of the project is to create a system that will organize the process of organizing carpooling — ensure clear rules for publishing offers (e.g., mandatory information on price, route, and date), facilitate communication between users, and increase the transparency and accessibility of this type of service.

### Problem 3

In many everyday situations — such as shared trips, parties, or living together — there is a need for fair settlement of shared expenses. In simple cases, a spreadsheet proves to be sufficient, but as the number of participants and transactions increases, this solution becomes illegible and difficult to maintain.

The problem is particularly visible in more complex scenarios. For example, during a trip, one person pays the bill for lunch partially with their own funds, and a second person contributes partially, while the bill itself consists of many items assigned to specific participants. In such a situation, it is necessary to simultaneously take into account many payers, the division of costs into specific people, and the linking of expenses with real items from the receipt. Manual settlement of such a case is time-consuming and prone to errors.

There are dedicated applications, such as Splitwise, but they often do not offer enough flexibility — there is no possibility of breaking down one bill into detailed items, assigning them to specific people, and simultaneously taking into account many payers. The goal of the project is to create a system that, in a simple and transparent way, will allow for the management of even complex settlements — allowing to define detailed expenses, assign costs to specific people, archive receipts, and automatically balance receivables between users.

### Problem 4

Conducting unregistered activity is becoming an increasingly popular form of earning, especially among people starting their adventure with business. Despite simplified formal requirements, in practice many problems arise related to the organization and control of such activity. Users often do not have tools for systematic recording of revenues, controlling the revenue limit imposed by regulations, or archiving sales and costs.

An additional challenge is the lack of a transparent way to manage documentation — users store data in various places (e.g., notes, spreadsheets, messages), which increases the risk of errors and loss of information. People without business experience are often also unaware of the obligations associated with conducting such activity, which can lead to unconscious exceeding of limits or incorrect settlement.

The goal of the project is to create a simple and intuitive system supporting the conduct of unregistered activity — enabling ongoing tracking of revenues, control of limits, recording of sales, and orderly storage of data, while maintaining maximum simplicity of use for the non-technical user.

### Problem 5

Often in everyday life there is a need to carry out activities that do not necessarily coincide with the interests of the immediate circle of friends. This can apply to activities such as dance lessons, playing tennis, running together, or playing football. As a result, many people give up on implementing their plans or put them off until later, despite a real desire to act.

The problem arises from the lack of a simple way to find people with similar interests at a given time and location. Current solutions are dispersed (social media groups, advertisements), not very dynamic, and do not guarantee fast matching of participants.

The goal of the project is to create an application that will allow users to be connected based on common interests and availability — allowing in a simple way to organize activities and join already existing initiatives. The system should support quick matching of participants, increasing the chances of realizing plans and active spending of time.

### Problem 6

Nowadays, users use many subscription services — such as streaming platforms, online tools, mobile applications, or SaaS services. Over time, the number of active subscriptions grows, and users lose control over how much they actually spend monthly.

The problem is exacerbated by the fact that payments are often scattered (different cards, PayPal, mobile operators), renewed automatically, and poorly visible in everyday use. As a result, users are not aware of real costs, forget about unused services, or do not know when the next account charge will occur.

An additional challenge is the lack of tools enabling analysis of expenses in the context of subscriptions — the user does not see which services they actually use and which generate unnecessary costs. This problem is further complicated by the fact that the user's financial data is scattered between different bank accounts and payment systems.

The goal of the project is to create a system enabling central management of subscriptions — allowing to track all active services, predict future charges, analyze expenses, and inform the user about unused or potentially redundant subscriptions. The system should also support the user in making financial decisions through clear reports and notifications.

An essential element of the solution will be the ability to import transaction history from CSV files provided by banks — from one or many accounts simultaneously. Based on the imported data, the system will analyze the repeatability of payments (e.g., cyclic monthly charges), identifying potential subscriptions. Such an approach will allow for partial automation of the service detection process and elimination of the need for manual entry of all data by the user, while increasing the accuracy and completeness of financial analysis.


**The project must be carried out in a group of 2 to 7 people.** Below are the guidelines for individual grades that must be demonstrated as your contribution to a given project. Other students cannot be the authors of the same functionalities. Below is a list of functionalities for given grades that must be demonstrated as your contribution to a given project:

## Documentation

**Non-contact hours – student's own work 90h**

### For grade 3.0, the documentation should include:

* Project startup instructions
* User manual
    * Documented CRUD for at least one resource that is dependent on another from the Administrator panel (tables are linked by a relationship, e.g., one-to-many)
        * CREATE - a form with full server-side and client-side field validation. The form should be well-thought-out and adapted to the user's needs. The form should not be limited only to simple fields like "name" and "description". It should be designed in a thoughtful way, taking into account the data structure and relationships between entities in the system. This means that in addition to basic input fields, you should ensure correct mapping of dependencies (e.g., selecting a parent element from a list instead of manually entering an identifier), data validation, and interface clarity for the user.
        A well-designed form guides the user through the data entry process, minimizes the risk of errors, and ensures information consistency in the system. In practice, this means, among others, using drop-down lists (select), hints, validation, and logical division of fields instead of leaving the user full freedom to enter data.
        * READ - a list of resources with filtering and sorting capabilities. Filters should be logical and anticipate most scenarios in which a user might want to filter and sort data.
        A good example of the problem of overly simple filtering is searching for car ads on a marketplace. If the system only allows filtering by price and date of adding the ad, it quickly turns out to be insufficient in practice.
        A user looking for a car usually has much more specific requirements — they are interested in, for example, a specific mileage, body type (SUV, sedan, hatchback), type of fuel, year of production, or gearbox. With filters limited only to price and date, the user has to manually browse dozens or hundreds of ads to find something tailored to their needs.
        As a result, a system that theoretically "works" becomes impractical in reality. Only extensive filtering — allowing results to be narrowed down according to specific parameters — makes it possible for the user to quickly and effectively find the item they are interested in.
        * UPDATE - a form with full server-side and client-side field validation
        * DELETE - a form with full server-side and client-side field validation
    * Documentation of access to the resource by an unlogged user (can browse but cannot edit or delete)

### For grade 4.0, the documentation should be expanded to include:

* Documentation of user roles (administrator, user)
* Documentation of user permissions
* Documentation of resource management by users
* Documentation of user profile management by the administrator

### For grade 5.0, the documentation should be expanded to include:

* Documentation of additional, non-trivial business logic
* Documentation of functionalities dedicated to end-users going beyond simple CRUD

## Project Questions

### Questions for grade 3.0:

1. Describe how the HTTP protocol works.
2. What is the difference between HTTP and HTTPS?
3. How is an HTTP request constructed?
4. How is an HTTP response constructed?
5. How are HTTP requests handled in a Laravel project?
6. What are the HTTP methods?
7. What are the HTTP response codes?
8. What are the HTTP headers?
9. Which HTTP methods does the HTML language support by default?
10. How to handle other HTTP protocol methods in a Laravel project that are not supported by default by HTML?
11. What tools do you know for debugging and testing web applications in terms of user interface?
12. What tools do you know for debugging and testing web applications in terms of sending HTTP requests/JavaScript code?
13. What tools do you know for debugging and testing web applications in terms of database?
14. Describe the path, which instructions are called sequentially in your application after typing the page address in the browser and confirming with enter.
15. Describe the path, which instructions are called sequentially in your application after clicking the "add"/"delete"/"edit" button in the form for adding a new resource.
16. What is the difference between GET and POST?
17. What do we use individual HTTP methods for?
18. How does frontend validation work?
19. How does Laravel server-side validation work?
20. What are migrations and how to create them? Create an example migration that does ....
21. What are seeders and how to create them? Create a seeder that ....
22. What are controllers and how to create them? Create a controller that ....
23. What are models and how to create them? Create a model that ....
24. What are views and how to create them? Create a view that ....
25. What is routing and how to create it? Create a routing that ....
26. How can a given route (path) be secured in Laravel so that it is available only to the administrator?
27. What is a CSRF Token and why is it required in Laravel forms?
28. What ways do you know for displaying variables in the Blade template system (and how does Blade protect against XSS)?
29. What is the difference between Eloquent ORM and Query Builder?
30. What is the .env file for and why should it not go to the repository (e.g., on GitHub)?
31. Where in the Laravel directory structure to look for application logs?
32. The HTTP protocol is stateless – how does Laravel "remember" the logged-in user?
33. How should passwords be stored in the database? What mechanism does Laravel use for this and why must passwords not be stored in plain text?

### Questions for grade 4.0:

1. How is the distinction of permissions between Administrator and a regular User implemented in your project? (Using Middleware, Policies, or Gates).
2. Explain how relationships work in your database (e.g., One-To-Many) and how they are defined in models. How to access related data in a view?
3. What are `FormRequest` classes and why is it worth using them instead of validation directly in the controller?
4. Describe how the *Route Model Binding* mechanism works – how does Laravel automatically find the appropriate model in the database based on a parameter in the URL?
5. How did you ensure that a regular user can edit or delete only those resources they own?
6. What Blade directives (e.g., `@include`, `@extends`, `@section`) did you use to maintain the DRY (Don't Repeat Yourself) structure in views?
7. How is file uploading (e.g., photos) handled in Laravel and how to ensure their correct visibility on the page (symlink to storage)?
8. What are Soft Deletes, how are they implemented in models, and in what business situations are they useful?

### Questions for grade 5.0:

1. What is the Service Container and what is Dependency Injection in Laravel? Give an example from the project.
2. Explain the "N+1 query problem". How to identify it and how to prevent it when fetching data with relationships (Eager Loading)?
3. What security mechanisms (besides CSRF) does Laravel offer and how do they protect the application from XSS or SQL Injection attacks?
4. Describe the most logically difficult functionality in your project (required for 5.0). What technical challenges did you encounter?
5. If your application gained rapid popularity, what Laravel mechanisms would help in its optimization (e.g., Cache, Queues)?
6. What are database transactions (DB::transaction) and what are they for? Why was (or could have been) using them in your specific project when saving multiple related data items crucial?
7. What is the 'Mass Assignment' vulnerability? How to protect against replacing parameters, such as administrator status (e.g., is_admin), when submitting a form using the $fillable or $guarded properties?
