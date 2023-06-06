<?php

namespace App\Models;

use CodeIgniter\Model;

class LaporanModel extends Model
{
    protected $table = 'laporanharian';
    protected $useTimesstamp = true;
    protected $allowedFields = ['username', 'nama_lengkap', 'slug', 'tgl_kegiatan', 'jam_mulai', 'jam_selesai', 'tegangan', 'arus', 'keterangan'];


    public function getLaporan($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }


        return $this->where(['id' => $slug])->first();
    }
}
