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
        .no_validado{
        font-size:18px;
        color:#F00;
        font-weight:bold;
       
      }
      
        .validado{
            font-size:18px;
            color:#0C3;
            font-weight:bold;
        
        
         }
    </style>

    <?php
    
    if (isset($_POST["usuario"]) && isset($_POST["pass_usuario"])){

        $user=$_POST["usuario"];
        $contra=$_POST["pass_usuario"];

        switch(true){

            case $user=="Alvaro" && $contra=="1234":
                echo "<p class=\"validado\"> Welcome Alvaro, are you inside </p>";
            break;
            case $user=="Noelia" && $contra=="1234":
                echo "<p class=\"validado\"> Welcome Noelia, are you inside";
            break;
            case $user=="AlvaroJunior" && $contra=="1234":
                echo"<p class=\"validado\"> Welcome AlvaroJunior, are you inside";
            break;
            case $user=="Alejandro" && $contra=="1234":
                echo "<p class=\"validado\"> Welcome Alejandro, are you inside";
            break;
            default:
                echo "<p class=\"no_validado\">El Usuario o Contraseña son incorrectos";
         

            
            }
    
        }

    ?>