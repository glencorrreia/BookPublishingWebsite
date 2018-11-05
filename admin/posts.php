<?php
    ob_start();
?>


<!DOCTYPE html>
<html lang="en">

<?php
    $page="posts";
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
                                    Welcome to C Panel 
                                    <small><?php echo $username;?></small>
                                </h1>
                                
                                <?php
                                    $source="";
                                    if(isset($_GET['source'])){
                                        $source=$_GET['source'];
                                    }
                                    switch($source){
                                        case 'add_post':
                                            include_once("includes/posts/add-posts.php");
                                            break;
                                        case 'edit_post':
                                            include_once("includes/posts/edit-posts.php");
                                            break;
                                        default:
                                            include_once("includes/posts/view-all-posts.php");
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
            
            
          
            <!-- Bootstrap Core JavaScript -->
            <script src="js/bootstrap.min.js"></script>
            
            
              <!--Bootstrap Validator-->
            <script src="js/bootstrap-validator.min.js"></script>
 
            
            <script src="js/script.js"></script>

    </body>

    </html>
