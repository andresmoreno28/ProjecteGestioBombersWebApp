<?php
$dir = __DIR__ . '/';

$iterator = Symfony\Component\Finder\Finder::create()
  ->files()
  ->name('*.php')
  ->exclude('node_modules')
  ->exclude('vendor')
  ->in($dir);

$options = [
  'theme' => 'default',
  'title' => 'Projecte - Cicle Formatiu de Grau Superior de Desenvolupament d\'Aplicacions Web (DAW)',
];

$sami = new Sami\Sami($iterator, $options);

return $sami;