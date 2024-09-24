<?php

require('../includes/app.php');

use App\Usuario;

$usuario = new Usuario;

echo "<pre>";
var_dump($usuario);
echo "</pre>";
exit;

if ($_SERVER["REQUEST_METHOD"]==="POST") { 

   $random = random_int(0,999999);
   $unique = uniqid();
   $uniqueId = $unique.$random;

   $id = $uniqueId;
   $nombre = $_POST["nombre"];
   $telefono = $_POST["telefono"];
   $email = $_POST["email"];
   $empresa = $_POST["empresa"];
   $usuario = $_POST["telefono"];
   $personalidadReportado = $_POST["personalidadReportado"];
   $motivoReporte = $_POST["motivoReporte"];
   $nombreReportado = $_POST["nombreReportado"];
   $telReportado = $_POST["telReportado"];
   $descripcion = $_POST["descripcion"];

   $sql = "INSERT INTO usuarios (id, nombre, telefono, email, empresa, usuario) VALUES (?,?,?,?,?,?)";
   $stmt = $connection->prepare($sql);
   $stmt->bind_param("ssssss", $id, $nombre, $telefono, $email, $empresa, $usuario);

   if ($stmt->execute()) {
    
      $reporteUniqueId = $random.$unique;

      $tempName = $_FILES['link']['tmp_name'];
        $carpetaImagenes = '../images/reportes/'.$reporteUniqueId;
        if (!is_dir($carpetaImagenes)) {
            mkdir($carpetaImagenes);
        }

        $imagenes = [];

        //! Subiendo Imagenes a la carpeta creada
        foreach($tempName as $imgToMove){

            //! Generando Nombre Unico para la imagen
            $nombreImagen = md5( uniqid(rand(), true) );
            move_uploaded_file($imgToMove, $carpetaImagenes . "/".$nombreImagen.".jpg");
            $imagenes[] = $nombreImagen.".jpg";
        }

    $links = implode(',', $imagenes);
    $fotos = $links;

      $sql = "INSERT INTO reportes (id, personalidadReportado, motivoReporte, nombreReportado, telReportado, descripcion, usuario_id, imagenes) VALUES (?,?,?,?,?,?,?,?)";
      $stmt = $connection->prepare($sql);
      $stmt->bind_param("ssssssss", $reporteUniqueId, $personalidadReportado, $motivoReporte, $nombreReportado, $telReportado, $descripcion, $uniqueId, $fotos);

      if ($stmt->execute()) {
         echo "El reporte se ha registrado correctamente";
      }
    
   } else {
      echo "Error al registrar el reporte";
   }

}   