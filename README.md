# Laravel 12 Real Estate App with FilamentPHP 4 & Livewire

This repository contains the source code for a modern real estate application built with **Laravel 12**. The project features a powerful admin panel built with **FilamentPHP 4** and a dynamic, modern front-end powered by **Livewire** and the TALL stack.

## 📸 Screenshots



| Admin Panel (Filament) | Front-End (Livewire) |
| :---: | :---: |
|  |  |

## ✨ Features

### Backend (FilamentPHP 4)
* **Rapid CRUD:** Automatically generated Create, Read, Update, and Delete (CRUD) interfaces for managing properties, agents, and more.
* **Complex Form Layouts:** Utilizes Filament's Grid system to create professional and responsive form layouts.
* **Authentication:** Secure admin panel login, completely separate from the public-facing site.

### Front-End (Livewire 3)
* **Dynamic Components:** Interactive front-end components (like search bars and property listings) built entirely in PHP with Livewire.
* **Advanced Searching:** Real-time property searching.
* **Dynamic Filtering:** Filter properties by price, location, number of beds/baths, etc.
* **Computed Properties:** Efficiently calculate and cache values within Livewire components.

### Core (Laravel 12)
* **Database Structure:** Clear and maintainable database schema using models, migrations, and relationships.
* **Query Scopes:** Reusable and clean database queries for filtering data (e.g., `scopeIsAvailable()`).
* **Helper Methods:** Custom helper functions to simplify common tasks throughout the application.

## 🛠️ Tech Stack

* **Framework:** Laravel 12
* **Admin Panel:** FilamentPHP 4
* **Frontend:** Livewire 3
* **Styling:** Tailwind CSS
* **Database:** MySQL 

## 🚀 Getting Started

Follow these instructions to get a copy of the project up and running on your local machine for development and testing purposes.

### Prerequisites

* PHP 8.2+
* Composer
* Node.js & npm
* A database (e.g., MySQL, PostgreSQL)

### Installation

1.  **Clone the repository:**
    ```bash
    git clone 
   
    ```

2.  **Install PHP dependencies:**
    ```bash
    composer install
    ```

3.  **Install JavaScript dependencies:**
    ```bash
    npm install
    ```

4.  **Create your environment file:**
    ```bash
    cp .env.example .env
    ```

5.  **Generate an application key:**
    ```bash
    php artisan key:generate
    ```

6.  **Configure your database:**
    Open the `.env` file and set your database connection details (e.g., `DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`).

7.  **Run database migrations:**
    (If you have seeders to populate demo data, add the `--seed` flag).
    ```bash
    php artisan migrate
    ```

8.  **Create an admin user for Filament:**
    This is an interactive command. It will ask you for a name, email, and password.
    ```bash
    php artisan make:filament-user
    ```

9.  **Build front-end assets:**
    ```bash
    npm run dev
    ```

10. **Run the development server:**
    ```bash
    php artisan serve
    ```

### Accessing the App

* **Front-End Website:** `http://127.0.0.1:8000`
* **Filament Admin Panel:** `http://127.0.0.1:8000/admin` 

## 📄 License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
