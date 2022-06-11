# Postly

This is a small Laravel CRUD application that enables logged in users to post whatsever they want viewed by every other user who can like and unlike the posts. On liking an email is sent if SMTP is set up in .env file.

### For the App To Run Follow These Instructions

1. Run git clone
2. Run composer install
3. Run cp .env.example .env
4. Run php artisan key:generate
5. Run php artisan migrate
6. Run php artisan serve
7. Go to link localhost:8000

### What is needed To Run Application
1. PHP 7.3+
2. Composer (php package manager)
3. Laravel
4. DB You an set up any SQL db in .env

### TODO:
* Add functionality to Dashboard page
* Add frunctionlity to Home page

___

__NB:__ This was done following the tutorial learn laravel crash course by Traversy Media the video is [here](https://www.youtube.com/watch?v=MFh0Fd7BsjE)