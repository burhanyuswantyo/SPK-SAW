<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_model', 'admin');
    }

    public function index()
    {
        if ($this->session->userdata('username')) {
            redirect('admin');
        }

        $data['title'] = 'Sistem Pakar Diagnosa Kerusakan Motor Injeksi Matic';
        $this->load->view('auth/login', $data);
    }

    public function login()
    {
        $this->admin->login();
    }

    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil keluar!</div>');
        redirect('auth');
    }
}
