<?php

namespace App\Models;

use CodeIgniter\Model;

class GrafikModel extends Model
{
    protected $table = 'tegangan';
    protected $useTimesstamp = true;
    protected $allowedFields = ['tegangan', 'arus'];


    public function getPenjualan()
    {
        return $this->orderBy('id', 'desc')->limit(100)->find();
    }
}
