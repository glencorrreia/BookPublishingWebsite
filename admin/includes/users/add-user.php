<?php
    if(isset($_POST['create_user'])){
        $user_firstname=$_POST['user_firstname'];
        $user_lastname=$_POST['user_lastname'];
        $user_role=$_POST['user_role'];
        $user_email=$_POST['user_email'];
        $username=$_POST['username'];
        $user_password=$_POST['user_password'];
        $user_password_confirm=$_POST['user_password_confirm'];
        
      
        
            
        
        
        $user_image=$_FILES['user_image']['name'];
        $user_image_temp=$_FILES['user_image']['tmp_name'];
        
        if($user_password === $user_password_confirm){
            
            
        
            move_uploaded_file($user_image_temp,"images/users/$user_image");
            
            $options=[
                'cost' =>10,
                'salt' =>mcrypt_create_iv(22,MCRYPT_DEV_URANDOM),
            ];
            
            $hashedpass=$user_password;
        
                    $query="insert into users(user_firstname,user_lastname,user_email,username,user_password,user_role,user_image) value('$user_firstname','$user_lastname','$user_email','$username','$hashedpass','$user_role','$user_image')";
            if($user_firstname && $user_email){
                    $create_user_query=mysqli_query($connection,$query);
                    confirmQuery($create_user_query);
                   header("Location: users.php");
                    //echo "<div class='alert alert-success'>Published</div>";
            }
            else{
                echo "No blank Enteries allowed";
            }/*end of else*/
            
            
            
        }/*end of cofirm password*/
    }  /*end of isset*/
?>



    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="first_name">First Name</label>
            <input type="text" class="form-control" name="user_firstname" id="first_name">
        </div>

        <div class="form-group">
            <label for="last_name">Last Name</label>
            <input type="text" class="form-control" name="user_lastname" id="last_name">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" name="user_email" id="email">
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
            <input type="text" class="form-control" name="username" id="username">
        </div>

        <div class="form-group">
            <label for="user_password">Password</label>
            <input type="password" class="form-control" name="user_password" id="user_password">
        </div>


        <div class="form-group">
            <label for="confirm_password">Confirm Password</label>
            <input type="password" class="form-control" name="user_password_confirm" id="confirm_password">
        </div>

        <div class="form-group">
            <label for="image">User Image</label>
            <input type="file" class="form-control" name="user_image" id="image">
        </div>



        <div class="form-group">
            <input type="submit" class="btn btn-primary" name="create_user" value="Create User">
        </div>


    </form>
