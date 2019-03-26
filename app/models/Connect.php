<?php
/**
 * Created by PhpStorm.
 * User: rupak
 * Date: 25.03.2019
 * Time: 8:16
 */

namespace App\Models;

use Illuminate\Database\Capsule\Manager as Capsule;

class Connect
{
    public function __construct()
    {
        $capsule = new Capsule;
        $capsule->addConnection([
            'driver' => DBDRIVER,
            'host' => DBHOST,
            'database' => DBNAME,
            'username' => DBUSER,
            'password' => DBPASS,
            'charset' => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix' => '',
        ]);
        $capsule->setAsGlobal();
        $capsule->bootEloquent();
    }
}
