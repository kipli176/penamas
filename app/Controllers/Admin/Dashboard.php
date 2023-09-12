<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{  
    public function index()
    {
        $session = session();
        // echo "Welcome back, ".$session->get('user_name');
        $data['username']=$session->get('user_name');
        return view('admin/home',$data);
    }
}
