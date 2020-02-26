
<?php

$vec=[5,1,4,2,4,8,32,75];


for($v=0;$v<count($vec) ;$v++){
    echo $vec[$v]."<br>";
}

$j;
$aux;
$comparaciones=0;
$intercambios=0;


   for( $z = 1; $z < count($vec); $z++) {
    for( $va = 0; $va < (count($vec) - $z); $va++) 
    {
       $comparaciones++;
       if($vec[$va] > $vec[$va+1])
       {
          $aux = $vec[$va];
          $vec[$va] = $vec[$va + 1];
          $vec[$va + 1] = $aux;
          $intercambios++;
       }
    }
    }

for($ve=0;$ve<count($vec) ;$ve++){
    echo "<center>";
    echo $vec[$ve]."<br>"; 

}
echo "numero de intercambios : ".$intercambios."<center>";
echo "numero de comparaciones : ".$comparaciones;



?>

<!DOCTYPE html>
<html>
    <head>
        <title>iniciar proyecto</title>
        
        <link rel="stylesheet" href="css/estilos.css">
        <style>
        

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 60px;
                color : blue;
                
            }

            a:hover {
              color: blue;
            }
            .info{
                color: black;

            }

        </style>
    </head>
    <body>
        <div class="container">
            

        </div>
    </body>
</html>