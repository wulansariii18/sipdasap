<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Satpam extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        if ($this->session->userdata('status') != "login") {
            redirect(base_url("login"));
        }

        $this->load->model('Satpam_model');
        $this->load->library('form_validation');
    }

    private function rules() {
        return [
            ['field' => 'nik', 'label' => 'NIK', 'rules' => 'required'],
            ['field' => 'nama', 'label' => 'Nama', 'rules' => 'required'],
            ['field' => 'tgl_lahir', 'label' => 'Tgl Lahir', 'rules' => 'required'],
            ['field' => 'alamat', 'label' => 'Alamat', 'rules' => 'required'],
            ['field' => 'no_telp', 'label' => 'No Telp', 'rules' => 'required'],
            ['field' => 'jabatan', 'label' => 'Jabatan', 'rules' => 'required'],
            ['field' => 'tgl_perekrutan', 'label' => 'Tgl Perekrutan', 'rules' => 'required'],
            ['field' => 'pendidikan_terakhir', 'label' => 'Pendidikan Terakhir', 'rules' => 'required'],
            ['field' => 'area', 'label' => 'Area', 'rules' => 'required']
        ];
    }

    public function index() {
        $data['satpam'] = $this->Satpam_model->getAll(); 
        $data['area'] = $this->Satpam_model->getArea();

        $this->load->view('template/header');
        $this->load->view('data_master/tampil_satpam', $data);
        $this->load->view('template/footer');
    }

    public function print_satpam() {
        $data['satpam'] = $this->Satpam_model->getAll();
        $this->load->view('print_satpam', $data);
    }

    public function pdf() {
        $this->load->library('dompdf_gen');

        $data['satpam'] = $this->Satpam_model->getAll();
        $this->load->view('laporan_satpam', $data);

        $paper_size = 'A4';
        $orientation = 'portrait';
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);

        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream('laporan_satpam.pdf', array('attachment' => 0));
    }

    public function insert() {
        $this->form_validation->set_rules($this->rules());

        if ($this->form_validation->run() === FALSE) {
            $data['area'] = $this->Satpam_model->getArea();
            $this->load->view('template/header');
            $this->load->view('data_master/tambah_satpam', $data);
            $this->load->view('template/footer');
        } else {
            $data = [
                'nik' => $this->input->post('nik'),
                'nama' => $this->input->post('nama'),
                'tgl_lahir' => $this->input->post('tgl_lahir'),
                'alamat' => $this->input->post('alamat'),
                'no_telp' => $this->input->post('no_telp'),
                'jabatan' => $this->input->post('jabatan'),
                'tgl_perekrutan' => $this->input->post('tgl_perekrutan'),
                'pendidikan_terakhir' => $this->input->post('pendidikan_terakhir'),
                'area' => $this->input->post('area') // Ganti 'area' menjadi 'id_area' sesuai field di tabel 'satpam'
            ];
            
            $this->Satpam_model->insert($data);
            $this->session->set_flashdata('pesan', 'Data berhasil disimpan');
            redirect(base_url('satpam'));
        }
    }

    public function edit($id) {
        $this->form_validation->set_rules($this->rules());

        if ($this->form_validation->run() === FALSE) {
            $data['satpam'] = $this->Satpam_model->getId($id);
            if (!$data['satpam']) {
                show_404();
            }
            $data['area'] = $this->Satpam_model->getArea();

            $this->load->view('template/header');
            $this->load->view('data_master/edit_satpam', $data);
            $this->load->view('template/footer');
        } else {
            $data = [
                'nik' => $this->input->post('nik'),
                'nama' => $this->input->post('nama'),
                'tgl_lahir' => $this->input->post('tgl_lahir'),
                'alamat' => $this->input->post('alamat'),
                'no_telp' => $this->input->post('no_telp'),
                'jabatan' => $this->input->post('jabatan'),
                'tgl_perekrutan' => $this->input->post('tgl_perekrutan'),
                'pendidikan_terakhir' => $this->input->post('pendidikan_terakhir'),
                'area' => $this->input->post('area') // Ganti 'area' menjadi 'id_area' sesuai field di tabel 'satpam'
            ];

            $this->Satpam_model->edit($id, $data);
            $this->session->set_flashdata('pesan', 'Data berhasil diubah');
            redirect(base_url('satpam'));
        }
    }
    
    public function delete($id) {
        $satpam = $this->Satpam_model->getId($id);
        if (!$satpam) {
            show_404();
        }

        $this->Satpam_model->delete($id);
        $this->session->set_flashdata('pesan', 'Data berhasil dihapus');
        redirect(base_url('satpam'));
    }
}
?>
