<?php

function remove_mp($numMp)
{
    foreach ($_SESSION['mps'] as $key => $mp) {
        if ($mp->getNumMp() == $numMp) {
            echo '<pre>';
            var_dump($_SESSION['mps'][$key]);
            echo '</pre>';
            die();
            unset($_SESSION['mps'][$key]);
            return true;
        }
    }
    return false;
}

function remove_uf($numMp, $numUf)
{
    foreach ($_SESSION['mps'] as $keyMP => $mp) {
        if ($mp->getNumMp() == $numMp) {
            foreach ($mp->getUfs() as $keyUF => $uf) {
                if ($uf->getNumUf() == $numUf) {
                    echo '<pre>';
                    var_dump($_SESSION['mps'][$keyMP]->getUfs()[$keyUF]);
                    echo '</pre>';
                    die();
                    unset($_SESSION['mps'][$keyMP]->getUfs()[$keyUF]);
                    return true;
                }
            }
        }
    }
    return false;
}
