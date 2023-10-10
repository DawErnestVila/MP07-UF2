<?php

class Uf
{
    private $numUf;
    private $nomUf;
    private $horesUf;


    function __construct($num_uf, $nom_uf, $hores_uf)
    {
        $this->numUf = $num_uf;
        $this->nomUf = $nom_uf;
        $this->horesUf = $hores_uf;
    }

    /**
     * Get the value of numUf
     */
    public function getNumUf()
    {
        return $this->numUf;
    }

    /**
     * Set the value of numUf
     *
     * @return  self
     */
    public function setNumUf($numUf)
    {
        $this->numUf = $numUf;

        return $this;
    }

    /**
     * Get the value of nomUf
     */
    public function getNomUf()
    {
        return $this->nomUf;
    }

    /**
     * Set the value of nomUf
     *
     * @return  self
     */
    public function setNomUf($nomUf)
    {
        $this->nomUf = $nomUf;

        return $this;
    }

    /**
     * Get the value of horesUf
     */
    public function getHoresUf()
    {
        return $this->horesUf;
    }

    /**
     * Set the value of horesUf
     *
     * @return  self
     */
    public function setHoresUf($horesUf)
    {
        $this->horesUf = $horesUf;

        return $this;
    }
}
