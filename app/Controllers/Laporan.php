<?php

namespace App\Controllers;

use App\Models\LaporanModel;

class Laporan extends BaseController
{
    protected $UserModel;
    protected $laporanModel;
    public function __construct()
    {
        $this->UserModel = new \Myth\Auth\Models\UserModel();
        $this->laporanModel = new LaporanModel();
    }
    public function index()
    {
        $users = new \Myth\Auth\Models\UserModel(); //ambil model dlaam myauth


        $data = [
            'title' => 'Data Laporan Kejadian Monitoring',
            'laporanharian' => $this->laporanModel->getLaporan(),
            'users' => $users->findAll()
        ];

        return view('laporanharian/indexlaporan', $data);
    }

    public function detail($slug)
    {
        $data = [
            'title' => 'Detail Laporan Harian',
            'laporanharian' => $this->laporanModel->getLaporan($slug)
        ];

        if (empty($data['laporanharian'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Nama tidak ditemukan.');
        }



        return view('laporanharian/detail', $data);
    }

    public function create()
    {


        $data = [
            'title' => 'Tambah Data Laporan Harian',
            'validation' => \Config\Services::validation(),
        ];


        return view('laporanharian/create', $data);
    }

    public function save()
    {
        //validasi input
        if (!$this->validate([
            'username' => [
                'rules' => 'required|is_unique[laporanharian.username]',
                'errors' => [
                    'required' => '{field} username harus diisi.',
                    'is_unique' => '{field} username sudah ada.'
                ]
            ],
            'nama_lengkap' => [
                'rules' => 'required[laporanharian.nama_lengkap]',
                'errors' => [
                    'required' => '{field} nama lengkap harus diisi.',

                ]
            ],
            'tgl_kegiatan' => [
                'rules' => 'required[laporanharian.tgl_kegiatan]',
                'errors' => [
                    'required' => '{field} tanggal kegiatan harus diisi.',

                ]
            ],
            'jam_mulai' => [
                'rules' => 'required[laporanharian.jam_mulai]',
                'errors' => [
                    'required' => '{field} jam mulai harus diisi.',
                ]
            ],
            'jam_selesai' => [
                'rules' => 'required[laporanharian.jam_selesai]',
                'errors' => [
                    'required' => '{field} jam selesai harus diisi.',
                ]
            ],
            'tegangan' => [
                'rules' => 'required[laporanharian.tegangan]',
                'errors' => [
                    'required' => '{field} tegangan harus diisi.',
                ]
            ],
            'arus' => [
                'rules' => 'required[laporanharian.arus]',
                'errors' => [
                    'required' => '{field} arus harus diisi.',
                ]
            ],
            'keterangan' => [
                'rules' => 'required[laporanharian.keterangan]',
                'errors' => [
                    'required' => '{field} keterangan harus diisi.',
                ]
            ]
        ])) {

            return redirect()->to('/laporan/create')->withInput();
        }


        $slug = url_title($this->request->getVar('username'), '-', true);
        $this->laporanModel->save([
            'username' => $this->request->getVar('username'),
            'nama_lengkap' => $this->request->getVar('nama_lengkap'),
            'slug' => $slug,
            'tgl_kegiatan' => $this->request->getVar('tgl_kegiatan'),
            'jam_mulai' => $this->request->getVar('jam_mulai'),
            'jam_selesai' => $this->request->getVar('jam_selesai'),
            'tegangan' => $this->request->getVar('tegangan'),
            'arus' => $this->request->getVar('arus'),
            'keterangan' => $this->request->getVar('keterangan'),
        ]);


        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan');

        return redirect()->to('/laporan');
    }

    public function delete($id)
    {

        $laporanharian = $this->laporanModel->find($id);

        $this->laporanModel->delete($id);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus');
        return redirect()->to('/laporan');
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Form Ubah Data Kejadian',
            'validation' => \Config\Services::validation(),
            'laporanharian' => $this->laporanModel->getLaporan($id)
        ];


        return view('laporanharian/edit', $data);
    }

    public function update($id)
    {

        if (!$this->validate([
            'username' => [
                'rules' => 'required[laporanharian.username]',
                'errors' => [
                    'required' => '{field} username harus diisi.',
                    'is_unique' => '{field} username sudah ada.'
                ]
            ],
            'nama_lengkap' => [
                'rules' => 'required[laporanharian.nama_lengkap]',
                'errors' => [
                    'required' => '{field} nama lengkap harus diisi.',

                ]
            ],
            'tgl_kegiatan' => [
                'rules' => 'required[laporanharian.tgl_kegiatan]',
                'errors' => [
                    'required' => '{field} tanggal kegiatan harus diisi.',

                ]
            ],
            'jam_mulai' => [
                'rules' => 'required[laporanharian.jam_mulai]',
                'errors' => [
                    'required' => '{field} jam mulai harus diisi.',
                ]
            ],
            'jam_selesai' => [
                'rules' => 'required[laporanharian.jam_selesai]',
                'errors' => [
                    'required' => '{field} jam selesai harus diisi.',
                ]
            ],
            'tegangan' => [
                'rules' => 'required[laporanharian.tegangan]',
                'errors' => [
                    'required' => '{field} tegangan harus diisi.',
                ]
            ],
            'arus' => [
                'rules' => 'required[laporanharian.arus]',
                'errors' => [
                    'required' => '{field} arus harus diisi.',
                ]
            ],
            'keterangan' => [
                'rules' => 'required[laporanharian.keterangan]',
                'errors' => [
                    'required' => '{field} keterangan harus diisi.',
                ]
            ]
        ])) {

            return redirect()->to('/laporan/edit' . $this->request->getVar('id'))->withInput();
        }


        $slug = url_title($this->request->getVar('username'), '-', true);
        $this->laporanModel->save([
            'id' => $id,
            'username' => $this->request->getVar('username'),
            'nama_lengkap' => $this->request->getVar('nama_lengkap'),
            'slug' => $slug,
            'tgl_kegiatan' => $this->request->getVar('tgl_kegiatan'),
            'jam_mulai' => $this->request->getVar('jam_mulai'),
            'jam_selesai' => $this->request->getVar('jam_selesai'),
            'tegangan' => $this->request->getVar('tegangan'),
            'arus' => $this->request->getVar('arus'),
            'kelembaban' => $this->request->getVar('kelembaban'),
            'keterangan' => $this->request->getVar('keterangan')
        ]);


        session()->setFlashdata('pesan', 'Data Berhasil di Ubah');

        return redirect()->to('/laporan');
    }
}
