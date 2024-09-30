<?php
session_start();
$options = ['Ivan', 'AJ', 'Miguel', 'Matthew', 'Justine'];


if (!file_exists('votes.json')) {
    file_put_contents('votes.json', json_encode(array_fill_keys($options, 0)));
}

if (isset($_POST['option']) && in_array($_POST['option'], $options)) {
    $votes = json_decode(file_get_contents('votes.json'), true);
    $votes[$_POST['option']]++;
    file_put_contents('votes.json', json_encode($votes));
}
?>