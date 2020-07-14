<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hasil extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Hasil_model', 'hasil');
    }

    public function index()
    {
        $data['title'] = 'Data Hasil';

        if ($this->input->get('search') != null) {
            $data['hasil'] = $this->hasil->getHasilPeriod($this->input->get('search'));
        } else {

            $data['hasil'] = $this->hasil->getHasil();
        }

        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar');
        $this->load->view('templates/sidebar');
        $this->load->view('hasil/index');
        $this->load->view('templates/footer');
    }
}
