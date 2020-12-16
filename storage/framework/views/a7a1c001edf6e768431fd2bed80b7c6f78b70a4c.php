<?php $__env->startSection('pageTitle'); ?>
    All Admin Users List
<?php $__env->stopSection(); ?>
<?php $__env->startSection('mainContent'); ?>

<div class="box-body">
    <div class="table-responsive" >
        <table id="example1" class="table table-bordered table-striped table-responsive ">
            <thead>
            <tr>
                <th>Sl</th>
                <th >Picture</th>
                <th >Name </th>
                <th >Phone </th>
                <th >Email </th>
                
                <th >Degination </th>
                <th >date </th>
                <th >Action </th>
            </tr>
            </thead>
            <tbody>

                <?php if(isset($users)): ?>
<?php $i=0;?>
            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e(++$i); ?></td>
                <td>
                  <?php if(isset($user->picture)): ?>
                    <img src="<?php echo e(URL::to('/public')); ?>/uploads/users/<?php echo e($user->picture); ?>" width="50" height="50"/>

                   <?php else: ?>
                    <img src="<?php echo e(URL::to('/public')); ?>/uploads/user/user.png" width="50" height="50"/>
                    <?php endif; ?>
                </td>
                <td><?php echo e($user->name); ?> </td>
                <td><?php echo e($user->user_phone); ?> </td>
                <td><?php echo e($user->email); ?> </td>

                <td><?php echo e($user->status); ?></td>
                <td><?php echo e(date('d-m-Y',strtotime($user->registered_date))); ?></td>
                <td>
                    <a title="edit" href="<?php echo e(url('/admin/user/')); ?>/<?php echo e($user->admin_id); ?>">
                        <span class="glyphicon glyphicon-edit btn btn-success"></span>
                    </a>


                    <a title="delete" href="<?php echo e(url('/admin/user/delete')); ?>/<?php echo e($user->admin_id); ?>" onclick="return confirm('Are you want to delete this information :press Ok for delete otherwise Cancel')">
                        <span class="glyphicon glyphicon-trash btn btn-danger"></span>
                    </a></td>
            </tr>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </tbody>

        </table>

    </div>



</div>


<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\SXampp\htdocs\bdshoppingzon\resources\views/admin/user/index.blade.php ENDPATH**/ ?>