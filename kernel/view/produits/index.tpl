<h1>index </h1>
<?php foreach($produit as $k => $v) {
		echo '</br><a href =  "'.DIR_WEBROOT.'produits/read/'.$v['idproduit'].'">'.$v['nomproduit'].'</a> </br>';
	}

	echo '<a href= '.DIR_WEBROOT.'produits/fcreate/> Créer un produit </a>'
	//print_r($categ);
?>