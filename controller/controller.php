<?php  //controller
$act = isset($_GET['act']) == true ? $_GET['act'] : "";
$data = [];

if ($act == "sp") {
    $data = $listSP;
}

if ($act == "cat") {
    $data = $listCAT;
}
