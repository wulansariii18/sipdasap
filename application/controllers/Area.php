<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Area extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        if ($this->session->userdata('status') != "login") {
            redirect(base_url("login"));
        }

        $this->load->model('Area_model');
        $this->load->library('form_validation');
    }

    private function rules() {
        return [
            ['field' => 'nama_area', 'label' => 'Nama Area', 'rules' => 'required'],
            ['field' => 'alamat', 'label' => 'Alamat', 'rules' => 'required'],
            ['field' => 'no_telp', 'label' => 'No Telp', 'rules' => 'required'],
            ['field' => 'tgl_mulai_kontrak', 'label' => 'Tgl Mulai Kontrak', 'rules' => 'required'],
            ['field' => 'tgl_akhir_kontrak', 'label' => 'Tgl Akhir Kontrak', 'rules' => 'required']
        ];
    }

    public function index() {
        $data['area'] = $this->Area_model->get_all_area(); 

        $this->load->view('template/header');
        $this->load->view('data_master/tampil_area', $data);
        $this->load->view('template/footer');
    }

    public function print_area() {
        $data['area'] = $this->Area_model->get_all_area(); 
        $this->load->view('print_area', $data);
    }

    public function pdf() {
        $this->load->library('dompdf_gen');

        $data['area'] = $this->Area_model->get_all_area();
        $this->load->view('laporan_area', $data);

        $paper_size = 'A4';
        $orientation = 'portrait';
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);

        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream('laporan_area.pdf', array('attachment' => 0));
    }

    public function insert() {
        $this->form_validation->set_rules($this->rules());

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('template/header');
            $this->load->view('data_master/tambah_area');
            $this->load->view('template/footer');
        } else {
            $data['nama_area'] = $this->input->post('nama_area');
            $data['alamat'] = $this->input->post('alamat');
            $data['no_telp'] = $this->input->post('no_telp');
            $data['tgl_mulai_kontrak'] = $this->input->post('tgl_mulai_kontrak');
            $data['tgl_akhir_kontrak'] = $this->input->post('tgl_akhir_kontrak');

            $this->Area_model->insert($data);
            $this->session->set_flashdata('pesan', 'Data berhasil disimpan');
            redirect(base_url('area'));
        }
    }

    public function edit($id) {
        $this->form_validation->set_rules($this->rules());

        if ($this->form_validation->run() === FALSE) {
            $data['area'] = $this->Area_model->getId($id);

            $this->load->view('template/header');
            $this->load->view('data_master/edit_area', $data);
            $this->load->view('template/footer');
        } else {
            $data['nama_area'] = $this->input->post('nama_area');
            $data['alamat'] = $this->input->post('alamat');
            $data['no_telp'] = $this->input->post('no_telp');
            $data['tgl_mulai_kontrak'] = $this->input->post('tgl_mulai_kontrak');
            $data['tgl_akhir_kontrak'] = $this->input->post('tgl_akhir_kontrak');

            $this->Area_model->edit($id, $data);
            $this->session->set_flashdata('pesan', 'Data berhasil diubah');
            redirect(base_url('area'));
        }
    }
    
    public function delete($id) {
        $this->Area_model->delete($id);
        $this->session->set_flashdata('pesan', 'Data berhasil dihapus');
        redirect(base_url('area'));
    }
}
?>
