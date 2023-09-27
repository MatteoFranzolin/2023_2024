<?php
require_once __DIR__ . '/../vendor/autoload.php';

$yamlContent = file_get_contents('ciao.yml');
$yamlData = Symfony\Component\Yaml\Yaml::parse($yamlContent);
$jsonData = json_encode($yamlData, JSON_PRETTY_PRINT);

// Mostra i dati a video
echo "YAML:\n";
echo $yamlContent;

echo "\n\nJSON:\n";
echo $jsonData;
