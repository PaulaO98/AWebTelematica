<?php


include("conexion.php");

$name = $_POST['name'];
$precio = $_POST['precio'];
$talla = $_POST['talla'];
$cantidad = $_POST['cantidad'];
$id_categoria = $_POST['id_categoria'];

$imagename = $_FILES['imagen']['name'];

// print_r($imagename);
// print_r($id_categoria);

$validatextension = array("jpg", "jpeg", "png");

$extension = pathinfo($imagename, PATHINFO_EXTENSION);

if (in_array($extension, $validatextension)) {

    $nameuploadimg = time() . '.' . $extension;

    $upload_path = "images/".$nameuploadimg;

    if (move_uploaded_file($_FILES['imagen']['tmp_name'], $upload_path)) {
        # code...

        $query = "insert into products (name,price,size,quantity,image,categoria_id_categoria) values ('$name','$precio','$talla','$cantidad','$nameuploadimg','$id_categoria')";

        if (mysqli_query($con, $query)) {
            
            return header("Location: inventarioadmin.php");
 
            $con->close();

        } else {
            echo "No se logro  crear, Volver a Intentar";
            $con->close();
        }
    } else {

        echo "No guardado en carpeta, Volver a Intentar";
    }
} else {

    echo "Extension no valida, Volver a Intentar";
}
        


// $name=$_POST['name'];

// $phone=$_POST['phone'];
// $address=$_POST['address'];
// $email=$_POST['email'];
// $password=$_POST['password'];

/* Se realiza la consulta adecuada */

// $sql = "insert into users (name, phone, address, password, email) values ('$name', '$phone', '$address', '$password','$email')";
// $result = mysqli_query($con, $sql);
// header("Location: loginregisro.php");