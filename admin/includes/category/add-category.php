<!--Add catgeory form-->
                                <div class="col-xs-6">
                                  <h3>Add Category</h3>
                                   <?php
                                        addCategory();
                                        
                                    ?>
                                   
                                    <form action="" method="post">
                                        <div class="form-group">
                                            <label for="cat_title">Category Title</label>
                                            <input class="form-control" type="text" name="input_cat_title" id="cat_title">
                                        </div>
                                        <div class="form-group">
                                            <input class="btn btn-primary" type="submit" name="submit" value="Add Category">
                                        </div>
                                    </form>
                                </div>
 <!--end of add category form-->