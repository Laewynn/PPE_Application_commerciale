<?php 

	foreach($clients as $k => $v) {
		echo '</br><b>Id : </b>'.$v['idclient'].'</br></br>
		<b>Nom : </b>'.$v['nomclient'].'</br></br>
		<b>Prenom : </b>'.$v['prenomclient'].'</br></br>
		<b>Adresse : </b>'.$v['adresseclient'].'</br></br>
		<b>Cp : </b>'.$v['cpclient'].'</br></br>
		<b>Ville : </b>'.$v['villeclient'].'</br></br>
		<b>Telephone : </b>'.$v['telephoneclient'].'</br></br>
		<b>Email : </b>'.$v['mailclient'].'</br></br>';
		echo '<a href="'.DIR_WEBROOT.'clients/fupdate/'.$v['idclient'].'"><input type="submit" value="Modifier"/></a><a href="'.DIR_WEBROOT.'clients/delete/'.$v['idclient'].'"><input type="submit" value="Supprimer"/></a>';
	}

	
	
?>