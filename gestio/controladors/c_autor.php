<?php

$ruta="../../";

include $ruta."gestio/classes/cls_includes.php";

switch($_GET['accio']){
    case 'a':
        header('Location:'.$ruta.'gestio/vistes/v_autor.php?idaut=0');
        break;
    case 'l':
        header('Location:'.$ruta.'gestio/llistats/ll_autor.php');
        break;
    case 'c':
        $idaut = $_GET['idaut'];
        header('Location:'.$ruta.'gestio/vistes/v_autor.php?idaut='.$idaut);
        break;
    case 'v':
        switch($_POST['h_accio']){
            case 'Acceptar':
                echo "Vol afegir un autor";
                break;
            case 'Guardar':
                echo "Vol modificar un autor";
                break;
            case 'Esborrar':
                echo "Vol esborrar un autor";
                break;
        }
        break;
    
}
