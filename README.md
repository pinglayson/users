# service-api

## Installation

composer require pinglayson/users

## Sample Usage

```php
use Pinglayson\Users;
$users = new Users();
$login = $users->login(array('email' => 'pingmail110@mailinator.com',
                      'password' => 'secret',
                      'source' => 'web|mobile',
                      'locale'=>'en|zh'));
```
