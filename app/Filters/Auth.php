<?php namespace App\filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\HTTP\FilterInterface;

class Auth implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        //jika user belum login
        if (! $session()->get('jenis')){
            //maka redirect kehalaman login
            return redirect('login');
        }
    }
    //------------------------------------------------------------------------------------------------------------------

    public function after(RequestInterface $request, ResponseInterface $response, $argument= null)
    {
        //do somthing here
    }
}