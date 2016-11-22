<?php 

	foreach($commande as $k => $v) {
		echo '</br><b>Id : </b>'.$v['idcommande'].'</br></br>
		<b>Adresse de la Livraison : </b>'.$v['adresselivraison'].'</br></br>
		<b>Code Postal de la Livraison : </b>'.$v['cplivraison'].'</br></br>
		<b>Ville de la Livraison : </b>'.$v['villelivraison'].'</br></br>
	
		echo '<a href="'.DIR_WEBROOT.'commandes/fupdate/'.$v['idcommande'].'"><input type="submit" value="Modifier"/></a><a href="'.DIR_WEBROOT.'commandes/delete/'.$v['idcommande'].'"><input type="submit" value="Supprimer"/></a>';
	}

	
	
?>