<?php
/**
 * Created by PhpStorm.
 * User: rupak
 * Date: 14.03.2019
 * Time: 5:03
 */

namespace App\controllers;

use App\components\Helpers;
use App\Models\User;

class RegController extends BaseController
{
    private $users;
    
    public function __construct()
    {
        $this->users = new User();
        parent::__construct();
    }
    
    public function actionIndex()
    {
        $errors = '';
        if ($this->request->requestMethod('POST')) {
            $errors = '';
        }
    
        return Helpers::render('reg', ['errors' => $errors]);
    }
}
