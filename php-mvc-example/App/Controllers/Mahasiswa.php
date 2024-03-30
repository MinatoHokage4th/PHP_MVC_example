<?php

class Mahasiswa extends Controller {
    public function __constructor(){
        echo "Called, Mahasiswa Constructor";
    }
    public function index(){
        $data['judul'] = 'Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_m')->getAllMhs();
        $data['mhsdb'] = $this->model('Mahasiswa_m')->getAllMhsDB();
        $this->view('templates/header',$data);
        $this->view('mahasiswa/index', $data);
        $this->view('templates/footer',$data);
    }
    public function detail($id){
        $data['judul'] = 'Detail Mahasiswa';
        $data['mhsdb'] = $this->model('Mahasiswa_m')->getMahasiswaById($id);
        $this->view('templates/header',$data);
        $this->view('mahasiswa/detail', $data);
        $this->view('templates/footer',$data);
    }
}
?>