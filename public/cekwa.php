<?php

function kirimPesane($a, $b)
{
    foreach ($a as $no) {
        $curl = curl_init();
        curl_setopt_array($curl, [
        CURLOPT_URL => 'http://185.205.244.115:3333/message/text?key=e492044d-659e-43ba-810a-17abbfc020a0',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => 'id=62'.substr($no, 1).'&message='.$b,
        ]);
        $response = curl_exec($curl);
        curl_close($curl);
    }
}

kirimPesane(['08562603077', '08562603077'], '*_This is an auto generated message, please do not reply._*

Terimakasih jk *nama*
Laporan anda dengan nomor *#ADkode* sudah kami terima dan sedang kami proses. 
Kami akan segera menghubungi anda kembali dalam waktu maksimal 1x24 jam.


Salam, 

Jasa Raharja');
