<?php 
$ruta="../../";
include $ruta."gestio/classes/cls_includes.php";

$gen = new general();


?>
<html>
<head>
<meta http-equiv="Content-Type" tptent="text/html; charset=iso-8859-1">

<script language="javascript">
	function consultar_document(url){
		document.location=url;
	}
</script>

<link href="../vistes/estils.css" rel="stylesheet" type="text/css">
</head>

<body>
<table width="100%" >
  <tr>
    <td colspan="3" class="sub_titol">Llistat de Llibres</td>
  </tr>
  <tr>
    <td colspan="3" align="right">
  </tr>
  <tr>
    <td width="2%">&nbsp;</td>
    <td colspan="1" class="etiqueta">Llibre</td>
    <td colspan="2" class="etiqueta">Autor</td>
  </tr>

  <?php
    $items = $gen->llistat_llibres();
    foreach ($items as $it){
        $lli = unserialize($it);
  ?>
  <tr>
    <td></td>
    <td class="<?=$class?>"><?= $lli->get_lli_llibre()?></td>
    <td class="<?=$class?>"><?= $lli->get_lli_autorllibre()?></td>
    <td width="8%" colspan="-3" align="right"  class="scr_subTitol">
      <input name="accio_c" type="button" id="accio_c" value="[consultar]" maxlength="255" onClick="javascript:consultar_document('')" class="input">    </td>
  </tr>
  
  <?php
    }
  ?>
 
  </table>
</body>
</html>