
## Setup Dashboard Project 

- First clone project on your device
  - copy .env.example and paste .env file
  - enter in env file to connect db.
  - Run ``` composer update```.
  - then Run ``` composer install```.
  - After Run ``` php artisan key:generate```.
  - Run ``` php artisan migrate:fresh --seed ```.
  - run ``` php artisan serve ```
    - the login information
  - username `admin@gmail.com`
  - password `password`
## Go to Ui Project
- ```http://127.0.0.1:8000/home```
