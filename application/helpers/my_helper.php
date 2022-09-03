<?php 

function is_login(){

    $ci = get_instance();

    if (!$ci->session->userdata('username')){
        pesan('Anda belum login', 'danger');
        redirect('login');
    }
}

function is_user(){
    $ci = get_instance();
    if ($ci->session->userdata('level') == 'admin'){
        redirect('admin');
    }
}

function is_admin(){
    $ci = get_instance();
    if ($ci->session->userdata('level') == 'user'){
        redirect('user');
    }
}

function pesan($pesan, $tipe)
{
    $ci = get_instance();
    $ci->session->set_tempdata('pesan', '<div class="alert alert-' . $tipe . ' alert-dismissible fade show" role="alert">
        ' . $pesan . '
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>', 2);
}