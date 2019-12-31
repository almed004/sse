<?php

header("Cache-control: no-cache");
header("Content-Type: text/event-stream");

require_once 'animals.php';

$animals= json_encode($animals);

echo "data: $animals" ."\n\n";
flush();