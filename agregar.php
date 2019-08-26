<?php

    /*
        Este script crea una nueva entrada en la tabla "cursos" de nuestra
        base de datos MySQL. Como el formulario del archivo cursos.php tiene
        method="post" como atributo, los datos son accesados en este script
        a través de la variable $_POST.
    */

    // Primero rescatamos los valores ingresados en el formulario.
    $id_referencia = $_POST['id_referencia'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $id_proveedor = $_POST['id_proveedor'];

    /*
        La función mysqli_connect crea un objeto que representa la conexión con la base de datos.
        Recibe 4 parámetros:
            1. La dirección del servidor MySQL, que en nuestro caso siempre será 'localhost', lo cual
               quiere decir que el servidor MySQL es el mismo servidor donde residen nuestros archivos PHP.
            2. El nombre de usuario MySQL (pon tu nombre de usuario en vez de ???).
            3. La contraseña, que en nuestro caso es lo mismo que tu nombre de usuario.
            4. La base de datos, que en nuestro caso es "mim_" más tu nombre de usuario.
   
    $conexion = mysqli_connect('localhost', 'mlanas2', 'mlanas2', 'mim_mlanas'); */
    include("conexion.php");
    /*
        La función mysqli_query permite ejecutar una consulta SQL.
        Recibe 2 parámetros:
            1. El objeto de conexión con la base de datos, que acabamos de guardar en la variable $conexión.
            2. La consulta SQL escrita como string.
        En PHP los strings pueden escribirse con "comillas dobles" o 'comillas simples'.
        Si utilizamos comillas dobles, podemos agregar variables al string como se ilustra en esta consulta.
        En la clase había utilizado el operador de concatenación para construir la consulta, pero me parece
        que utilizar comillas dobles produce un código más legible.
        Como las columnas nombre y responsable de la tabla cursos son de tipo string, tenemos que encerrar
        entre comillas simples cada valor que queramos insertar. Debido a esto, las variables $nombre y
        $responsable aparecen encerradas entre comillas simples dentro de la consulta.
    */
    mysqli_query($conexion, "INSERT INTO medicamentos(id_referencia, descripcion,precio,id_proveedor) VALUES ('$id_referencia', '$descripcion', '$precio', '$id_proveedor')");
    include("indice.php");

    /*
        Cuando utilizamos la función mysqli_query con una consulta SELECT, produce
        un objeto denominado result set. En esta línea almacenamos el result set
        para todos los cursos en la variable $res.
    */
     /*$res = mysqli_query($conexion, 'SELECT * FROM medicamentos');*/

    /*
        Los objetos de tipo result set se recorren de manera similar a un archivo.
        En lugar de la función readline, se utiliza la función equivalente mysqli_fetch_assoc.
        En lugar de una línea, cada invocación a mysqli_fetch_assoc retorna una fila.
        La fila producida es similar a un diccionario, con una clave para cada columna
        de la tabla consultada.
    */
    /* $fila = mysqli_fetch_assoc($res);*/

    /*
        La función mysqli_fetch_assoc retorna el objeto especial null (que representa la nada)
        cuando no queden filas qué revisar.
    */
    /*while ($fila != null) {

        /*
            Aquí simplemente imprimimos las dos columnas para la fila actual,
            separadas por un espacio.
            El resultado no es muy bueno: las filas aparecen una al lado de la
            otra, pero al menos podemos comprobar que el curso insertado
            efectivamente quedó de manera persistente en la base de datos.
        
        echo("<tr>");
        echo("<br>");
        

        echo ($fila['id_referencia']);
        echo("<br>");
        echo ($fila['descripcion']);
        echo("<br>");
        echo ($fila['precio']);
        echo("<br>");
        echo ($fila['id_proveedor']);

        echo("<br>");
        */
             
       /* $fila = mysqli_fetch_assoc($res);   */     
    /*
    }
    */

    // Con mysqli_close cerramos la conexión, ¡muy importante!
   /*mysqli_close($conexion); */

/*
*/