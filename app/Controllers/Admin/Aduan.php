<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Aduan extends BaseController
{  
    public function index()
    {        
        helper(['mongo']);
        $session = session();
        // echo "Welcome back, ".$session->get('user_name');
        $data['username']=$session->get('user_name');
        $data['aduan']=getAll('aduan');
        return view('admin/aduan',$data);
    }
    public function detail($id)
    {       
        helper(['mongo']);
        $session = session();
        // echo "Welcome back, ".$session->get('user_name');
        $data['judul']='Detail Aduan';
        $data['username']=$session->get('user_name');
        $data['detail']=getId('aduan',$id);
        // $data['aduan']=getAll('aduan');
        return view('admin/view',$data);
    }
    public function hapus($id)
    {        
        helper(['mongo']);
        $session = session(); 
        $hapus=deleteId('aduan',$id); 
        return redirect()->to('/admin/aduan');
    }
}
