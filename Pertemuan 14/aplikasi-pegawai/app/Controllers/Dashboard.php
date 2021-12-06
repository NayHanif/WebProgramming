<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    {
        if (session()->get('logged_in')){
            //echo "Ini adalah halaman user";
            echo view('dashboard_view');
        }
        else{
            echo "Maaf anda dilarang masuk ke halaman ini";
        }
    }
}
