<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Kantor extends BaseController
{
    public function index()
    {
        helper(['mongo']);
        $session = session();
        // echo "Welcome back, ".$session->get('user_name');
        $data['username'] = $session->get('user_name');
        $data['kantor'] = getAll('kantor');

        return view('admin/kantor', $data);
    }

    public function add()
    {
        helper(['mongo']);

        $data = [
            'kantor' => strtoupper($this->request->getPost('kantor')),
            'date_created' => date('Y-m-d'),
        ];
        $simpan = saveData('kantor', $data);

        return redirect()->to('/admin/kantor');
    }
    public function hapus($id)
    {        
        helper(['mongo']);
        $session = session(); 
        $hapus=deleteId('kantor',$id); 
        return redirect()->to('/admin/kantor');
    }
}
