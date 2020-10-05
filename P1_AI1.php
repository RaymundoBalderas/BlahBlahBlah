<a href="index.php">Inicio</a><br><br>		
<strong>Impresión desde HTML</strong><br>
1+2
<hr>
<?php 
	echo "<strong>Comentarios</strong> <br>";
	// Este es un comentario de una linea
	/*
		Comentario Renglon 1
		Comentario Renglon 2
	*/
	$salto="<hr>";

	echo $salto;

	//---------------------------
	echo "<strong>Impresión desde PHP</strong> <br>";
	$variable=1;
	echo $variable;
	echo $salto;

	$variable="Hola";
	echo $variable;
	echo $salto;

	$variable=3.1416;
	echo $variable;
	echo $salto;

	$variable=true;
	echo $variable;
	echo $salto;

    //----------------------------
    echo "<strong>Operaciones aritméticas</strong><br>";
    $num1=2;
    $num2=3;

    echo $num1 + $num2;
    echo $salto;

    echo $num1-$num2;
    echo $salto;

    echo $num1*$num2;
    echo $salto;
   
   	echo $num1/$num2;
   	echo $salto;

   	echo 45 % 6; //residuo
    echo $salto;

    //echo "hola " . " Como Estás"
    // Para concatenar texto usamos un punto (.)

    //----------------------------
    echo "<strong>Impresion desde doble comillas</strong><br>";

    $variable1 = 3.1416;
    $variable2 = "Es el valor de PI ";
    echo "$variable1<br>";

    //----------------------------
    echo "<strong>Concatenación</strong><br>";

    $variable1 = "Primero";
    $variable2 = "Segundo";
    echo $variable1 . $variable2 ." <br>";

    echo "<strong>Impresion desde doble comillas</strong><br>";

    $variable1 = "1";
    $variable2 = "2";
    echo $variable1 . $variable2 ." <br>";

    echo $salto;

    //----------------------------
    echo "<strong>Verificar Variables</strong><br>";

   //Isset permite dar un balor boleano segun la accción que se le indique
    if (isset($variable1)) {
    	echo "Si esta Declarada <br>";
    }else{
    	echo "No esta declarada <br>";
    }

    //Nos permite Ver el valor de una variable
    echo $variable4=3.1416;
    echo var_dump($variable4);

    //cambiar las Variables de un tipo a otro
    //intval - Valores int
    //strval - Valores String
    //Boolval - Valor Booleano
    //Floatval - Valor Flotante
    
    $numero = intval("1");
    echo var_dump($numero);
?> 