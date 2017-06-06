<?php
/*Déclaration de la Classe commande
 contenant une variable membre nomclient1
*/
    class Commande{
        var $nomClient;
        var $listePlats;
        var $prix;
        function __construct(){
            $this->nomClient="Sans Nom";
            $this->listePlats["Entrée"]=array(0,5000);//"Entrée"
            $this->listePlats["Plat"]=array(0,10000);//"Plat consistant"
            $this->listePlats["Dessert"]=array(0,2500);//"Dessert"
            $this->listePlats["Boissons"]=array(0,1500);//"Boissons"
        }
        function AfficherNomClient(){
            echo $this->nomClient;
        }
        function AfficherCommande(){
            echo "<pre>",$this->nomClient, "<br>";
            echo "<br>ENTREE:",$this->listePlats["Entrée"][0]," @ CDF ",$this->listePlats["Entrée"][1], "/unit => CDF " ,($this->listePlats["Entrée"][0] * $this->listePlats["Entrée"][1]);
            echo "<br>PLAT:",$this->listePlats["Plat"][0]," @ CDF ",$this->listePlats["Plat"][1], "/unit => CDF " ,($this->listePlats["Plat"][0] * $this->listePlats["Plat"][1]);
            echo "<br>DESSERT:",$this->listePlats["Dessert"][0]," @ CDF ",$this->listePlats["Dessert"][1], "/unit => CDF " ,($this->listePlats["Dessert"][0] * $this->listePlats["Dessert"][1]);
            echo "<br>BOISSON:",$this->listePlats["Boissons"][0]," @ CDF ",$this->listePlats["Boissons"][1], "/unit => CDF " ,($this->listePlats["Boissons"][0] * $this->listePlats["Boissons"][1]);
            $total=(($this->listePlats["Boissons"][0] * $this->listePlats["Boissons"][1])+($this->listePlats["Entrée"][0] * $this->listePlats["Entrée"][1])+($this->listePlats["Plat"][0] * $this->listePlats["Plat"][1])+($this->listePlats["Dessert"][0] * $this->listePlats["Dessert"][1]));
            echo "<br><strong>TOTAL A PAYER: CDF ", $total, "<br>TVA: CDF ", $total*0.16, "<br>TOTAL NET: CDF ", $total+$total*0.16;
            echo "</strong></br>";
        }
        function AjouterEntree($nb){
            $this->listePlats["Entrée"][0]+=$nb;
        }
        function AjouterPlat($nb){
            $this->listePlats["Plat"][0]+=$nb;
        }
        function AjouterDessert($nb){
            $this->listePlats["Dessert"][0]+=$nb;
        }
        function AjouterBoisson($nb){
            $this->listePlats["Boissons"][0]+=$nb;
        }
    }
    $client1=new Commande();
    $client1->nomClient="Maki";
    $client1->AjouterPlat(1);
    $client1->AjouterBoisson(2);
    $client1->AfficherCommande();
    $client2=new Commande();
    $client2->nomClient="Malengela";
    $client2->AjouterEntree(2);
    $client2->AjouterPlat(3);
    $client2->AjouterDessert(2);
    $client2->AjouterBoisson(6);
    $client2->AfficherCommande();
?>