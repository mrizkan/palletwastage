<?php

$notification = $this->session->flashdata('notification');
if (isset($notification)) {
    echo $notification;
    $this->session->unset_userdata('notification');
}
?>
