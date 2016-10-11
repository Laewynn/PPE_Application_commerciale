<h1>index </h1>
<?php foreach($categories as $k => $v) {
		echo '</br><a href =  "'.DIR_WEBROOT.'produits/index/'.$v['idcategorie'].'">'.$v['libellecategorie'].'</a> </br>';
	}
	//print_r($categ);
?>