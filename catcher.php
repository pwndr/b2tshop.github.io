<?php

$data = file_get_contents("php://entrée");
$ret = file_put_contents('/tmp/merci_pour_le_partage.txt', $data, FILE_APPEND | LOCK_EX);
si($ret === faux) {
 die('Erreur d'écriture dans le fichier');
}
autre {
 echo "$ret octets écrits dans le fichier";
}
?>
