<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Moderno y Disruptivo</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #f6d365 0%, #fda085 100%);
        }
        .login-container {
            background: white;
            padding: 40px 50px;
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0,0,0,0.2);
            text-align: center;
        }
        .login-container h1 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #333;
        }
        .input-field {
            position: relative;
            margin-bottom: 30px;
        }
        .input-field input {
            width: 100%;
            padding: 10px 15px;
            border: 2px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            transition: all 0.3s ease;
        }
        .input-field input:focus {
            border-color: #fda085;
        }
        .input-field label {
            position: absolute;
            top: 0;
            left: 15px;
            color: #aaa;
            font-size: 16px;
            pointer-events: none;
            transition: all 0.3s ease;
        }
        .input-field input:focus + label,
        .input-field input:not(:placeholder-shown) + label {
            top: -20px;
            left: 10px;
            font-size: 12px;
            color: #fda085;
        }
        .btn-login {
            background: #fda085;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s ease;
        }
        .btn-login:hover {
            background: #f6d365;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h1>Iniciar Sesión</h1>
         <form action="validacionFormulario1.php" method="post" name="datos_usuario" id="datos_usuario">
            <div class="input-field">
                <input type="text" name="usuario" id="usuario">
                <label for="usuario">Usuario</label>
            </div>
            <div class="input-field">
                <input type="text"name="pass_usuario" id="pass_usuario">
                <label for="pass_usuario">Contraseña</label>
            </div>
            <button type="submit" class="btn-login">Ingresar</button>
        </form>
    </div>
</body>
</html>
