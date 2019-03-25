<?php
/**
 * Created by PhpStorm.
 * User: rupak
 * Date: 14.03.2019
 * Time: 5:02
 */

namespace App\Controllers;

use App\components\Helpers;
use App\Components\Requests;
use App\Components\Auth;

class IndexController extends BaseController
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
    
    public function actionMain()
    {
        $this->auth->login();
    
        return Helpers::render('index', ['login' => '']);
    }
}
