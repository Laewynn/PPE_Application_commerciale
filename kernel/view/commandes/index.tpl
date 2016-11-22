<h1>index </h1>
<?php foreach($commande as $k => $v) {
		echo '</br><a href =  "'.DIR_WEBROOT.'commandes/read/'.$v['idcommande'].'">'.$v['idcommande'].'</a> </br>';
	}

	echo '<a href= '.DIR_WEBROOT.'commandes/fcreate/> Créer une commande </a>'
	//print_r($categ);
?>