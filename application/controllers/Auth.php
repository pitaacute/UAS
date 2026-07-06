<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Auth_model');
        $this->load->library('form_validation');
    }

    public function index() {
        if ($this->session->userdata('logged_in')) {
            $role = $this->session->userdata('role');
            redirect($role === 'admin' ? 'admin/dashboard' : 'penghuni/dashboard');
        }
        $this->load->view('templates/login');
    }

    public function proses_login() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $role     = $this->input->post('role');

        if ($role === 'admin') {
            $user = $this->Auth_model->login_admin($username, $password);
            if ($user) {
                $this->session->set_userdata([
                    'logged_in'  => TRUE,
                    'role'       => 'admin',
                    'id'         => $user->id_admin,
                    'nama'       => $user->nama,
                    'username'   => $user->username,
                ]);
                redirect('admin/dashboard');
            }
        } else {
            $user = $this->Auth_model->login_penghuni($username, $password);
            if ($user) {
                $this->session->set_userdata([
                    'logged_in'   => TRUE,
                    'role'        => 'penghuni',
                    'id'          => $user->id_penghuni,
                    'nama'        => $user->nama,
                    'username'    => $user->username,
                    'id_kamar'    => $user->id_kamar,
                ]);
                redirect('penghuni/dashboard');
            }
        }

        $this->session->set_flashdata('error', 'Username atau password salah!');
        redirect('login');
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('login');
    }
}
