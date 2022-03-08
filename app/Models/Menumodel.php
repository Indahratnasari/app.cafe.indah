<?php 
namespace App\Models;

use CodeIgniter\Model;
use App\models\Menumodel;

class Menumodel extends Model{
    protected $table      = 'tb_menu';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id';
    protected $allowedFields = ['Nama','Harga','Jenis','Stok'];
}