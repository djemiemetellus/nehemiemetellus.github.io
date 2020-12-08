<?php    
       $host = "localhost";
       $usuario = "root";
	   $contrasena = "";
       $baseDeDatos ="super_mercado";
	   $msconexion="";
 
 
      function Conectarse()
      {
         global $host, $usuario, $contrasena, $baseDeDatos,$msconexion;
 
         if (($link = mysqli_connect($host, $usuario, $contrasena))) 
         { 
              $msconexion= "Conectados a la Base de Datos.<br>";
         }
         else
         {
			$msconexion= "Error conectando a la base de datos.<br>"; 
			exit(); 
			
         }
         if (mysqli_select_db($link, $baseDeDatos)) 
         { 
             $msconexion="Obtuvimos la base de datos $baseDeDatos sin problema.<br>";
         }
         else
         {	
			$msconexion= "Error seleccionando la base de datos.<br>"; 
                    
         }
      return $link;
	  
      } 
	 	  


?>
   