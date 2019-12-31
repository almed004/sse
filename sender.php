<?php
header("Cache-control: no-cache");
header("Content-Type: text/event-stream");

$animals= "This is coming from server and displaying online";

echo "data: $animals" ."\n\n";
flush();