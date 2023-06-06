<?php

namespace App\Models;

use CodeIgniter\Model;

class OutputModel extends Model
{
    protected $table = 'grafikoutput';
    protected $useTimesstamp = true;
    protected $allowedFields = ['tegangan_b', 'arus_b'];


    public function getOutput()
    {
        return $this->orderBy('id_output', 'desc')->limit(20)->find();
    }
}
