


                                    <!--                        Inserted Categories-->
                                    <div class="col-xs-12">
                                        <table class="table table-bordered table-hover">
                                            <tr>
                                                <th>ID</th>
                                                <th>Category Title</th>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                            <tbody>
                                                
                                                    <?php
                                                    
                                                    $query="Select * from categories";
                                                    $select_all_categories_query=mysqli_query($connection, $query);
                            
                                                    while($row=mysqli_fetch_assoc($select_all_categories_query)){
                                                        echo "<tr>";
                                                            $cat_title=$row['cat_title'];
                                                            $cat_id=$row['cat_id'];
                                                            echo "<td>$cat_id</td>";
                                                            echo "<td>$cat_title</td>";
                                                            echo "<td><a href='categories.php?delete=$cat_id' class='btn btn-danger'><span class='fa fa-times'> </span> Delete</a></td>";
                                                            echo "<td><a href='categories.php?edit=$cat_id' class='btn btn-primary'><span class='fa fa-pencil'></span> Edit</a></td>";
                                                            echo "</tr>";
                                                    }
                                                
                                                    if(isset($_GET['delete'])){
                                                        $delete_id=$_GET['delete'];
                                                        $query="delete from categories Where cat_id=$delete_id";
                                                        $delete_query=mysqli_query($connection,$query);
                                                        header("Location: categories.php");
                                                    }
                                                    ?>
                                            </tbody>
                                        </table>
                                    </div>


