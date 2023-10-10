<?php

function remove_mp($numMp)
{
    foreach ($_SESSION['mps'] as $key => $mp) {
        if ($mp->getNumMp() == $numMp) {
            unset($_SESSION['mps'][$key]);
            return true;
        }
    }
    return false;
}

function remove_uf($numMp, $numUf)
{
    foreach ($_SESSION['mps'] as $mp) {
        if ($mp->getNumMp() == $numMp) {
            foreach ($mp as $key => $uf) {
                if ($uf->getNumUf() == $numUf) {
                    unset($mp->getUfs()[$key]);
                    return true;
                }
            }
        }
    }
    return false;
}
