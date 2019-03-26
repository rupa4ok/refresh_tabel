<?php
/**
 * Created by PhpStorm.
 * User: rupak
 * Date: 13.03.2019
 * Time: 21:18
 */

namespace App\Components;

use App\controllers\BaseController;
use App\Storage\StorageInterface;

class RegistrationService extends BaseController
{
    /**
     * @var UserInfo[]
     */
    protected $items;
    /**
     * @var StorageInterface
     */
    protected $storage;
    
    /**
     * @var Validate
     */
    protected $validate;
    
    public function __construct()
    {
        parent::__construct();
        $this->validate = new Validate();
    }
    
    
}
