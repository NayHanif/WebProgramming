<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        if (session()->get('logged_in')){
            //echo "Ini adalah halaman user";
            echo view('dashboard_view');
        }
        else{
            echo "Invalid";
            return redirect()->to(base_url('/login'))->with('error', "Invalid Credential");
        }
    }
}
