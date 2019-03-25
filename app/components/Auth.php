<?php
/**
 * Created by PhpStorm.
 * User: rupak
 * Date: 13.03.2019
 * Time: 21:18
 */

namespace App\Components;

use App\Controllers\BaseController;
use App\Storage\StorageInterface;

class Auth extends BaseController
{
    /**
     * @var UserInfo[]
     */
    protected $items;
    /**
     * @var StorageInterface
     */
    protected $storage;
    protected $xmlBd;
    
    public function __construct()
    {
        parent::__construct();
    }
    
    /**
     * @param $storage
     * @return mixed
     */
    public function login()
    {
        $loginData = $this->request->getPost();
        print_r($loginData);
        $this->sessionStorage->save($loginData);
        print_r($this->sessionStorage->load());
    }
}
