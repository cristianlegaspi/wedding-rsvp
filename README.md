# Wedding RSVP Laravel Project

This is a full Laravel source project for the Wedding RSVP website.

## Setup

```bash
composer install
copy .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve
```

Then open:

```text
http://127.0.0.1:8000
```

## Database

The project is already configured to use SQLite:

```env
DB_CONNECTION=sqlite
DB_DATABASE=database/database.sqlite
```

The `database/database.sqlite` file is already included.

## RSVP Data

RSVP submissions are saved in the `rsvps` table.
