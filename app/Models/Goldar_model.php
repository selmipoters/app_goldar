<?php

namespace App\Models;

use CodeIgniter\Model;

class Goldar_model extends Model
{
    protected $table         = 'tbl_goldar';
    protected $primaryKey     = 'id_goldar';
    protected $allowedFields = ['nama_gol'];

    // Listing
    public function listing()
    {
        $this->select('*');
        $query = $this->get();
        return $query->getResultArray();
    }

    // Detail
    public function detail($id_goldar)
    {
        $this->select('*');
        $this->where(array('id_goldar'    => $id_goldar));
        $query = $this->get();
        return $query->getResultArray();
    }
}
