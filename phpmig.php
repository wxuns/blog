<?php

use \Phpmig\Adapter;
use Pimple\Container;
use Illuminate\Database\Capsule\Manager as Capsule;

$container = new Container();
$database = (new \Polite\Console\Event\Config())->getConfig('application','database');
$container['config'] = [
    'driver'    => $database['driver'],
    'host'      => $database['host'],
    'database'  => $database['database'],
    'username'  => $database['username'],
    'password'  => $database['password'],
    'charset'   => $database['charset'],
    'collation' => $database['collation'],
    'prefix'    => $database['prefix'],
];
$container['db'] = function ($c) {
    $capsule = new Capsule();
    $capsule->addConnection($c['config']);
    $capsule->setAsGlobal();
    $capsule->bootEloquent();

    return $capsule;
};
$container['Schema'] = function (){
    return Capsule::schema();
};
$container['phpmig.adapter'] = function($c) {
    return new Adapter\Illuminate\Database($c['db'], 'migrations');
};
$relative = 'resources/databases/migrations';
$container['phpmig.migrations_path'] = __DIR__ . DIRECTORY_SEPARATOR . $relative;

return $container;