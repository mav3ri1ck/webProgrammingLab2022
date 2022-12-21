# Server
## Start the server
### Fedora/Ubuntu
```bash
systemctl start httpd
```

### Kali
```bash
service apache2 start

service apache2 stop

service apache2 restart
```

## Create the file
```bash
cd /var/www/html/
```

<br>

# PHP
- Write anywhere in html doc
- between "\<?php" and "\?>"
- every statement ends with semicolon

## Variables
prefixed with a "$" sign
```php
$a = 20;
echo $a;
```

## To debug
- either enable the error reporting in the config file
- or, easier way, just <strong>parse it using php</strong>
```php
php index.php
```

## php shell
```bash
php -a
```

## Rules
- singles quotes don't show variable value
- double quotes are used for printing variables
- dot(.) operator is for concatenation

```php
$a = 50;
echo "The value of a is: $a";
echo 'The value of a is: $a';
echo 'The value of a is:' . $a;
```

