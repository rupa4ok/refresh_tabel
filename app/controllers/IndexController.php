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
use App\Services\Auth\LoginService;

class IndexController extends BaseController
{
    /**
     * @var LoginService
     */
    private $auth;
    
    /**
     * @var Requests
     */
    
    public function __construct()
    {
        parent::__construct();
        $this->auth = new LoginService($this->request->getPost());
    }
    
    public function actionMain()
    {
        $errors = $this->auth->login();
        return Helpers::render('index', ['errors' => $errors]);
    }
}
