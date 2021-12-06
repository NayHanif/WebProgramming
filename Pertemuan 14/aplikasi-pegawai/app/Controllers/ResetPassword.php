<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ResetPassword extends BaseController
{
    public function actionreset(){
        $validation = [
            'password'=>'required',
            'repassword'=>'required|matches[password]'
        ];
        if(!$this->validate($validation)){
            return redirect()->to(base_url('/resetpassword'))->with('error',$this->validator->listErrors());
        }
        // code kamu selanjutnya
    }
       
}
