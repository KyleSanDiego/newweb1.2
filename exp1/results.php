<?php
$options = ['Ivan', 'AJ', 'Miguel', 'Matthew', 'Justine'];
$votes = json_decode(file_get_contents('votes.json'), true);

foreach ($options as $option) {
    echo htmlspecialchars($option) . ': ' . $votes[$option] . ' votes<br>';
}
?>