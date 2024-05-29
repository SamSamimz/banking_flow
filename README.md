## Banking_flow

This is a simple banking application built with Laravel and Livewire. The application allows users to deposit and withdraw amounts from their accounts. It utilizes Laravel's default authentication system to manage user registration and login functionalities.

### Features

- **User Authentication**: Secure registration and login functionality using Laravel's built-in authentication system.
- **Deposit Funds**: Users can deposit money into their account.
- **Withdraw Funds**: Users can withdraw money from their account.
- **Livewire Integration**: The application is built using Livewire for a dynamic and responsive user experience.

### Installation

1. Clone the repository:
    ```bash
    git clone <repository-url>
    ```
2. Navigate to the project directory:
    ```bash
    cd banking_flow
    ```
3. Install the dependencies:
    ```bash
    composer install
    ```
4. Set up the environment file:
    ```bash
    cp .env.example .env
    ```
5. Generate the application key:
    ```bash
    php artisan key:generate
    ```
6. Configure your database settings in the `.env` file.
7. Run the database migrations:
    ```bash
    php artisan migrate
    ```
8. Run the database seeder command:
    ```bash
    php artisan db:seed
    ```

### Login Information
1. Email :  individual@gmail.com / business@gmail.com
2. Password : 'password'


### Technologies Used

- **Laravel**: PHP web framework.
- **Livewire**: Full-stack framework for Laravel.
- **MySQL**: Database management system.
