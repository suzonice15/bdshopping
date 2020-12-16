<?php $__env->startSection('pageTitle'); ?>
   Vendor Dashboard
<?php $__env->stopSection(); ?>
<?php $__env->startSection('mainContent'); ?>
    <br>
    <?php
    if ($verify->nid_image=='' && $verify->bank_image=='') {
    ?>
    <a href="<?php echo e(url('vendor/profile')); ?>/<?php echo e(Session::get('id')); ?>">
    <div class="row">
        <div class="col-lg-12 col-xs-12">
            <div class="alert alert-danger" role="alert">
              
              Please verify your first verification upload nid and bank statement image.
              
            </div>
        </div>
    </div>
    </a>
    <?php
    }else if($verify->first_verify=='0'){
    ?>
    <div class="row">
        <div class="col-lg-12 col-xs-12">
            <div class="alert alert-warning" role="alert">
              
              Please waiting for admin verification.
              
            </div>
        </div>
    </div>
    <?php
    }else if($verify->m_name==''||$verify->b_name==''){
    ?>
    <a href="<?php echo e(url('vendor/bank-account')); ?>">
    <div class="row">
        <div class="col-lg-12 col-xs-12">
            <div class="alert alert-danger" role="alert">
              Please verify your second verification.
            </div>
        </div>
    </div>
    </a>
    <?php
    }else if($verify->m_number==''||$verify->b_number==''){
    ?>
    <a href="<?php echo e(url('vendor/bank-account')); ?>">
    <div class="row">
        <div class="col-lg-12 col-xs-12">
            <div class="alert alert-danger" role="alert">
              Please verify your second verification.
            </div>
        </div>
    </div>
    </a>
    <?php
    }else if($verify->m_type==''||$verify->b_branch==''){
    ?>
    <a href="<?php echo e(url('vendor/bank-account')); ?>">
    <div class="row">
        <div class="col-lg-12 col-xs-12">
            <div class="alert alert-danger" role="alert">
              Please verify your second verification.
            </div>
        </div>
    </div>
    </a>
    <?php
    }else if($verify->m_service==''||$verify->b_bank==''){
    ?>
    <a href="<?php echo e(url('vendor/bank-account')); ?>">
    <div class="row">
        <div class="col-lg-12 col-xs-12">
            <div class="alert alert-danger" role="alert">
              Please verify your second verification.
            </div>
        </div>
    </div>
    </a>
    <?php 
    }else if($verify->second_verify=='0'){
    ?>

    <div class="row">
        <div class="col-lg-12 col-xs-12">
            <div class="alert alert-danger" role="alert">
              Please waiting for admin verification.
            </div>
        </div>
    </div>

    <?php
    }
    ?>
    <div class="row">
        <div class="container-fluid">
            <h3 style="text-align: center;background-color: green;color: white;height: 2%;padding: 5px;border: 2px solid black;size: auto;"><?php echo e($myBalance->vendor_shop); ?></h3>
            <!-- ./col -->
            <a href="<?php echo e(url('vendor/products/show')); ?>">
                <div class="col-md-3">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <h3><?php echo e($products); ?></h3>
                            <h4></h4>

                            <p>My Products</p>
                        </div>
                        
                    </div>
                </div>
            </a>
            
            <a href="<?php echo e(url('vendor/orders/show')); ?>">
                <div class="col-md-3">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <h3><?php echo e($vendorTotalOrder); ?></h3>
                            <h4></h4>

                            <p>Total Order</p>
                        </div>
                       
                    </div>
                </div>
            </a>
            <div class="col-md-3">
                <!-- small box -->
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3><?php echo e($verify->life_time_earning); ?></h3>
                        <h4></h4>

                        <p>Life Time Earing</p>
                    </div>
                    
                </div>
            </div>
            <div class="col-md-3">
                <!-- small box -->
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3><?php echo e($totalWithdrawAmount); ?></h3>
                        <h4></h4>

                        <p>Life Time Withdrow</p>
                    </div>
                    
                </div>
            </div>
            <div class="col-md-3">
                <!-- small box -->
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3><?php echo e($myBalance->amount); ?></h3>
                        <h4></h4>

                        <p>My Balance</p>
                    </div>
                    
                </div>
            </div>
            <div class="col-md-3">
                <!-- small box -->
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3><?php echo e($total_pending_order); ?></h3>
                        <h4></h4>

                        <p>Pending Order</p>
                    </div>
                    
                </div>
            </div>
            <div class="col-md-3">
                <!-- small box -->
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3><?php echo e($total_approved_order); ?></h3>
                        <h4></h4>

                        <p>Approved Order</p>
                    </div>
                    
                </div>
            </div>
            <div class="col-md-3">
                <!-- small box -->
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3><?php echo e($total_cancel_order); ?></h3>
                        <h4></h4>

                        <p>Cancel Order</p>
                    </div>
                    
                </div>
            </div>
            <div class="col-md-3">
                <!-- small box -->
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3><?php echo e($total_refund_order); ?></h3>
                        <h4></h4>

                        <p>Refund Order</p>
                    </div>
                    
                </div>
            </div>
        </div>

    </div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\SXampp\htdocs\bdshoppingzon\resources\views/layouts/vendor_dashboard.blade.php ENDPATH**/ ?>