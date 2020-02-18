Laravel Project with Passport Oauth2

## General Set Up

- docker-compose up -d

## Server Set Up

- composer install
- php artisan migrate --seed
- php artisan serve
- click on "Create Client"
- Login with the credentials "admin@gmail.com" and "password"
- create a client with a random name and the Redirect Callback = http://localhost:8001/callback
- go to "Show Clients"

## Client Set Up

- composer install
- php artisan migrate --seed
- php artisan serve
- go to the route "/callback" on on routes/web and substitute the placeholders with the data of your cliente on the "Show Clients" page
- click on "Get Token"
- login with the credentials "admin@gmail.com" and "password"
- click on "Authorize"
- get your Oauth2 Token


