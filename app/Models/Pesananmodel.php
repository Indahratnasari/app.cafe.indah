<?php 
namespace App\Models;

use CodeIgniter\Model;
use App\models\Pesananmodel;

class Pesananmodel extends Model{
    protected $table = 'tb_pesanan';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id';
    protected $allowedFields = ['User_id','Totalharga','No_meja','Nama_pemesan','Jumlah'];
}