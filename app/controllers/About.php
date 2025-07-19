<?php

class About extends Controller{
    public function index($nama='Buto', $hobby='Membaca'){
        $this->view('templates/header', [
            'judul' => 'About me',
            'BASEURL' => BASEURL
        ]);
        $this->view('about/index',[
            'nama' => $nama,
            'hobby' => $hobby,
        ]);
        $this->view('templates/footer');
    }
    public function page(){
        $data['judul'] = 'Our Page';
        $data['BASEURL'] = BASEURL;
        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer');
    }
}