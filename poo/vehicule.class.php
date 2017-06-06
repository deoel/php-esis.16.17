<?php
    class Vehicule{
        private $marque;
        private $vitesse;
        private $arret;
        public function __construct($marque){
            $this->marque=$marque;
            $this->vitesse=0;
        }
        public function Accelerer($vit){
            $this->vitesse+=$vit;
            $this->arret=false;
        }
        public function Decelerer($vit){
            if(!$vit<$this->vitesse)
                $this->vitesse-=$vit;
            if($this->vitesse=0)
                $this->arret=true;
        }
        public function AfficherVitesse(){
            return $this->vitesse;
        }
        public function setMarque($marque){
            $this->marque=$marque;
        }
        public function getMarque(){
            return $this->marque;
        }
        public function getArret(){
            return $this->arret;
        }
    }
?>