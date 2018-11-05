<?php
    include("db.php");
    include("../admin/functions.php");
    session_start();
    if(isset($_POST['login'])){
        $username=$_POST['username'];
        $password=$_POST['password'];
        
        
        $query="select * from users where username='$username'";
        $select_user_details=mysqli_query($connection,$query);
        confirmQuery($select_user_details);
        if($row=mysqli_fetch_assoc($select_user_details)){
            
            $user_id=$row['user_id'];
            $db_username=$row['username'];
            $db_hashed_password=$row['user_password'];
            $db_role=$row['user_role'];
            
        }
        
        
            if($password===$db_hashed_password && $username===$db_username){
                
                $_SESSION['username']=$db_username;
                $_SESSION['user_role']=$db_role;
                $_SESSION['user_id']=$user_id;
                
                
                
                
                header("Location: ../admin/");
            }else{
                header("Location: ../index.php");
        
        
        }
        
        
        
        
    }
?>
