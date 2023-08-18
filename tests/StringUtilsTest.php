<?php
/*
Нажмите кнопку run чтобы запустить тесты.
Попробуйте изменять код функции / тестов, запуская проверки заново.
*/

require("vendor/autoload.php");

use Webmozart\Assert\Assert;

use function StringUtils\capitalize;

Assert::eq(capitalize("hello"), "Hello");
Assert::eq(capitalize("hello hello"), "Hello hello");
Assert::eq(capitalize(""), "");
