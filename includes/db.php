


<?php
    define("SERVER","localhost");
    define("USER","root");
    define("PASSWORD","");
    define("DB","cms");
    $connection=mysqli_connect(SERVER,USER,PASSWORD,DB);
    
    if($connection){
       // echo "We are connected!!";
    }
?>