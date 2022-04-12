# Malath SMS 
**Malath SMS** is a Laravel package that provides a method to use malath API services, with a few simple lines of code.

[![downloads](https://badgen.net//packagist/dt/devhereco/malathsms)](https://packagist.org/packages/devhereco/malathsms)
[![stars](https://badgen.net/github/stars/devhereco/Malath-SMS-Package)](https://github.com/devhereco/Malath-SMS-Package)
[![contributors](https://badgen.net/github/contributors/devhereco/Malath-SMS-Package)](https://github.com/devhereco/Malath-SMS-Package)
[![releases](https://badgen.net/github/releases/devhereco/Malath-SMS-Package)](https://github.com/devhereco/Malath-SMS-Package)
[![issues](https://badgen.net/github/open-issues/devhereco/Malath-SMS-Package)](https://github.com/devhereco/Malath-SMS-Package)
[![latest-release](https://badgen.net/packagist/v/devhereco/malathsms/latest)](https://packagist.org/packages/devhereco/malathsms)

## Installation

### 1. Require with [Composer](https://getcomposer.org/)
```sh
- composer require guzzle/guzzle
- composer require devhereco/malathsms
```

### 2. Add Service Provider (Laravel 5.4 and below)

Latest Laravel versions have auto dicovery and automatically add service provider - if you're using 5.4.x and below, remember to add it to `providers` array at `/app/config/app.php`:

```php
// ...
Devhereco\MalathSMS\ServiceProvider::class,
```

### 3. Migrations

```sh
php artisan migrate
```

### 4. env variables

```sh
MALATH_SMS_USERNAME=
MALATH_SMS_PASSWORD=
MALATH_SMS_SENDER=
```

## Usages

### 1. One way messages
This function will allow you to send messages to selected numbers.

Examples:
```php
use Devhereco\MalathSMS\MalathSMS;

MalathSMS::sendOneSide('966555644047', 'Test Message');
// MalathSMS::sendOneSide(Receiver Number, Message);
```

### 2. Get Account Balance
This function will show Malath account balance in your backend.

Examples:
```php
use Devhereco\MalathSMS\MalathSMS;

MalathSMS::getBalance();
```
