<?php
/**
 * Created by PhpStorm.
 * User: rupak
 * Date: 25.03.2019
 * Time: 8:16
 */

namespace App\models;

use \Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Capsule\Manager as Capsule;

abstract class BaseModel extends Model
{
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
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
        // Setup the Eloquent ORM…
        $capsule->bootEloquent();
    }
}