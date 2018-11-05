<?php
    ob_start();
    $title="Register";
?>

         <?php
        include_once("includes/db.php");
        include_once("admin/functions.php");
        ?>


<?php
    if(isset($_POST['register'])){
        $username=$_POST['username'];
        $firstname=$_POST['firstname'];
        $lastname=$_POST['lastname'];
        $emailid=$_POST['emailid'];
        $password=$_POST['password'];
        
        echo $username;
        
        $username=mysqli_real_escape_string($connection,$username);
        $firstname=mysqli_real_escape_string($connection,$firstname);
        $lastname=mysqli_real_escape_string($connection,$lastname);
        $emailid=mysqli_real_escape_string($connection,$emailid);
        
        $query="Select * from users where username='$username'";
        $check_query=mysqli_query($connection,$query);
        if(mysqli_num_rows($check_query)>0){
            echo"user already exists";
            die("go *** of");
        }else{
            $options=[
                'cost' =>10,
                'salt' =>mcrypt_create_iv(22,MCRYPT_DEV_URANDOM),
            ];
            
            $hashedpass=password_hash($password,PASSWORD_BCRYPT,$options);
            echo $hashedpass;
        }
        $query="INSERT INTO users( username, user_password, user_firstname, user_lastname, user_email,user_role) VALUES ('$username','$hashedpass','$firstname','$lastname','$emailid','subscriber')";
        
        $insert_user_query=mysqli_query($connection,$query);
        confirmQuery($insert_user_query);
        echo "User registered Sucessfully";
    }
        
?>


    <!DOCTYPE html>
    <html lang="en">

    <?php
        include_once("includes/header.php");
    ?>


        <body>

   
                <!-- Page Content -->
                <div class="container">

                    <div class="row">

                        <div class="col-md-6 col-md-offset-3">
                            <form action="" method="POST" role="form">
                                <legend>Register</legend>

                                <div class="form-group">
                                    <label for="">First name</label>
                                    <input type="text" class="form-control" id="" placeholder="Enter your first name" name="firstname">
                                </div>
                                
                                <div class="form-group">
                                    <label for="">Last name</label>
                                    <input type="text" class="form-control" id="" placeholder="Enter your last name" name="lastname">
                                </div>
                                
                                <div class="form-group">
                                    <label for="">Username</label>
                                    <input type="text" class="form-control" id="" placeholder="Enter your desired username" name="username">
                                </div>
                                
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="text" class="form-control" id="" placeholder="someone@something.com" name="emailid">
                                </div>
                                
                                <div class="form-group">
                                    <label for="">Password</label>
                                    <input type="password" class="form-control" id="" placeholder="please provide a strong password" name="password">
                                </div>



                                <button type="submit" name="register" class="btn btn-primary">Submit</button>
                            </form>

                        </div>

                    </div>
                    <!-- /.row -->




                    <hr>


                    <?php
            include_once("includes/footer.php");
                    ?>

                </div>
                <!-- /.container -->

                <!-- jQuery -->
                <script src="js/jquery.js"></script>

                <!-- Bootstrap Core JavaScript -->
                <script src="js/bootstrap.min.js"></script>

        </body>

    </html>
