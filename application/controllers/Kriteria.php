<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kriteria extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kriteria_model', 'kriteria');
    }

    public function index()
    {
        $data['title'] = 'Data Kriteria';
        $data['kriteria'] = $this->kriteria->getKriteria();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar');
        $this->load->view('templates/sidebar');
        $this->load->view('kriteria/index');
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Tambah Data Kriteria';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar');
        $this->load->view('templates/sidebar');
        $this->load->view('kriteria/tambah');
        $this->load->view('templates/footer');
    }

    public function ubah($id)
    {
        $data['title'] = 'Ubah Data Kriteria';
        $data['kriteria'] = $this->kriteria->getKriteriaId($id);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar');
        $this->load->view('templates/sidebar');
        $this->load->view('kriteria/ubah');
        $this->load->view('templates/footer');
    }

    public function insert()
    {
        $this->kriteria->insert();
        // $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show col-sm-2"
        // role="alert">
        // <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        //     <span aria-hidden="true">&times;</span></button>Data berhasil disimpan!</div>');
        redirect('kriteria');
    }

    public function update($id)
    {
        $this->kriteria->update($id);
        // $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show col-sm-2"
        // role="alert">
        // <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        //     <span aria-hidden="true">&times;</span></button>Data berhasil diubah!</div>');
        redirect('kriteria');
    }

    public function delete($id)
    {
        $this->kriteria->delete($id);
        redirect('kriteria');
    }
}
