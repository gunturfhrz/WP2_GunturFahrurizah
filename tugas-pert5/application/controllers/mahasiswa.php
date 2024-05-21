<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
{


    public function index()
    {
        $this->load->model('Mymahasiswa'); // Memuat model 'Mymahasiswa'
        $data['mahasiswa'] = $this->Mymahasiswa->getMahasiswa()->result();
        $this->load->view('view-tampil-mahasiswa', $data);
    }

    public function tambah()
    {
        $this->load->view('view-input-mahasiswa');
    }

    public function tambahaksi()
    {
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $kelas = $_POST['kelas'];
        $data_insert = array(
            'nim' => $nim,
            'nama' => $nama,
            'kelas' => $kelas
        );
        $this->mymahasiswa->simpan('mahasiswa', $data_insert);
        redirect('mahasiswa');
    }

    public function do_delete($nim)
    {
        $where = array('nim' => $nim);
        $res = $this->mymahasiswa->hapus('mahasiswa', $where);
        if ($res >= 1) {
            echo "Hapus Sukses";
            redirect('mahasiswa');
        }
    }
    public function editdata($nim)
    {
        $where = array('nim' => $nim);
        $mhs['mahasiswa'] = $this->mymahasiswa->ubah($where, 'mahasiswa')->result();
        $this->load->view('view-edit-mahasiswa', $mhs);
    }

    public function updatedata()
    {
        $nim = $this->input->post('nim');
        $nama = $this->input->post('nama');
        $kelas = $this->input->post('kelas');

        $data_update = array(
            'nim' => $nim,
            'nama' => $nama,
            'kelas' => $kelas,
        );
        $where = array('nim' => $nim);

        $this->mymahasiswa->updateMahasiswa($where, $data_update, 'mahasiswa'); //'mahasiswa' (tabel)
        redirect('mahasiswa'); //mahasiswa (controller)
    }
}
