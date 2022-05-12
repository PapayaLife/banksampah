<?php

namespace App\Controllers;
use App\Models\LoginModel;

class Login extends BaseController
{
    public function index()
    {
        return view('login/index');
    }
    public function Validation()
    {
        $model = new LoginModel();
        $username = $this->request->getPost('username');
        $user = $model->getUser($username);
        
        if($user)
        { 
            if($user['password'] == $this->request->getVar('password'))
            {
                if($user['aktif'] == '1')
                {
                    echo "Login Berhasil";
                }
                else
                {
                    echo "Akun tidak Aktif";
                }
                
            }
            else
            {
                echo "Password Salah";
            }
        }
        else
        {
            echo "Username Gagal";
        }
    }
}
