<?php

class Castell {
    private string $nombre;
    private int $personasxPiso;
    private int $numPisos;
    private bool $folre;
    private bool $manilles;

    public function __construct(string $nombre, int $personasxPiso, int $numPisos, bool $folre, bool $manilles){
        $this->nombre = $nombre;
        $this->personasxPiso = $personasxPiso;
        $this->numPisos = $numPisos;
        $this->folre = $folre;
        $this->manilles = $manilles;
    }

    public function getNumPisos():int{
        return $this->numPisos;
    }

    public function getFolre():bool{
        return $this->folre;
    }

    public function getNombre():string{
        return $this->nombre;
    }

    public function __toString():string{
        $nomCastell = $this->personasxPiso." de ".$this->numPisos;
        if($this->folre){
            $nomCastell .= " amb folre";
        }
        if($this->manilles){
            $nomCastell .= " i manilles";
        }
        return $nomCastell;
    }

public function getNombreTecnico():string{
        $nomTecnicCastell = $this->personasxPiso."de".$this->numPisos;
        if($this->folre){
            $nomTecnicCastell .= "f";
        }
        if($this->manilles){
            $nomTecnicCastell .= "m";
        }
     
        return $nomTecnicCastell;
    }
}