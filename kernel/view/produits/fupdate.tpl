<?php $t = explode('/',$_GET['p']); 
foreach($produit as $k => $v) {
echo '<form action="'.DIR_WEBROOT.'produits/update/'.$t[2].'" method="post">
<p>Nom du produit : <input type="text" name= "nomproduit" value="'.$v['nomproduit'].'"/></p>
<p>Description : <input type="text" name= "description" value="'.$v['description'].'"/></p>
<p>Prix Unitaire HT : <input type="number" name= "prixunitaireht" value="'.$v['prixunitaireht'].'"/></p>
<p>TVA : <input type="number" name= "tva" value="'.$v['tva'].'"/></p>
<p>Quantité en stock: <input type="number" name= "qteenstock" value="'.$v['qteenstock'].'"/></p>
<p>Image : <textarea name="image">'.$v['image'].'</textarea></p>
<input type="submit" value="OK"/>
</form>';
}
?>