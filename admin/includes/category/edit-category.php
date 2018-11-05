<!--Edit catgeory form-->
                                    <?php
                                        editCategory();
                                        $edit_cat_title=fetchCategoryForEdit();
                                    ?>
                                     <div class="col-xs-6">
                                    <?php if(isset($edit_cat_title)){?>
                                    <h3>Edit Category</h3>
                                    <form action="" method="post">
                                        <div class="form-group">
                                            <label for="cat_title">Category Title</label>
                                            <input class="form-control" type="text" name="cat_title" id="cat_title"
                                            value="<?php
                                                   echo $edit_cat_title;
                                                   ?>">
                                        </div>
                                        <div class="form-group">
                                            <input class="btn btn-primary" type="submit" name="edit_submit" value="Edit Category">
                                        </div>
                                    </form>
                                    <?php
                                        }
                                    ?>
                                </div>
                                <!--end of edit category form-->