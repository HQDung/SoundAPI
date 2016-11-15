## API with JWT for mobile app

### Installation

Clone the repository and install the Laravel vendor files

	composer install

Set up your .env file with your database connection parameters then run the migrations and seed the database (need to turn on MySQL server)

	php artisan migrate
	php artisan db:seed

### Usage

In source code directory, use this command to start PHP's built-in development server:

	php artisan serve


Open Postman extension to test the api

Using this url to get the token (method : POST)

	http://localhost:8000/api/authenticate?email=superman@app.com&password=mypw

Use the token received from previous step to check out user information via this url

	http://localhost:8000/api/sound?token=...

You need to replace "..." with your token

#####Note that this source code is just a demo for token validation.
