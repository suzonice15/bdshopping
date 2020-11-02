


    <?php foreach ( $products->unique('product_name') as $product) {

    if ($product->discount_price) {
        $sell_price = $product->discount_price;
    } else {
        $sell_price = $product->product_price;
    }

    ?>
    <li class="col-sm-2">
        <div class="pro-box">
            <div class="img-box">
                <div class="add-btn-box"><a href="javascript:void(0)" class="add_to_cart"
                                            data-product_id="<?php echo e($product->product_id); ?>" data-picture="<?php echo e(url('/public/uploads')); ?>/<?php echo e($product->folder); ?>/small/<?php echo e($product->feasured_image); ?>">
                        <i class="fa fa-shopping-cart"></i> Add to Cart </a> <a
                            href="javascript:void(0)" class="buy_now"  data-product_id="<?php echo e($product->product_id); ?>" data-picture="<?php echo e(url('/public/uploads')); ?>/<?php echo e($product->folder); ?>/small/<?php echo e($product->feasured_image); ?>">Order Now</a>
                </div>
                <a href="<?php echo e(url('/')); ?>/<?php echo e($product->product_name); ?>"> <img
                            src="<?php echo e(url('/public/uploads')); ?>/<?php echo e($product->folder); ?>/thumb/<?php echo e($product->feasured_image); ?>"
                            alt="<?php echo e($product->product_title); ?>"> </a></div>
            <div class="pro-desc">
                <div class="pro-name"><a
                            href="<?php echo e(url('/')); ?>/<?php echo e($product->product_name); ?>"> <?php echo e($product->product_title); ?></a></div>
                <div class="clearfix">
                    <div class="price bn"> ৳ 850.00</div>
                </div>
            </div>
        </div>
    </li>


    <?php  }?>
<?php /**PATH C:\SXampp\htdocs\bdshoppingzon\resources\views/website/related_product.blade.php ENDPATH**/ ?>