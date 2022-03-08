<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Usermodel;
use CodeIgniter\HTTP\Request;

class Usercontroller extends Controller{

    /**
         * instance of the main Request Object.
         * 
         * @var HTTP\IncomingRequest
         */
        
         protected $request;
    
    function __construct()
    {
        $this->users  =  new Usermodel();
    }
    public function tampil()
    {
        $data ['data'] = $this->users->findAll();
        return view ('UserList', $data);
    }
    public function simpan()
    {
        $data =  array (
            'nama'=>$this->request->getPost('nama'),
            'username'=>$this->request->getPost('username'),
            'password'=>password_hash($this->request->getPost('password'),PASSWORD_DEFAULT),
            'role'=>$this->request->getPost('role'),
    
        ) ;
        $this->users->insert($data);
        return redirect('user')->with('success', 'Data berhasil disimpan');
    }
    public function delete($id)
    {
        $this->users->delete($id);
        return redirect('user')->with('success', 'Data berhasil dihapus');
    }
    public function edit($id)
    {
        $pass =$this->request->getPost('Password');
        // dd($pass);
        if(empty($pass)){
            $data= array(
            'Nama'=> $this->request->getPost('Nama'),
            'Username'=> $this->request->getPost('Username'),
            'Role'=> $this->request->getPost('Role'),
            ) ;
        } else{
            $data= array(
                'Nama'=>$this->request->getPost('Nama'),
                'Username'=>$this->request->getPost('Username'),
                'Password'=>password_hash($this->request->getPost('Password'), PASSWORD_DEFAULT),
                'Role'=>$this->request->getPost('Role'),    
            );
            $this->menu->update($id,$data);
            return redirect('menu')->with('success','Data Berhasil Diedit');
        }
    }
    public function tlogin()
    {
        return view('login');
    }
    public function login()
    {
        $session = session();
        $username = $this->request->getPost('Username');
        $password = $this->request->getPost('Password');
        $data = $this->users->where('Username', $username)->first();
        if ($data) {
            $pass= $data['Password'];
            $cek_pass = password_verify($password, $pass);
            if ($cek_pass){
                $ses_data = [
                    'id' => $data['id'],
                    'username' => $data ['Username'],
                    'role' =>$data['Role']
                ];
                $session->set($ses_data);
                return redirect()->to('/dashboard');
            } else {
                $session->setFlashdata('msg', 'password keliru ditemukan');
                return view('login');
        }
    } else{
        $session->setFlashdata('msg', 'username keliru ditemukan');
        return view('login');
    }
}
    public function logout()
    {
        $session = session();
        $session->destroy();
        return viewt('login');
    }
    public function show($id)
    {
        #code...
    }
}