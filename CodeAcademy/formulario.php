<?php

    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $multiplo = $_POST["multiplo"];
    
    if(isset($num1) == false || isset($num2) == false || isset($multiplo) == false)
    {
        echo "Algum número é inválido";
    }
    else if($multiplo == 0)
    {
        echo "Múltiplo deve ser diferente de 0";
    }
    else
    {
        if($multiplo < 0)
        {
            $multiplo *= -1;
        }
        $i = 0;
        $resultado = 0;
        $sub = 0;
        
        if($num1 < $num2)
        {
            for ($i = $num1; $i<=$num2; $i += $multiplo)
            {
                $resultado += $i; 
            }
        }
        else
        {
            $sub = $num1;
            $num1 = $num2;
            $num2 = $sub;
            
            for ($i = $num1; $i<=$num2; $i += $multiplo)
            {
                $resultado += $i; 
            }            
        }
        
        $resultado;
        
        echo "O resultado é: " . $resultado . "<br>"; 
    }
    

?>
