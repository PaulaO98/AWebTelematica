<?php
    session_start();

    include("conexion.php");

    $email=$_POST['email'];
    $password=$_POST['password'];

    print_r($email);
    print_r($password);

    $query = "select * from users";

    $stmt = mysqli_query($con, $query);

    while ($data = $stmt->fetch_assoc()) {

        $passwords[] = $data['password'];
        $emails[] = $data['email'];
        $id_users[]=$data['id_usuario'];
        $names[]=$data['name'];
    }

    foreach ($passwords as $pass) {
        # code...
        foreach ($emails as $key => $mail) {
            # code...

            if ($password == $pass && $email == $mail) {
                # code...

                setcookie("Token",$password,time()+(60*60),"/");
                setcookie("id_usuario",$id_users[$key],time()+(60*60),"/");
                setcookie("name",$names[$key],time()+(60*60),"/");

                $stmt->close();
                $con->next_result();

                return header("Location: index.php");

            }
            
        }
    }

    setcookie("Token","",time()-1,"/");
    setcookie("id_usuario","",time()-1,"/");
    setcookie("name","",time()-1,"/");
    $stmt->close();
    $con->next_result();

    return header("Location: loginregisro.php");
