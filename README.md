# Laravel 11 Add to Shopping Cart Example Tutorial

Adding items to a shopping cart in a Laravel application involves creating a system that allows users to select products and store them temporarily before proceeding to checkout. This feature is fundamental for e-commerce websites as it provides a convenient way for customers to manage their purchases. 

# Clone the Repository

<pre> git clone https://github.com/tutsmake/Laravel-11-Add-Product-to-Shopping-Cart-Example-Tutorial.git</pre>

# Navigate to the Project Directory

<pre> cd Laravel-11-Add-Product-to-Shopping-Cart-Example-Tutorial </pre>

# Install Dependencies

<pre> composer install </pre>

# Copy the Environment File

<pre>cp .env.example .env </pre>

# Generate Application Key

<pre> php artisan key:generate</pre>

# Configure Database

Open the .env file and set your database credentials.

# Run Migrations

<pre> php artisan migrate</pre>

# Run Seeders

To run the seeders, use the db:seed Artisan command. If you have multiple seeders, you can specify which seeder to run. For example, to run the MoviesTableSeeder, you can run:

<pre>php artisan db:seed --class=MoviesTableSeeder</pre>

# Start the Development Server

<pre> php artisan serve</pre>

# Access the Application:

Open your web browser and visit http://127.0.0.1:8000/movies-list to access the application.

# Published By

https://www.tutsmake.com/

# Add product to shopping cart application view:
![Add to cart Image 1](https://github.com/tutsmake/Laravel-11-Add-Product-to-Shopping-Cart-Example-Tutorial/blob/main/Laravel%2011%20Add%20Product%20To%20Shopping%20Cart%20example.png)
![Add to cart Image 2](https://github.com/tutsmake/Laravel-11-Add-Product-to-Shopping-Cart-Example-Tutorial/blob/main/Laravel%2011%20Add%20Product%20To%20Shopping%20Cart.png)
![Remove Product from Cart Image](https://github.com/tutsmake/Laravel-11-Add-Product-to-Shopping-Cart-Example-Tutorial/blob/main/Laravel%2011%20Add%20Product%20To%20Shopping%20Cart%20tutorial.png)




