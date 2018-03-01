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
    
//    function carregaValors($id,$autor) {
//        $this->set_aut_idautor($id);
//        $this->set_aut_autor($autor);
//    }
//    
//    function get_aut_idautor() {
//        return $this->aut_idautor;
//    }
//    
//    function get_aut_autor() {
//        return $this->aut_autor;
//    }
//    
//    function set_aut_idautor($valor) {
//        $this->aut_idautor = $valor;
//    }
//    
//    function set_aut_autor($valor) {
//        $this->aut_autor = $valor;
//    }
//    
//    function esborra() {
//        $sql="DELETE FROM AUTORS WHERE AUT_IDAUTOR=".$this->aut_idautor;
//        $this->DB_Execute($sql);
//    }
//    
//    function modifica(){
//        $sql="UPDATE FROM AUTORS SET AUT_AUTOR='".$this->aut_autor."' WHERE AUT_IDAUTOR=".$this->aut_idautor;
//        $this->DB_Execute($sql);
//        return $this->aut_idautor;
//    }
//    
//    function alta(){
//        $sql="INSERT INTO AUTORS (AUT_AUTOR) VALUES ('".$this->aut_autor."')";
//        $this->DB_Execute($sql);
//        
//        $sql_id="SELECT max(AUT_IDAUTOR) AS AUT_IDAUTOR FROM AUTORS";
//        $rs_id=$this->DB_Select($sql_id);
//        $rs_id=$this->DB_Fetch($rs_id);
//        $this->aut_idautor=$rs_id['AUT_IDAUTOR'];
//        return $this->aut_idautor;
//    }
}

