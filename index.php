<?php

require 'vendor/autoload.php';

$app = new \Slim\App([
    'settings' => [
        'displayErrorDetails' => true
    ]
]);

$app->post('/generate', function ($req, $res, $args) {
    return $res->withJson(Array('status' => 'ok'));
});

$app->run();

