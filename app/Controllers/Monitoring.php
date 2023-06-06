<?php

namespace App\Controllers;

use App\Models\GrafikModel;
use App\Models\BateraiModel;
use App\Models\OutputModel;


class Monitoring extends BaseController
{
    protected $grafikModel;
    protected $bateraiModel;
    protected $outputModel;

    public function __construct()
    {
        $this->grafikModel = new GrafikModel();
        $this->bateraiModel = new BateraiModel();
        $this->outputModel = new OutputModel();
    }

    public function Bgrafik()
    {

        $data = [
            'title' => 'Grafik | Baterai',
            'grafikbaterai' => $this->bateraiModel->getData()
        ];

        return view('grafikbaterai/Bgrafik', $data);
    }
    public function data_baterai()
    {
        $daya = [];
        $waktu = [];
        $tegangan = [];
        $arus = [];
        foreach (array_reverse($this->bateraiModel->getData()) as $key => $value) {
            $daya[] = $value['tegangan_b'] * $value['arus_b'];
            $waktu[] = $this->time_ago(strtotime($value['waktu_b']));
            $tegangan[] = $value['tegangan_b'];
            $arus[] = $value['arus_b'];
        }
        echo json_encode(['daya' => $daya, 'waktu_b' => $waktu, 'arus_b' => $arus, 'tegangan_b' => $tegangan]);
    }
    public function Agrafik()
    {

        $data = [
            'title' => 'Grafik | PV',
            'tegangan' => $this->grafikModel->getPenjualan()
        ];

        return view('grafikarus/Agrafik', $data);
    }

    public function data_penjualan()
    {
        $daya = [];
        $waktu = [];
        $tegangan = [];
        $arus = [];
        foreach (array_reverse($this->grafikModel->getPenjualan()) as $key => $value) {
            $daya[] = $value['tegangan'] * $value['arus'];
            $waktu[] = $this->time_ago(strtotime($value['waktu']));
            $tegangan[] = $value['tegangan'];
            $arus[] = $value['arus'];
        }
        echo json_encode(['daya' => $daya, 'waktu' => $waktu, 'arus' => $arus, 'tegangan' => $tegangan]);
    }


    public function Outputgrafik()
    {

        $data = [
            'title' => 'Grafik | Output',
            'grafikoutput' => $this->outputModel->getOutput()
        ];

        return view('grafikoutput/Ografik', $data);
    }
    public function data_output()
    {
        $daya = [];
        $waktu = [];
        $tegangan = [];
        $arus = [];
        foreach (array_reverse($this->outputModel->getOutput()) as $key => $value) {
            $daya[] = $value['tegangan_o'] * $value['arus_o'];
            $waktu[] = $this->time_ago(strtotime($value['waktu_o']));
            $tegangan[] = $value['tegangan_o'];
            $arus[] = $value['arus_o'];
        }
        echo json_encode(['daya' => $daya, 'waktu_o' => $waktu, 'arus_o' => $arus, 'tegangan_o' => $tegangan]);
    }
    function time_ago($timestamp)
    {
        $current_time = time();
        $time_diff = abs($current_time - $timestamp);
        $seconds = $time_diff;
        $minutes = round($time_diff / 60);
        $hours = round($time_diff / 3600);
        $days = round($time_diff / 86400);
        if ($seconds <= 60) {
            return "$seconds seconds ago";
        } else if ($minutes <= 60) {
            if ($minutes == 1) {
                return "one minute ago";
            } else {
                return "$minutes minutes ago";
            }
        } else if ($hours <= 24) {
            if ($hours == 1) {
                return "an hour ago";
            } else {
                return "$hours hours ago";
            }
        } else {
            if ($days == 1) {
                return "yesterday";
            } else {
                return "$days days ago";
            }
        }
    }
}
