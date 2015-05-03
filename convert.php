<?php
/**
 * convert.php
 * @author Revin Roman http://phptime.ru
 */

$rows = json_decode(file_get_contents(__DIR__ . '/lib/socicon/icons.json'), true);

foreach ($rows as $row) {
    echo 'const _' . mb_strtoupper($row['id']) . ' = \'' . $row['id'] . '\';' . PHP_EOL;
}

foreach ($rows as $row) {
    echo 'const _' . mb_strtoupper($row['id']) . '_CHAR = \'' . $row['character'] . '\';' . PHP_EOL;
}

foreach ($rows as $row) {
    echo 'const _' . mb_strtoupper($row['id']) . '_COLOR = \'' . $row['color'] . '\';' . PHP_EOL;
}