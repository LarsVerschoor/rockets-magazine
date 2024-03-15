<?php

$envFile = __DIR__ . '/.env';

if (file_exists($envFile)) {
    $envVariables = parse_ini_file($envFile);
    foreach ($envVariables as $key => $value) {
        $_ENV[$key] = $value;
    }
}

$db = mysqli_connect(
    $_ENV['DATABASE_HOST'],
    $_ENV['DATABASE_USER'],
    $_ENV['DATABASE_PASSWORD'],
    $_ENV['DATABASE_NAME']
) or die('Error: ' . mysqli_connect_error());
