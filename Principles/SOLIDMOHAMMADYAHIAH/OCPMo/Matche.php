<?php

namespace SOLID\SOLIDMOHAMMADYAHIAH\OCPMo;

class Matche
{

    private  $players =[];

    public function getPlayers(): array
    {
        return $this->players;
    }

    public function setPlayers(Player $players): void
    {
        $this->players[]= $players;
    }


    public function start()
    {
        foreach ($this->getPlayers() as $player){
          echo  $player->getType()->play();
        }

    }





}