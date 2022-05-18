<?php
    require("bd.php");
        $coment=$_POST["coment"];
        $contText=str_word_count($coment, 0);
        if ($contText<=10){
               $textformat=rtrim($coment);
                $consulta="INSERT INTO comentarios (chat) VALUES ('$textformat')";
                if(mysqli_query($conexion, $consulta)){
                        Header("Location:index.php");
                }
        }else if ($contText>=10){
                $array_str = explode(' ',$coment);
                $palabras_necesitas=10;
                $string_final = implode(' ', array_slice($array_str,0,$palabras_necesitas));
                //echo $string_final;
                $textformat=rtrim($string_final);
                $consulta="INSERT INTO comentarios (chat) VALUES ('$textformat')";
                if(mysqli_query($conexion, $consulta)){
                        Header("Location:index.php");
                }
        }
        $conexion->close(); 
?>