<?php

class Movies
{

    public $titolo;
    public $genere;
    public $regista;


    function __construct(string $titolo, string $genere, string $regista)
    {

        $this->titolo = $titolo;
        $this->genere = $genere;
        $this->regista = $regista;
    }

    public function setTitolo(string $titolo)
    {

        $this->titolo = $titolo;
    }

    public function getTitolo()
    {
        return $this->titolo;
    }

    public function setGenere(string $genere)
    {

        $this->genere = $genere;
    }

    public function getGenere()
    {
        return $this->genere;
    }

    public function setRegista(string $regista)
    {

        $this->regista = $regista;
    }

    public function getRegista()
    {
        return $this->regista;
    }
}
