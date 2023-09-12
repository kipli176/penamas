<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\AuthModel;

class Auth extends BaseController
{
    public function index()
    {

        // echo getBook('users', 'admin', 'admin')->username;
        // foreach (getBooks('users') as $item) {
        //     echo $item['_id'];
        //     echo $item['username'];
        // }
        echo view('admin/auth');
    }

    public function auth()
    {
        helper(['form', 'mongo']);
        $session = session(); 
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $data = getOne('users', $username);
        if ($data) {
            // print_r($data['username']);
            $pass = $data['password'];
            $verify_pass = password_verify($password, $pass);
            if($verify_pass){
                $ses_data = [
                    'user_id'       => $data['_id'],
                    'user_name'     => $data['username'], 
                    'logged_in'     => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('/dashboard');
            }else{
                $session->setFlashdata('msg', 'Wrong Password');
                return redirect()->to('/admin/auth');
            }
        } else {
            $session->setFlashdata('msg', 'User not Found');
            return redirect()->to('/admin/auth');
            // print_r('periksa');
        }
        // $session = session();
        // $model = new AuthModel();
        // echo $email = $this->request->getPost('username');
        // $password = $this->request->getPost('password');
        // $data = $model->get_login_details($email, $password);
        // print_r($data);
        // if($data){
        //     $pass = $data['user_password'];
        //     $verify_pass = password_verify($password, $pass);
        //     if($verify_pass){
        //         $ses_data = [
        //             'user_id'       => $data['user_id'],
        //             'username'     => $data['username'],
        //             'user_email'    => $data['user_email'],
        //             'logged_in'     => TRUE
        //         ];
        //         $session->set($ses_data);
        //         return redirect()->to('/dashboard');
        //     }else{
        //         $session->setFlashdata('msg', 'Wrong Password');
        //         return redirect()->to('/login');
        //     }
        // }else{
        //     $session->setFlashdata('msg', 'Email not Found');
        //     return redirect()->to('/login');
        // }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();

        return redirect()->to('/login');
    }
}
