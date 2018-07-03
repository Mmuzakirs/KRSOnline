<?php $__env->startSection('content'); ?>

 <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>User Profile</h3>
              </div>
            </div>
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>ID</b> <a class="pull-right"><?php echo e(Auth::user()->id); ?></a>
                </li>
                <li class="list-group-item">
                  <b>Username</b> <a class="pull-right"><?php echo e(Auth::user()->name); ?></a>
                </li>
                <li class="list-group-item">
                  <b>Email</b> <a class="pull-right"><?php echo e(Auth::user()->email); ?></a>
                </li>
              </ul>
            </div>
              <div class="form-group">
                        <div class="col-md-10 col-md-offset-11">
                            <button type="button" class="btn btn-warning"><a href="/editz">Edit</a></button>
                        </div>
                      </div>
            <!-- /.box-body -->
          </div>
      </div>
          <!-- /.box -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('user.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>