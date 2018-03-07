<?php

class llibre extends connexio {
    
    var $lli_idllibre;
    var $lli_llibre;
    var $lli_autorllibre;
    
    function llibre($ruta="../../") {
        parent::connexio($ruta);
    }    
    
    function inicialitza($id) {
        $this->lli_idllibre = $id;
        if( $this->lli_idllibre == 0){
            $this->lli_llibre = "";
            $this->lli_autorllibre = "";
        } else{
            $sql = "SELECT LLI_IDLLIBRE, LLI_LLIBRE, LLI_AUTORLLIBRE FROM LLIBRES WHERE (LLI_IDLLIBRE=".$id.")";
            $rs = $this->DB_Select($sql);
            $rs = $this->DB_Fetch($rs);
            $this->lli_llibre = $rs['LLI_LLIBRE'];
            $this->lli_autorllibre = $rs['LLI_AUTORLLIBRE'];
        }
    }
    
    function carregaValors($id,$llibre,$autorllibre) {
        $this->set_lli_idllibre($id);
        $this->set_lli_llibre($llibre);
        $this->set_lli_autorllibre($autorllibre);
    }
    
    function get_lli_idllibre() {
        return $this->lli_idllibre;
    }
    
    function get_lli_llibre() {
        return $this->lli_llibre;
    }
    
    function get_lli_autorllibre() {
        return $this->lli_autorllibre;
    }
    
    function set_lli_idllibre($valor) {
        $this->lli_idllibre = $valor;
    }
    
    function set_lli_llibre($valor) {
        $this->lli_llibre = $valor;
    }
    
    function set_lli_autorllibre($valor) {
        $this->lli_autorllibre = $valor;
    }
    
    function esborra() {
        $sql="DELETE FROM LLIBRES WHERE LLI_IDLLIBRE=".$this->lli_idllibre;
        $this->DB_Execute($sql);
    }
    
    function modifica(){
        $sql="UPDATE FROM LLIBRES SET LLI_LLIBRE='".$this->lli_llibre."', LLI_AUTORLLIBRE='".$this->lli_autorllibre."' WHERE LLI_IDLLIBRE=".$this->lli_idllibre;
        $this->DB_Execute($sql);
        return $this->aut_idautor;
    }
    
    function alta(){
        $sql="INSERT INTO LLIBRES (LLI_LLIBRE,LLI_AUTORLLIBRE) VALUES ('".$this->lli_llibre."','".$this->lli_autorllibre."')";
        $this->DB_Execute($sql);
        
        $sql_id="SELECT max(LLI_IDLLIBRE) AS LLI_IDLLIBRE FROM LLIBRES";
        $rs_id=$this->DB_Select($sql_id);
        $rs_id=$this->DB_Fetch($rs_id);
        $this->lli_idllibre=$rs_id['LLI_IDLLIBRE'];
        return $this->lli_idllibre;
    }
}

