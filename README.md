
## Description
This project is designed to test your knowledge of web technologies and assess your ability to
create robust PHP web applications with attention to software architecture​ and security.

This project was making in Laravel v.7.24.0 and MySql as database

## Downloads dependencies
- **Execute:** composer install
- **Execute:** npm install

## Database configuration
- **Name:** chat_bot_app
- **Execute migration:** php artisan migrate
- **Tables:** Users, Accounts, Transactions
- **Execute seeders:** php artisan db:seed

## Env file
- **Set MySql** as engiene
- **Currency api key**
    CURRENCY_API_ENDPOINT=https://www.amdoren.com/api/currency.php
    CURRENCY_API_KEY=Your api
You have to put these global variable in the botton of the .env file

## Currency api
I chose this api https://www.amdoren.com/currency-api/

## Bot
I chose this framework to build the chatbot https://botman.io/2.0/welcome
The bot doesn't work yet