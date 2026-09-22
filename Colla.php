<?php

require_once 'Castell.php';

class Colla{
    private string $nombre;
    private int $numActivasColla;
    private array $castellsCarregats =[];

    public function __construct(string $nombre, int $numActivasColla){
        $this->nombre = $nombre;
        $this->numActivasColla = $numActivasColla;
    }

    public function añadirCastell(Castell $castell) : void{
        $this->castellsCarregats[] = $castell;
    }

    public function filtrarPisos(int $numPisosConsultat): array{
        if (empty($this->castellsCarregats))
            return [];

        $castellsAlts=[];
        foreach($this->castellsCarregats as $castell){
            if ($castell->getNumPisos() >= $numPisosConsultat){
                $castellsAlts[] = $castell;
            }
        }
        return $castellsAlts;
    }

    public function tenenFolre():array{
        if (empty($this->castellsCarregats))
            return [];
        $castellsAmbFolre=[];
        foreach($this->castellsCarregats as $castell){
            if ($castell->getFolre()){
                $castellsAmbFolre[] = $castell;
            }
        }
        return $castellsAmbFolre;
    }

    public function getNombre():string{
        return $this->nombre;
    }

    public function getCastellsCarregats():array{
        return $this->castellsCarregats;
    }
}