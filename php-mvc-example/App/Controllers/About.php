<?php

class About extends Controller
{
    public function index($nama = "Professor", $jobtitle = "Programmer")
    {
        //echo "About/index";
        //echo "Hello, Nama saya $name, saya adalah seorang $jobtitle";
        $data['nama'] = $nama;
        $data['jobtitle'] = $jobtitle;
        $data['judul'] = 'ABOUT';

        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer', $data);
    }
    public function page()
    {
        //echo "About/page";
        $data['judul'] = 'PAGE';
        $this->view('templates/header', $data);
        $this->view('about/page', $data);
        $this->view('templates/footer', $data);
    }
}
