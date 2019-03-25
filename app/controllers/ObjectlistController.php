<?php
/**
 * Created by PhpStorm.
 * User: rupak
 * Date: 24.03.2019
 * Time: 17:26
 */

namespace App\Controllers;

use App\components\Helpers;
use App\Components\Requests;
use App\Components\Auth;

class ObjectlistController extends BaseController
{
    /**
     * @var Auth
     */
    private $auth;
    
    /**
     * @var Requests
     */
    
    public function __construct()
    {
        $this->auth = new Auth();
        parent::__construct();
    }
    
    public function actionIndex()
    {
        return Helpers::render('objectlist', ['login' => '']);
    }
}