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



  if(isset ($_POST["enviando"])){//mira a ver si el usuario ha pulsado el boton enviado

   //con $_POST almacenamos lo que hay en el ID nombre_usuario en la variable $usuario
    $edad=$_POST["edad_usuario"];// al igual con edad & edad_usuario

    if($edad<=17){//comprueba si hemos pulsado el boton de enviando 

      echo"<p class='no_validado'>Eres menor de edad</p>";

    }else if($edad<65){
      echo"<p class=\"validado\">Eres adulto </p>";
   
    }else{
      echo "<p class=\"validado\">Cuídate </p>";
    }
  }

?>