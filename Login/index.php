<?php
session_start();
if (isset($_SESSION['S_IDUSUARIO'])) {
    header('Location: ../vista/index.php');
    exit();
}
?>
<?php

$selected_lang = isset($_GET['lang']) ? $_GET['lang'] : 'es'; // Obtener el idioma seleccionado

// Cargar el archivo de idioma según la selección del usuario
$lang_file = "lang/{$selected_lang}.json";
$lang_data = json_decode(file_get_contents($lang_file), true);


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?php echo $lang_data["IniciarSesion"]; ?></title>
    <link rel="stylesheet" type="text/css" href="css/plantilla.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">

</head>
<body>
<div class="contenido">
    <fieldset>
        <div class="user-wrapper">
            <center><img src="vendor/images.png" width="80px" height="80px" alt=""></center>
            <div><br>
                <legend><?php echo $lang_data["IniciarSesion"]; ?></legend>
                <p><?php echo $lang_data["SistemaGestionAcademico"]; ?></p>

                <div class="loader" hidden>
                    <img src="vendor/abc.gif" alt="" style="width: 50px; height: 50px;">
                </div>
                <div id="incorrecto" class="alert alert-danger" role="alert" hidden>
                    <?php echo $lang_data["ContrasenaUsuarioNoCoinciden"]; ?>
                </div>
                <div id="notif" class="alert alert-danger" role="alert" hidden>
                    <?php echo $lang_data["CuentaInactiva"]; ?>
                </div>
                <div id="llenecamp" class="alert alert-danger" role="alert" hidden>
                    <?php echo $lang_data["LleneCamposVacios"]; ?>
                </div>
                <div id="conteoincorecto" class="alert alert-info" role="alert" hidden>
                    <?php echo $lang_data["ContacteAdministrador"]; ?>
                </div>

                <input type="text" name="email" placeholder="<?php echo $lang_data["Usuario"]; ?>" autofocus id="txt_usu" autocomplete="off">
                <input type="password" name="contra" placeholder="<?php echo $lang_data["Contrasena"]; ?>" id="txt_con">
                <select class="js-example-basic-single" name="state" id="cbm_rol">
                    <option value=""><?php echo $lang_data["Seleccione"]; ?></option>
                    <option value="ADMINISTRADOR"><?php echo $lang_data["Administrador"]; ?></option>
                    <option value="DOCENTE"><?php echo $lang_data["Docente"]; ?></option>
                    <option value="ALUMNO"><?php echo $lang_data["Alumno"]; ?></option>
                </select>

                <br>
                <input type="submit" name="login" id="idbotonloging" value="<?php echo $lang_data["Ingresar"]; ?>" onclick="VerificarUsuario()">
            </div>
        </div>
    </fieldset>
</div>

<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<script src="../Plantilla/plugins/select2/select2.min.js"></script>
<script src="../js/usuario.js"></script>
<script>
    document.getElementById("txt_usu").focus();
    // $('.js-example-basic-single').select2();
</script>
</body>
</html>