# AMCP Client for PHP

Обертка для работы с AMCP протоколом для управления CasparCG.

[![Build Status](https://github.com/daitsuna-group/amcp-client/actions/workflows/php.yml/badge.svg)](https://github.com/daitsuna-group/amcp-client/actions)
[![Coverage Status](https://coveralls.io/repos/github/daitsuna-group/amcp-client/badge.svg?branch=main)](https://coveralls.io/github/daitsuna-group/amcp-client?branch=main)


## Установка

Используйте Composer для установки:

```bash
composer require daitsuna-group/amcp-client
```

Так же в composer.json нужно добавить:
```json
"repositories": [ 
        { 
            "type": "git", 
            "url": "https://github.com/daitsuna-group/amcp-client" 
        } 
    ],
```

## Использование

Пример использования:

```php
require_once __DIR__ . '/vendor/autoload.php';

use Daitsuna\AmcpClient\AmcpClient;

$client = new AmcpClient('localhost', 5250);

$stopResponse = $client->stop(1, 10);
print_r($stopResponse);
```
