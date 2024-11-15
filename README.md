## Project Setup Guide

Follow the steps below to set up and run the app locally.

**Prerequisites**
Before starting, make sure you have the following installed on your system:

-   **PHP** (8.2 or higher)
-   **Composer** (for PHP package management)
-   **Node.js** and **npm** (for front-end dependencies)
-   **MySQL** or **MariaDB** (for database)
-   **A local server environment** (such as **XAMPP** or **Herd**)

#### 1. Clone the Repository

Clone the repository to your local machine:

```
git clone https://github.com/Mentorg/Laravel-Task-Manager.git
cd Laravel-Task-Manager
```

#### 2. Install PHP Dependencies

Install the required PHP dependencies using Composer:<br />
`composer install`

#### 3. Install Fron-End Dependencies

Install the necessary front-end dependencies with npm:<br />
`npm install`<br /><br />
After installing the Node.js dependencies, run the following command to compile the front-end assets:<br />
`npm run dev`

#### 4. Set Up the Database

Run the database migrations to create the required tables:<br />
`php artisan migrate`

**Note:** After running the command above you might get asked to create an SQLITE file, please type 'yes' and then move on with the rest.

You can also seed the database with some initial data:<br />
`php artisan db:seed`

#### 5. Start the Development Server

**Option 1: Using Herd**
If you're using **Herd**, open your browser and visit:<br />
`todo-list.test`

**Option 2: Using XAMPP or other local servers**
If you're using **XAMPP** or another server setup, follow these steps:

1. Open a new terminal window.
2. Run the following command to start the Laravel development server:<br />
   `php artisan serve`
3. Open your browser and visit:<br />
   `http://127.0.0.1:8000`

#### 7. Access the Application

Once the server is running, you can access the app through the provided URL:

For **Herd**: `todo-list.test`<br />
For **XAMPP**: `http://127.0.0.1:8000`
