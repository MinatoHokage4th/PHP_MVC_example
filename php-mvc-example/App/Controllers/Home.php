<?php

class Home extends Controller {
    public function index(){
        //echo "home/index";
        $data['judul'] = 'HOME';
        $data['nama'] = $this->model('User_m')->getUser();
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer', $data);

    }
}
?>