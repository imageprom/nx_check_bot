# nx_check_bot
* 1 Помещаем файл в `php_interface`
* 2 Добавляем класс в `init.php`
```php
    <?include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/php_interface/CNXCheckBot.php');?>
```
* 3 Создаём новый объект в `header.php`
```php
    <?
    $isBot = new CNXCheckBot();
    ?> 
```
* 4 С помощъ условия подключаем необходимый участок кода
```php
    <?if(!$isBot->Check()):?>
      <script>Hello</script>
    <?endif?>
```
