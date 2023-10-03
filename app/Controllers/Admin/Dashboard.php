<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function __construct()
    {
        helper(['form', 'url', 'mongo']);
    }

    public function index()
    {
        $session = session();
        // echo "Welcome back, ".$session->get('user_name');
        $data['username'] = $session->get('user_name');
        $data['countAduan']=getCount('aduan');
        $data['countAspirasi']=getCount('aspirasi');
        $data['countKecelakaan']=getCount('kecelakaan');
        $data['aduan']=getAlls('aduan');
        $data['aspirasi']=getAlls('aspirasi');
        $data['kecelakaan']=getAlls('kecelakaan');
        return view('admin/home', $data);
    }

    public function notifAduan()
    {
        $aray = getNotif('aduan');
        $output[] = '';
        $i = 0;
        foreach ($aray as $row) {
            ++$i;
            $output[]
             .= '<li><a href="/admin/aduan/detaile/'.$row['_id'].'">
            <div class="timeline-panel">
                <div class="media me-2 media-success"> 
                    <img alt="image" width="50" src="/assets/images/fav-icon-jr.png">
                </div>
                <div class="media-body">

                    <h6 class="mb-1">Aduan dari '.$row['nama'].'</h6>
                    <small class="d-block">'.date('d-M-Y',strtotime($row['tgl'])).'</small>
                </div>
            </div>
        </li></a>';
        }
        // $data['notif']=json_encode(getNotif('kecelakaan'));
        $data = [
            'notification' => $output,
            'count' => $i,
         ];
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($data);
    }
    public function notifAspirasi()
    {
        $aray = getNotif('aspirasi');
        $output[] = '';
        $i = 0;
        foreach ($aray as $row) {
            ++$i;
            $output[]
             .= '<li><a href="/admin/aspirasi/detaile/'.$row['_id'].'">
            <div class="timeline-panel">
                <div class="media me-2 media-success">
                <img alt="image" width="50" src="/assets/images/fav-icon-jr.png">
                </div>
                <div class="media-body">

                    <h6 class="mb-1">Aspirasi dari '.$row['nama'].'</h6>
                    <small class="d-block">'.date('d-M-Y',strtotime($row['tgl'])).'</small>
                </div>
            </div>
        </li></a>';
        }
        // $data['notif']=json_encode(getNotif('kecelakaan'));
        $data = [
            'notification' => $output,
            'count' => $i,
         ];
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($data);
    }
    public function notifKecelakaan()
    {
        $aray = getNotif('kecelakaan');
        $output[] = '';
        $i = 0;
        foreach ($aray as $row) {
            ++$i;
            $output[]
             .= '<li><a href="/admin/kecelakaan/detaile/'.$row['_id'].'">
            <div class="timeline-panel">
                <div class="media me-2 media-success">
                <img alt="image" width="50" src="/assets/images/fav-icon-jr.png">
                </div>
                <div class="media-body">

                    <h6 class="mb-1">Kecelakaan dari '.$row['pelapor'].'</h6>
                    <small class="d-block">'.date('d-M-Y',strtotime($row['tgl'])).'</small>
                </div>
            </div>
        </li></a>';
        }
        // $data['notif']=json_encode(getNotif('kecelakaan'));
        $data = [
            'notification' => $output,
            'count' => $i,
         ];
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($data);
    }
}
