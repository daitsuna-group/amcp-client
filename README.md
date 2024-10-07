# AMCP Client for PHP

Обертка для работы с AMCP протоколом для управления CasparCG.

## Установка

Используйте Composer для установки:

```bash
composer require daitsuna-group/amcp-client
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
