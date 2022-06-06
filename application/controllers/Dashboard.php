<?php

class Dashboard extends CI_Controller{

    public function __construct()
    {
        parent::__construct();

        if(!$this->session->userdata('email')){
            redirect('auth');
        }

        $this->load->model([
            'AnggotaModel',
            'BukuModel',
            'KelasModel'
        ]);
    }

    public function index()
    {
        $data['tab_title'] = 'Dashboard';
        $data['title'] = 'Dashboard';

        $data['total_anggota'] = $this->AnggotaModel->countAnggota();
        $data['total_buku'] = $this->BukuModel->countBuku();

        $this->load->view('templates/header', $data);
        $this->load->view('dashboard/index', $data);
        $this->load->view('templates/footer');

    }
    
}