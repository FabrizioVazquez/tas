<?php

class Producto_Usuario{

    public $id=-1;
    public $nombre="NULL";
    public $apellido="NULL";
    public $email="NULL";
    public $empresa="NULL";
    public $from="NULL";

    public function __construct($mysqli, $id_usuario) {

        $resultq=$mysqli->query("select * 
            from ".BASEDEDATOS.".usuarios
            where id={$id_usuario}");

        /* echo "<br> 16 sql: ".  "select * 
        from ".BASEDEDATOS."usuarios
        where id={$id_usuario}";  

        echo "<br> 20 resultq: ".pp($resultq);
        print_r($resultq);

        echo "<br> 20 resultq->num_rows: ".$resultq->num_rows; */

        if ( $resultq->num_rows > 0 ){

            $arr=$resultq->fetch_array(MYSQLI_ASSOC);
            $this->id= $id_usuario;
            $this->nombre = $arr["nombre"];
            $this->apellido =  $arr["apellido"];
            $this->email =  $arr["email"];
            $this->empresa =  traeUnDato($mysqli,"select id_empresa as dato
                from ".BASEDEDATOS.".usuario_empresa
                where id_usuario={$id_usuario}","-1");

           /*  echo "<br> 38 empresas: ".$this->empresa;

            echo "<br> 40 from_mail: ".traeParametro($mysqli,"from_mail",$this->empresa,"NULL");

            echo "<br> 40 mail_desde: ".traeParametro($mysqli,"mail_desde",$this->empresa,"NULL"); */


            $this->from ="From: ".traeParametro($mysqli,"from_mail",$this->empresa,"NULL");

            /* echo "<br> 47 from: ".$this->from;
            die(); */

            $this->from.=" <";
           
            $this->from.=traeParametro($mysqli,"mail_desde",$this->empresa,"NULL");
            
            $this->from.="> "; 
          

            $_SESSION["user"]=$id_usuario;
        }

        
    }
    
}