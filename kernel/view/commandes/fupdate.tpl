<?php $t = explode('/',$_GET['p']); 
foreach($commande as $k => $v) {
echo '<form action="'.DIR_WEBROOT.'commandes/update/'.$t[2].'" method="post">
<p>Adresse de la Livraison : <input type="text" name= "adresselivraison" value="'.$v['adresselivraison'].'"/></p>
<p>Code Postal de la Livraison : <input type="text" name= "cplivraison" value="'.$v['cplivraison'].'"/></p>
<p>Ville de la Livraison : <input type="number" name= "villelivraison" value="'.$v['villelivraison'].'"/></p>
<input type="submit" value="OK"/>
</form>';
}
?>