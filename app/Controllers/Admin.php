<?php

namespace App\Controllers;

class Admin extends BaseController
{
    protected $UserModel;
    public function __construct()
    {
        $this->UserModel = new \Myth\Auth\Models\UserModel();
    }
    public function index()
    {
        $data['title'] = 'User List';
        $users = new \Myth\Auth\Models\UserModel(); //ambil model dlaam myauth
        $data['users'] = $users->findAll(); //query datanya
        return view('admin/index', $data);
    }
    public function delete($id)
    {
        $db = \Config\Database::connect();

        $db->table("users")->where("id", $id)->delete();
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus');
        return redirect()->to('/admin');
    }
}
