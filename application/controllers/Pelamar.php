<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pelamar extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pelamar_model', 'pelamar');
    }

    public function index()
    {
        $data['title'] = 'Data Pelamar';
        $data['pelamar'] = $this->pelamar->getPelamar();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar');
        $this->load->view('templates/sidebar');
        $this->load->view('pelamar/index');
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Tambah Data Pelamar';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar');
        $this->load->view('templates/sidebar');
        $this->load->view('pelamar/tambah');
        $this->load->view('templates/footer');
    }

    public function ubah($id)
    {
        $data['title'] = 'Ubah Data Pelamar';
        $data['pelamar'] = $this->pelamar->getPelamarId($id);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar');
        $this->load->view('templates/sidebar');
        $this->load->view('pelamar/ubah');
        $this->load->view('templates/footer');
    }

    public function insert()
    {
        $this->pelamar->insert();
        // $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show col-sm-2"
        // role="alert">
        // <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        //     <span aria-hidden="true">&times;</span></button>Data berhasil disimpan!</div>');
        redirect('pelamar');
    }

    public function update($id)
    {
        $this->pelamar->update($id);
        // $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show col-sm-2"
        // role="alert">
        // <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        //     <span aria-hidden="true">&times;</span></button>Data berhasil diubah!</div>');
        redirect('pelamar');
    }

    public function delete($id)
    {
        $this->pelamar->delete($id);
        redirect('pelamar');
    }
}
