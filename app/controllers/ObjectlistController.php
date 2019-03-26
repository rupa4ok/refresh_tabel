<?php
/**
 * Created by PhpStorm.
 * User: rupak
 * Date: 24.03.2019
 * Time: 17:26
 */

namespace App\Controllers;

use App\components\Helpers;
use App\Components\UserInfo;
use App\storage\SessionStorage;

class ObjectlistController extends BaseController
{
    private $userInfo;
    
    public function __construct()
    {
        parent::__construct();
        $this->sessionStorage = new SessionStorage('user');
        $this->userInfo = new UserInfo($this->sessionStorage->load());
    }
    
    public function actionIndex()
    {
        return Helpers::render('objectlist', $this->params());
    }
    
    private function params()
    {
        return ['user' => $this->userInfo->getName()];
    }
    
}