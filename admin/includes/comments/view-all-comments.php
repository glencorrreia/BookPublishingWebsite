    <!--VIEW ALL POSTS SECTION-->
                                  <div class="col-xs-12">
                                        <table class="table table-bordered table-hover">
                                            
                                            <tr>
                                                <th>ID</th>
                                                <th>Author</th>
                                                <th>Comment Title</th>
                                                <th>Email</th>
                                                <th>Status</th>
                                                <th>In Response To</th>
                                                <th>Date</th>
                                                <th>Approve</th>
                                                <th>Unapprove</th>
                                                <th>Delete</th>
                                            </tr>
                                            
                                            <tbody>
                                                 <?php
                                                    
                                                    $user_role=$_SESSION['user_role'];
                                                    if($user_role == "admin"){
                                                        $query="Select * from comments";    
                                                    }else{
                                                        $user_id=$_SESSION['user_id'];
                                                        $query="select * from comments where comment_post_id in (select posts.post_id from posts where post_author=$user_id)";
                                                    }
                                                    
                                                    $select_all_comments_query=mysqli_query($connection, $query);
                            
                                                    while($row=mysqli_fetch_assoc($select_all_comments_query)){
                                                            $comment_id=$row['comment_id'];
                                                            $comment_post_id=$row['comment_post_id'];
                                                            $comment_author=$row['comment_author'];
                                                            $comment_email=$row['comment_email'];
                                                            $comment_content=$row['comment_content'];
                                                            $comment_status=$row['comment_status'];
                                                            $comment_date=$row['comment_date'];
                                                            
                                                        
                                                            
                                                            echo "<tr>";
                                                            echo "<td>$comment_id</td>";
                                                            echo "<td>$comment_author</td>";
                                                            echo "<td>$comment_content</td>";
                                                            echo "<td>$comment_email</td>";
                                                            echo "<td>$comment_status</td>";
                                                        
                                                            $query="Select * from posts where post_id=$comment_post_id";
                                                            $post_query=mysqli_query($connection, $query);
                                                            confirmQuery($post_query);
                                                            if($row=mysqli_fetch_assoc($post_query)){
                                                                $comment_post_title=$row['post_title'];
                                                            }
                                                        
                                                            echo "<td><a href='../post.php?p_id=$comment_post_id'>$comment_post_title</a></td>";
                                                            
                                                            echo "<td>$comment_date</td>";
                                                            
                                                        
                                                            $post_id=1;
                                                            
                                                        
                                                            echo "<td><a href='comments.php?approve=$comment_id' class='btn btn-success'><span class='fa fa-times'> </span>Approve</a></td>";
                                                            
                                                            echo "<td><a href='comments.php?unapprove=$comment_id' class='btn btn-warning'><span class='fa fa-times'> </span> Unapprove</a></td>";
                                                        
                                                            echo "<td><a href='comments.php?delete=$comment_id' class='btn btn-danger'><span class='fa fa-times'> </span> Delete</a></td>";
            
                                                            echo "</tr>";
                                                    }
                                                    ?>
                                                    
                                            </tbody>
                                        </table>
                                        <?php
                                      
                                            if(isset($_GET['approve'])){
                                                $approve_comment_id=$_GET['approve'];
                                                $query="Update comments  set comment_status='approve' where comment_id=$approve_comment_id";
                                                $approve_query=mysqli_query($connection,$query);
                                                confirmQuery($approve_query);
                                                header("Location: comments.php");
                                            }
                                      
                                            if(isset($_GET['unapprove'])){
                                                $unapprove_comment_id=$_GET['unapprove'];
                                                $query="Update comments  set comment_status='unapprove' where comment_id=$unapprove_comment_id";
                                                $unapprove_query=mysqli_query($connection,$query);
                                                confirmQuery($unapprove_query);
                                                header("Location: comments.php");
                                            }
                                      
                                      
                                      
                                            if(isset($_GET['delete'])){
                                                $delete_comment_id=$_GET['delete'];
                                                $query="Update posts set post_comment_count=post_comment_count-1 where post_id=(Select comment_post_id from comments where comment_id=$delete_comment_id)";
                                                
                                                $update_comment_count=mysqli_query($connection,$query);
                                                confirmQuery($update_comment_count);
                                                $query="Delete from comments where comment_id={$delete_comment_id}";
                                                $delete_query=mysqli_query($connection,$query);
                                                confirmQuery($delete_query);
                                                header("Location: comments.php");
                                            }
                                      ?>
                                    </div>
                                <!--END VIEW ALL POSTS SECTION-->
