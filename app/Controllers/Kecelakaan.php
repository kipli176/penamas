<?php

namespace App\Controllers;

use App\Models\KecelakaanModel;

class Kecelakaan extends BaseController
{
    public function __construct()
    {
        helper(['form', 'url', 'mongo']);
    }

    public function index()
    {
        // helper(['form', 'url']);
        // $model = new KecelakaanModel();

        // if($this->request->getPost('submit')) {
        // 	$validation =  \Config\Services::validation();

        // 	$validation->setRules([
        // 		'pelapor' => ['label' => 'Nama Pelapor', 'rules' => 'required|min_length[5]|max_length[30]'],
        // 		'korban' => ['label' => 'Nama Korban', 'rules' => 'required|min_length[5]|max_length[30]'],
        // 		'wa' => ['label' => 'No Whatsapp', 'rules' => 'required|min_length[10]|max_length[13]'],
        // 		'lokasi' => ['label' => 'Lokasi Kecelakaan', 'rules' => 'required|min_length[5]|max_length[250]'],
        // 		// 'lampiran[]' => ['label' => 'lampiran', 'rules' => 'required']
        // 	]);

        // 	if (!$validation->withRequest($this->request)->run()) {
        // 		echo view('kecelakaan', ['errors' => $validation->getErrors()]);
        // 	} else {
        //         if ($files = $this->request->getFileMultiple('lampiran')) {
        //             $errors = [];
        //             $lampiran=[];
        //             foreach ($files as $file) {
        //                 if ($file->isValid() && !$file->hasMoved()) {
        //                     $newName = $file->getRandomName();
        //                     $file->move(WRITEPATH.'uploads', $newName);
        //                     $lampiran[]=$newName;
        //                 } else {
        //                     array_push($errors, $file->getErrorString().'('.$file->getError().')');
        //                 }
        //                 $lampirane=implode(",",$lampiran);
        //             }

        //             if ($errors) {
        //                 echo view('kecelakaan', ['errors' => $errors]);
        //             }else{
        //                 $data=[
        //                     'pelapor'=>$this->request->getPost('pelapor'),
        //                     'korban'=>$this->request->getPost('korban'),
        //                     'wa'=>$this->request->getPost('wa'),
        //                     'tgl'=>$this->request->getPost('tgl'),
        //                     'lokasi'=>$this->request->getPost('lokasi'),
        //                     'jenis'=>$this->request->getPost('jenis'),
        //                     'rs'=>$this->request->getPost('rs'),
        //                     'inputLat'=>$this->request->getPost('inputLat'),
        //                     'inputLng'=>$this->request->getPost('inputLng'),
        //                     'lampiran'=>$lampirane,
        //                     'date_created'=>date('Y-m-d')
        //                 ];
        //                 $model->create_kecelakaan($data);
        //                 echo view('sukses', ['success' => 'Laporan anda telah dikirim.']);
        //             }
        //         }
        // 	}
        // } else {
        $data['rs'] = getAll('rs');
        echo view('kecelakaan', $data);
        // }
    }

    public function add()
    {
        $rules = [
            'pelapor' => ['label' => 'Nama Pelapor', 'rules' => 'required|min_length[3]|max_length[100]'],
            'korban' => ['label' => 'Nama Korban', 'rules' => 'required|min_length[3]|max_length[100]'],
            'wa' => ['label' => 'No WA', 'rules' => 'required|min_length[3]|max_length[13]'],
            'tgl' => ['label' => 'Tanggal Kejadian', 'rules' => 'required|min_length[3]|max_length[250]'],
            'lokasi' => ['label' => 'Lokasi', 'rules' => 'required|min_length[3]|max_length[250]'],
            'jenis' => ['label' => 'Jenis Kecelakaan', 'rules' => 'required|min_length[3]|max_length[250]'],
            // 'lampiran' => 'uploaded[lampiran]|max_size[lampiran,5500]',
        ];

        if ($this->validate($rules)) {
            if ($files = $this->request->getFileMultiple('lampiran')) {
                $errors = [];
                $lampiran = [];
                foreach ($files as $file) {
                    if ($file->isValid() && !$file->hasMoved()) {
                        $newName = $file->getRandomName();
                        $file->move(WRITEPATH.'uploads', $newName);
                        $lampiran[] = $newName;
                    } else {
                        array_push($errors, $file->getErrorString().'('.$file->getError().')');
                    }
                    $lampirane = implode(',', $lampiran);
                }

                // if ($errors) {
                //     echo view('kecelakaan', ['errors' => $errors]);
                // }else{
                $data = [
                    'pelapor' => $this->request->getPost('pelapor'),
                    'korban' => $this->request->getPost('korban'),
                    'wa' => $this->request->getPost('wa'),
                    'jk' => $this->request->getPost('jk'),
                    'tgl' => $this->request->getPost('tgl'),
                    'lokasi' => $this->request->getPost('lokasi'),
                    'jenis' => $this->request->getPost('jenis'),
                    'rs' => $this->request->getPost('rs'),
                    'inputLat' => $this->request->getPost('inputLat'),
                    'inputLng' => $this->request->getPost('inputLng'),
                    'kode' => date('mdis'),
                    'lampiran' => $lampirane,
                    'status' => 0,
                    'notif' => 0,
                    'date_created' => date('Y-m-d'),
                ];
                $simpan = saveData('kecelakaan', $data);
                kirimPesan($data['wa'], '*_This is an auto generated message, please do not reply._*

Terimakasih '.$data['jk'].' *'.$data['pelapor'].'*
Laporan anda dengan nomor *#LK'.$data['kode'].'* sudah kami terima dan sedang kami proses. 
Kami akan segera menghubungi anda kembali dalam waktu maksimal 1x24 jam.


Salam, 

Jasa Raharja');
                kirimPesan('082176846801', '*_This is an auto generated message, please do not reply._*

Terimakasih '.$data['jk'].' *'.$data['pelapor'].'*
Laporan anda dengan nomor *#LK'.$data['kode'].'* sudah kami terima dan sedang kami proses. 
Kami akan segera menghubungi anda kembali dalam waktu maksimal 1x24 jam.


Salam, 

Jasa Raharja');
                echo view('sukses', ['success' => 'Laporan anda telah dikirim.']);
                // }
            }
        } else {
            // $data['validation'] = $this->validator;
            $data['success'] = 'Laporan anda telah dikirim.';
            $data['errors'] = $this->validator->getErrors();
            $data = [
                'pelapor' => $this->request->getPost('pelapor'),
                'korban' => $this->request->getPost('korban'),
                'wa' => $this->request->getPost('wa'),
                'tgl' => $this->request->getPost('tgl'),
                'lokasi' => $this->request->getPost('lokasi'),
                'jenis' => $this->request->getPost('jenis'),
                'rs' => $this->request->getPost('rs'),
                'inputLat' => $this->request->getPost('inputLat'),
                'inputLng' => $this->request->getPost('inputLng'),
                'kode' => date('mdis'),
                'lampiran' => '',
                'status' => 0,
                'notif' => 0,
                'date_created' => date('Y-m-d'),
            ];
            $simpan = saveData('kecelakaan', $data);
            kirimPesan($data['wa'], '*_This is an auto generated message, please do not reply._*

Terimakasih '.$data['jk'].' *'.$data['pelapor'].'*
Laporan anda dengan nomor *#LK'.$data['kode'].'* sudah kami terima dan sedang kami proses. 
Kami akan segera menghubungi anda kembali dalam waktu maksimal 1x24 jam.
            
            
Salam, 
            
Jasa Raharja');
            kirimPesan('082176846801', '*_This is an auto generated message, please do not reply._*

Terimakasih '.$data['jk'].' *'.$data['pelapor'].'*
Laporan anda dengan nomor *#LK'.$data['kode'].'* sudah kami terima dan sedang kami proses. 
Kami akan segera menghubungi anda kembali dalam waktu maksimal 1x24 jam.


Salam, 

Jasa Raharja');
            echo view('sukses', ['success' => 'Laporan anda telah dikirim.']);
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
