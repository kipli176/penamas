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
        $data['username'] = $session->get('user_name');
        $data['aduan'] = getAll('aduan');

        return view('admin/aduan', $data);
    }

    public function detail($id)
    {
        helper(['mongo']);
        $session = session();
        // echo "Welcome back, ".$session->get('user_name');
        $data['judul'] = 'Detail Aduan';
        $data['username'] = $session->get('user_name');
        $data['link'] = 'aduan';
        $data['detail'] = getId('aduan', $id);
        $data['pesan'] = getPesan($id);
        // $data['aduan']=getAll('aduan');
        return view('admin/view', $data);
    }

    public function proses($id)
    {
        helper(['mongo']);
        $session = session();
        prosesId('aduan', $id);
        $get = getId('aduan', $id);
        kirimPesan($get->wa, '*_This is an auto generated message, please do not reply._*
        
Terima Kasih '.$get->jk.' *'.$get->nama.'*
Laporan anda dengan nomor *#AS'.$get->kode.'* sudah kami terima dan sedang dalam proses review.
Kami akan segera menghubungi anda kembali.


Salam, 

Jasa Raharja');

        return redirect()->to('/admin/aduan');
    }

    public function selesai($id)
    {
        helper(['mongo']);
        $session = session();
        $pesane = $this->request->getPost('pesan');
        // echo "Welcome back, ".$session->get('user_name');
        $data['judul'] = 'Detail Aduan';
        $data['username'] = $session->get('user_name');
        $data['link'] = 'aduan';
        $data['detail'] = prosesId('aduan', $id);
        selesaiId('aduan', $id);
        $get = getId('aduan', $id);
        // $data['aduan']=getAll('aduan');
        $isi = $pesane.'


Salam, 

Jasa Raharja';
        saveData('pesan', ['pesan' => $pesane, 'idne' => $get->_id, 'tgl' => time()]);
        kirimPesan($get->wa, $isi);

        return redirect()->to('/admin/aduan');
    }

    public function hapus($id)
    {
        helper(['mongo']);
        $session = session();
        $hapus = deleteId('aduan', $id);

        return redirect()->to('/admin/aduan');
    }
}
