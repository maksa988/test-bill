Project created using Laravel.
To run this project:
- Clone repository
- Generate key
- Set database credentials in `.env`
- Run migrates using `php artisan migrate`
- Change QUEUE_DRIVER to **database** or something else
- Change Mail settings in .env to yours
- Set your manager\`s email in .env: `MANAGER_EMAIL`

Run queue worker using: `php artisan queue:work`

Go to "https://yoursite.com/order" to get order form page and put your data.
