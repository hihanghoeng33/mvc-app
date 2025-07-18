<?php

class About extends Controller{
    public function index($nama='Buto', $hobby='Membaca'){
        $this->view('about/index',[
            'nama' => $nama,
            'hobby' => $hobby,
            'judul' => 'About me'
        ]);
    }
    public function page(){
        $data['judul'] = 'Our Page';
        $this->view('templates/header', $data);
        $this->view('about/page');
    }
}