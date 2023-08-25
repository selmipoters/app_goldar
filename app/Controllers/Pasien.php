<?php

namespace App\Controllers;

// Load model
use App\Models\Pasien_model;
use App\Models\Goldartampung_model;
use Dompdf\Dompdf;
// End load model

use CodeIgniter\Controller;

class Pasien extends Controller
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
        $pasien = $model->listing();
        $data = array(
            'title'        => 'Data pasien',
            'pasien'        => $pasien,
            'content'    => 'pasien/index'
        );
        return view('layout/wrapper', $data);
    }

    // Tambah
    public function tambah()
    {
        helper('form');
        $session = \Config\Services::session();
        // Proteksi
        if ($session->get('username') == "") {
            $session->setFlashdata('pesan', 'Anda belum login');
            return redirect()->to(base_url('login'));
        }
        // End proteksi
        $model = new Pasien_model();
        $newkd_pasien = $model->newkd_pasien();
        // End validasi
        $data = array(
            'title'        => 'Tambah pasien',
            'content'    => 'pasien/tambah',
            'newkd_pasien' => $newkd_pasien
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

    // Edit
    public function edit($kd_pasien)
    {
        helper('form');
        $session    = \Config\Services::session();
        $request = \Config\Services::request();
        // Proteksi
        if ($session->get('username') == "") {
            $session->setFlashdata('pesan', 'Anda belum login');
            return redirect()->to(base_url('login'));
        }
        // End proteksi
        $model         = new Pasien_model();
        $pasien         = $model->detail($kd_pasien);
        $data = array(
            'title'        => 'Edit pasien',
            'pasien'        => $pasien,
            'content'    => 'pasien/edit'
        );
        return view('layout/wrapper', $data);
    }

    // edit simpan
    public function edit_simpan()
    {
        $session = \Config\Services::session();
        $request = \Config\Services::request();
        if ($request->getVar('goldar') == "A") {
            $goldar = 1;
        }
        if ($request->getVar('goldar') == "B") {
            $goldar = 2;
        }
        if ($request->getVar('goldar') == "AB") {
            $goldar = 3;
        }
        if ($request->getVar('goldar') == "O") {
            $goldar = 4;
        }
        $data = array(
            'kd_pasien'        => $request->getVar('kd_pasien'),
            'nama_pasien'            => $request->getVar('nama_pasien'),
            'tgl_lahir'        => $request->getVar('tgl_lahir'),
            'jenis_kelamin'        => $request->getVar('jenis_kelamin'),
            'email'    => $request->getVar('email'),
            'id_goldar'    => $goldar,
            'alamat'        => $request->getVar('alamat'),
            'telepon'        => $request->getVar('telepon')
        );
        $data2 = array(
            'id_tampung'        => "1",
            'nama_goldar'            => ""

        );
        $model         = new Pasien_model();
        $model->edit($data);
        $model2         = new Goldartampung_model();
        $model2->edit($data2);
        $session->setFlashdata('pesan', 'Data telah diupdate');
        return redirect()->to(base_url('goldar/cekgol'));
    }

    // Delete
    public function delete($kd_pasien)
    {
        $session = \Config\Services::session();
        // Proteksi
        if ($session->get('username') == "") {
            $session->setFlashdata('pesan', 'Anda belum login');
            return redirect()->to(base_url('login'));
        }
        // End proteksi
        $model     = new Pasien_model();
        $pasien = $model->hapus($kd_pasien);
        $session->setFlashdata('pesan', 'Data telah dihapus');
        return redirect()->to(base_url('pasien/index'));
    }
    public function laporan()
    {
        $dompdf = new Dompdf();
        $model = new Pasien_model();
        $pasien = $model->listing();
        $data = array(
            'title'        => 'Data pasien',
            'pasien'        => $pasien
        );
        // Sending data to view file
        $dompdf->loadHtml(view('pasien/laporan', $data));
        // setting paper to portrait, also we have landscape
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
        // Download pdf
        $dompdf->stream();
        // to give pdf file name
        // $dompdf->stream("myfile");

        return redirect()->to(base_url('pasien/index'));
    }
}
