# Malath SMS 
**Malath SMS** is a Laravel package that provides a method to use malath API services, with a few simple lines of code.

[![downloads](https://badgen.net//packagist/dt/devhereco/visitor)](https://packagist.org/packages/devhereco/visitor)
[![stars](https://badgen.net/github/stars/devhereco/Visitor-Counter-Package)](https://github.com/devhereco/Visitor-Counter-Package)
[![contributors](https://badgen.net/github/contributors/devhereco/Visitor-Counter-Package)](https://github.com/devhereco/Visitor-Counter-Package)
[![releases](https://badgen.net/github/releases/devhereco/Visitor-Counter-Package)](https://github.com/devhereco/Visitor-Counter-Package)
[![issues](https://badgen.net/github/open-issues/devhereco/Visitor-Counter-Package)](https://github.com/devhereco/Visitor-Counter-Package)
[![latest-release](https://badgen.net/packagist/v/devhereco/visitor/latest)](https://packagist.org/packages/devhereco/visitor)

## Installation

### 1. Require with [Composer](https://getcomposer.org/)
```sh
- composer require stevebauman/location
- composer require jenssegers/agent
- composer require devhereco/visitor
```

### 2. Add Middleware (in 'web' group)

```php
// ...
\Devhereco\Visitor\Http\Middleware\VisitorCounter::class,
```

### 3. Migrations

```sh
php artisan migrate
```