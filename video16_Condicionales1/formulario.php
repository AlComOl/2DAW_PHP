<style>
      body {
        font-family: 'Arial', sans-serif;
        background: #f0f2f5;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
      }

      h1 {
        text-align: center;
        color: #333;
      }

      .login-container {
        background: #fff;
        padding: 20px 40px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        width: 100%;
        max-width: 400px;
      }

      .form-group {
        margin-bottom: 20px;
      }

      .form-group label {
        display: block;
        margin-bottom: 8px;
        color: #555;
      }

      .form-group input {
        width: 100%;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 5px;
        font-size: 16px;
      }

      .form-group input:focus {
        border-color: #007bff;
        outline: none;
      }

      .btn-submit {
        width: 100%;
        padding: 10px;
        background: #007bff;
        border: none;
        border-radius: 5px;
        color: #fff;
        font-size: 16px;
        cursor: pointer;
        transition: background 0.3s;
      }

      .btn-submit:hover {
        background: #0056b3;
      }

      .message {
        font-size: 18px;
        font-weight: bold;
        text-align: center;
      }

      .no_validado {
        color: #f00;
      }

      .validado {
        color: #0c3;
      }
  </style>
</head>
<body>
  <div class="login-container">
    <h1>Login</h1>
    <form action="validacionFormulario.php" method="post" name="datos_usuario" id="datos_usuario">
      <div class="form-group">
        <label for="nombre_usuario">Usuario:</label>
        <input type="text" name="usu" id="usu">
      </div>
      <div class="form-group">
        <label for="edad_usuario">Contraseña:</label>
        <input type="text" name="con" id="con">
      </div>
      <button type="submit" name="enviando" id="enviando" class="btn-submit">Enviar</button>
    </form>
  </div>
</body>
</html>