<?php

class Mahasiswa extends Controller
{
    public function __constructor()
    {
        //echo "Called, Mahasiswa Constructor";
    }
    public function index()
    {
        $data['judul'] = 'Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_m')->getAllMhs();
        $data['mhsdb'] = $this->model('Mahasiswa_m')->getAllMhsDB();
        $this->view('templates/header', $data);
        $this->view('mahasiswa/index', $data);
        $this->view('templates/footer', $data);
    }
    public function detail($id)
    {
        $data['judul'] = 'Detail Mahasiswa';
        $data['mhsdb'] = $this->model('Mahasiswa_m')->getMahasiswaById($id);
        $this->view('templates/header', $data);
        $this->view('mahasiswa/detail', $data);
        $this->view('templates/footer', $data);
    }
    public function tambah()
    {
        if ($this->model('Mahasiswa_m')->tambahDataMahasiswa($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        }
    }
    public function delete($id)
    {
        if ($this->model('Mahasiswa_m')->hapusDataMahasiswa($id) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        }
    }
    public function getubah()
    {
        // echo "OKK";
        $tmp = json_encode($this->model('Mahasiswa_m')->getMahasiswaById($_POST['id']));
        echo $tmp;
    }
    public function ubah()
    {
        if ($this->model('Mahasiswa_m')->ubahDataMahasiswa($_POST) > 0) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        }
    }
    public function cari()
    {
        $data['judul'] = 'Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_m')->getAllMhs();
        $data['mhsdb'] = $this->model('Mahasiswa_m')->searchMhsDB();
        if ($data['mhsdb'][1] == 0) {
            Flasher::setFlash('404 Not Found', 'dicari', 'danger');
            header('Location: ' . BASEURL . '/mahasiswa');
            $data['judul'] = 'Mahasiswa';
            $data['mhsdb'] = $this->model('Mahasiswa_m')->getAllMhsDB();
            exit;
        }
        $this->view('templates/header', $data);
        $this->view('mahasiswa/index', $data);
        $this->view('templates/footer', $data);
    }
}
