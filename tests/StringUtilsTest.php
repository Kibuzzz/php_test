<?php
/*
Нажмите кнопку run чтобы запустить тесты.
Попробуйте изменять код функции / тестов, запуская проверки заново.
*/

require("src/StringUtils/capitalize.php");

if (StringUtils\capitalize('hello') !== 'Hello') {
    throw new \Exception('Функция работает неверно!');
}

if (StringUtils\capitalize('') !== '') {
    throw new \Exception('Функция работает неверно!');
}

echo "все тесты пройдены";
