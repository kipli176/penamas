<?php

namespace App\Controllers;
use App\Models\AduanModel;

class Aduan extends BaseController
{
    public function __construct()
    {
        helper(['form', 'url']);
    }

    public function index()
    {
        helper(['form', 'url']);
        $model = new AduanModel();

		if($this->request->getPost('submit')) {
			$validation =  \Config\Services::validation();
			
			$validation->setRules([
				'judul' => ['label' => 'Judul', 'rules' => 'required|min_length[5]|max_length[30]'], 
				'wa' => ['label' => 'No Whatsapp', 'rules' => 'required|min_length[10]|max_length[13]'], 
				// 'lampiran[]' => ['label' => 'lampiran', 'rules' => 'required'] 
			]);
			
			if (!$validation->withRequest($this->request)->run()) {
				echo view('aduan', ['errors' => $validation->getErrors()]);
			} else {
                if ($files = $this->request->getFileMultiple('lampiran')) {
                    $errors = [];
                    $lampiran=[];
                    foreach ($files as $file) {
                        if ($file->isValid() && !$file->hasMoved()) {
                            $newName = $file->getRandomName();
                            $file->move(WRITEPATH.'uploads', $newName);
                            $lampiran[]=$newName;
                        } else {
                            array_push($errors, $file->getErrorString().'('.$file->getError().')');
                        }
                        $lampirane=implode(",",$lampiran);
                    }
    
                    if ($errors) { 
                        echo view('aduan', ['errors' => $errors]);
                    }else{
                        $data=[
                            'judul'=>$this->request->getPost('judul'),
                            'isi'=>$this->request->getPost('isi'),
                            'nama'=>$this->request->getPost('nama'),
                            'wa'=>$this->request->getPost('wa'),
                            'tgl'=>$this->request->getPost('tgl'),
                            'lokasi'=>$this->request->getPost('lokasi'),
                            'lampiran'=>$lampirane,
                            'date_created'=>date('Y-m-d')
                        ];
                        $model->create_aduan($data);
                        echo view('sukses', ['success' => 'Laporan anda telah dikirim.']); 
                    }
                } 
			}
		} else {
			echo view('aduan');
		}
    }

    public function sukses(): string
    {
        return view('sukses');
    }

    public function create()
    {
        

        // helper(['form', 'url']);
// print_r($this->request->getPost());
        // if ($this->request->getPost('judul')) {
            // echo 'aaaaaaaaa';
            if ($files = $this->request->getFileMultiple('lampiran')) {
                $errors = [];
                foreach ($files as $file) {
                    if ($file->isValid() && !$file->hasMoved()) {
                        $newName = $file->getRandomName();
                        $file->move(WRITEPATH.'uploads', $newName);
                    } else {
                        array_push($errors, $file->getErrorString().'('.$file->getError().')');
                    }
                }

                if (empty($errors)) {
                    return view('aduan', ['success' => 'All Files Uploaded Successfully']);
                } else {
                    return view('aduan', ['errors' => $errors]);
                }
            } else {
                return view('aduan', ['error' => 'Select at least one file for upload']);
            }
//         } else {
// echo 'ssssss';
//             // return view('aduan');
//         }
    }
}
