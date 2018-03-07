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
                $idaut=$_GET['idaut'];
		$autor=$_POST['autor'];
		$aut=new autor($ruta);
		$aut->carregaValors($idaut,$autor);
		$retorn=$aut->alta();
                header('Location:'.$ruta.'gestio/vistes/v_autor.php?idaut='.$retorn);	
                break;
            case 'Guardar':
                $idaut=$_GET['idaut'];
		$autor=$_POST['autor'];
		$aut=new autor($ruta);
		$aut->carregaValors($idaut,$autor);
		$aut->modifica();
		header('Location:'.$ruta.'gestio/vistes/v_autor.php?idaut='.$idaut);
                break;
            case 'Esborrar':
                $idaut=$_GET['idaut'];
		$autor=$_POST['h_autor'];
		$aut=new autor($ruta);
		$aut->carregaValors($idaut,$autor);
		$aut->esborra();//esborra la cap�alera
		header('Location:'.$ruta.'gestio/llistats/ll_autor.php');	
                break;
        }
        break;
    
}
