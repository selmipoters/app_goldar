<?php

namespace App\Controllers;

use App\Models\Pasien_model;
use App\Models\Goldar_model;
$dompdf = new \Dompdf\Dompdf();
class Laporan extends BaseController
{
    public function index()
    {
        $session = \Config\Services::session();
        $model = new Goldar_model();
        $goldar = $model->listing();
        // Proteksi
        if ($session->get('username') == "") {
            $session->setFlashdata('pesan', 'Anda belum login');
            return redirect()->to(base_url('login'));
        }
        $data = array(
            'title'        => 'Sistem Cek Golongan Darah | Laporan',
            'bc' => 'Laporan',
            'goldar' => $goldar,
            'link' => '/laporan/index',
            'content'    => 'laporan/index'
        );
        return view('layout/wrapper', $data);
    }
    public function cetakperiode() {
        $model = new Pasien_model();
        $laporan = new Pasien_model();
        $request = \Config\Services::request();
        
		$tglawal = date('Y-m-d',strtotime($request->getVar('start')));
		$tglakhir = date('Y-m-d',strtotime($request->getVar('end')));
		$pasien = $model->cetakperiode($tglawal,$tglakhir);
        $banyakpasien = count($pasien);
		
		$data = array(
			'pasien' 	=> $pasien,
			'banyakpasien' 	=> $banyakpasien,
			'tglawal' => $tglawal,
			'tglakhir' => $tglakhir
		);
        // dd($banyakpasien);
		// print_r($data);die;
        // return view('/laporan/laporanperiode', $data);
	    $dompdf = new \Dompdf\Dompdf(); 
        $dompdf->loadHtml(view('/laporan/laporanperiode', $data));
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->filename = "LaporanPeriodePasien.pdf";
        $dompdf->render();
        $dompdf->stream();
	}

    public function cetakall() {
        $model = new Pasien_model();
        $request = \Config\Services::request();
		$pasien = $model->listinglaporan();
        $banyakpasien = count($pasien);
		// dd($pasien);
		$data = array(
			'pasien' 	=> $pasien,
			'banyakpasien' 	=> $banyakpasien
		);
        // dd($banyakpasien);
		// print_r($data);die;
        // return view('/laporan/laporanperiode', $data);
	    $dompdf = new \Dompdf\Dompdf(); 
        $dompdf->loadHtml(view('/laporan/laporanall', $data));
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->filename = "LaporanKeseluruhanPasien.pdf";
        $dompdf->render();
        $dompdf->stream();
	}

    public function cetakkategori() {
        $model = new Pasien_model();
        $request = \Config\Services::request();
        $goldar = $_POST['goldar'];
        $array = implode("','",$goldar);
        $array1 = implode(", ",$goldar);
		$datagoldar = $model->cetakkategori($array);
        $banyakpasien = count($datagoldar);
        // print_r($datagoldar);die;
        
        
		$data = array( 
			'pasien' 	=> $datagoldar,
            'kategori' => $array1,
			'banyakpasien' 	=> $banyakpasien
		);

		// print_r($data);die;
	    $dompdf = new \Dompdf\Dompdf(); 
        $dompdf->loadHtml(view('/laporan/laporankategori', $data));
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->filename = "LaporanKeseluruhanPasien.pdf";
        $dompdf->render();
        $dompdf->stream();
	}
}

