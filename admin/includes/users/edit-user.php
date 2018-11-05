<?php
    if(isset($_POST['edit'])){
        
        if(isset($_GET['edit_user']))
        {
        $user_id=$_GET['edit_user'];
        $user_firstname=$_POST['user_firstname'];
        $user_lastname=$_POST['user_lastname'];
        $user_role=$_POST['user_role'];
        $user_email=$_POST['user_email'];
        $username=$_POST['username'];
        $user_password=$_POST['user_password'];
        $user_password_confirm=$_POST['user_password_confirm'];
        
      
        
        $user_image=$_FILES['user_image']['name'];
        $user_image_temp=$_FILES['user_image']['tmp_name'];    
            
            
            
        if($user_image == ""){
                    $query = "SELECT * FROM users WHERE user_id = $user_id";
                    $user_image_query = mysqli_query($connection, $query);
                    confirmQuery($user_image_query);
                    if($row = mysqli_fetch_assoc($user_image_query) ) {
                        $user_image = $row['user_image'];
                    }
         }
            
        
        
        if($user_password === $user_password_confirm){
            
            
        
            move_uploaded_file($user_image_temp,"images/users/$user_image");
        
                    $query="update users set";
            $query.=" user_firstname='$user_firstname', ";
            $query.="user_lastname='$user_lastname', ";
            $query.="user_email='$user_email', ";
            $query.="username='$username', ";
            $query.="user_password='$user_password', ";
            $query.="user_role='$user_role', ";
            $query.="user_image='$user_image' ";
            $query.="where user_id=$user_id";
            if($user_firstname && $user_email){
                    $create_user_query=mysqli_query($connection,$query);
                    confirmQuery($create_user_query);
                   header("Location: users.php");
                
            }
            else{
                echo "No blank Enteries allowed";
            }/*end of else*/
            
            
            
        }/*end of cofirm password*/
            
            
            
       
        }
    }
?>
   

   
   
   
   <?php
    if(isset($_GET['edit_user'])){
        $edit_user_id=$_GET['edit_user'];
        $query="SElect * from users where user_id=$edit_user_id";
        $create_user_query=mysqli_query($connection,$query);
        confirmQuery($create_user_query);
        if($row=mysqli_fetch_assoc($create_user_query)){
    
        $user_id=$row['user_id'];
        $user_password=$row['user_password'];
        $user_firstname=$row['user_firstname'];
        $user_lastname=$row['user_lastname'];
        $user_role=$row['user_role'];
        $user_email=$row['user_email'];
        $username=$row['username'];
        $user_image=$row['user_image'];
        
            
        }

    }
?>



    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="first_name">First Name</label>
            <input type="text" class="form-control" name="user_firstname" id="first_name" value="<?php echo $user_firstname;?>">
        </div>

        <div class="form-group">
            <label for="last_name">Last Name</label>
            <input type="text" class="form-control" name="user_lastname" id="last_name" value="<?php echo $user_lastname;?>">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" name="user_email" id="email" value="<?php echo $user_email;?>">
        </div>




        <div class="form-group">
            <label for="role">Role</label>
            <select name="user_role" class="form-control" id="role">
            <option value="admin">Admin</option>
            <option value="subscriber">Subscriber</option>
        </select>
        </div>

        <div class="form-group">
            <label for="username">User Name</label>
            <input type="text" class="form-control" name="username" id="username" value="<?php echo $username;?>">
        </div>

        <div class="form-group" hidden>
            <label for="user_password">Password</label>
            <input type="password" class="form-control" name="user_password" id="user_password" value="<?php echo $user_password;?>">
        </div>


        <div class="form-group" hidden>
            <label for="confirm_password">Confirm Password</label>
            <input type="password" class="form-control" name="user_password_confirm" id="confirm_password">
        </div>

        <div class="form-group">
            <label for="image">User Image</label>
            <input type="file" class="form-control" name="user_image" id="image">
        </div>



        <div class="form-group">
            <input type="submit" class="btn btn-primary" name="edit" value="Edit User">
        </div>
    </form>
