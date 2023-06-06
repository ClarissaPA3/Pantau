<?php

namespace App\Controllers;

use App\Models\GrafikModel;
use App\Models\OutputModel;
use App\Models\PltsModel;
use App\Models\BateraiModel;


class Plts extends BaseController
{
    protected $pltsModel;
    protected $grafikModel;
    protected $bateraiModel;
    protected $outputModel;

    public function __construct()
    {
        $this->pltsModel = new PltsModel();
        $this->grafikModel = new GrafikModel();
        $this->bateraiModel = new BateraiModel();
        $this->outputModel = new OutputModel();
    }
    public function index()
    {
        //$pemain = $this->pltsModel->findAll();

        $data = [
            'title' => 'Data | PLTS',
            'plts' => $this->pltsModel->getPLts()
        ];

        return view('dataplts/home', $data);
    }

    public function detail()
    {
        $data = [
            'title' => 'DETAIL PLTS ARUS PV',
            'plts' => $this->grafikModel->getPenjualan(),
            'tegangan' => $this->grafikModel->getPenjualan(),
            'grafikbaterai' => $this->bateraiModel->getData(),
            'grafikoutput' => $this->outputModel->getOutput()
        ];

        if (empty($data['tegangan'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Nama tegangan tidak ditemukan.');
        }

        // jika pemain tidak ada di tabel

        return view('dataplts/detail', $data);
    }

    public function detailbaterai()
    {
        $data = [
            'title' => 'DETAIL PLTS BATERAI',
            'plts' => $this->bateraiModel->getData(),
            'grafikbaterai' => $this->bateraiModel->getData()
        ];

        if (empty($data['grafikbaterai'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Nama tegangan tidak ditemukan.');
        }

        // jika pemain tidak ada di tabel

        return view('dataplts/detailbaterai', $data);
    }

    public function detailoutput()
    {
        $data = [
            'title' => 'DETAIL PLTS OUTPUT',
            'plts' => $this->outputModel->getOutput(),
            'grafikoutput' => $this->outputModel->getOutput()
        ];

        if (empty($data['grafikoutput'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Nama tegangan tidak ditemukan.');
        }

        // jika pemain tidak ada di tabel

        return view('dataplts/detailoutput', $data);
    }


    public function create()
    {


        $data = [
            'title' => 'Form Tambah Data Plts',
            'validation' => \Config\Services::validation(),
        ];


        return view('dataplts/create', $data,);
    }

    public function save()
    {
        //validasi input
        if (!$this->validate([
            'data_plts' => [
                'rules' => 'required|is_unique[plts.data_plts]',
                'errors' => [
                    'required' => '{field} pemain harus diisi.',
                    'is_unique' => '{field} pemain sudah ada.'
                ]
            ],
        ])) {

            // $validation = \Config\Services::validation();
            // return redirect()->to('/pemain/tambah')->withInput()->with('validation', $validation);
            return redirect()->to('/dataplts/create')->withInput();
        }

        // // AMBIL GAMBAR
        // $fileSampul = $this->request->getFile('sampul');
        // //APAKAH TIDAK ADA GAMBAR YANG DI UPLOAD
        // if ($fileSampul->getError() == 4) {
        //     $namaSampul = 'default1.jpg';
        // } else {
        //     // PINDAHKAN GAMBAR KE FOLDER IMG YANG ADA DI PUBLIC
        //     $fileSampul->move('img');
        //     //AMBIL NAMA FILENYA
        //     $namaSampul = $fileSampul->getName();
        // }




        $slug = url_title($this->request->getVar('data_plts'), '-', true);
        $this->pltsModel->save([
            'data_plts' => $this->request->getVar('data_plts'),
            'slug' => $slug,
        ]);


        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan');

        return redirect()->to('/plts');
    }

    public function delete($id)
    {
        $pltsModel = $this->pltsModel->find($id);

        $this->pltsModel->delete($id);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus');
        return redirect()->to('/plts');
    }

    public function edit($slug)
    {
        $data = [
            'title' => 'Form Ubah Data Plts',
            'validation' => \Config\Services::validation(),
            'plts' => $this->pltsModel->getPLts($slug)
        ];


        return view('dataplts/edit', $data);
    }

    public function update($id)
    {
        if (!$this->validate([
            'data_plts' => [
                'rules' => 'required[plts.data_plts]',
                'errors' => [
                    'required' => '{field} username harus diisi.',
                    'is_unique' => '{field} username sudah ada.'
                ]
            ],
        ])) {

            return redirect()->to('/plts/edit' . $this->request->getVar('slug'))->withInput();
        }



        $slug = url_title($this->request->getVar('data_plts'), '-', true);
        $this->pltsModel->save([
            'id' => $id,
            'data_plts' => $this->request->getVar('data_plts'),
            'slug' => $slug,
        ]);


        session()->setFlashdata('pesan', 'Data Berhasil Ubah');

        return redirect()->to('/plts');
    }
}