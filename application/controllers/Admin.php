<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Admin extends CI_Controller {
		
		public function __construct()
		{
			parent::__construct();
            $this->load->library('form_validation');
            // $this->load->library('session');
        }

        public function index()
        {
            $data['title'] = 'Admin Dashboard - Home';
            $data['user'] = $this->db->get_where('tb_admin', ['email_admin' => $this->session->userdata('email')])->row_array();
            
            if($this->session->userdata('email') == null)
            {
                $data['title'] = 'ADMIN - FORBIDDEN';
                // $this->load->view('404/404', $data);
            }
            else
            {
                $this->load->view('templates/admin_menu', $data);
                $this->load->view('templates/admin_header', $data);
                $this->load->view('admin/home', $data);
                $this->load->view('templates/admin_footer');
            }
        }

        public function listTampilanHome()
        {
            $data['title'] = 'Admin - List Tampilan Home';
            $data['user'] = $this->db->get_where('tb_admin', ['email_admin' => $this->session->userdata('email')])->row_array();
            $data['tampilanhome'] = $this->db->query(" SELECT * FROM tb_tampilan JOIN tb_admin ON tb_tampilan.id_admin = tb_admin.id_admin WHERE seksi_tampilan = 'home'")->result_array();
            $this->load->view('templates/admin_menu', $data);
            $this->load->view('templates/admin_header', $data);
            $this->load->view('admin/list/tampilan_home', $data);
            $this->load->view('templates/admin_footer');
        }

        public function editTampilanHome($id_tampilan)
        {
            $data['title'] = 'Admin - Edit Tampilan Home';
            $data['user'] = $this->db->get_where('tb_admin', ['email_admin' => $this->session->userdata('email')])->row_array();
            $data['tampilanhome'] = $this->db->query(" SELECT * FROM tb_tampilan JOIN tb_admin ON tb_tampilan.id_admin = tb_admin.id_admin WHERE id_tampilan = '$id_tampilan' ")->result_array();

            $this->form_validation->set_rules('isi', 'Isi', 'required');

            if($this->form_validation->run() == FALSE)
            {
                $this->load->view('templates/admin_menu', $data);
                $this->load->view('templates/admin_header', $data);
                $this->load->view('admin/edit/edit_tampilan_home', $data);
                $this->load->view('templates/admin_footer');
            }
            else
            {
                $data = [
                    'isi_tampilan' => htmlspecialchars($this->input->post('isi', true)),
                    'id_admin' => htmlspecialchars($this->input->post('id_admin', true))
                ];

                $this->db->where('id_tampilan', $id_tampilan);
                $this->db->update('tb_tampilan', $data);
                $this->session->set_flashdata('pesan_edit', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Berhasil</strong> mengedit tampilan.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                    </button>
                    </div>');
                redirect('admin/listTampilanHome');
            }
        }

        public function editTampilanAbout()
        {
            $data['title'] = 'Admin - Edit Tampilan Home';
            $data['user'] = $this->db->get_where('tb_admin', ['email_admin' => $this->session->userdata('email')])->row_array();
            $data['tampilanhome'] = $this->db->query(" SELECT * FROM tb_tampilan JOIN tb_admin ON tb_tampilan.id_admin = tb_admin.id_admin WHERE seksi_tampilan = 'about' ")->result_array();

            $this->form_validation->set_rules('isi', 'Isi', 'required');

            if($this->form_validation->run() == FALSE)
            {
                $this->load->view('templates/admin_menu', $data);
                $this->load->view('templates/admin_header', $data);
                $this->load->view('admin/edit/edit_tampilan_about', $data);
                $this->load->view('templates/admin_footer');
            }
            else
            {
                $data = [
                    'isi_tampilan' => htmlspecialchars($this->input->post('isi', true)),
                    'id_admin' => htmlspecialchars($this->input->post('id_admin', true))
                ];

                $this->db->where('seksi_tampilan', 'about');
                $this->db->update('tb_tampilan', $data);
                $this->session->set_flashdata('pesan_edit', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Berhasil</strong> mengedit tampilan.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                    </button>
                    </div>');
                redirect('admin');
            }
        }
}