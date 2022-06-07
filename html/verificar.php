<?php
    include('conexion/config.php');
    $codigo =$_POST['codigo'];
    $res = $con->query("select * from myusers 
        where codigo='$codigo' 
        ")or die($con->error);
    if( mysqli_num_rows($res) > 0 ){
        $con->query("update myusers set confirmado = 'si' where codigo = '$codigo' ");
        //Se direcciona a la pagina principal
		header("location:indexSesion.php");		
    }else{   
        echo "Codigo $codigo";
        echo "codigo invalido";
    }
?>