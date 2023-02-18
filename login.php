<?php
session_start();

if($_POST){
    if( ($_POST['usuario']=="fatima") && ($_POST['contrasenia']=="")){
        $_SESSION['usuario']="fatima";
        header("location:index.php");
    }
    else{
        echo "<script> alert('Usuario o contraseña incorrecta'); </script>"; 
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
            </div>
            <div class="col-md-4">
                <br>
                <div class="card">
                <div class="card-header">
                    Iniciar Sesión
                </div>
                <div class="card-body">
                    <form action="login.php" method="post">
                        Usuario: <input  class="form-control" type="text" name="usuario" id="">
                        <br>
                        Contraseña <input class="form-control" type="password" name="contrasenia" id="">
                        <br>
                        <button class="btn btn-success" type="submit">Entrar al Porfolio</button>
                    </form>
                </div>
                <div class="card-footer text-muted"></div>
                </div> 
            </div>
            <div class="col-md-4">
            </div>
        </div>
    </div>
</body>
</html>