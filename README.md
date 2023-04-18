## Visit Registry

This is a Laravel application for managing visits to a registry. It allows users to register and login, schedule appointments, and view their appointment history.

### Installation

1. Clone the repository to your local machine:

    ```
    git clone https://github.com/miltonjq/REGISTRO-DE-VISITAS.git
    ```

2. Navigate to the project directory:

    ```
    cd REGISTRO-DE-VISITAS
    ```

3. Install the dependencies:

    ```
    composer install
    ```

    and

    ```
    npm install
    ```

4. Create a new .env file:

    ```
    cp .env.example .env
    ```

5. Generate a new application key:

    ```
    php artisan key:generate
    ```

6. Create a new database and update the .env file with your database credentials:

    ```
    DB_DATABASE=your_database_name
    DB_USERNAME=your_database_username
    DB_PASSWORD=your_database_password
    ```

7. Run the database migrations:

    ```
    php artisan migrate --seed
    ```

8. Start the development server:

    - First Terminal
        ```
        npm run dev
        ```
    - Better Terminal

        ```
        php artisan serve
        ```

### Usage

Once the development server is running, you can access the application at http://localhost:8000.

-   Admin Credentials:
    -   email: admin@admin.com
    -   password: password
-   Personero Credentials:
    -   email: personero@personero.com
    -   password: password

### License

This project is licensed under the MIT License - see the LICENSE file for details.
