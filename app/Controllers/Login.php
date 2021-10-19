<?php
namespace App\Controllers;

use App\Models\Pengguna;
use CodeIgniter\Model;
use Config\Services;


class Login extends BaseController{
    
    public function cekLogin(){
        $email = $this->request->getPost('email');
        $sandi = $this->request->getPost('sandi');

        $v = $this->validate([
            'email' => 'required',
            'sandi' => 'required'
        ],[
            'email'=>[
                'required' => 'Email tidak boleh kosong'
            ],
            'sandi'=>[
                'required' => 'Sandi tidak boleh kosong'
            ]
        ]);

        $this->session->set('email', $email);
        $this->session->set('sandi', $sandi);

        if ($v == false) {
            $this->session->setFlashdata('validator',$this->validator);
            return redirect()->to('/login')->with('error', 'User dan sandi salah');
        }else {

            $vl = (new Pengguna())->cekLogin($email, $sandi);

            if ($vl == null) {
                return redirect()->to('/login');
            }else {
                return redirect()->to('/beranda');
            }
        }
    }
    
    public function beranda(){
}
}
