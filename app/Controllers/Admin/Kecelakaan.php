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
        $data['link']='kecelakaan';
        // $data['aduan']=getAll('aduan');
        return view('admin/view2',$data);
    }
    public function proses($id)
    {       
        helper(['mongo']);
        $session = session(); 
        prosesId('kecelakaan',$id); 
        $get=getId('kecelakaan',$id);
        kirimPesan($get->wa,'Terima Kasih Bapak/Ibu *'.$get->nama.'*. 
Laporan anda sudah kami terima dan sedang dalam proses review.
Kami akan segera menghubungi anda kembali.
Salam, Jasa Raharja');
        return redirect()->to('/admin/kecelakaan');
    }
    public function selesai($id)
    {       
        helper(['mongo']);
        $session = session();
        // echo "Welcome back, ".$session->get('user_name');
        $data['judul']='Detail Aduan';
        $data['username']=$session->get('user_name');
        $data['link']='kecelakaan';
        $data['detail']=prosesId('kecelakaan',$id);
        // $data['aduan']=getAll('aduan');
        return redirect()->to('/admin/kecelakaan');
    }
    public function hapus($id)
    {        
        helper(['mongo']);
        $session = session(); 
        $hapus=deleteId('kecelakaan',$id); 
        return redirect()->to('/admin/kecelakaan');
    }
}
