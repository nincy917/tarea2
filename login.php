

 <!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login</title>
 </head>
 <body>

   <?php
   $SERVER='localhost:3307';
   $uid='root';
   $pwd='';
   $bd='bdd_login';
   $link=mysqli_connect($SERVER,$uid,$pwd,$bd);
   if (!$link){
     die("no hay conexion".mysqli_connect_error());
   }

   $nombre= $_POST["usuario"];
   $contra= $_POST["contrasenia"];
   ?>


   <h2>
     
   <?php
   $query=mysqli_query($link,"SELECT * FROM usuario where Usuario='".$nombre."' and Contrasenia='".$contra."'");

   $nr = mysqli_num_rows($query);
   if ($nr==1){
     header("location:../portada/portada.html");
   } 
   else if ($nr==0){
     echo "Contrasenia incorrecta";
   }
   ?>
   </h2>
 
    

 </body>
 </html>



