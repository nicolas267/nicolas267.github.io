<?php $__env->startSection('content'); ?>
<section class="content-header">
    <h1>
        Create User Type
    </h1>
    <ol class="breadcrumb">
        <li>
            <a href="#">
                <i class="fa fa-dashboard">
                </i>
                Home
            </a>
        </li>
        <li class="active">
            User Type
        </li>
        <li class="active">
            Create User Types
        </li>
    </ol>
</section>
<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <!-- form start -->
            <form role="form" action="<?php echo e(action('Usertype@store')); ?>" method="post">
              <?php echo csrf_field(); ?>
              <div class="box-body">
                <div class="form-group">
                  <label >User Type</label>
                  <input type="text" class="form-control" name="UserType" placeholder="User Type">
                </div>
              </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Create</button>
              </div>
            </form>
          </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>