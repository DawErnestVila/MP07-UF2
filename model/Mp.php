<?php
class Mp
{
    private $nomMp;
    private $numMp;
    private $ufs;

    function __construct($num_mp, $nom_mp)
    {
        $this->nomMp = $nom_mp;
        $this->numMp = $num_mp;
        $this->ufs = array();
    }

    /*
    * Get the value of nomMp
    */
    public function getNomMp()
    {
        return $this->nomMp;
    }

    public function setNomMp($nomMp)
    {
        $this->nomMp = $nomMp;

        return $this;
    }

    public function getNumMp()
    {
        return $this->numMp;
    }

    public function setNumMp($numMp)
    {
        $this->numMp = $numMp;

        return $this;
    }

    public function getUfs()
    {
        return $this->ufs;
    }

    public function addUf($uf)
    {
        $this->ufs[] = $uf;
    }

    public function __toString()
    {
        return "MP " . $this->numMp . " - " . $this->nomMp;
    }
}
