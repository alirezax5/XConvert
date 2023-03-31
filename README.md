# XConvert

file size & time unit convert

install :

```
composer require alirezax5/x-convert
```

ex : 

```php

<?php
include_once 'vendor/autoload.php';
use alirezax5\XConvert\XConvert;

echo XConvert::convertFileSize('1','GB','MB');
echo '</br>';
echo XConvert::convertTimeUnit('1','ms','s');

```
