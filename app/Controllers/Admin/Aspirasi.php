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
        $data['username'] = $session->get('user_name');
        $data['aspirasi'] = getAll('aspirasi');

        return view('admin/aspirasi', $data);
    }

    public function detail($id)
    {
        helper(['mongo']);
        $session = session();
        // echo "Welcome back, ".$session->get('user_name');
        $data['judul'] = 'Detail Aspirasi';
        $data['username'] = $session->get('user_name');
        $data['detail'] = getId('aspirasi', $id);
        $data['link'] = 'aspirasi';
        $data['pesan'] = getPesan($id);
        // $data['aduan']=getAll('aduan');
        return view('admin/view3', $data);
    }

    public function proses($id)
    {
        helper(['mongo']);
        $session = session();
        prosesId('aspirasi', $id);
        $get = getId('aspirasi', $id);
        kirimPesan($get->wa, 'Terima Kasih Bapak/Ibu *'.$get->nama.'*. 
Laporan anda dengan nomor *#AS'.$get->kode.'* sudah kami terima dan sedang dalam proses review.
Kami akan segera menghubungi anda kembali.
Salam, 
Jasa Raharja');

        return redirect()->to('/admin/aspirasi');
    }

    public function selesai($id)
    {
        helper(['mongo']);
        $session = session();
        // echo "Welcome back, ".$session->get('user_name');
        $pesane = $this->request->getPost('pesan');
        $data['judul'] = 'Detail Aduan';
        $data['username'] = $session->get('user_name');
        $data['link'] = 'aspirasi';
        $data['detail'] = prosesId('aspirasi', $id);
        selesaiId('aspirasi', $id);
        $get = getId('aspirasi', $id);
        // $data['aduan']=getAll('aduan');
        $isi = $pesane.'
Salam, 
Jasa Raharja';
        saveData('pesan', ['pesan' => $pesane, 'idne' => $get->_id, 'tgl' => time()]);
        kirimPesan($get->wa, $isi);

        return redirect()->to('/admin/aspirasi');
    }

    public function hapus($id)
    {
        helper(['mongo']);
        $session = session();
        $hapus = deleteId('aspirasi', $id);

        return redirect()->to('/admin/aspirasi');
    }
}
