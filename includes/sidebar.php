<!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">

               
               
               
               
               
               
                <!-- Blog Search Well -->
                <div class="well">
                    <h4>Blog Search</h4>
                    <form action="search.php" method="POST">
                    <div class="input-group">
                        <input type="text" class="form-control" name="search">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="submit" name="submit">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
                    </div>
                    </form>
                    <!-- /.input-group -->
                </div>
                
                
                <?php
                    
                        $query="Select * from categories";
                        $select_all_categories_query=mysqli_query($connection, $query);
                    
                ?>
                
                
                
                <!--Login-->
                 <div class="well">
                    <h4>Login</h4>
                    <form action="includes/login.php" method="POST">
                    <div class="form-group">
                        <input name="username" type="text" class="form-control" placeholder="Enter your username">
                    </div>
                    
                    <div class="form-group">
                        <input placeholder="Enter password" type="password" name="password" class="form-control">
                    </div>
                    
                    <div class="form-group">
                        <button class="btn btn-default" name="login" type="submit">
                            <span class="glyphicon glyphicon-search"></span>
                            Login
                        </button>
                        
                    </div>
                    </form>
                    <!-- /.input-group -->
                </div>
                
                
                
                
                
                

                <!-- Blog Categories Well -->
                <div class="well">
                    <h4>Blog Categories</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                               <?php                              while($row=mysqli_fetch_assoc($select_all_categories_query)){
                                $cat_title=$row['cat_title'];
                                $cat_id=$row['cat_id'];
                                echo "<li><a href='categories.php?c_id=$cat_id'>$cat_title</a></li>";
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>

                <!-- Side Widget Well -->
                <div class="well">
                    <h4>Side Widget Well</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
                </div>
                
                
                

            </div>