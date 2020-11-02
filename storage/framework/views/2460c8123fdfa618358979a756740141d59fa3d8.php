

    <div class="container remove_class">
        <div class="row row5 mt30">
            <div id="load_data">


                                            <span id="post-data">
                                                 <ul class="products row row5 mt30">
                                                     <div class="col-sm-12">




                                                         <?php if($products) {  ?>


                                                         <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                                             <?php
                                                             if ($product->discount_price) {
                                                                 $sell_price = $product->discount_price;
                                                             } else {
                                                                 $sell_price = $product->product_price;
                                                             }
                                                             ?>


                                                             <li style="list-style:none" class="col-xs-6 col-sm-2">
                                                                 <div class="pro-box">
                                                                     <div class="img-box">

                                                                         <div class="imgbox_overflwoe">
                                                                             <a href="javascript:void(0)" class="add_to_wish_list" data-product_id="2330 "
                                                                                title="Wishlist">&nbsp;</a><a
                                                                                     href="<?php echo e(url('/')); ?>/<?php echo e($product->product_name); ?>">
                                                                                 <img src="<?php echo e(url('/public/uploads')); ?>/<?php echo e($product->folder); ?>/thumb/<?php echo e($product->feasured_image); ?>"
                                                                                      style="height: 180px;" alt="Dhaka Bazar Product">
                                                                             </a>
                                                                         </div>
                                                                     </div>
                                                                     <div class="pro-desc">
                                                                         <div class="pro-name">
                                                                             <a href="<?php echo e(url('/')); ?>/<?php echo e($product->product_name); ?>"><?php echo e($product->product_title); ?></a>
                                                                         </div>
                                                                         <div class="clearfix">
                                                                             <h5>Code:<?php echo e($product->sku); ?></h5>
                                                                             <div class="price"> <?php
                                                                                 if($product->discount_price){


                                                                                 ?>
                                                                                 <del>   <?php echo '৳' . $product->product_price; ?></del>

                                                                                 <?php } ?> <?php echo '৳' . $sell_price; ?></div>
                                                                         </div>
                                                                     </div>
                                                                     <div class="add-btn-box">
                                                                         <a href="javascript:void(0)" class="add_to_cart" data-product_id="<?php echo e($product->product_id); ?>" data-picture="<?php echo e(url('/public/uploads')); ?>/<?php echo e($product->folder); ?>/small/<?php echo e($product->feasured_image); ?>">
                                                                             <span>Add to </span>Cart
                                                                         </a>
                                                                         <a href="javascript:void(0)" class="buy_now" data-product_id="<?php echo e($product->product_id); ?>" data-picture="<?php echo e(url('/public/uploads')); ?>/<?php echo e($product->folder); ?>/small/<?php echo e($product->feasured_image); ?>">
                                                                             Order<span> Now</span>
                                                                         </a></div>
                                                                 </div>
                                                             </li>

                                                         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                                                         <?php } ?>


                                                     </div>
                                                 </ul>
                                            </span>


            </div>

        </div>
    </div>
<?php /**PATH C:\SXampp\htdocs\bdshoppingzon\resources\views/website/product_search.blade.php ENDPATH**/ ?>