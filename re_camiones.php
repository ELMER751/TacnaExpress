<?php

if (isset($_POST['guardar'])){
        header("location: camiones_nuevo.php");
    }

else if (isset($_POST['js'])){
    header("location: consume.php");
}

else if (isset($_POST['buscar'])){
        header("location: camiones_busca.php");}

else if(isset($_POST['elimina'])){
    $codigo =$_POST['Codigo'];
    include_once('includes/acceso.php');
    include_once('Clases/Camion.php');
    $conexion = connect_db();
    $oproducto = new Camion();
    $oproducto->conectar_db($conexion);
    $res=$oproducto->borrar($codigo);
if ($res)
    header("Location: confirmacion.php");
else
    header ("Location: error.php");
}

else if(isset($_POST['volver'])){
    header("location: espresstacna.php");}

else if(isset($_POST['guardado'])){

    $id =$_POST['Codigo'];
    $placa = $_POST['Placa'];
    $marca = $_POST['Marca'];
    $cer = $_POST['Certificado'];
    $conf = $_POST['CV'];
    $carga = $_POST['Carga_m'];
    include_once('includes/acceso.php');
    $conexion = connect_db();
    include('clases/Camion.php');
    $ncamion = new Camion();
    $ncamion->conectar_db($conexion);
    
    $response = $ncamion->nuevo_camion($id,$placa,$marca,$cer,$conf,$carga);
    if($response) {
        // Si el registro se guardó correctamente, mostramos un mensaje de confirmación
        header("location: confirmacion.php");
    } else 
        header("location: error.php");       
}
else if(isset($_POST['x'])){
    header("location: camiones.php");
}
else if(isset($_POST['xd'])){
    header("location: camiones_nuevo.php");
}
else if(isset($_POST['modificar'])){
    $id=$_POST['Codigo'];
    $nom =$_POST['Placa'];
    $und = $_POST['Marca'];
    $can = $_POST['Certificado'];
    $pre = $_POST['CV'];
    $cos = $_POST['Carga_m'];
    
    include_once('includes/acceso.php');
    include_once('Clases/Camion.php');
    $conexion = connect_db();
    $oproducto = new Camion();
    $oproducto->conectar_db($conexion);
    
    $response = $oproducto->modifica_camion($id,$nom,$und,$can,$pre,$cos);

    if($response) {
        header("location: confirmacion.php");
    } else
        header("location: error.php");
}
else if(isset($_POST['correcto'])){
    $ruc=$_POST['Ruc_dni'];
    $raz=$_POST['Razon_social'];
    $nom=$_POST['Nombre'];
    $dir=$_POST['Direccion'];
    include_once('includes/acceso.php');
    include_once('Clases/Cliente.php');
}
else{ 
       echo "Intente de nuevo, algo sucedio mal";
   }
?>