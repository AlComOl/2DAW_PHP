<style>
      h1{
        text-align:center;
      }

      table{
        background-color:#FFC;
        padding:5px;
        border:#666 5px solid;
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



  if(isset ($_POST["enviando"])){

    $usuario=$_POST["nombre_usuario"];//con $_POST almacenamos lo que hay en el ID nombre_usuario en la variable $usuario
    $edad=$_POST["edad_usuario"];// al igual con edad & edad_usuario

    if($usuario=="Juan"&& $edad>=18){//comprueba si hemos pulsado el boton de enviando 

      echo"<p class='validado'>Puedes entrar</p>";

    }else{

      echo"<p class=\"no_validado\">No puedes entrar </p>";

    }
  }

?>