<?php

    require_once "conexion.php";

    //INICIALIZAR LA SESION
    session_start();
    

    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){

            header("location: bienvenida.php");
            exit;

    }


$email = $password ="";
$email_err = $password_err = "";

if($_SERVER["REQUEST_METHOD"] === "POST"){
    
    if(empty(trim($_POST["email"]))){
        $email_err = "Por favor, ingrese el correo electronico";
    }else{
        $email = trim($_POST["email"]);
    }
    
    if(empty(trim($_POST["password"]))){
        $password_err = "Por favor, ingrese una contraseña";
    }else{
        $password = trim($_POST["password"]);
    }
    
    
    

    //VALIDAR CREDENCIALES
    if(empty($email_err) && empty($password_err)){
        
        $sql = "SELECT id, usuario, email, clave, privilegio, imagen, pdf_dieta FROM usuarios WHERE email = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            
            mysqli_stmt_bind_param($stmt, "s", $param_email);
            
            $param_email = $email;
            
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
            }
            
            if(mysqli_stmt_num_rows($stmt) == 1){
                mysqli_stmt_bind_result($stmt, $id, $usuario, $email, $hashed_password, $privilegios, $imagen, $pdfUser);
                if(mysqli_stmt_fetch($stmt)){
                    if(password_verify($password, $hashed_password)){

                        if ( $privilegios == NULL ) {
                            
                            session_start();
    
                            $_SESSION["user"] = $usuario;
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["email"] = $email;
                            $_SESSION["privilegio"] = $privilegios;
                            $_SESSION["imagen"] = "./imagenes/user.png";
                            
                            header("location: bienvenida.php");
                            exit;

                        } else if ( $privilegios == 0 ) {
                            
                            session_start();
    
                            $_SESSION["user"] = $usuario;
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["email"] = $email;
                            $_SESSION["privilegio"] = $privilegios;
                            $_SESSION["imagen"] = "./imagenes/user.png";
                            
                            header("location: ../Page-Initial.php");
                            exit;

                        } else if ( $privilegios == 1 ) {
                            
                            session_start();
    
                            $_SESSION["user"] = $usuario;
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["email"] = $email;
                            $_SESSION["privilegio"] = $privilegios;
                            $_SESSION["pdf"] = $pdfUser;
                            $_SESSION["imagen"] = $imagen;
                            
                            header("location: ../Page-Initial-Intermedium.php");
                            exit;

                        } else if ( $privilegios == 2 ) {
                            
                            session_start();
    
                            $_SESSION["user"] = $usuario;
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["email"] = $email;
                            $_SESSION["privilegio"] = $privilegios;
                            $_SESSION["imagen"] = $imagen;
                            $_SESSION["pdf"] = $pdfUser;
                            
                            header("location: ../Page-Initial-Vip.php");
                            exit;

                        } else if ( $privilegios == 3 ) {
                            
                            session_start();
    
                            $_SESSION["user"] = $usuario;
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["email"] = $email;
                            $_SESSION["privilegio"] = $privilegios;
                            $_SESSION["imagen"] = $imagen;
                            
                            header("location: ../Nutriologo-Nutri/nutriologo-page.php");
                            exit;

                        } else if ( $privilegios == 4 ) {
                            
                            session_start();
    
                            $_SESSION["user"] = $usuario;
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["email"] = $email;
                            $_SESSION["privilegio"] = $privilegios;
                            
                            header("location: ../Admin-Nutri/Administrador.php");
                            exit;

                        } else if ( $privilegios == 5 ) {
                            
                            session_start();
    
                            $_SESSION["user"] = $usuario;
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["email"] = $email;
                            $_SESSION["privilegio"] = $privilegios;
                            
                            header("location: ../empresas-nutri/index.php");
                            exit;
                        }

                    }else{
                        $password_err = "La contraseña que has introducido no es valida";
                    }
                    
                } 
            }else{
                    $email_err = "No se ha encontrado ninguna cuenta con ese correo electronico.";
                }
            
        }else{
                    echo "UPS! algo salio mal, intentalo mas tarde";
                }
    }


    mysqli_close($link);
    
}

?>