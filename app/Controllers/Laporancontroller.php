<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Pesananmodel;

class Laporancontroller extends Controller{

    function __construct()
    {
        $this->Laporan = new Pesananmodel();
    }
    public function tampil()
    {
        #code...
        $data ['data']= $this->Laporan->findAll();
        return view('DetailList',$data);
    }
}