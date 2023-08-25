<?php

namespace App\Controllers;

// Load model
use App\Models\User_model;
// End load model

use CodeIgniter\Controller;

class User extends Controller
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
        $model = new User_model();
        $user = $model->listing();
        $data = array(
            'title'        => 'Data User',
            'user'        => $user,
            'content'    => 'user/index'
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
        $model = new User_model();
        $newkd_user = $model->newkd_user();

        $data = array(
            'title'        => 'Tambah User',
            'content'    => 'user/tambah',
            'newkd_user' => $newkd_user
        );
        return view('layout/wrapper', $data);
    }

    // simpan
    public function simpan_data()
    {
        $session = \Config\Services::session();
        $request = \Config\Services::request();
        $data = array(
            'kd_user'        => $request->getVar('kd_user'),
            'nama'            => $request->getVar('nama'),
            'username'        => $request->getVar('username'),
            'password'        => sha1($request->getVar('password')),
            'hak_akses'    => $request->getVar('hak_akses')
        );
        $model = new User_model();
        $model->save($data);
        $session->setFlashdata('pesan', 'Data berhasil ditambahkan');
        return redirect()->to(base_url('user/index'));
    }

    // Edit
    public function edit($kd_user)
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
        $model         = new User_model();
        $user         = $model->detail($kd_user);
        $data = array(
            'title'        => 'Edit User',
            'user'        => $user,
            'content'    => 'user/edit'
        );
        return view('layout/wrapper', $data);
    }

    // edit simpan
    public function edit_simpan()
    {
        $session = \Config\Services::session();
        $request = \Config\Services::request();
        $data = array(
            'kd_user'        => $request->getVar('kd_user'),
            'nama'            => $request->getVar('nama'),
            'username'        => $request->getVar('username'),
            'password'        => sha1($request->getVar('password')),
            'hak_akses'    => $request->getVar('hak_akses')
        );
        $model = new User_model();
        $model->edit($data);
        $session->setFlashdata('pesan', 'Data telah diupdate');
        return redirect()->to(base_url('user/index'));
    }

    // Delete
    public function delete($kd_user)
    {
        $session = \Config\Services::session();
        // Proteksi
        if ($session->get('username') == "") {
            $session->setFlashdata('pesan', 'Anda belum login');
            return redirect()->to(base_url('login'));
        }
        // End proteksi
        $model     = new User_model();
        $model->hapus($kd_user);
        $session->setFlashdata('pesan', 'Data telah dihapus');
        return redirect()->to(base_url('user/index'));
    }
}
