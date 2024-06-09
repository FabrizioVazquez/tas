<?php


include "clases.php";


function usuario_valido($mysqli, $usuario, $clave)
{

    $usuario=intval(traeUnDato(
        $mysqli,
        "select id as dato
        from " . BASEDEDATOS . ".usuarios
        where usuario='" . antiSQLIny($usuario) . "'
        and clave='" . antiSQLIny($clave) . "' ",
        "-1"
    ));
    
    return $usuario;
    
}

    
function agrega_log($mysqli,$modulo,$antes,$despues){

    $sql="	INSERT INTO `logs`
	(fecha, modulo, antes, despues)
	VALUES (NOW(), '{$modulo}', '{$antes}', '{$despues}')";

    //$sql=iconv('ISO-8859-1', 'UTF-8', $sql);
    $sql=iconv('UTF-8', 'ISO-8859-1', $sql);
    //$sql=utf8_encode($sql);

    haceUpdate($mysqli,$sql);

}

function mailValido($correo) {
    // Expresión regular para validar el correo electrónico
    $expresion = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';
    
    // Verificar si el correo electrónico cumple con la expresión regular
    if (preg_match($expresion, $correo)) {
        return true;
    } else {
        return false;
    }
}

function enviaNumeroPorMail($mysqli,$usuario,$hash){
    /* echo "<br> 211 voy a enviar un mail para el usuario: ".$usuario->id; */

    $sql="select numero_secreto as dato
    from ".BASEDEDATOS.".numero_secreto 
    where hash='".$hash."'";
    $obtieneElNumeroSecreto=traeUnDato($mysqli,$sql,"-1");

    /* echo "<br> 51 sql: ".$sql;
    echo "<br> 51 obtieneElNumeroSecreto: ".$obtieneElNumeroSecreto; */


    agrega_log($mysqli,"enviaNumeroPorMail","numero_secreto: {$obtieneElNumeroSecreto}","obtencion de numero secreto ".$sql);

    if($obtieneElNumeroSecreto>999){

        /* echo "<br> 59 email: ".$usuario->email; */
       
        if(mailValido($usuario->email)){
            $sql=" select numero_secreto as dato
            from numero_secreto
            where hash='{$hash}'";
            $numero_secreto=intval(traeUnDato($mysqli,$sql,"-1"));
            if($numero_secreto>0){
                /* echo "<br> 74 usaurio from: ".$usuario->from;
                die(); */
                $estadoEnvio=envia_mail($mysqli,$usuario->email, cambiaCodificacion("Confirmacion logueo","UTF8"), cambiaCodificacion("El número de confirmación de logueo es: ".$numero_secreto,"UTF8"), $usuario->from);
                if ($estadoEnvio) {
                    agrega_log($mysqli,"enviaNumeroPorMail","","El correo electrónico se ha enviado correctamente ".$usuario->email." - estadoEnvio: ".$estadoEnvio);
                    /* echo "<br> 80 El correo electrónico se ha enviado correctamente ".$usuario->email." - estadoEnvio: ".$estadoEnvio; */
                } else {
                    agrega_log($mysqli,"enviaNumeroPorMail","","El correo electrónico NO se ha enviado correctamente ".$usuario->email." - estadoEnvio: ".$estadoEnvio);
                    /* echo '<br> 79 Error al enviar el correo electrónico. '.$usuario->email." - estadoEnvio: ".$estadoEnvio; */
                }
            }else{
                agrega_log($mysqli,"enviaNumeroPorMail","","numero_secreto_invalido: ".$usuario->email);
            }
            

        }else{
            agrega_log($mysqli,"enviaNumeroPorMail","","mail invalido: ".$usuario->email);
        }
    }


}

function cambiaCodificacion($txt,$codificacion){

    if($codificacion=="UTF8"){
        return iconv('UTF-8', 'ISO-8859-1', $txt);
    }

    return $txt;

}

function traeParametro($mysqli,$variable,$empresa,$default){

    $sql="select valor as dato
    from ".BASEDEDATOS.".parametros
    where empresa={$empresa}
    and variable='{$variable}'
    and valido=1
    order by id desc limit 1";

    /* echo "<br> 104 sql: ".$sql; */

    return traeUnDato($mysqli,$sql,$default);

}

function xxxenvia_mail($mysqli,$email, $asunto, $cuerpo, $desdeMail){

    require_once 'PHPMailer/PHPMailer.php';
    require_once 'PHPMailer/SMTP.php';

    $mail = new PHPMailer\PHPMailer\PHPMailer();

    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->SMTPSecure = 'ssl';
    $mail->Username = "fabrizio.vazquez@wowcx.com";
    $mail->Password = "qkiOl3!ikmNu8"; 
    $mail->IsHTML(true);
    $mail->SingleTo = true;
    $mail->Sender=$desdeMail;

    $mail->setFrom($desdeMail,'ts');

    $mail->FromName = "ts";

    $mail->addAddress($email," ver ");
    //$mail->Subject = iconv("UTF-8", "iso-8859-1//TRANSLIT","Participá del ESB y ganate una Tablet!");
    $mail->Subject = iconv("UTF-8", "iso-8859-1//TRANSLIT",$asunto);

    //print_r($mail);
    //print_r($mail->Send());
    $vuelve=$mail->Send();

    print_r($mail);

    return $vuelve;


    //return mail($email, $asunto, $cuerpo, $desdeMail);
}

function xvenvia_mail($mysqli,$email, $asunto, $cuerpo, $desdeMail){

    include "./PHPMailer/class.phpmailer.php";
	include "./PHPMailer/class.smtp.php";

    $mail = new PHPMailer();

    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->Host = 'smtp.live.com';
    $mail->Port = 25;
    $mail->SMTPSecure = 'ssl';
    $mail->Username = "fabriziovazquez@hotmail.com";
    $mail->Password = "Carbe1290!"; 
    $mail->IsHTML(true);
    $mail->SingleTo = true;
    $mail->Sender=$desdeMail;

    $mail->setFrom("fabriziovazquez@hotmail.com",'ts');

    $mail->FromName = "ts";

    $mail->addAddress("fabriziovazquez@hotmail.comm"," ver ");
    //$mail->Subject = iconv("UTF-8", "iso-8859-1//TRANSLIT","Participá del ESB y ganate una Tablet!");
    $mail->Subject = iconv("UTF-8", "iso-8859-1//TRANSLIT",$asunto);

    //print_r($mail);
    //print_r($mail->Send());
    $vuelve=$mail->Send();

    print_r($mail);

    return $vuelve;


    //return mail($email, $asunto, $cuerpo, $desdeMail);
}

function envia_mail($mysqli,$email, $asunto, $cuerpo, $desdeMail){
    /* echo "<br> 172 desdeMail: ".$desdeMail; */
    /* echo "<br> 198 email: ".$email;
   
    echo "<br> 198 desdemail: ".$desdeMail;
    echo "<br> 203 tengo que llegar a esto: From: TAS <fabrizio.vazquez@wowcx.com>"; */
    //die();
    return mail($email, $asunto, $cuerpo, $desdeMail);
    //return true;
}

function envia_mailConPhpMailer($mysqli,$email, $asunto, $cuerpo, $desdeMail){

    include "./PHPMailer/class.phpmailer.php";
	include "./PHPMailer/class.smtp.php";

    $mail = new PHPMailer();

    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->SMTPSecure = 'ssl';
    $mail->Username = 'fabrizio.vazquez@wowcx.com';
    $mail->Password = 'qkiOl3!ikmNu8'; 
    $mail->IsHTML(true);
    $mail->SingleTo = true;
    $mail->Sender=$desdeMail;

    $mail->setFrom($email,'ts');

    $mail->FromName = "ts";

    $mail->addAddress("fabriziovazquez@hotmail.com"," ver ");
    //$mail->Subject = iconv("UTF-8", "iso-8859-1//TRANSLIT","Participá del ESB y ganate una Tablet!");
    $mail->Subject = iconv("UTF-8", "iso-8859-1//TRANSLIT",$asunto);

    //print_r($mail);
    //print_r($mail->Send());
    $vuelve=$mail->Send();

    echo "<br> 201 voy a imprimir mail <br>";
    print_r($mail);

    echo "<br> 204 email: ".$email;
    echo "<br> 204 asunto: ".$asunto;
    echo "<br> 204 cuerpo: ".$cuerpo;
    echo "<br> 204 desdeMail: ".$desdeMail;

    //echo "<br> 204 y con mail: ".mail($email, $asunto, $cuerpo, "from: ".$desdeMail);
    echo "<br> 204 y con mail: ".mail("fabriziovazquez@hotmail.com", $asunto, $cuerpo, "from: ".$desdeMail);

    return $vuelve;


    //return mail($email, $asunto, $cuerpo, $desdeMail);
}

function envia_mailKnack($mysqli,$email, $asunto, $cuerpo, $desdeMail){

    include "./PHPMailer/class.phpmailer.php";
	include "./PHPMailer/class.smtp.php";

    $mail = new PHPMailer();

    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->Host = 'email-smtp.us-east-1.amazonaws.com';
    $mail->Port = 465;
    $mail->SMTPSecure = 'tls';
    $mail->Username = 'AKIAUN7ZOPRIRAFZUW7Y';
    $mail->Password = 'BAghCMdoK2L9/bKoMoXr4DvYotfKDIt7eueNZPbUMlbu'; 
    $mail->IsHTML(true);
    $mail->SingleTo = true;
    $mail->Sender='ProgramaAEPT@knack.com.ar';

    $mail->setFrom('ProgramaAEPT@knack.com.ar','Knack');


    $mail->FromName = "Knack";

    $mail->addAddress("fabriziovazquez@hotmail.com"," ver ");
    $mail->CharSet = 'UTF-8';
    //$mail->Subject = iconv("UTF-8", "iso-8859-1//TRANSLIT","Participá del ESB y ganate una Tablet!");
    $mail->Subject = iconv("UTF-8", "iso-8859-1//TRANSLIT",$asunto);

    //print_r($mail);
    //print_r($mail->Send());
    $vuelve=$mail->Send();

    echo "<br> 242 voy print_r mail<br>";
    print_r($mail);

    return $vuelve;


    //return mail($email, $asunto, $cuerpo, $desdeMail);
}

function envia_mailJava($mysqli,$email, $asunto, $cuerpo, $desdeMail,$empresaUsuario){

    $sql="INSERT INTO mail_a_enviar
	(fecha, email, asunto, cuerpo, desdemail, estado)
	VALUES (NOW(), '".antiSQLIny($email)."', '".antiSQLIny($asunto)."', '".antiSQLIny($cuerpo)."', '".antiSQLIny($desdeMail)."', 'enviar')";

    $sql=iconv('UTF-8', 'ISO-8859-1', $sql);
   
    haceUpdate($mysqli,$sql);

    $enviardorDeMail=traeUnDato($mysqli,"select valor as dato
    from ".BASEDEDATOS.".parametros
     where variable='enviador_mail' and valido=1 and empresa={$empresaUsuario} order by id desc limit 1","NULL");

    if($enviardorDeMail!="NULL"){
        $devolucion=exec($enviardorDeMail);
        echo "<br> 114 ejecute: ".$enviardorDeMail;
        echo "<br> 114 devolucion: ".$devolucion;
    }else{
        return false;
    }
    
    

    //return mail($email, $asunto, $cuerpo, $desdeMail);

    return true;


}

function antiSQLIny($txt)
{

    return str_replace(" ", "_", $txt);
}

function generaNumeroSecreto($mysqli,$hash){

    $numero=rand(1000,9999);
    haceUpdate($mysqli,"INSERT INTO numero_secreto
	(fecha, hash, numero_secreto)
	VALUES (NOW(), '".$hash."', '".$numero."')");

}

function haceUpdate($mysqli, $query)
{

	
	$sql = $query;

	$resultq = $mysqli->query($sql);

	//echo "<br> 11 sql: ".$sql;							  


}

function traeUnDato($mysqli, $query, $default)
{

    $vuelve = $default;

    $sql = $query;

    $resultq = $mysqli->query($sql);

    /* echo "<br> 11 sql: ".$sql;		
    die();	 */				  

    if ($resultq->num_rows > 0) {
        $arr = $resultq->fetch_array(MYSQLI_ASSOC);
        $vuelve = $arr["dato"];
    }


    return $vuelve;
}

function pp($arr)
{

    //echo "<br> 13 estoy aca";
    $retStr = '<ul>';
    if (is_array($arr)) {
        foreach ($arr as $key => $val) {
            if (is_array($val)) {
                $retStr .= '<li><span style="color:red;">' . $key . '</span><b> => </b><span style="color:blue;">' . pp($val) . '</span></li>';
            } else {
                $retStr .= '<li><span style="color:red;">' . $key . '</span><b> => </b><span style="color:blue;">' . $val . '</span></li>';
            }
        }
    }
    $retStr .= '</ul>';
    return $retStr;
}
