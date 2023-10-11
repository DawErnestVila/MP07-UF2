<?php
include_once('../model/Mp.php');
include_once('../model/Uf.php');

if (!isset($_SESSION)) session_start();

include_once('./fun/functions.php');


if (isset($_POST['sub_desa_mp'])) {
    $nomMp = $_POST['nom_mp'];
    $numMp = $_POST['num_mp'];
    $mp = new Mp($numMp, $nomMp);
    $_SESSION['mps'][] = $mp;
}
if (isset($_GET['remove_mp'])) {
    $numMp = $_GET['remove_mp'];
    remove_mp($numMp);
}
header('Location: ../view/mps.php');
die();
