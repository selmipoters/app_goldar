<?php

namespace App\Controllers;

// Load model
use App\Models\Pasien_model;
// End load model

use CodeIgniter\Controller;

class Dashboard extends Controller
{
    // Listing all
    public function index()
    {
        $session = \Config\Services::session();
        // Proteksi
        if ($session->get('username') == "") {
            $session->setFlashdata('pesan', 'Anda belum login');
            return redirect()->to(base_url('login'));
        }

        // End proteksi
        $model = new Pasien_model();
        $pasien = $model->hitung();
        $banyakpasien = count($pasien);
        $pasien2 = $model->hitung2();
        $banyakpasien2 = count($pasien2);
        $data = array(
            'title'        => 'Dashboard',
            'pasien'        => $banyakpasien,
            'pasien2'        => $banyakpasien2,
            'content'    => 'dashboard/index'
        );
        return view('layout/wrapper', $data);
    }
    public function getdasbor()
    {
        $request = \Config\Services::request();
        $model1 = new Pasien_model();
        $kd_pasien = $request->getGet('kd_pasien');
        // dd($kd_pasien);
        $cari = $model1->dasbor($kd_pasien);

        $json_result =  json_encode($cari);
        echo $json_result;
    }
}
