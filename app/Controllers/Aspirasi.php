<?php

namespace App\Controllers; 

class Aspirasi extends BaseController
{
    public function __construct()
    {
        helper(['form', 'url', 'mongo']);
    }

    public function index()
    { 
        $data['kantor']=getAll('kantor');
			echo view('aspirasi',$data); 
    }

    public function add()
    { 
			
        $rules = [
            'judul' => ['label' => 'Judul', 'rules' => 'required|min_length[3]|max_length[250]'],
            'isi'   => ['label' => 'Isi', 'rules' => 'required|min_length[3]|max_length[1000]'],
            'nama'  => ['label' => 'Nama', 'rules' => 'required|min_length[3]|max_length[100]'],
            'wa'    => ['label' => 'No WA', 'rules' => 'required|min_length[3]|max_length[13]'],
            'lokasi'=> ['label' => 'Lokasi', 'rules' => 'required|min_length[3]|max_length[250]']
        ];

        if($this->validate($rules)){ 
                    $data=[
                        'judul'=>$this->request->getPost('judul'),
                        'isi'=>$this->request->getPost('isi'),
                        'nama'=>$this->request->getPost('nama'),
                        'wa'=>$this->request->getPost('wa'),
                        'jk'=>$this->request->getPost('jk'),
                        'tgl'=>time(),
                        'lokasi'=>$this->request->getPost('lokasi'), 
                        'kode'=>date('mdis'),
                        'status'=>0,
                        'date_created'=>date('Y-m-d')
                    ];
                    $simpan=saveData('aspirasi',$data);
                    kirimPesan($data["wa"],'*_This is an auto generated message, please do not reply._*

Terimakasih '.$data["jk"].' *'.$data["nama"].'*
Laporan anda dengan nomor *#AS'.$data["kode"].'* sudah kami terima dan sedang kami proses. 
Kami akan segera menghubungi anda kembali dalam waktu maksimal 1x24 jam.


Salam, 

Jasa Raharja');
                    echo view('sukses', ['success' => 'Aspirasi anda telah dikirim.']); 
        }else{ 
            $data['errors'] = $this->validator->getErrors();
            echo view('aspirasi', $data);
        }
 
    }
    public function sukses(): string
    {
        return view('sukses');
    }
 
}
