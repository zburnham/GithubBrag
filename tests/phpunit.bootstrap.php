<?php
include (__DIR__ . '/../SplClassLoader.php');
include (__DIR__ . '/../../../../wp-includes/widgets.php');

$autoloader = new SplClassLoader('GithubBrag', __DIR__ . '/../');
$autoloader->register();
