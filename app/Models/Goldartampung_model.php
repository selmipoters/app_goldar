<?php

namespace App\Models;

use CodeIgniter\Model;

class Goldartampung_model extends Model
{
    protected $table         = 'tbl_tampung';
    // protected $primaryKey     = 'id_tampung';
    protected $allowedFields = ['nama_goldar'];

    // Listing
    public function listing()
    {
        $this->select('*');
        $query = $this->get();
        return $query->getResultArray();
    }
    public function edit($data)
    {
        $this->where('id_tampung', $data['id_tampung']);
        $this->replace($data);
    }

    // Detail
    public function detail($id_Goldartampung)
    {
        $this->select('*');
        $this->where(array('id_tampung'    => $id_Goldartampung));
        $query = $this->get();
        return $query->getResultArray();
    }
}
