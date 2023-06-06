<?php

namespace App\Controllers;

use App\Models\UserModel;


class Dashboard extends BaseController
{
    protected $userModel;

    public function index()
    {
        //menampilkan sebuah Views return
        //CI akan mencari parameter dengan nama home.php di folder view
        $data = [
            'title' => 'Pantau Aku'

        ];
        //dari echo kita bisa kembalikan lagi return
        return view('dashboard/dashboard', $data);
    }
    public function countData($table)
    {
        $db = \Config\Database::connect();
        return $db->table($table)->countAllResults();
    }
}
