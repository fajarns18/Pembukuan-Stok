<?php

class session extends CI_Controller {

public function __construct()
{
    parent::__construct();
    $this->load->library('session');
}

public function some_action()
{
    // Setelah melakukan tindakan tertentu, set flashdata
    $this->session->set_flashdata('berhasil', 'Tindakan berhasil!');
    // Redirect ke halaman yang diinginkan
    redirect('session/some_page');
}

public function some_page()
{
    // Muat view
    $this->load->view('profil_admin');
}
}
?>
