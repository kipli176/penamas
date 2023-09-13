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
			echo view('aspirasi'); 
    }

    public function add()
    { 
			
        $rules = [
            'judul' => ['label' => 'Judul', 'rules' => 'required|min_length[3]|max_length[250]'],
            'isi'   => ['label' => 'Isi', 'rules' => 'required|min_length[3]|max_length[1000]'],
            'nama'  => ['label' => 'Nama', 'rules' => 'required|min_length[3]|max_length[100]'],
            'wa'    => ['label' => 'No WA', 'rules' => 'required|min_length[3]|max_length[13]'],
            'tgl'   => ['label' => 'Tanggal Kejadian', 'rules' => 'required|min_length[3]|max_length[250]'],
            'lokasi'=> ['label' => 'Lokasi', 'rules' => 'required|min_length[3]|max_length[250]']
        ];

        if($this->validate($rules)){ 
                    $data=[
                        'judul'=>$this->request->getPost('judul'),
                        'isi'=>$this->request->getPost('isi'),
                        'nama'=>$this->request->getPost('nama'),
                        'wa'=>$this->request->getPost('wa'),
                        'tgl'=>$this->request->getPost('tgl'),
                        'lokasi'=>$this->request->getPost('lokasi'),
                        'status'=>0,
                        'date_created'=>date('Y-m-d')
                    ];
                    $simpan=saveData('aspirasi',$data);
                    kirimPesan($this->request->getPost('wa'),'Terima Kasih Bapak/Ibu *'.$this->request->getPost('nama').'*. 
Laporan anda sudah kami terima. Kami akan segera menghubungi anda kembali.
Salam, Jasa Raharja');
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
