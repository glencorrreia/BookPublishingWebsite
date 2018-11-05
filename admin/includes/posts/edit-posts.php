<?php
    if(isset($_POST['edit_post'])){
        
        if(isset($_GET['p_id']))
        {
        $post_id=$_GET['p_id'];
        $post_title=$_POST['title'];
        $post_author=$_POST['author'];
        $post_category_id=$_POST['post_category_id'];
        $post_status=$_POST['status'];
        
        
         $post_image=$_FILES['image']['name'];
        $post_image_temp=$_FILES['image']['tmp_name'];
        
        if(empty($post_image)){
            $query="Select * from posts where post_id=$post_id";
            $post_image_query=mysqli_query($connection,$query);
            confirmQuery($post_image_query);
            if($row=mysqli_fetch_assoc($post_image_query))
                $post_image=$row['post_image'];
        }
            
       
        
        $post_tags=$_POST['post_tags'];
        $post_content=$_POST['post_content'];
        //$post_date=date('d-m-y');
        $post_comment_count=0;
        
        
        move_uploaded_file($post_image_temp,"../images/$post_image");
        
        $query="update posts Set ";
        $query.="post_title='$post_title', ";
        $query.="post_category_id='$post_category_id', ";
        $query.="post_author='$post_author', ";
        $query.="post_content='$post_content', ";
        $query.="post_tags='$post_tags', ";
        $query.="post_status='$post_status', ";
        $query.="post_image='$post_image'  ";
        $query.="where post_id=$post_id";
       
        
        
        $update_query= mysqli_query($connection,$query);
        confirmQuery($update_query);
        }
    }
?>
   

   
   
   
   <?php
    if(isset($_GET['p_id'])){
        $edit_post_id=$_GET['p_id'];
        $query="SElect * from posts where post_id=$edit_post_id";
        $create_post_query=mysqli_query($connection,$query);
        confirmQuery($create_post_query);
        if($row=mysqli_fetch_assoc($create_post_query)){
    
        
        $post_title=$row['post_title'];
        $post_category_id=$row['post_category_id'];
        $post_author=$row['post_author'];        
        $post_status=$row['post_status'];
        $post_image=$row['post_image'];
        $post_tags=$row['post_tags'];
        $post_content=$row['post_content'];
            
        }

    }
?>



    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="post_title">Post Title</label>
            <input value="<?php echo $post_title;?>" type="text" class="form-control" name="title" id="post_title">
        </div>

        <div class="form-group">
            <label for="post_category">Post Category ID</label>
            <select name="post_category_id" id="post_category" class="form-control">
            <?php
                $query="Select * from categories";
                $select_all_categories_query=mysqli_query($connection, $query);
                confirmQuery($select_all_categories_query);
                while($row=mysqli_fetch_assoc($select_all_categories_query)){
                $cat_id=$row['cat_id'];
                $cat_title=$row['cat_title'];
                    if($post_category_id==$cat_id)
                        echo "<option value='$cat_id' selected>$cat_title</option>";
                    else
                        echo "<option value='$cat_id'>$cat_title</option>";
                }
            ?>
        </select>
        </div>

        <div class="form-group">
            <label for="post_author">Post Author</label>
            <input value="<?php echo $post_author;?>" type="text" class="form-control" name="author" id="post_author">
        </div>

        <div class="form-group">
            <label for="post_status">Post Status</label>
            <select name="status" id="post_status" class="form-control">
            <option value="draft">Draft</option>
            <option value="published"  <?php
                        if($post_status=="published"){
                            echo "selected";
                        }
                    ?> >Published</option>
        </select>
        </div>

        <div class="form-group">
            <label for="">Current Image</label>
            <img src="../images/<?php echo $post_image?>" width="100px" alt="" class="img-responsive">
        </div>

        <div class="form-group">
            <label for="post_image">Post Image</label>
            <input type="file" class="form-control" name="image" id="post_image">
        </div>

        <div class="form-group">
            <label for="post_tags">Post Tags</label>
            <input type="text" value="<?php echo $post_tags;?>" class="form-control" name="post_tags" id="post_tags">
        </div>

        <div class="form-group">
            <label for="post_content">Post Content</label>
            <textarea cols="30" row="10" type="text" class="form-control" name="post_content" id="post_content" height="100px">
            <?php echo $post_content;?>
        </textarea>
        </div>

        <div class="form-group">
            <input type="submit" class="btn btn-primary" name="edit_post" value="Edit Post">
        </div>


    </form>
