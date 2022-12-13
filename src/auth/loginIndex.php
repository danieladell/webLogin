<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<form action="login/login.php" method="post">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="text-center">Acceso</h3>
            </div>
                <div class="form-group">
                    <label>Usuario</label>
                    <input type="text" class="form-control" name="nombre", placeholder="Usuario" required>
                </div>
                </br>
                <div class="form-group">
                    <label>Contraseña</label>
                    <input type="password" class="form-control" name="pass", placeholder="Contraseña" required>
                </div>
                <div id="logbutton">
                  </br>
                  <input type="submit" value="Login">
                </div>
        </div>
    </form>
</body>
</html>