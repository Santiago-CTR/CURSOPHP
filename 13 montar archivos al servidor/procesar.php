<?php

// header('Content-Type: application/json; charset=UTF-8');

// if(isset($_FILES['file'])){//isset es para validar campo existe y esta configurado
//     if(isset($_POST['name'])){
//         $_FILES['file']['name'] = explode(".", $_FILES['name']);
//         $_FILES['file']['name'] = $_POST['name'].$_FILES['name'][count($_FILES['name']) - 1];
//     }
//     move_uploaded_file($_FILES['file']['tmp_name'], __DIR__."/uploaded/".$_FILES['file']['name']);
//     echo json_encode($_FILES);
// }


header('Content-Type: application/json; charset=UTF-8');

if(isset($_FILES['file'])) {
    if(isset($_POST['name'])) {
        // Obtener la extensión del archivo original
        $file_extension = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);

        // Construir un nombre de archivo nuevo con el nombre ingresado y la extensión original
        $new_filename = $_POST['name'] . '.' . $file_extension;

        // Mover el archivo cargado a la carpeta de destino
        move_uploaded_file($_FILES['file']['tmp_name'], __DIR__."/uploaded/".$new_filename);

        // Preparar una respuesta JSON con detalles del archivo subido
        $response = [
            'filename' => $new_filename,
            'filetype' => $_FILES['file']['type'],
            'filesize' => $_FILES['file']['size']
        ];

        echo json_encode($response);
    } else {
        echo json_encode(['error' => 'Nombre no proporcionado']);
    }
} else {
    echo json_encode(['error' => 'Archivo no cargado']);
}
// echo __DIR__; __DIR__ te da la ubicacion actual del directorio en el que se encuentra el archivo que se ejecute
?>

