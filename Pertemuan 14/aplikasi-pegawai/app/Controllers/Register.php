<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\Users;

class Register extends BaseController
{
    public function index()
    {
        //echo "ini adalah halaman registrasi";
        echo view('register_view');
    
    }
    public function submitRegister(){
        
        //buat model untuk proses insert ke table users
        $model = new Users();
        $password = $this->request->getVar('password');
        $cpassword = $this->request->getVar('cpassword');
        
        if(!$this->validate([
            'username' => [
                'rules' => 'required|is_unique[users.username]',
                'errors' => [
                    'required' => '{field} harus diisi',
                    'is_unique' => '{field} yang anda isi telah digunakan',
                ]
            ],
            'namadepan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi',
                ]
            ],
            'password' => [
                'rules' => 'required|min_length[5]|max_length[10]',
                'errors' => [
                    'required' => '{field} harus diisi',
                    'min_length' => '{field} kurang dari 5',
                    'max_length' => '{field} lebih dari 10',
                ]
            ],
            'cpassword' => [
                'rules' => 'required|matches[password]',
                'errors' => [
                    'required' => '{field} harus diisi',
                    'matches' => '{field} tidak sama dengan password',
                ]
            ],
            'namabelakang' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi',
                ]
            ],
        ])){
            $validation = \Config\Services::validation();
            $dataErr = [
                'validation' =>\Config\Services::validation()
            ];
            session()->setFlashdata("error",[$dataErr]);
            //dd($validation);
            return redirect()->to('/register')->withInput()->with('validation', $validation);
        }


        if(strcmp($password,$cpassword)==0){
            $data = [
                'username' => $this->request->getVar('username'),
                'password' => password_hash($this->request->getVar('password'),PASSWORD_DEFAULT),
                'namadepan' => $this->request->getVar('namadepan'),
                'namabelakang' => $this->request->getVar('namabelakang'),
            ];
            $model->insert($data);
            return redirect()->to(base_url('login'));
            // if ($model->insert($data)){
            //     echo "data berhasil disimpan";
            //     //return redirect()->to('/login');
            // } else{
            //     echo "data tidak berhasil disimpan";
            // }
        }
        else {
            return redirect()->back()->withInput();
        } 
    }
}
