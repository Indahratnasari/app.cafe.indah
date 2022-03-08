<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Detailmodel;

class Detailcontroller extends Controller{

    public function tampil()
    {
        $detailpesanan = new Detailmodel();
        $data ['pesan']= "data detail";
        $data ['ddipesanan']= $detail->findAll();
        return view('DetailList',$data);
    }
    public function simpan()
    {
        #code...
    }
    public function ubah()
    {
        #code...
    }
    public function hapus()
    {

    }
}
