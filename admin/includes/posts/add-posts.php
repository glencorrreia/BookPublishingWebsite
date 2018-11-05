<?php
    if(isset($_POST['create_post'])){
        $post_title=$_POST['title'];
        $post_author=$_SESSION['user_id'];
        $post_category_id=$_POST['post_category_id'];
        $post_status=$_POST['status'];
        
        if($post_status==""||!isset($post_status)){
            $post_status="draft";
        }
        
            
        
        
        $post_image=$_FILES['image']['name'];
        $post_image_temp=$_FILES['image']['tmp_name'];
        
        $post_tags=$_POST['post_tags'];
        $post_content=$_POST['post_content'];
        //$post_date=date('d-m-y');
        $post_comment_count=0;
        
        
        move_uploaded_file($post_image_temp,"../images/$post_image");
        
        $query="INSERT INTO posts (post_category_id,post_title,post_author,post_date,post_image,post_content,post_tags,post_comment_count, post_status) VALUES ($post_category_id,'$post_title','$post_author',now(),'$post_image','$post_content','$post_tags',$post_comment_count, '$post_status')";
        
        $create_post_query= mysqli_query($connection,$query);
        confirmQuery($create_post_query);
    }
?>
   

   
   <form id="addPost" action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="post_title">Post Title</label>
        <input type="text" class="form-control" name="title" id="post_title">
    </div>

    <div class="form-group">
        <label for="post_category">Post Category ID</label>
        <input type="text" class="form-control" name="post_category_id" id="post_category">
    </div>

    <div class="form-group">
        <label for="post_status">Post Status</label>
        <input type="text" class="form-control" name="status" id="post_status">
    </div>

    <div class="form-group">
        <label for="post_image">Post Image</label>
        <input type="file" class="form-control" name="image" id="post_image">
    </div>

    <div class="form-group">
        <label for="post_tags">Post Tags</label>
        <input type="text" class="form-control" name="post_tags" id="post_tags">
    </div>

    <div class="form-group">
        <label for="post_content">Post Content</label>
        <textarea cols="30" row="10" type="text" class="form-control" name="post_content" id="post_content"></textarea>
    </div>
    
    <div class="from-group">
        <div class="col-md-9 col-md-offset-3">
            <div id="messages"></div>
        </div>
    </div>
    

    <div class="form-group">
        <input type="submit" class="btn btn-primary" name="create_post" value="Publish Post">
    </div>


</form>
