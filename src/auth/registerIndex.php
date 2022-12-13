<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>
    <form action="register/register.php" method="post">
        <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="text-center">Registro</h3>
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" class="form-control" name="nombre", placeholder="Nombre" required>
                    </div>
                    </br>
                    <div class="form-group">
                        <label>email</label>
                        <input type="email" class="form-control" name="email", placeholder="Email" required>
                    </div>
                    </br>
                    <div class="form-group">
                        <label>Contraseña</label>
                        <input type="password" class="form-control" name="pass", placeholder="Contraseña" required>
                    </div>
                    </br>
                    <div id="logbutton">
                    </br>
                    <input type="submit" value="Registrar">
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>
</html>