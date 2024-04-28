## Introduction
**SUNRAY** - An eyeglasses and sunglasses ecommerce application built with PHP, Laravel, Vite, Bootstrap, and MySQL.

## Features
- **User Authentication:** Laravel built-in login, sign-up, and logout for user accounts.
- **Product Search & Filters:** Easily find products with search and custom filters.
- **Cart System:** Add, remove, and manage items in your cart easily.
- **Checkout:** Easy way to pay for your items and provide your address for delivery.
- **User Settings:** Update account info, password, or delete account.
- **Orders History:** View past orders for tracking and reordering.
- **Dashboard:** Manage orders, preferences, and account settings from one place.
- **Responsive UI:** Browse and shop on any device with a mobile-friendly design.
- **Flash Messages:** Quick notifications for important actions like successful login, item added to cart, or order confirmation.

## Showcase

## Installation

**Requirements**: PHP >= 8.1, Composer, RDBMS (such as MySQL, MariaDB, PostgreSQL, etc.)

**Installation Steps:**

1. Clone the repository ```git clone https://github.com/bhupindersingh007/sunray.git``` or download zip.
2. Open the directory ```sunray``` in the terminal.
3. Install composer dependencies ```composer install```.
4. Make a new ```.env``` file and copy ```.env.example``` file to ```.env```.
5. Set the database configuration in the ``.env`` like ```DB_DATABASE, DB_USERNAME and DB_PASSWORD```etc.
7. Generate key: ```php artisan key:generate```.
8. Run ```php artisan migrate:refresh --seed```
9. Run ```npm i``` and ```npm build```.
10. Run the application: ```php artisan serve```.
    
## Technology Stack 

- [PHP 8.1](https://www.php.net/) - A popular general-purpose scripting language for web development.
- [Laravel 10](https://laravel.com/docs/10.x) - PHP fullstack web application framework.
- [MySQL 8.0](https://dev.mysql.com/doc/relnotes/mysql/8.0/en/) - The world's most popular open source relational database.
- [Feather Icons](https://feathericons.com) - Simply beautiful open source SVG icons.
- [Vite Plugin](https://github.com/laravel/vite-plugin) - Laravel plugin for Vite.
- [Bootstrap 5](https://github.com/twbs/bootstrap) - The most popular HTML, CSS, and JavaScript framework for developing responsive, mobile first projects on the web.
