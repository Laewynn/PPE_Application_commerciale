<form action=<?php echo DIR_WEBROOT.'produits/create';?> method="post">
	<p>Nom du produit : <input type="text" name= 'nomproduit'/></p>
	<p>Description : <input type="text" name= 'description'/></p>
	<p>Prix Unitaire HT : <input type="text" name= 'prixunitaireht'/></p>
	<p>TVA : <input type="text" name= 'tva'/></p>
	<p>Quantité en stock : <input type="text" name= 'qteenstock'/></p>
	<!-- <p>ID Catégorie: <input type="text" name= 'idcategorie'/></p> -->
	<p>Image : <input type="text" name='image'/></p>
	<input type="submit" value="OK"/>
</form>