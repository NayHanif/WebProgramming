<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PegawaiModel;

class Pegawai extends BaseController
{
    public function index()
    {
        $model = new PegawaiModel();
        $data['pegawai'] = $model->getPegawai();
        echo view('view_header.php');
        echo view('view_pegawai_list', $data);
    }
}
