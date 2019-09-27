<?php

$files = glob(__DIR__ . '/src/*.php');
print_r($files);
if ($files === false) {
    throw new RuntimeException("Failed to glob for function files");
}
foreach ($files as $file) {
    require_once $file;
}
unset($file);
unset($files);
