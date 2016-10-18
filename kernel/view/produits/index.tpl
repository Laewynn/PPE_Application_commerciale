<h1>index </h1>
<?php foreach($produits as $k => $v) {
		echo '</br><a href =  "'.DIR_WEBROOT.'produits/index/'.$v['idcproduit'].'">'.$v['nomproduit'].'</a> </br>';
	}
	//print_r($categ);
?>