<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Satpam extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('status') != "login") {
            redirect(base_url("login"));
        }

        $this->load->model('Satpam_model');
        $this->load->library('form_validation');
    }

    private function rules()
    {
        return [
            ['field' => 'nik', 'label' => 'NIK', 'rules' => 'required'],
            ['field' => 'nama', 'label' => 'Nama', 'rules' => 'required'],
            ['field' => 'tgl_lahir', 'label' => 'Tgl Lahir', 'rules' => 'required'],
            ['field' => 'alamat', 'label' => 'Alamat', 'rules' => 'required'],
            ['field' => 'no_telp', 'label' => 'No Telp', 'rules' => 'required'],
            ['field' => 'tgl_perekrutan', 'label' => 'Tgl Perekrutan', 'rules' => 'required']
        ];
    }

    public function index()
    {
        $data['satpam'] = $this->Satpam_model->getAll(); 

        $this->load->view('template/header');
        $this->load->view('data_master/tampil_satpam', $data);
        $this->load->view('template/footer');
    }


    public function insert()
    {
        $this->form_validation->set_rules($this->rules());

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('template/header');
            $this->load->view('data_master/tambah_satpam');
            $this->load->view('template/footer');
        } else {
            $data['nik'] = $this->input->post('nik');
            $data['nama'] = $this->input->post('nama');
            $data['tgl_lahir'] = $this->input->post('tgl_lahir');
            $data['alamat'] = $this->input->post('alamat');
            $data['no_telp'] = $this->input->post('no_telp');
            $data['tgl_perekrutan'] = $this->input->post('tgl_perekrutan');

            $this->Satpam_model->insert($data);
            $this->session->set_flashdata('pesan', 'Data berhasil disimpan');
            redirect(base_url('satpam'));
        }
    }

    public function edit($id)
    {
        $this->form_validation->set_rules($this->rules());

        if ($this->form_validation->run() === FALSE) {
            $data['satpam'] = $this->Satpam_model->getId($id);

            $this->load->view('template/header');
            $this->load->view('data_master/edit_satpam', $data);
            $this->load->view('template/footer');
        } else {
            $data['nik'] = $this->input->post('nik');
            $data['nama'] = $this->input->post('nama');
            $data['tgl_lahir'] = $this->input->post('tgl_lahir');
            $data['alamat'] = $this->input->post('alamat');
            $data['no_telp'] = $this->input->post('no_telp');
            $data['tgl_perekrutan'] = $this->input->post('tgl_perekrutan');

            $this->Satpam_model->edit($id, $data);
            $this->session->set_flashdata('pesan', 'Data berhasil diubah');
            redirect(base_url('satpam'));
        }
    }
    
    public function delete($id)
    {
        $this->Satpam_model->delete($id);
        $this->session->set_flashdata('pesan', 'Data berhasil dihapus');
        redirect(base_url('satpam'));
    }
}
