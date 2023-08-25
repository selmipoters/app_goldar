<?php

namespace App\Models;

use CodeIgniter\Model;

class Pasien_model extends Model
{
    protected $table         = 'tbl_pasien';
    protected $useTimestamps = true;
    protected $allowedFields = ['kd_pasien', 'nama_pasien', 'tgl_lahir', 'jenis_kelamin', 'alamat', 'telepon', 'email'];

    // Listing
    public function listing()
    {
        $this->select('*');
        $this->join('tbl_goldar', 'tbl_pasien.id_goldar = tbl_goldar.id_goldar', 'LEFT');
        $query = $this->get();
        $data = $query->getResultArray();
        return $query->getResultArray();
    }
    public function listinglaporan()
    {
        $this->select('*');
        $this->join('tbl_goldar', 'tbl_pasien.id_goldar = tbl_goldar.id_goldar', 'LEFT');
        $query = $this->get();
        return $query->getResult();
    }
    function cetakperiode($tglawal,$tglakhir) {
        $sql = "SELECT * FROM tbl_pasien LEFT JOIN tbl_goldar ON tbl_pasien.id_goldar = tbl_goldar.id_goldar
		WHERE created_at BETWEEN '$tglawal' and '$tglakhir'";
        $query = $this->db->query($sql);
        return $query->getResult();
	}	
    function cetakkategori($goldar) {
        $sql = "SELECT * FROM tbl_pasien LEFT JOIN tbl_goldar ON tbl_pasien.id_goldar = tbl_goldar.id_goldar
		WHERE nama_gol IN ('".$goldar."')";
        $query = $this->db->query($sql);
        return $query->getResult();
	}	
    // Detail
    public function detail($kd_pasien)
    {
        $this->select('*');
        $this->join('tbl_goldar', 'tbl_pasien.id_goldar = tbl_goldar.id_goldar', 'LEFT');
        $this->where(array('kd_pasien'    => $kd_pasien));
        $query = $this->get();
        return $query->getRowArray();
    }
    // Detail
    public function dasbor($kd_pasien)
    {
        $this->select('*');
        $this->where(array('kd_pasien'    => $kd_pasien));
        $query = $this->get();
        return $query->getResultArray();
    }
    // Insert
    public function tambah($data)
    {
        $this->save($data);
    }

    public function newkd_pasien()
    {
        $query = $this->db->query("SELECT MAX(kd_pasien) as kd_pasien from tbl_pasien");
        $kode = $query->getRow()->kd_pasien;
        $noUrut = (int) substr($kode, 3, 4);
        $noUrut++;
        $char = "PSN";
        $newID = $char . sprintf("%04s", $noUrut);
        return $newID;
    }
    // Edit
    public function edit($data)
    {
        $this->where('kd_pasien', $data['kd_pasien']);
        $this->replace($data);
    }

    // Delete
    public function hapus($kd_pasien)
    {
        $this->where('kd_pasien', $kd_pasien);
        $this->delete();
    }
    public function hitung()
    {
        $sql = "Select * From tbl_pasien WHERE id_goldar IS NOT NULL";
        $query = $this->query($sql);

        return $query->getResultArray();
    }

    public function hitung2()
    {
        $sql = "Select * From tbl_pasien WHERE id_goldar IS NULL";
        $query = $this->query($sql);

        return $query->getResultArray();
    }
}
