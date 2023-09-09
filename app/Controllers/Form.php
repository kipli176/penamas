<?php

namespace App\Controllers;

class Form extends BaseController
{
	public function index() {
        helper(['form', 'url']);

		if($this->request->getPost('submit')) {
			$validation =  \Config\Services::validation();
			
			$validation->setRules([
				'username' => ['label' => 'Username', 'rules' => 'required|min_length[5]|max_length[30]'], 
				// 'lampiran[]' => ['label' => 'lampiran', 'rules' => 'required'] 
			]);
			
			if (!$validation->withRequest($this->request)->run()) {
				echo view('form', ['errors' => $validation->getErrors()]);
			} else {
				echo view('sukses', ['success' => 'Laporan anda telah dikirim.']);
			}
		} else {
			echo view('form');
		}
    }
}