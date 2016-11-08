<?php $t = explode('/',$_GET['p']); 
foreach($utilisateurs as $k => $v) {
echo '<form action="'.DIR_WEBROOT.'produits/update/'.$t[2].'" method="post">
<p>Nom du produit : <input type="text" name= "nomproduit" value="'.$v['nomproduit'].'"/></p>
<p>Description : <input type="text" name= "description" value="'.$v['description'].'"/></p>
<p>Prix Unitaire HT : <input type="text" name= "prixunitaireht" value="'.$v['prixunitaireht'].'"/></p>
<p>TVA : <input type="text" name= "tva" value="'.$v['tva'].'"/></p>
<p>Quantité en stock: <input type="text" name= "qteenstock" value="'.$v['qteenstock'].'"/></p>
<p>Image : <input type="text" name='image' value="'.$v['image'].'"/></p>
<!-- <p>Catégorie : <input type="text" name= "categorie" value="'.$v['idcategorie'].'"/></p> -->
<input type="submit" value="OK"/>
</form>';
}
?>