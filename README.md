# Task 02: Online Store Platform

Welcome to the Online Store Platform! This project empowers users to explore products and manage a shopping cart, creating a streamlined and interactive e-commerce experience.

## 🚀 Features
- **Product Display**: Products are shown with detailed information, including images, descriptions, and prices to guide shoppers.
- **Shopping Cart**: Users can add, remove, and view items in their cart with real-time updates, ensuring a seamless shopping experience.
- **Total Price Calculation**: The total cost of items in the cart updates dynamically, helping users manage their purchases effectively.

## 🛠️ Built With
- **Laravel**: Provides a robust backend for managing routes, authentication, data storage, and product and cart operations.
- **Bootstrap and Custom CSS**: Delivers a responsive and visually engaging user interface for easy navigation and interactivity.

## 🖥️ Project Structure
- **Frontend**: Designed with Bootstrap and custom CSS for a clean, intuitive, and responsive user experience.
- **Backend**: Powered by Laravel, handling all aspects of product display, cart updates, and price calculations.

## 📄 Requirements
- **Laravel** version 8+ and **PHP** version 7.3+ for backend functionality.
- **Bootstrap** and custom CSS for front-end styling and layout.
- **MySQL** database through **XAMPP** for local development.

## 📥 Installation

1. **Install XAMPP** (if not already installed) and start the **MySQL** and **Apache** services.

2. **Clone the repository**:

    ```bash
    git clone https://github.com/noeldesalegn/GO2COD_FS_02.git
    cd GO2COD_FS_02
    ```

3. **Install dependencies**:

    ```bash
    composer install
    ```

4. **Set up environment variables**:

    - Create a `.env` file based on the example (`.env.example`).
    - Update the database connection settings in the `.env` file:

      ```dotenv
      DB_CONNECTION=mysql
      DB_HOST=127.0.0.1
      DB_PORT=3306
      DB_DATABASE=Laravel11ecommercedb
      DB_USERNAME=root
      DB_PASSWORD=
      ```

      > Replace `Laravel11ecommercedb` with the name of your MySQL database.

5. **Set up the database and run migrations**:

    - Open **phpMyAdmin** in XAMPP and create a new database with the name specified in `.env`.
    - Run migrations to set up database tables:

    ```bash
    php artisan migrate
    ```

6. **Run the development server**:

    ```bash
    php artisan serve
    ```

7. Visit [http://localhost:8000](http://localhost:8000) to see the online store platform in action!

## 📧 Contact
For questions or inquiries, feel free to reach us at [nbekele8@gmail.com](mailto:nbekele8@gmail.com).

## 📸 Example
Imagine a storefront where users can browse items, add them to their cart, and see the total cost—all without leaving the main page. The platform is designed to be simple, functional, and user-friendly for all shoppers.
