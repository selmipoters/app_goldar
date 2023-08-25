<?php

namespace App\Controllers;

// Load model
use App\Models\Goldar_model;
use App\Models\Goldartampung_model;
use App\Models\Pasien_model;
// End load model

use CodeIgniter\Controller;

class Goldar extends Controller
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
        $model = new Goldar_model();
        $goldar = $model->listing();
        $data = array(
            'title'        => 'Data Golongan Darah',
            'goldar'        => $goldar,
            'content'    => 'goldar/index'
        );
        return view('layout/wrapper', $data);
    }

    // Tambah
    public function cekgol()
    {
        helper('form');
        $session = \Config\Services::session();
        // Proteksi
        if ($session->get('username') == "") {
            $session->setFlashdata('pesan', 'Anda belum login');
            return redirect()->to(base_url('login'));
        }
        $model = new Pasien_model();
        $pasien = $model->listing();
        $data = array(
            'title'        => 'Data Golongan Darah',
            'pasien'        => $pasien,
            'content'    => 'goldar/cekgol'
        );
        return view('layout/wrapper', $data);
    }

    // simpan data
    public function simpan_data()
    {
        $session    = \Config\Services::session();
        $request = \Config\Services::request();
        $data = array(
            'kd_pasien'        => $request->getVar('kd_pasien'),
            'nama_pasien'            => $request->getVar('nama_pasien'),
            'tgl_lahir'        => $request->getVar('tgl_lahir'),
            'jenis_kelamin'        => $request->getVar('jenis_kelamin'),
            'alamat'    => $request->getVar('alamat'),
            'telepon'    => $request->getVar('telepon'),
            'email'    => $request->getVar('email')
        );
        $model = new Pasien_model();
        $model->save($data);
        $session->setFlashdata('pesan', 'Data telah ditambah');
        return redirect()->to(base_url('pasien/index'));
    }
    public function simpan_dataalat()
    {
        $request = \Config\Services::request();
        $data = array(
            'id_tampung'        => "1",
            'nama_goldar'        => $request->getVar('nama_goldar')
        );
        $model = new Goldartampung_model();
        $model->edit($data);
    }
    public function cari()
    {
        $request = \Config\Services::request();
        $model = new Pasien_model();
        $kd_pasien = $request->getGet('kd_pasien');
        // dd($kd_pasien);
        $cari = $model->detail($kd_pasien);

        $json_result =  json_encode(array($cari));
        echo $json_result;
    }
    public function getgoldar()
    {
        $request = \Config\Services::request();
        $model = new Goldartampung_model();
        $id_tampung = $request->getGet('id_tampung');
        $cari = $model->detail($id_tampung);
        $json_result =  json_encode($cari);
        echo $json_result;
    }
}
