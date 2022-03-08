<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Menumodel;

class Menucontroller extends Controller{
     /**
    * Instance of the main Request object.
    * 
    * @var HTTP\IncomingRequest
    */
    protected $request;

    function __construct()
    {
        $this->menu = new Menumodel();
    }

    public function tampil()
    {
        #code...
        $data['data']=$this->menu->findAll();
        return view('MenuList', $data);
    }
    public function simpan()
    {
        #code...
        $data = array(
            'Nama'=>$this->request->getPost('Nama'),
            'Harga'=>$this->request->getPost('Harga'),
            'Jenis'=>$this->request->getPost('Jenis'),
            'Stok'=>$this->request->getPost('Stok'),
        );
        $this->menu->insert ($data);
        return redirect('menu')->with('success','Data berhasil Disimpan');
    }

    public function edit($id)
    {
        $data = array(
            'Nama'=>$this->request->getPost('Nama'),
            'Harga'=>$this->request->getPost('Harga'),
            'Jenis'=>$this->request->getPost('Jenis'),
            'Stok'=>$this->request->getPost('Stok'),
        );
        $this->menu->update($id,$data);
        return redirect('menu')->with('success','Data Berhasil Diedit');
    }
    public function delete($id)
    {
        $this->menu->delete($id);
        return redirect('menu')->with('success','Data berhasil dihapus');
    }
}