# Pff-livraison

Pff-livraison is a web-based delivery management platform built with Laravel, designed to streamline and manage logistics, deliveries, vehicles, drivers, and payment tracking for delivery businesses or logistics companies.

## Features

- **Client and Admin Dashboards:** Separate interfaces for clients and administrators to manage and track orders, deliveries, and payments.
- **Order Management:** Place and manage delivery orders, track status, and assign drivers and vehicles.
- **Real-time Reporting:** Administrators can view monthly payment reports, monitor delivered orders, and track key business metrics.
- **Vehicle and Driver Management:** Register, assign, and monitor vehicles and drivers, including vehicle type, capacity, location, and status.
- **Payment Tracking:** Integrated system for managing and summarizing payment histories and outstanding balances.
- **Customizable User Roles:** Supports multiple user positions and roles for flexible access control.
- **Responsive UI:** Clean, modern user interface with key statistics and visuals to enhance user experience.
- **Docker Support:** Includes Dockerfiles for multiple PHP versions to simplify deployment and development.

## Technologies Used

- **Backend:** Laravel (PHP Framework)
- **Frontend:** Blade Templates, HTML, CSS
- **Database:** MySQL (with Eloquent ORM)
- **Containerization:** Docker
- **Other:** Supervisor, Git, Composer

## Getting Started

### Prerequisites

- PHP 8.0+
- Composer
- Docker (optional, for containerized setup)
- Node.js (for frontend assets, optional)

### Installation

1. **Clone the repository:**
   ```bash
   git clone https://github.com/Elkess/Pff-livraison.git
   cd pff-laravel
   ```

2. **Install PHP dependencies:**
   ```bash
   composer install
   ```

3. **Copy the example environment file and configure:**
   ```bash
   cp .env.example .env
   # Edit .env to set your database and mail credentials
   ```

4. **Generate an application key:**
   ```bash
   php artisan key:generate
   ```

5. **Run database migrations:**
   ```bash
   php artisan migrate
   ```

6. **(Optional) Build and run with Docker:**
   ```bash
   docker-compose up --build
   ```

7. **Start the development server:**
   ```bash
   php artisan serve
   ```

## Screenshots

<!-- Add screenshots here when available -->
![Admin Dashboard Example](https://wp.dreamitsolution.net/multilen/multilen-transport/wp-content/uploads/2021/10/transport-2-1.png)

## Project Structure

- `app/Http/Controllers/`: Application logic for both client and admin.
- `app/Models/`: Eloquent models for users, vehicles, payments, deliveries, etc.
- `resources/views/`: Blade templates for UI.
- `database/migrations/`: Database structure and schema definitions.
- `docker/`: Dockerfiles for PHP versions 8.0 - 8.3.
- `public/css/`: Custom stylesheets.

## License

This project is licensed under the MIT License.

---

**Made with ❤️ by Saaad Elkess Rhandoumi**
