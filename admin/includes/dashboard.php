
   <div class="row">
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3"> <i class="fa fa-comments fa-5x"></i> </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge"><?php echo $post_count; ?></div>
                        <div>POSTS</div>
                    </div>
                </div>
            </div>
            <a href="#">
                <div class="panel-footer"> <span class="pull-left">View Details</span> <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3"> <i class="fa fa-tasks fa-5x"></i> </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge"><?php echo $approved_count; ?></div>
                        <div>Approved Comments</div>
                    </div>
                </div>
            </div>
            <a href="#">
                <div class="panel-footer"> <span class="pull-left">View Details</span> <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-yellow">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3"> <i class="fa fa-shopping-cart fa-5x"></i> </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge"><?php echo $unapproved_count; ?></div>
                        <div>Unapproved Comments</div>
                    </div>
                </div>
            </div>
            <a href="#">
                <div class="panel-footer"> <span class="pull-left">View Details</span> <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-red">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3"> <i class="fa fa-support fa-5x"></i> </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge"><?php echo $categories_count; ?></div>
                        <div>CATEGORIES</div>
                    </div>
                </div>
            </div>
            <a href="#">
                <div class="panel-footer"> <span class="pull-left">View Details</span> <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
</div>
<!-- /.row -->

<div class="row">
<div id="columnchart_material" style="height: 500px;" class="col-md-7"></div>
<div id="piechart_3d" style="height: 500px;" class="col-md-5"></div>
</div>
