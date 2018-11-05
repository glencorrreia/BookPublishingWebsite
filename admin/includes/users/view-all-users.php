<!--VIEW ALL USER SECTION-->
<div class="col-xs-12 table-responsive">

    <table class="table table-bordered table-hover">

        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Email</th>
            <th>Role</th>
            <th>Image</th>
            <th>Make Admin</th>
            <th>Make Subscriber</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>

        <tbody>
            <?php
                                                
                $query="Select * from users";
                $select_all_users_query=mysqli_query($connection, $query);

                while($row=mysqli_fetch_assoc($select_all_users_query)){
                        $user_id=$row['user_id'];
                        $username=$row['username'];
                        $user_firtname=$row['user_firstname'];
                        $user_lastname=$row['user_lastname'];
                        $user_email=$row['user_email'];
                        $user_role=$row['user_role'];
                        $user_image=$row['user_image'];





                        echo "<tr>";
                        echo "<td>$user_id</td>";
                        echo "<td>$username</td>";
                        echo "<td>$user_firtname</td>";
                        echo "<td>$user_lastname</td>";
                        echo "<td>$user_email</td>";
                        echo "<td>$user_role</td>";
                        echo "<td><img src='images/users/$user_image' class='img-rounded img-responsive' alt='Cinque Terre' width='50' ></td>";





                      //  echo "<td><a href='comments.php?approve=$comment_id' class='btn btn-success'><span class='fa fa-times'> </span>Approve</a></td>";

                        echo "<td><a href='users.php?make_admin=$user_id' class='btn btn-success'><span class='fa fa-check'></span>Make Admin</a></td>";

                        echo "<td><a href='users.php?make_subscriber=$user_id' class='btn btn-warning'><span class='fa fa-times'> </span>Make Subscriber</a></td>";

                        echo "<td><a href='users.php?edit_user=$user_id&source=edit_user' class='btn btn-danger'><span class='fa fa-pencil'> </span>Edit</a></td>";   
                    
                        echo "<td><a href='users.php?delete=$user_id' class='btn btn-danger'><span class='fa fa-trash'> </span> Delete</a></td>";
                        echo "</tr>";
                    }   
                ?>

        </tbody>
    </table>

    <?php
                                      
        if(isset($_GET['make_admin'])){
            $admin_user_id=$_GET['make_admin'];
            $query="Update users set user_role='admin' where user_id={$admin_user_id}";
            $admin_query=mysqli_query($connection,$query);
            confirmQuery($admin_query);
            header("Location: users.php");
        }

        if(isset($_GET['make_subscriber'])){
            $subscriber_user_id=$_GET['make_subscriber'];



            $query="Update users set user_role='subscriber' where user_id={$subscriber_user_id}";
            $subscriber_query=mysqli_query($connection,$query);
            confirmQuery($subscriber_query);
            header("Location: users.php");
        }



        if(isset($_GET['delete'])){
            $delete_user_id=$_GET['delete'];
                    $query="Delete from users where user_id={$delete_user_id}";
            $delete_query=mysqli_query($connection,$query);
            confirmQuery($delete_query);
            header("Location: users.php");
        }
  ?>
</div>
<!--END VIEW ALL POSTS SECTION-->
