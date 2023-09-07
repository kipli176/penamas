<?php

namespace App\Controllers;

class Aduan extends BaseController
{
    public function index(): string
    {
        return view('aduan');
    }
    public function sukses(): string
    {
        return view('sukses');
    }
}
