<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PegawaiModel;

class Pegawai extends BaseController
{
    public function index()
    {
        if (session()->get('logged_in')){
            //echo "Ini adalah halaman user";
            $model = new PegawaiModel();
            $data['pegawai'] = $model->getPegawai();
            echo view('view_header.php');
            echo view('view_pegawai_list', $data);
        }
        else{
            echo "Invalid";
            return redirect()->to(base_url('/login'))->with('error', "Invalid Credential");
        }
    }
}
