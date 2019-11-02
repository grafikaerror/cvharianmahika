<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        // $this->load->library('session');
    }

    public function index()
    {
        $data['title'] = 'CV Harian Mahika - Login Admin';
        ///FORM RULES///
        $this->form_validation->set_rules('email', 'Alamat Email', 'required|trim|valid_email', [
            'required' => 'Alamat Email wajib diiisi!',
            'valid_email' => 'Format Email anda salah!'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim', [
            'required' => 'Password wajib diisi!'
        ]);
        if ($this->form_validation->run() == false) {

            $this->load->view('Templates/Auth_header', $data);
            $this->load->view('Auth/Login');
            $this->load->view('Templates/Auth_footer');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {

        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('tb_admin', ['email_admin' => $email])->row_array();

        if ($user) {
            if ($user['is_active'] == 1) {
                //aktif
                if (password_verify($password, $user['password_admin'])) {
                    $data =
                        [
                            'email' => $user['email_admin'],
                            'role_id' => $user['role_id']
                        ];
                    $this->session->set_userdata($data);
                    redirect('admin');
                } else {
                    $this->session->set_flashdata('pesan_reg', '<div class="alert alert-danger" role="alert">
                    Password salah, silahkan coba lagi atau <a href="#" class="alert-link">GANTI PASSWORD</a>
                    </div>');
                    redirect('login');
                }
            } else {
                $this->session->set_flashdata('pesan_reg', '<div class="alert alert-danger" role="alert">
                Email Belum Diaktifasi, silahkan <a href="#" class="alert-link">AKTIFASI</a> terlebih dahulu
                </div>');
                redirect('login');
            }
        } else {
            $this->session->set_flashdata('pesan_reg', '<div class="alert alert-danger" role="alert">
            Email Belum Terdaftar, silahkan <a href="auth/registration" class="alert-link">DAFTAR</a> terlebih dahulu
            </div>');
            redirect('login');
        }
    }

    public function registration()
    {
        $data['title'] = 'CV Harian Mahika - Register Admin';

        ///FORM RULES///
        $this->form_validation->set_rules(
            'name',
            'Nama Lengkap',
            'required|trim',
            [
                'required' => 'Nama Lengkap wajib diisi!'
            ]
        );
        $this->form_validation->set_rules(
            'email',
            'Alamat Email',
            'required|trim|valid_email|is_unique[tb_admin.email_admin]',
            [
                'required' => 'Alamat Email wajib diisi!',
                'valid_email' => 'Format Alamat Email anda Salah!',
                'is_unique' => 'Email sudah terdaftar. Harap login atau daftar dengan email lainnya'
            ]
        );
        $this->form_validation->set_rules(
            'password1',
            'Password',
            'required|trim|min_length[6]|matches[password2]',
            [
                'matches' => 'Password tidak cocok!',
                'min_lenght' => 'Passsword terlalu pendek, Minimal 6 karakter!',
                'required' => 'Password wajib diisi!'
            ]
        );
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');
        if ($this->form_validation->run() == false) {

            $this->load->view('Templates/Auth_header', $data);
            $this->load->view('Auth/Registration');
            $this->load->view('Templates/Auth_footer');
        } else {
            $data = [
                'nama_admin' => htmlspecialchars($this->input->post('name', true)),
                'email_admin' => htmlspecialchars($this->input->post('email', true)),
                'image_admin' => 'default.jpg',
                'password_admin' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 3,
                'is_active' => 1,
                'date_created' => time()
            ];

            $this->db->insert('tb_admin', $data);
            $this->session->set_flashdata('pesan_reg', '<div class="alert alert-success" role="alert">
            Berhasil Daftar, Silahkan Login
            </div>');
            redirect('login');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');
        $this->session->set_flashdata('pesan_reg', '<div class="alert alert-success" role="alert">
            Anda telah logout
            </div>');
        redirect('auth');
    }
}
