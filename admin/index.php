<?php
    ob_start();
?>
<!DOCTYPE html>
<html lang="en">

<?php 
    $page="dashboard";
    include_once("includes/header.php");
    include_once("functions.php");
    $username=checkUser();
   
?>

 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Data','Count'],
          <?php
                $element_text=['Active Posts','Posts','Categories','Users','Comments','Pending'];
                $element_count=[$active_post,$pending_post,$categories_count,$user_count,$approved_comment_count,$unapprovrd_comment_count];
                for($i=0;$i<6;$i++){
                    echo "['$element_text[$i]',$element_count[$i],]";
                }
            ?>
           
        ]);

        var options = {
          chart: {
            title: 'Company Performance',
            subtitle: 'Sales, Expenses, and Profit: 2014-2017',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>

<?php
    $page="dashboard";
    include_once("includes/header.php");
    $time_out=time()-60;
    $session=session_id();
    $query="select * from users_online where time>'$time_out' and session='$session'";
    $check_active_session=mysqli_query($connection,$query);
    if(mysqli_num_rows($check_active_session)==0){
        mysqli_query($connection,"DELETE from users_online where session ='$session'");
        $_SESSION['username']=null;
                $_SESSION['user_role']=null;
                $_SESSION['user_id']=null;
                header("Location: ../index.php");
        die("you have been logged out!");
    }
    ?>

    
<body>
    

    <div id="wrapper">

       <!--NAVIGATION-->
        <?php
            include_once("includes/navigation.php");
        ?>

        <div id="page-wrapper">
            

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome Admin
                            <small><?php echo $username?></small>
                        </h1>
                    </div>
                </div>
                <!-- /.row -->
                
                <?php
            include_once("includes/dashboard.php");
                ?>
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    
    
   
    
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    
    
    <script src="js/script.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
