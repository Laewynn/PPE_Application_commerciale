<form action=<?php echo DIR_WEBROOT.'commandes/create';?> method="post">
	<p>Adresse de la Livraison : <input type="text" name= 'adresselivraison' /></p>
	<p>Code Postal de la Livraison : <input type="text" name= 'cplivraison' format="NNNNN" maxlength="5"/></p>
	<p>Ville de la Livraison : <input type="text" name= 'villelivraison' style='text-transform:uppercase' /></p>
	<input type="submit" value="OK"/>
</form>