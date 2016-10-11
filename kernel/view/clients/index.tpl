<h1>index </h1>
<?php foreach($clients as $k => $v) {
		echo '</br><a href =  "'.DIR_WEBROOT.'clients/read/'.$v['idclient'].'">'.$v['nomclient'].' '.$v['prenomclient'].'</a> </br>';
	}
	//print_r($categ);
?>