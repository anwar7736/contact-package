## What is this package?
This is a contact us package. When any visitor visit your website (Contact us page) and they can send a message to you. This package automatically send a mail to you and it's store to your database table.

## Installation

```sh
composer require anwar7736/contact
```
---
## Configuration
1. Open <b>config/app.php</b> and add this line to your Service Providers Array. 
```php
Anwar\ShoppingCart\ShoppingCartServiceProvider::class
```
2. Optional configuration file (useful if you plan to have full control)

```php
php artisan vendor:publish --provider="Anwar\ShoppingCart\ShoppingCartServiceProvider"
```
3. Check your database connection and run this command
```sh
php artisan migrate
```
4. Open your <b>.env</b>  file and check your mail configuration
```php
MAIL_MAILER=smtp
MAIL_HOST=sandbox.smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=username
MAIL_PASSWORD=password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=example@gmail.com
MAIL_FROM_NAME="${APP_NAME}"
```
---
## Basic usage
1. No need to add this route in your <b> web.php </b> file
you can only use this route from your controller or your blade file.
```php 

Route::get('/contact', 'index')->name('contact');

```
---

## <center> Thank You </center>