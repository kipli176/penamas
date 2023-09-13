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
        $data['link']='aspirasi';
        // $data['aduan']=getAll('aduan');
        return view('admin/view',$data);
    }
    public function proses($id)
    {       
        helper(['mongo']);
        $session = session(); 
        prosesId('aspirasi',$id); 
        $get=getId('aspirasi',$id);
        kirimPesan($get->wa,'Terimakasih *'.$get->nama.'*. 
Laporan anda sudah kami terima dan sedang dalam proses review. 
Kami akan menghubungi anda lagi maksimal 3x24jam.
Salam, Jasa Raharja');
        return redirect()->to('/admin/aspirasi');
    }
    public function selesai($id)
    {       
        helper(['mongo']);
        $session = session();
        // echo "Welcome back, ".$session->get('user_name');
        $data['judul']='Detail Aduan';
        $data['username']=$session->get('user_name');
        $data['link']='aspirasi';
        $data['detail']=prosesId('aspirasi',$id);
        // $data['aduan']=getAll('aduan');
        return redirect()->to('/admin/aspirasi');
    }
    public function hapus($id)
    {        
        helper(['mongo']);
        $session = session(); 
        $hapus=deleteId('aspirasi',$id); 
        return redirect()->to('/admin/aspirasi');
    }
}
