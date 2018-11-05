<?php
    if(isset($_POST['checkBoxArray'])){
        $bulk_options=$_POST['bulk_options'];
        foreach($_POST['checkBoxArray'] as $postValueId){
            switch($bulk_options){
                case 'published':
                    case 'draft':
                    $query="Update posts SET post_status='$bulk_options' where post_id=$postValueId";
                    $update_status=mysqli_query($connection,$query);
                    header("Location: posts.php");
                    break;
                case 'delete':
                    $query="delete from posts where post_id=$postValueId";
                    $update_status=mysqli_query($connection,$query);
                    header("Location: posts.php");
                    break;
            }
        }
    }
?>    
                                
                                
                                
                                <!--VIEW ALL POSTS SECTION-->
                                 
                                  <div class="col-xs-12">
                                       <form action="" method="post">
                                       
                                            <div id="bulkOptionsContainer"  class="col-xs-4">
                                                <select name="bulk_options"  class="form-control" >
                                                    <option value="">Select Option</option>
                                                    <option value="published">Published</option>
                                                    <option value="draft">Draft</option>
                                                    <option value="delete">Delete</option>
                                                 </select>
                                            </div>
                                            <div class="col-xs-4">
                                                <input type="submit" name="submit_bulk_option" class="btn btn-primary" value="Apply">
                                                <a class="btn btn-warning" href="posts.php?source=add_post">Add New</a>
                                            </div>
                                            
                                             <table class="table table-bordered table-hover">
                                            <tr>
                                                <th><input type="checkbox"  id="selectAllBoxes" class="form-control"></th>
                                                <th>ID</th>
                                                <th>Author</th>
                                                <th>Title</th>
                                                <th>Category</th>
                                                <th>Status</th>
                                                <th>Image</th>
                                                <th>Tags</th>
                                                <th>Comments</th>
                                                <th>Date</th>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                            
                                            <tbody>
                                                 <?php
                                                    $user_role=$_SESSION['user_role'];
                                                    if($user_role=="admin"){
                                                    $query="Select * from posts,users where posts.post_author=users.user_id order by posts.post_date DESC";
                                                    }else{
                                                        $user_id=$_SESSION['user_id'];
                                                        $query="Select * from posts,users where posts.post_author=users.user_id and posts.post_author=$user_id order by posts.post_date DESC";
                                                    }
                                                    $select_all_posts_query=mysqli_query($connection, $query);
                            
                                                    while($row=mysqli_fetch_assoc($select_all_posts_query)){
                                                            $post_id=$row['post_id'];
                                                            $post_author=$row['user_firstname']."".$row['user_lastname'];
                                                            $post_title=$row['post_title'];
                                                            $post_category_id=$row['post_category_id'];
                                                            $post_status=$row['post_status'];
                                                            $post_image=$row['post_image'];
                                                            $post_tags=$row['post_tags'];
                                                            $post_comment_count=$row['post_comment_count'];
                                                            $post_date=$row['post_date'];
                                                        
                                                            
                                                            echo "<tr>";
                                                            echo"<td><input class='checkBoxes' type='checkbox' name='checkBoxArray[]' value='$post_id'></td>";
                                                            echo "<td>$post_id</td>";
                                                            echo "<td>$post_author</td>";
                                                            echo "<td>$post_title</td>";
                                                        
                                                        
                                                            $query="Select * from categories where cat_id=$post_category_id";
                                                            $cat_query=mysqli_query($connection, $query);
                                                            confirmQuery($cat_query);
                                                            if($row=mysqli_fetch_assoc($cat_query)){
                                                                
                                                                $post_category_title=$row['cat_title'];
                                                            }
                                                        
                                                        
                                                        
                                                        
                                                            echo "<td>$post_category_title</td>";
                                                            echo "<td>$post_status</td>";
                                                            echo "<td><img  class='img-responsive' src='../images/$post_image' alt='post image' height='100px'></td>";
                                                            echo "<td>$post_tags</td>";
                                                            echo "<td>$post_comment_count</td>";
                                                            echo "<td>$post_date</td>";
                                                            echo "<td><a href='posts.php?delete=$post_id' class='btn btn-danger'><span class='fa fa-times'> </span> Delete</a></td>";
                                                            echo "<td><a href='posts.php?source=edit_post&p_id=$post_id' class='btn btn-primary'><span class='fa fa-times'> </span> Edit</a></td>";
                                                            echo "</tr>";
                                                    }
                                                    ?>
                                                    
                                            </tbody>
                                        </table>
                                        </form>
                                        <?php
                                            if(isset($_GET['delete'])){
                                                $delete_post_id=$_GET['delete'];
                                                $query="Delete from posts where post_id={$delete_post_id}";
                                                $delete_query=mysqli_query($connection,$query);
                                                confirmQuery($delete_query);
                                                header("Location: posts.php");
                                            }
                                      ?>
                                    </div>
                                <!--END VIEW ALL POSTS SECTION-->
