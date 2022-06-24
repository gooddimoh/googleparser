<?php

$file = __DIR__ . '\env\my_secret.json';
$file = file_get_contents($file);
putenv('GOOGLE_APPLICATION_CREDENTIALS=' . $file);


