<?php
    if(isset($_POST['create_comment'])){
        $comment_post_id=$_GET['p_id'];
        $comment_author=$_POST['comment_author'];
        $comment_email=$_POST['comment_email'];
        $comment_content=$_POST['comment_content'];
        
        
        $query="INSERT into comments (comment_post_id, comment_author, comment_email, comment_content, comment_status, comment_date) values ($comment_post_id, '$comment_author', '$comment_email', '$comment_content', 'unapproved', now())";
        
        $create_comment_query=mysqli_query($connection,$query);
        confirmQuery($create_comment_query);
        
        $query="Update posts set post_comment_count =post_comment_count+1 Where post_id=$comment_post_id";
        $increment_comment_count=mysqli_query($connection,$query);
        
        header("Location: post.php?p_id=$comment_post_id");
    }
?>



<!-- Blog Comments -->

<!-- Comments Form -->
<div class="well">
    <h4>Leave a Comment:</h4>
    <form role="form" method="post" action="">

        <div class="form-group">
            <label for="author">Author</label>
            <input type="text" class="form-control" id="author" name="comment_author">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" id="email" name="comment_email">
        </div>


        <div class="form-group">
            <label for="comment">Your comment</label>
            <textarea id="comment" class="form-control" rows="3" name="comment_content"></textarea>
        </div>
        
        
        <button type="submit" class="btn btn-primary" name="create_comment">Submit</button>
    </form>
</div>
<!--End of comment form-->
<hr>

<!-- Posted Comments -->

<?php
    $comment_post_id=$_GET['p_id'];
    $query="Select * from comments where comment_post_id=$comment_post_id and comment_status='approve' Order by comment_id DESC";
    $select_all_comments=mysqli_query($connection,$query);
    
    while($row=mysqli_fetch_assoc($select_all_comments)){
        
        $comment_author=$row['comment_author'];
        $comment_content=$row['comment_content'];
        $comment_date=$row['comment_date'];
?>



<!-- Comment -->
<div class="media" style="overflow:auto jk">
    <a class="pull-left" href="#">
        <img class="media-object" src="http://placehold.it/64x64" alt="">
    </a>
    <div class="media-body">
        <h4 class="media-heading"><?php echo $comment_author;?>
            <small><?php echo $comment_date;?></small>
        </h4>
        <?php echo $comment_content;?>
    </div>
</div>


<?php
    }
?>
