<?php
/**
 * Created by PhpStorm.
 * User: rupak
 * Date: 25.03.2019
 * Time: 8:16
 */

namespace App\Models;

use App\components\Helpers;
use App\Components\Requests;
use App\storage\SessionStorage;
use \Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Capsule\Manager as Capsule;

class BaseModel extends Model
{
    /**
     * @var Requests
     */
    protected $request;
    
    /**
     * @var SessionStorage
     */
    protected $sessionStorage;
    
    /**
     * @var Capsule
     */
    protected $capsule;
    
    protected $helpers;
    protected $key;
    
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->helpers = new Helpers();
        $this->request = new Requests();
        $this->sessionStorage = new SessionStorage($this->key);
        $this->connect();
    }
    
    private function connect()
    {
        $this->capsule->addConnection([
            'driver' => DBDRIVER,
            'host' => DBHOST,
            'database' => DBNAME,
            'username' => DBUSER,
            'password' => DBPASS,
            'charset' => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix' => '',
        ]);
        $this->capsule->setAsGlobal();
        $this->capsule->bootEloquent();
    }
}
