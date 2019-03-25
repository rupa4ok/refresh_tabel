<?php
/**
 * Created by PhpStorm.
 * User: rupak
 * Date: 14.03.2019
 * Time: 5:28
 */

namespace App\Models;

use App\Components\Validate;
use App\Components\Requests;
use App\Components\UserInfo;

class Users extends BaseModel
{
    /**
     * @var Requests
     */
    private $userPostInfo;
    private $userXmlInfo;
    private $validate;
    protected $table = 'users';
    protected $fillable = ['username','email','password'];
    
    public function __construct()
    {
        parent::__construct();
        $this->userPostInfo = new UserInfo($this->request->getPost());
        $this->userXmlInfo = new UserInfo($this->xmlStorage->load());
        $this->validate = new Validate();
    }
    
    /**
     *
     */
    public function login()
    {
        if (empty($this->validate->checkValid())) {
            $this->sessionStorage->save($this->userPostInfo->userInfo);
            $this->helpers->redirect('', 301);
        } else {
            return $this->validate->checkValid();
        }
    }
    
    /**
     * Запись пользователя в хранилище
     *
     * @return array|string
     */
    public function register()
    {
        if (empty($this->validate->checkValid())) {
            $this->sessionStorage->save($this->userPostInfo->userInfo);
            $reg = 'Успешно зарегистрирован';
        } else {
            $reg = $this->validate->checkValid();
        }
        return $reg;
    }
    
    public function create_user(){
        return Users::table('users')->get();
    }
}
