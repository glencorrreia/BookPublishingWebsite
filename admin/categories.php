<?php
    ob_start();
?>


<!DOCTYPE html>
<html lang="en">

<?php 
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

                                <?php include_once("includes/category/add-category.php");?>

                                <?php include_once("includes/category/edit-category.php");?>

                                <?php include_once("includes/category/view-category.php");?>


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
