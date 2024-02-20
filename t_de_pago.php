<?php
session_start();
if (!isset($_SESSION["username"])) {header("Location: ingresar_sesion.php");exit();}
?>
<?php
//include_once('header.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>ESPRESS TACNA<title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="Css/loginn.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="wrapper">
 <form method="POST" action="re_camiones.php">
 <h1> ESCOGA TIPO DE PAGO </h1>
<div class="input-box">
<button type="submit" name="EFECTIVO" class="btn">EFECTIVO</button>
<button type="submit" name="CRÉDITO" class="btn">CRÉDITO</button>
</div>
</form>
</div>
</body>
</html>