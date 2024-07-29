<style>
    .resultado{
        color:#F00;
        font-weight:bold;
        font-size:32;
    }

</Style>

<?php
    if(isset ($_POST["button"])){

        $numero1=$_POST["num1"];
        $numero2=$_POST["num2"];
        $operacion=$_POST["operacion"];

        calcular($numero1,$numero2,$operacion);
    }

        

        /*if(!strcmp("suma",$operacion)){

            echo "El resultado es: ".($numero1+$numero2);
        }
        if(!strcmp("resta",$operacion)){

            echo "El resultado es: ".($numero1-$numero2);
        }
        if(!strcmp("multiplicacion",$operacion)){

            echo "El resultado es: ".($numero1*$numero2);
        }
        if(!strcmp("division",$operacion)){

            echo "El resultado es: ".($numero1/$numero2);
        }*/



        function calcular($numero1,$numero2,$calculo) {
        
            
            

        switch ($calculo) {
            case 'suma':
        //    global $numero1;
         //   global $numero2;
            $resultado=$numero1+$numero2;
                
                echo "<p class='resultado'> El resultado es : $resultado </p>";
                break;
            case 'resta':
               
                $resultado=$numero1-$numero2;

                echo " <p class='resultado'> El resultado es : $resultado </p>";
                break;
            case 'multiplicacion':
              
                $resultado=$numero1*$numero2;

                echo " <p class='resultado'El resultado es $resultado </p>";
                break;  
            case 'division':
                
                $resultado=$numero1/$numero2;
                echo " <p class='resultado'>El resultado es $resultado </p>";
                break; 
            case 'modulo':
               
                $resultado=$numero1%$numero2;
                echo " <p class='.resultado'>El resultado es $resultado </p>";
                break;  
            case 'incremento';
                $numero1++;
                $resultado=$numero1;
                echo " <p class='.resultado'>El resultado es $resultado </p>";
                break; 
            case 'decremento':
                $numero1--;
                $resultado=$numero1;
                echo " <p class='.resultado'>El resultado es $resultado </p>";
                break;         
            
        }
    
}

?>