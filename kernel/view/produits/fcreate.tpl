<form action=<?php echo DIR_WEBROOT.'produits/create';?> method="post">
	<p>Nom du produit : <input type="text" name= 'nomproduit'/></p>
	<p>Description : <input type="text" name= 'descriptionproduit'/></p>
	<p>Prix Unitaire HT : <input type="number" name= 'prixunitaireht'/></p>
	<p>TVA : <input type="number" name= 'tva'/></p>
	<p>Quantité en stock : <input type="number" name= 'qteenstock'/></p>
	<!-- <p>ID Catégorie: <input type="text" name= 'idcategorie'/></p> -->
	<p>Image : <textarea name="image"></textarea></p>
	<input type="submit" value="OK"/>
</form>