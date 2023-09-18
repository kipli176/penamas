<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Rumahsakit extends BaseController
{  
    public function index()
    {        
        helper(['mongo']);
        $session = session();
        // echo "Welcome back, ".$session->get('user_name');
        $data['username']=$session->get('user_name');
        $data['rs']=getAll('rs');
        return view('admin/rumahsakit',$data);
    }
    public function add()
    {
        helper(['mongo']);

        $data = [
            'rs' => strtoupper($this->request->getPost('rs')),
            'date_created' => date('Y-m-d'),
        ];
        $simpan = saveData('rs', $data);

        return redirect()->to('/admin/rumahsakit');
    }
    public function hapus($id)
    {        
        helper(['mongo']);
        $session = session(); 
        $hapus=deleteId('rs',$id); 
        return redirect()->to('/admin/rumahsakit');
    }
}