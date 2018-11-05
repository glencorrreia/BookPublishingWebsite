<?php
    ob_start();
?>


<!DOCTYPE html>
<html lang="en">

<?php 
       $page="users";
    include_once("includes/header.php");
    include_once("functions.php");
    $username=checkUser();
?>

    <body>



        <?php
        if($connection)
            echo "Hello";
    ?>
            <div id="wrapper">

                <!--NAVIGATION-->
                <?php include_once("includes/navigation.php");?>

                <div id="page-wrapper">

                    <div class="container-fluid">

                        <!-- Page Heading -->
                        <div class="row">
                            <div class="col-lg-12">
                
                                <h1 class="page-header">
                                    Welcome Admin
                                    <small><?php echo $username;?></small>
                                </h1>
                                
                                <?php
                                    $source="";
                                    if(isset($_GET['source'])){
                                        $source=$_GET['source'];
                                    }
                                    switch($source){
                                        case 'add_user':
                                            include_once("includes/users/add-user.php");
                                            break;
                                        case 'edit_user':
                                            include_once("includes/users/edit-user.php");
                                            break;
                                        default:
                                            include_once("includes/users/view-all-users.php");
                                    }
                                ?>      


                            </div>
                        </div>
                        <!-- /.row -->

                    </div>
                    <!-- /.container-fluid -->

                </div>
                <!-- /#page-wrapper -->

            </div>
            <!-- /#wrapper -->

            <!-- jQuery -->
            <script src="js/jquery.js"></script>

            <!-- Bootstrap Core JavaScript -->
            <script src="js/bootstrap.min.js"></script>

    </body>

    </html>
