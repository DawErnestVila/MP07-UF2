<?php
include('../model/Mp.php');
include('../model/Uf.php');
include_once('./fun/functions.php');
if (!isset($_SESSION)) session_start();

if (isset($_POST['sub_desa_uf'])) {
    $numMp = $_POST['mp_sel'];
    $nomUf = $_POST['nom_uf'];
    $numUf = $_POST['num_uf'];
    $horesUf = $_POST['hores_uf'];
    $uf = new Uf($numUf, $nomUf, $horesUf);
    foreach ($_SESSION['mps'] as &$mp) {
        if ($mp->getNumMp() == $numMp) {
            $mp->addUf($uf);
        }
    }
}

if (isset($_GET['remove_uf_mp']) && isset($_GET['remove_uf_uf'])) {
    remove_uf($_GET['remove_uf_mp'], $_GET['remove_uf_uf']);
}
header('Location: ../view/ufs.php');
die();
