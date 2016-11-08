<?php 

	foreach($produits as $k => $v) {
		echo '</br><b>Id : </b>'.$v['idproduit'].'</br></br>
		<b>Nom du produit : </b>'.$v['nomproduit'].'</br></br>
		<b>Description : </b>'.$v['description'].'</br></br>
		<b>Prix Unitaire HT : </b>'.$v['prixunitaireht'].'</br></br>
		<b>TVA  : </b>'.$v['tva'].'</br></br>
		<b>Quantité en stock : </b>'.$v['qteenstock'].'</br></br>
		<!-- <b>Catégorie : </b>'.$v['idcategorie'].'</br></br>'; -->
		<b>Image : </b>'.$v['image'].'</br></br>
	
		echo '<a href="'.DIR_WEBROOT.'utilisateur/fupdate/'.$v['id'].'"><input type="submit" value="Modifier"/></a><a href="'.DIR_WEBROOT.'utilisateur/delete/'.$v['id'].'"><input type="submit" value="Supprimer"/></a>';
	}

	
	
?>