<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class User extends BaseController
{  
    public function index()
    {        
        helper(['mongo']);
        $session = session();
        // echo "Welcome back, ".$session->get('user_name');
        $data['username']=$session->get('user_name');
        $data['user']=getAll('users');
        $data['kantor']=getAll('kantor');
        $data['rs']=getAll('rs');
        return view('admin/user',$data);
    } 
    public function add()
    {
        helper(['mongo']);

        $data = [
            'username' => $this->request->getPost('username'),
            'kantor' => strtoupper($this->request->getPost('kantor')),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'date_created' => date('Y-m-d'),
        ];
        $simpan = saveData('users', $data);

        return redirect()->to('/admin/user');
    }
    public function hapus($id)
    {        
        helper(['mongo']);
        $session = session(); 
        $hapus=deleteId('users',$id); 
        return redirect()->to('/admin/user');
    }
}