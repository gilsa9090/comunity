<?php 

function check()
{

    $ci = get_instance();

    if (!$ci->session->userdata('username')) {
        redirect('auth/login');
    }
}

?>