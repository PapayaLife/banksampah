<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{
	protected $table = 'users';

	public function getUser($username)
    {
        return $this->db->table('users')->getWhere(['username' => $username])->getRowArray();
    }
}