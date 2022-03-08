<?php 
namespace App\Models;

use CodeIgniter\Model;

class Detailmodel extends Model{
    protected $table      = 'tb_detail';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id';
    protected $allowedFields = ['User_id','Totalharga','No_meja','Nama_pemesan','Jumlah'];
}