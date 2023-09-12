<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Aspirasi extends BaseController
{  
    public function index()
    {
        helper(['mongo']);
        $session = session();
        // echo "Welcome back, ".$session->get('user_name');
        $data['username']=$session->get('user_name');
        $data['aspirasi']=getAll('aspirasi');
        return view('admin/aspirasi',$data);
    }
    public function detail($id)
    {       
        helper(['mongo']);
        $session = session();
        // echo "Welcome back, ".$session->get('user_name');
        $data['judul']='Detail Aspirasi';
        $data['username']=$session->get('user_name');
        $data['detail']=getId('aspirasi',$id);
        // $data['aduan']=getAll('aduan');
        return view('admin/view',$data);
    }
    public function hapus($id)
    {        
        helper(['mongo']);
        $session = session(); 
        $hapus=deleteId('aspirasi',$id); 
        return redirect()->to('/admin/aspirasi');
    }
}
