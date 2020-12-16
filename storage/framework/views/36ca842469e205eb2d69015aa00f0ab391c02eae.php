<?php
$home_cat_section = explode(",", get_option('home_cat_section'));
Arr::forget($home_cat_section,'0');


 if($home_cat_section){
foreach ($home_cat_section as  $category) {
//  $category_id=$category->category_id;
$category_info = get_category_info($category);
        if($category_info){


$products= DB::table('product')->select('product.product_id','product_title','product_name','discount_price','product_price','folder','feasured_image','sku')->join('product_category_relation','product.product_id','=','product_category_relation.product_id')
        ->where('product_category_relation.category_id',$category)->where('status','=',1)->orderBy('modified_time','desc')->paginate(10);
?>
<div class="container remove_class"
     style="background-color: white; margin-top: 23px; margin-bottom: 0px; padding-left: 27px; padding-right: 19px;">
    <div class="category-tabs" style="margin-top: 9px; border-bottom: 3px solid #244A04; margin-left: -14px;"><a
                class="parent"
                style="background-color:#244A04; padding: 4px 19px; color: white; margin: 22px -3px auto; margin-bottom: auto; margin-bottom: auto; height: 59px; margin-bottom: -29px; font-size: 16px; border-radius: 6px;"
                href="<?php echo e(url('/')); ?>/category/<?php echo e($category_info->category_name); ?>"><?php echo e($category_info->category_title); ?></a>
    </div>



    <div id="demos" class="row">
        <div class="large-12 columns">
            <div class="owl-carousel owl-theme owl-loaded owl-drag">
                <div class="owl-stage-outer">
                    <div class="owl-stage"
                         style="transform: translate3d(0px, 0px, 0px); transition: all 0.5s ease 0s; width: 1796px;">

                        <?php


                        if($products){
                        foreach ($products as  $product){

                        if ($product->discount_price) {
                            $sell_price = $product->discount_price;
                        } else {
                            $sell_price = $product->product_price;
                        }
                        ?>


                        <div class="owl-item " style="width: 169.571px; margin-right: 10px;">
                            <div class="item"><a
                                        href="<?php echo e(url('/')); ?>/<?php echo e($product->product_name); ?>"
                                        id="1148"> <img class="img-responsive " style="margin: 0 auto;padding:5px"
                                                        src="<?php echo e(url('/public/uploads')); ?>/<?php echo e($product->folder); ?>/thumb/<?php echo e($product->feasured_image); ?> "
                                                        title=" <?php echo e($product->product_title); ?>">
                                </a>
                                <div class="pro-desc">
                                    <div class="pro-name"><a
                                                href="<?php echo e(url('/')); ?>/<?php echo e($product->product_name); ?>">
                                            <?php echo e($product->product_title); ?></a></div>
                                    <div style="margin-bottom: -1px;"></div>
                                    <div class="clearfix">
                                        <div class="price bn">
                                            <?php
                                            if($product->discount_price){


                                            ?>
                                            <del>   <?php echo '৳' . $product->product_price; ?></del>

                                            <?php } ?>
                                            <?php echo '৳' . $sell_price; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php } }?>





                    </div>
                </div>
                <div class="owl-nav disabled">
                    <button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span>
                    </button>
                    <button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button>
                </div>
                <div class="owl-dots disabled"></div>
            </div>
        </div>
    </div>



</div>


<?php } } } ?><?php /**PATH C:\SXampp\htdocs\bdshoppingzon\resources\views/website/home_page_ajax_category.blade.php ENDPATH**/ ?>