Laravel Project with Passport Oauth2 (WIP)

## General Set Up

- docker-compose up -d

## Server Set Up

- cd server && composer install && php artisan migrate --seed && php artisan passport:install && php artisan serve
- go to http://localhost:8000 and login with the credentials "admin@gmail.com" and "password"
- click on "Create Client" and create a client with name = "Client" and the Redirect URL = "http://localhost:8001/callback"
- go to "Show Clients"

## Client Set Up

- cd client && composer install && php artisan migrate --seed && php artisan serve
- go to the route "/callback" on on routes/web and substitute the placeholders with the data of your cliente on the "Show Clients" page
- go to http://localhost:8001 and login with the credentials "admin@gmail.com" and "password"
- click on "Get Token" and then on "Authorize"
- get your Oauth2 Token

## Test it on Postman

- GET http://127.0.0.1:8000/api/user -> Sample Endpoint, Don't forget to Pass the Token
