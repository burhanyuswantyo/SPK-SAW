<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Nilai extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pelamar_model', 'pelamar');
        $this->load->model('Nilai_model', 'nilai');
        $this->load->model('Kriteria_model', 'kriteria');
    }

    public function index()
    {
        $data['title'] = 'Data Nilai';
        $data['pelamar'] = $this->pelamar->getPelamar();
        $data['nilai'] = $this->nilai->getNilai();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar');
        $this->load->view('templates/sidebar');
        $this->load->view('nilai/index');
        $this->load->view('templates/footer');
    }

    public function ubah($id)
    {
        $data['title'] = 'Ubah Data Nilai';
        $data['kriteria'] = $this->kriteria->getKriteria();
        $data['nilai'] = $this->nilai->getNilaiId($id);
        $data['pelamar'] = $this->pelamar->getPelamarId($id);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar');
        $this->load->view('templates/sidebar');
        $this->load->view('nilai/ubah');
        $this->load->view('templates/footer');
    }


    public function update()
    {
        $this->nilai->update();
        redirect('nilai');
    }
}
