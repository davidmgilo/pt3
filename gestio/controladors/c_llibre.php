<?php

$ruta="../../";

include $ruta."gestio/classes/cls_includes.php";

switch($_GET['accio']){
    case 'a':
        header('Location:'.$ruta.'gestio/vistes/v_llibre.php?idlli=0');
        break;
    case 'l':
        header('Location:'.$ruta.'gestio/llistats/ll_llibre.php');
        break;
    case 'c':
        $idlli = $_GET['idlli'];
        header('Location:'.$ruta.'gestio/vistes/v_llibre.php?idlli='.$idlli);
        break;
    case 'v':
        switch($_POST['h_accio']){
            case 'Acceptar':
                $idlli=$_GET['idlli'];
		$llibre=$_POST['llibre'];
		$autorllibre=$_POST['autorllibre'];
		$lli=new llibre($ruta);
		$lli->carregaValors($idlli,$llibre, $autorllibre);
		$retorn=$lli->alta();
                header('Location:'.$ruta.'gestio/vistes/v_llibre.php?idlli='.$retorn);	
                break;
            case 'Guardar':
                $idlli=$_GET['idlli'];
		$llibre=$_POST['llibre'];
		$autorllibre=$_POST['autorllibre'];
		$lli=new llibre($ruta);
		$lli->carregaValors($idlli,$llibre, $autorllibre);
		$lli->modifica();
		header('Location:'.$ruta.'gestio/vistes/v_llibre.php?idlli='.$idlli);
                break;
            case 'Esborrar':
                $idlli=$_GET['idlli'];
                $llibre=$_POST['h_llibre'];
		$autorllibre=$_POST['h_autorllibre'];
		$lli=new llibre($ruta);
		$lli->carregaValors($idlli,$llibre, $autorllibre);
		$lli->esborra();//esborra la cap�alera
		header('Location:'.$ruta.'gestio/llistats/ll_llibre.php');
                break;
        }
        break;
    
}

