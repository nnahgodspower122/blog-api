# Blog API

This project is a simple Blog API built with Laravel. It includes functionality for users to like and unlike blog posts. The authentication is handled using Laravel's built-in features.

## Requirements

- PHP 8.1 or higher
- Composer
- MySQL

## Installation

1. Clone the repository:
    ```bash
    git clone https://github.com/yourusername/blog-api.git
    cd blog-api
    ```

2. Install dependencies:
    ```bash
    composer install
    ```

## Configuration

1. Copy `.env.example` to `.env`:
    ```bash
    cp .env.example .env
    ```

2. Generate an application key:
    ```bash
    php artisan key:generate
    ```

3. Update the `.env` file with your database credentials:
    ```ini
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=blog_api
    DB_USERNAME=root
    DB_PASSWORD=yourpassword
    ```

## Database Setup

1. Run migrations:
    ```bash
    php artisan migrate
    ```

2. Seed the database with test data (including a test user):
    ```bash
    php artisan db:seed
    ```

## Running the Application

1. Start the development server:
    ```bash
    php artisan serve
    ```

2. The application will be available at `http://127.0.0.1:8000`.

## Testing with Postman

### Setting up Authentication
1. Add an `Authorization` header in Postman with the token:
    ```json
    {
        "Authorization": "vg@123"
    }
    ```

### Making Requests

- **Like a Post**:
  - Method: POST
  - URL: `http://127.0.0.1:8000/api/posts/{blogId}/like`

- **Unlike a Post**:
  - Method: DELETE
  - URL: `http://127.0.0.1:8000/api/posts/{blogId}/like`

## Endpoints

### Like a Post

- **URL**: `/api/posts/{blogId}/like`
- **Method**: `POST`
- **Description**: Like a blog post.

### Unlike a Post

- **URL**: `/api/posts/{blogId}/like`
- **Method**: `DELETE`
- **Description**: Unlike a blog post.
