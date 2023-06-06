<?php

namespace App\Models;

use CodeIgniter\Model;

class BateraiModel extends Model
{
    protected $table = 'grafikbaterai';
    protected $useTimesstamp = true;
    protected $allowedFields = ['tegangan_b', 'arus_b'];


    public function getData()
    {
        return $this->orderBy('id_tb', 'desc')->limit(20)->find();
    }
}
