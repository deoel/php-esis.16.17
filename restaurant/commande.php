<?php session_start() ?>
<!DOCTYPE html>
<html>
		<head>
			<meta charset="utf-8" />
			<link rel="stylesheet" type="text/css" href="css/style.css">
 			<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
			<title>Restaurant</title>
		</head>
		<body>
			<div class="container" id="facture" style="width:440px;">
				<div class="row">
					<div class="col-md-5" style="text-align:left;">
						Ets. SEVEN SEPT <br/>             
						N°036, Av. KASAI,<br/> 
						C/Lubumbashi<br/>
						R.C.C.M :23-01-9119
					</div>
					<div class=" col-md-offset-1 col-md-6">Lubumbashi 
						<?php echo date(", d/M/Y"); ?>
					</div>

				</div>
							
				<div class="row">
					<div class="col-md-push-3 col-md-6">

				<?php 
					//Déclaration de la classe commande contenant une variable membre $nomClient
					class Commande{

						var $nomClient;
						var $listePlats;
						var $num;

						function __constructor(){
							$this->nomClient = 'client inconnu';
							$this->listePlats[] = 'Entrée';
							$this->listePlats[] = 'Plat consistant';
							$this->listePlats[] = 'Dessert';
							$this->listePlats[] = 'Boissons';
							$num = 1;
						}

						function getNomClient(){
							return '<strong>'.$this->nomClient.'</strong><br/>';
						}

						function afficherCommande(){
							//$this->afficherNomClient();
							$num = 1;
							$plat;$prix;$tot = 0;$totaux = 0;
							foreach ($this->listePlats as $key => $value) {
								if($value != 0){
									switch ($key) {
										case 0:
										$plat = 'Entrée';
										$prix = 5000;
										break;
										case 1:
										$plat = 'Plat consistant';
										$prix = 10000;
										break;
										case 2:
										$plat = 'Dessert';
										$prix = 2500;
										break;
										case 3:
										$plat = 'Boissons';
										$prix = 1500;
										break;
									}
									$tot = $prix * $value;
									$totaux += $tot;
									echo '
										<tr>
											<td class="nbre">'.($num++).'</td><td class="nbre">'.$plat.'</td>
											<td class="nbre">'.$value.'</td><td class="nbre">'.$prix.'</td>
											<td class="nbre">'.$tot.'</td>
										</tr>
									';
								}
								
							}
							$tva = $totaux * 0.16;
							echo '
								<tr>
									<td style="height:10px;border:" colspan="5"></td>
								</tr>
								<tr>
									<td colspan="4" >Total</td><td class="nbre">'.$totaux.'</td>
								</tr>
								<tr>
									<td colspan="4">TVA</td><td class="nbre">'.($totaux * 0.16).'</td>
								</tr>
								<tr>
									<td colspan="4">Net à payer </td><td class="nbre">'.($totaux+$tva).'</td>
								</tr>
							</div></div></table>
							<div class="row">
								<div class="col-md-12">Consommez d\'abord et payez après ;)</div>
							</div>';
						}
					}//fin de la classe Commande

					/* Définition de la variable $client  qui contiendra les données définies 
					dans la classe Commande relatives au client */
					$client = new Commande(); // la variable $client est de type commande
					//Soit à donner à la variable membre 
					$client->nomClient = "VirgoBBK";
					$client->listePlats[1]=1;
					$client->listePlats[2]=3;
					$client->listePlats[3]=4;
					$client->listePlats[0]=2;

					if (!isset($_SESSION['nombre'])) {
						$_SESSION['nombre'] = 1;
					}else{
						$_SESSION['nombre']++;
					}

					echo 'Nom du Client: '.$client->getNomClient().'
					Facture N° '.($_SESSION['nombre']+1).'</div></div>
					<div class="row">
						<div class="col-md-12" style="align:center;">
					<table class="col-md-12" style="align:center;" >
						<th class="titre">N°</th>
						<th class="titre">Désignation</th>
						<th class="titre">Qte</th>
						<th class="titre">PU (CDF)</th>
						<th class="titre">PT (CDF)</th>';

					$client->afficherCommande();
					//$_SESSION['nombre'] = 0; Pour réinitialiser le numéro de la facture
				?>

			</div>
	</body>
</html>