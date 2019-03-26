<?php
/**
 * Created by PhpStorm.
 * User: rupak
 * Date: 25.03.2019
 * Time: 22:27
 */

namespace App\Services\Auth;

use App\components\Helpers;
use App\Components\UserInfo;
use App\Models\User;
use App\storage\SessionStorage;

class LoginService
{
    /**
     * @var UserInfo
     */
    private $userInfo;
    
    /**
     * @var User
     */
    private $db;
    
    /**
     * @var SessionStorage
     */
    protected $session;
    
    private $helpers;
    
    public function __construct($request)
    {
        $this->session = new SessionStorage('user');
        $this->db = new User();
        $this->userInfo = new UserInfo($request);
        $this->helpers = new Helpers();
    }
    
    public function login()
    {
        $formLogin = $this->userInfo->getLogin();
        return $this->checkLogin($formLogin);
    }
    
    public function checkLogin($formLogin)
    {
        $checkLogin = User::where('name', $formLogin)->first();
        if ($checkLogin) {
            $this->session->save($checkLogin->toArray());
            $this->helpers->redirect('objectlist', 301);
        } else {
            return 'Пользователь не существует';
        }
    }
}