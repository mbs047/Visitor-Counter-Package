# Visitors counter 

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

# Themes
Can be managed from `themes` table, and theme name from `config_settings`

| column | rules | type of data |
| ---- | ------ | ------ |
| `user_id` | nullable | if user is logged the id will be stored "
| `ip_address` | required | user used ip address |
| `user_agent` | required | user used agent |
| `browser` | required | user used browser |
| `browser_version` | required | user used browser version |
| `platform` | required | user operating system |
| `platform_version` | requird | user system version | 
| `device` | required | user manufacturer device |
| `location` | required | user location |
