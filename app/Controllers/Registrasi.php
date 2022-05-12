<?php

namespace App\Controllers;
use App\Models\RegisterModel;

class Registrasi extends BaseController
{
    public function index()
    {
        return view('registrasi/index');
    }
    public function simpan()
    {
        $model = new LoginModel();
        $name          = $this->request->getpost('nama');
        $phone         = $this->request->getpost('telepon');
        $blok          = $this->request->getpost('blok');
        $user          = $this->request->getpost('username');
        $pass          = $this->request->getpost('password');
        $pass2         = $this->request->getpost('password2');

        $last = $model->getlastdata();

            $save_data = array(
            'nama'
            'kode_user'     => $kodeuser,
            'username'      => $user_name,
            'password'      => $pw,
            'nama_lengkap'  => $nm_lengkap,
            'level'         => $lev,
            'gambar'        => $img->getName(),
            'token'         => $token
        );
    }
}
