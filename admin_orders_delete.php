<?php
	require_once 'control.php';
    $get_data = new data();
    $del=$get_data->del_order($_GET['del']);
    if($del) header('location:admin_orders.php');
?>