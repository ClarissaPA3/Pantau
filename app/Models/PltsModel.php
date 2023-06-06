<?php

namespace App\Models;

use CodeIgniter\Model;

class PltsModel extends Model
{
    protected $table = 'plts';
    protected $useTimesstamp = true;
    protected $allowedFields = ['data_plts', 'slug'];


    public function getPLts($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }


        return $this->where(['id' => $slug])->first();
    }
}
