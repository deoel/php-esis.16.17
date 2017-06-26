<!doctype>
<?php
			function getNombreAgent($idfonction) {
				$req = $this->bdd->prepare('SELECT COUNT(*) FROM agent WHERE idfonction = :idfonction');
				$req->execute(array('idfonction' => $idfonction));
			
				$resultat = $req->fetch()[0];
				return $resultat;	
			function getAllAgent() {
				$req = $this->bdd->query('SELECT * FROM Agentgent');
				$tabAgent = array();
				while($genre = $req->fetch()) {
				$a = new Agent($Agent['id'], $Agent['nom'], $Agent['genre'], $Agent['tel'], $Agent['email'], $Agent['idfonction']);
				$tabAgent[] = $a;
				if genre=
			}
}
           
				?>
				
