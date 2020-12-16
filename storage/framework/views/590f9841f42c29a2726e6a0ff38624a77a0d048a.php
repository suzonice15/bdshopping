
<?php $__env->startSection('pageTitle'); ?>
    Edit Profile
<?php $__env->stopSection(); ?>
<?php $__env->startSection('mainContent'); ?>

<style>
    .has-error {
        border-color: red;
    }
</style>
<div class="box-body">
    <?php if(count($errors) > 0): ?>
        <div class=" alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4><i class="icon fa fa-ban"></i> Alert!</h4>
            <ul>

                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <li style="list-style: none"><?php echo e($error); ?></li>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </ul>
        </div>
    <?php endif; ?>

    <div class="col-sm-offset-0 col-md-7">
        <form action="<?php echo e(url('vendor/profileUpdate')); ?>/<?php echo e($user->vendor_id); ?>" class="form-horizontal" method="post"
              enctype="multipart/form-data">
            <?php echo csrf_field(); ?>


                <div class="form-group "><label for="media_title">First Name<span class="required">*</span></label>
                    <input type="text" required="" class="form-control" name="vendor_f_name" value="<?php echo e($user->vendor_f_name); ?>">

                </div>

                <div class="form-group "><label for="media_title">Last Name<span class="required">*</span></label>
                    <input type="text" required="" class="form-control" name="vendor_l_name" value="<?php echo e($user->vendor_l_name); ?>">

                </div>

                <div class="form-group "><label for="media_title">Email<span class="required">*</span></label>
                    <input type="text" id="" required="" class="form-control" name="vendor_email"
                           value="<?php echo e($user->vendor_email); ?>">

                </div>

                <div class="form-group "><label for="media_title">Phone<span class="required">*</span></label>
                <input type="text" id="vendor_phone" required="" class="form-control" name="vendor_phone"
                value="<?php echo e($user->vendor_phone); ?>">

                </div>

                <div class="form-group">
                    <label class="" >Address </label>
                    <div class=" inputGroupContainer">
                        <div class="input-group">
                            <textarea name="vendor_address"  placeholder="addrees" class="form-control" rows="4" cols="420" required=""><?php echo e($user->vendor_address); ?></textarea>

                        </div>
                    </div>
                </div>

                <div class="form-group "><label for="media_title">Password</label>
                    <input type="vendor_password" class="form-control" name="vendor_password">
                </div>

				<?php if($user->vendor_image): ?>
				  <div class="form-group featured-image">

					<img style="height: 200px; width: 200px;" src="<?php echo e(URL::to('/public')); ?>/uploads/users/<?php echo e($user->vendor_image); ?>">

                </div>
				<?php endif; ?>

                <div class="form-group featured-image">
                    <label>Picture</label>
                    <input type="file" class="form-control" name="vendor_image">

                </div>

                <?php if($user->nid_image): ?>
                  <div class="form-group featured-image">

                    <img style="height: 200px; width: 200px;" src="<?php echo e(URL::to('/public')); ?>/uploads/users/<?php echo e($user->nid_image); ?>">

                </div>
                <?php endif; ?>

                <div class="form-group featured-image">
                    <label>Nid Image</label>
                    <input type="file" class="form-control" name="nid_image">

                </div>

                <?php if($user->bank_image): ?>
                  <div class="form-group featured-image">

                    <img style="height: 200px; width: 200px;" src="<?php echo e(URL::to('/public')); ?>/uploads/users/<?php echo e($user->bank_image); ?>">

                </div>
                <?php endif; ?>

                <div class="form-group featured-image">
                    <label>Bank Checkbook Image</label>
                    <input type="file" class="form-control" name="bank_image">

                </div>

                <div class="box-footer">
                    <input type="submit" class="btn btn-success pull-right" value="Update">

                </div>

        </form>
    </div>
    <div class="col-md-5">
        <div class="panel panel-primary">
            <div class="panel-body">
                <legend>
                    <img style="height: 150px; width: 150px;" src="<?php echo e(URL::to('/public')); ?>/uploads/users/<?php echo e($user->vendor_image); ?>">

                    My Profile</legend>
                <h4>First Name: <?php echo e($user->vendor_f_name); ?></h4>
                <h4>Last Name: <?php echo e($user->vendor_l_name); ?></h4>
                <h4>Email: <?php echo e($user->vendor_email); ?></h4>
                <h4>Phone : <?php echo e($user->vendor_phone); ?></h4>
                <h4>Address : <?php echo e($user->vendor_address); ?></h4>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\SXampp\htdocs\bdshoppingzon\resources\views/website/vendor/editProfile.blade.php ENDPATH**/ ?>