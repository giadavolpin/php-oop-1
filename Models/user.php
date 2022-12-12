<?php
class Movie
{
    public $titolo; //variabili
    public $genere;
    public $anno;
    public $prezzo;

    /* funzione costruttore */
    function __construct(string $_titolo, string $_genere, int $_anno, int $_prezzo)
    {
        $this->titolo = $_titolo;
        $this->genere = $_genere;
        $this->anno = $_anno;
        $this->prezzo = $_prezzo;
    }

    /* metodo */
    public function getSconto()
    {
        if ($this->genere == 'romantico') {
            $this->prezzo -= $this->prezzo * 0.2;
        } else {
            $this->prezzo = 3;
        }
    }
//NON CREDO FUNZIONI IL METODO

}


?>