<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Kecelakaan extends BaseController
{  
    public function index()
    {
        helper(['mongo']);
        $session = session();
        // echo "Welcome back, ".$session->get('user_name');
        $data['username']=$session->get('user_name');
        $data['kecelakaan']=getAll('kecelakaan');
        return view('admin/kecelakaan',$data);
    }
    public function detail($id)
    {       
        helper(['mongo']);
        $session = session();
        // echo "Welcome back, ".$session->get('user_name');
        $data['judul']='Detail Kecelakaan';
        $data['username']=$session->get('user_name');
        $data['detail']=getId('kecelakaan',$id);
        // $data['aduan']=getAll('aduan');
        return view('admin/view2',$data);
    }
    public function hapus($id)
    {        
        helper(['mongo']);
        $session = session(); 
        $hapus=deleteId('kecelakaan',$id); 
        return redirect()->to('/admin/kecelakaan');
    }
}
