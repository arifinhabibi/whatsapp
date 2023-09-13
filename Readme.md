
# package laravel for whatsapp sending message

[![Latest Stable Version](http://poser.pugx.org/arifinhabibi/whatsapp/v/stable.svg)](https://packagist.org/packages/arifinhabibi/whatsapp) [![Total Downloads](http://poser.pugx.org/arifinhabibi/whatsapp/downloads)](https://packagist.org/packages/arifinhabibi/whatsapp) [![License](https://poser.pugx.org/arifinhabibi/whatsapp/license)](https://packagist.org/packages/arifinhabibi/whatsapp)

I'll tell you how to installation or setup this package into your project laravel, please follow this step.

## Requirements Tools

- php >=7.4 | <8.4
- composer has been installed on your system

## Installation

Install this package with [composer](https://getcomposer.org/) and run this on your command.

```bash
composer require arifinhabibi/whatsapp
```
    
Next step on controller you must declare the origin static method 

```base
use arifinhabibi\whatsapp\Whatsapp;
````

second you can use this syntax into your function controller, and change parameter target number and message
```bash
Whatsapp::send("+628238749873", "Helloo world!");
```
send function have to parameters, on first need a number target which registered on whatsapp, second parameter is message. message can separated with space but not with a new line.


## Usage/Examples

```php
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use arifinhabibi\whatsapp\Whatsapp;

class MainController extends Controller
{
    public function send(Request $request)
    {
        return Whatsapp::send($request->phone, $request->message);
    }
}
```

## Requirements Number Target
Is number target must started with number code
| Country  | Number Code |
| ------------- | ------------- |
| Indonesia  |  +62, 62, 0, 8  |

## 📝 License

Copyright © 2023 [arifinhabibi](https://github.com/arifinhabibi). <br />
This project is [MIT](https://github.com/arifinhabibi/whatsapp/blob/main/LICENSE) licensed.
