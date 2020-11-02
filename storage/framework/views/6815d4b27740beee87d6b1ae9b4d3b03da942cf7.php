<?php $__env->startSection('mainContent'); ?>
    <style> .vertical-menu { width: 322px; } .vertical-menu a { background-color: #eee; color: black; display: block; padding: 12px; text-decoration: none; } .vertical-menu a:hover { background-color: #ccc; } .vertical-menu a.active { background-color: rebeccapurple; color: white; } @media  screen and (max-width: 750px){ .pro-box .add-btn-box { position: absolute; left: 0; right: 0; margin: 0 auto; bottom: -122px !important; background: none; text-align: center; opacity: 1 !important; }} </style>

    <?php

    $vendor_id = $product->vendor_id;
    $review_count = DB::table('review')->where('product_id', $product->product_id)->count();
    $reviews = DB::table('review')->where('product_id', $product->product_id)->get();

    if ($vendor_id > 0) {
        $vendor = DB::table('vendor')->select('vendor_link', 'vendor_shop')->where('vendor_id', $vendor_id)->first();
        $shop_link = $vendor->vendor_link;
        $shop_name = $vendor->vendor_shop;
    }

    /*# product stock availability #*/
    $product_availabie = $product->product_stock;
    $product_availability = '<span class="text-success"> In Stock</span>';
    if ($product_availabie == 0) {
        $product_availability = '<span class="text-danger">Out Of Stock</span>';

    }
    $product_id_related = $product->product_id;
    ?>

    <div class="breadcrumb"  style="display:none">
        <div class="container-fluid">
            <div class="breadcrumb-inner">
                <ul class="list-inline list-unstyled">
                    <li><a href="<?php echo e(url('/')); ?>">Home</a></li>
                    <?php if(isset($category_name_first)) { ?>
                    <li><a href="<?php echo e(url('/category/')); ?>/<?php echo e($category_name_first); ?>"><?php echo e($category_title_first); ?></a></li>
                    <?php } ?>
                    <?php if(isset($category_name_middle)) { ?>
                    <li><a href="<?php echo e(url('/category/')); ?>/<?php echo e($category_name_middle); ?>"><?php echo e($category_title_middle); ?></a></li>
                    <?php } ?>
                    <li><a href="<?php echo e(url('/category/')); ?>/<?php echo e($category_name_last); ?>"><?php echo e($category_title_last); ?></a></li>
                    <li class='active'><?php echo e($product->product_title); ?></li>
                </ul>
            </div>
            <!-- /.breadcrumb-inner -->
        </div>
        <!-- /.container -->
    </div>
    <section id="mpart" class="singleproduct remove_class" itemscope="" itemtype="http://schema.org/Product">
        <div class="container">
            <div class="row mt40">
                <div class="col-sm-12">
                    <div class="row">
                        <div id="desktop_picture" class="col-sm-4 images">
                            <img id="singleProduct_picture"
                                 src="<?php echo e(url('/public/uploads')); ?>/<?php echo e($product->folder); ?>/<?php echo e($product->feasured_image); ?>"
                                 data-zoom-image="<?php echo e(url('/public/uploads')); ?>/<?php echo e($product->folder); ?>/<?php echo e($product->feasured_image); ?>">
                            <img id="zoom_09"
                                 src="<?php echo e(url('/public/uploads')); ?>/<?php echo e($product->folder); ?>/<?php echo e($product->feasured_image); ?>"
                                 data-zoom-image="<?php echo e(url('/public/uploads')); ?>/<?php echo e($product->folder); ?>/<?php echo e($product->feasured_image); ?>">
                            <div id="gallery_09">
                                <div id="gallery_09" style="max-width: 1200px; margin-left: -6px;">

                                    <?php
                                    if($product->galary_image_1){
                                        ?>
                                    <a  href="javascript:void(0)" class="elevatezoom-gallery"
                                                                     data-image="<?php echo e(url('/public/uploads')); ?>/<?php echo e($product->folder); ?>/<?php echo e($product->feasured_image); ?>"
                                                                     data-zoom-image="<?php echo e(url('/public/uploads')); ?>/<?php echo e($product->folder); ?>/<?php echo e($product->feasured_image); ?>"><img
                                                src="<?php echo e(url('/public/uploads')); ?>/<?php echo e($product->folder); ?>/<?php echo e($product->feasured_image); ?>"
                                                width="200"></a>

                                        <a  href="javascript:void(0)" class="elevatezoom-gallery"
                                            data-image="<?php echo e(url('/public/uploads')); ?>/<?php echo e($product->folder); ?>/<?php echo e($product->galary_image_1); ?>"
                                            data-zoom-image="<?php echo e(url('/public/uploads')); ?>/<?php echo e($product->folder); ?>/<?php echo e($product->galary_image_1); ?>"><img
                                                    src="<?php echo e(url('/public/uploads')); ?>/<?php echo e($product->folder); ?>/<?php echo e($product->galary_image_1); ?>"
                                                    width="200"></a>

                                    <?php }?>


                                        <?php
                                        if($product->galary_image_2){
                                        ?>


                                        <a  href="javascript:void(0)" class="elevatezoom-gallery"
                                            data-image="<?php echo e(url('/public/uploads')); ?>/<?php echo e($product->folder); ?>/<?php echo e($product->galary_image_2); ?>"
                                            data-zoom-image="<?php echo e(url('/public/uploads')); ?>/<?php echo e($product->folder); ?>/<?php echo e($product->galary_image_2); ?>"><img
                                                    src="<?php echo e(url('/public/uploads')); ?>/<?php echo e($product->folder); ?>/<?php echo e($product->galary_image_2); ?>"
                                                    width="200"></a>

                                        <?php }?>
                                        <?php
                                        if($product->galary_image_3){
                                        ?>


                                        <a  href="javascript:void(0)" class="elevatezoom-gallery"
                                            data-image="<?php echo e(url('/public/uploads')); ?>/<?php echo e($product->folder); ?>/<?php echo e($product->galary_image_3); ?>"
                                            data-zoom-image="<?php echo e(url('/public/uploads')); ?>/<?php echo e($product->folder); ?>/<?php echo e($product->galary_image_3); ?>"><img
                                                    src="<?php echo e(url('/public/uploads')); ?>/<?php echo e($product->folder); ?>/<?php echo e($product->galary_image_3); ?>"
                                                    width="200"></a>

                                        <?php }?>
                                        <?php
                                        if($product->galary_image_4){
                                        ?>


                                        <a  href="javascript:void(0)" class="elevatezoom-gallery"
                                            data-image="<?php echo e(url('/public/uploads')); ?>/<?php echo e($product->folder); ?>/<?php echo e($product->galary_image_4); ?>"
                                            data-zoom-image="<?php echo e(url('/public/uploads')); ?>/<?php echo e($product->folder); ?>/<?php echo e($product->galary_image_4); ?>"><img
                                                    src="<?php echo e(url('/public/uploads')); ?>/<?php echo e($product->folder); ?>/<?php echo e($product->galary_image_4); ?>"
                                                    width="200"></a>

                                        <?php }?>
                                        <?php
                                        if($product->galary_image_5){
                                        ?>


                                        <a  href="javascript:void(0)" class="elevatezoom-gallery"
                                            data-image="<?php echo e(url('/public/uploads')); ?>/<?php echo e($product->folder); ?>/<?php echo e($product->galary_image_5); ?>"
                                            data-zoom-image="<?php echo e(url('/public/uploads')); ?>/<?php echo e($product->folder); ?>/<?php echo e($product->galary_image_5); ?>"><img
                                                    src="<?php echo e(url('/public/uploads')); ?>/<?php echo e($product->folder); ?>/<?php echo e($product->galary_image_5); ?>"
                                                    width="200"></a>

                                        <?php }?>




                                </div>
                            </div>
                        </div>
                        <div id="mobile_picture" class="col-sm-4 images" style="display: none;">
                            <div class="demo">
                                <div class="lSSlideOuter  noPager">
                                    <div class="lSSlideWrapper usingCss">
                                        <ul id="lightSlider" class="lightSlider lsGrab lSSlide"
                                            style="width: 0px; transform: translate3d(0px, 0px, 0px); height: 0px; padding-bottom: 0%;">
                                            <li data-thumb="https://www.dhakabaazar.com/uploads/multifunctional-wire-box-and-mobile-holder-jm70-5-min.jpg"
                                                class="lslide active" style="width: 0px; margin-right: 0px;"><img
                                                        src="https://www.dhakabaazar.com/uploads/multifunctional-wire-box-and-mobile-holder-jm70-5-min.jpg">
                                            </li>
                                            <li data-thumb="https://www.dhakabaazar.com/uploads/multifunctional-wire-box-and-mobile-holder-jm70-1-min.jpg"
                                                class="lslide" style="width: 0px; margin-right: 0px;"><img
                                                        src="https://www.dhakabaazar.com/uploads/multifunctional-wire-box-and-mobile-holder-jm70-1-min.jpg">
                                            </li>
                                            <li data-thumb="https://www.dhakabaazar.com/uploads/multifunctional-wire-box-and-mobile-holder-0002-min.jpg"
                                                class="lslide" style="width: 0px; margin-right: 0px;"><img
                                                        src="https://www.dhakabaazar.com/uploads/multifunctional-wire-box-and-mobile-holder-0002-min.jpg">
                                            </li>
                                        </ul>
                                        <div class="lSAction"><a class="lSPrev"></a><a class="lSNext"></a></div>
                                    </div>
                                    <ul class="lSPager lSGallery"
                                        style="margin-top: 5px; transition-duration: 400ms; width: 1.05556px; transform: translate3d(0px, 0px, 0px);"></ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-5 mt40column"><h1 class="headinglefttitle"><?php echo e($product->product_title); ?></h1>
                            <p class="sku">Product Code: <?php echo e($product->sku); ?></p>
                            <div class="price-and-cart">
                                <div class="prices"> <div class="addreview">
                                        <a class="clkaddreview" href="javascript:void(0)">Write a Review</a>
                                    </div>

                                    <?php
                                    if ($product->discount_price) {
                                    $sell_price = $product->discount_price;


                                    ?>
                                    <del class="bn"> <?php echo '৳' . $product->product_price; ?></del>

                                    <?php } else {   $sell_price = $product->product_price;  } ?>


                                    <span class="bn"> <?php echo '৳' . $sell_price; ?></span>
                                </div>
                                <div class="availability in-stock">Availability: <span><?php echo $product_availability ;?></span></div>
                                <p id="product_errror" style="color:blue"></p>
                                <p>
                                    <!----------------------------------- product size ****************************--> </p>
                                <div class="prices">
                                    <form action="" method="POST" id="" enctype="multipart/form-data"><br>
                                        <div class="btns">
                                            <div class="cell-qty text-center">
                                                <div class="input-group">
                                                    <div class="input-group-btn">
                                                        <button type="button" id="btnMinus" class="btn btn-danger minus">
                                                            -
                                                        </button>
                                                    </div>
                                                    <div class="quantity"><input required="" type="text" width="25"
                                                                                 name="product_qty" id="product_qty"
                                                                                 value="1" class="input-text qty text">
                                                    </div>
                                                    <div class="input-group-btn">
                                                        <button type="button" id="btnPlus" class="btn btn-success plus">+
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="javascript:void(0)" class="btn btn-primary add_to_cart"
                                               data-product_id="<?php echo e($product->product_id); ?>" data-picture="<?php echo e(url('/public/uploads')); ?>/<?php echo e($product->folder); ?>/small/<?php echo e($product->feasured_image); ?>" >Add
                                                to Cart</a> <a href="javascript:void(0)" class="btn btn-primary buy_now"
                                                               data-product_id="<?php echo e($product->product_id); ?>" data-picture="<?php echo e(url('/public/uploads')); ?>/<?php echo e($product->folder); ?>/small/<?php echo e($product->feasured_image); ?>" >Order
                                                Now</a></div>
                                    </form>
                                </div>
                            </div>
                            <div class="phone-order bn"> ☎ 01750-445553 ☎ 01916-524306 ☎ 01784-472014 ☎ 01797-313046
                            </div>
                            <div class="share-btns"><a
                                        href="http://www.facebook.com/sharer.php?m2w&amp;s=100&amp;p[url]=&amp;p[images][0]= &amp;p[title]= "
                                        target="_blank" rel="nofollow" data-tooltip="" data-placement="bottom" title=""
                                        class="share-facebook" data-original-title="Facebook"> <img
                                            src="https://www.dhakabaazar.com/images/social/fb.png" alt="FBShare"> </a>
                                <a href="https://twitter.com/intent/tweet?source= &amp;text=:%20 " target="_blank"
                                   onclick="window.open('https://twitter.com/intent/tweet?text='+encodeURIComponent(document.title)+':%20'+encodeURIComponent(document.URL));return false;">
                                    <img src="https://www.dhakabaazar.com/images/social/tw.png" alt="Tweet"> </a> <a
                                        href="https://plus.google.com/share?url= " target="_blank"
                                        onclick="window.open('https://plus.google.com/share?url='+encodeURIComponent(document.URL));return false;">
                                    <img src="https://www.dhakabaazar.com/images/social/gp.png" alt="GoogleShare"> </a>
                                <a href="http://www.linkedin.com/shareArticle?mini=true&amp;url= &amp;title=&amp;summary=&amp;source= "
                                   target="_blank"
                                   onclick="window.open('http://www.linkedin.com/shareArticle?mini=true&amp;url='+encodeURIComponent(document.URL)+'&amp;title='+encodeURIComponent(document.title));return false;">
                                    <img src="https://www.dhakabaazar.com/images/social/in.png" alt="LinkedInShare">
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-3 col-optional">
                            <div class="vertical-menu">
                                <a class="active" target="_blank"
                                                          href="<?php echo e(url('/')); ?>/category/<?php echo e($category_name_first); ?>"><?php echo e($category_title_first); ?> </a>

                                <?php if($categories_right): ?>
                                    <?php $__currentLoopData = $categories_right->unique('category_name'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $right_cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                   <a target="_blank" href="<?php echo e(url('/')); ?>/category/<?php echo e($right_cat->category_name); ?>"> <?php echo e($right_cat->category_title); ?></a>

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="productdesc">
                <ul class="nav nav-tabs" id="myTab">
                    <li class="description active"><a href="#description">Description</a></li>
                    <li class="terms"><a href="#terms">Terms &amp; Conditions</a></li>
                    <li class="review"><a href="#review">Review Ratings</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="description">
                        <div class="tabbox-container">

                            <?php echo $product->product_description; ?>
                        </div>
                    </div>
                    <div class="tab-pane" id="terms">
                        <div class="tabbox-container">
                            <?php echo get_option('default_product_terms'); ?>
                        </div>
                    </div>
                    <div class="tab-pane" id="review">
                        <div class="row reviews">
                            <div class="col-sm-3 review-left">
                                <div class="rating-overall">
                                    <div>5 stars
                                        <div class="track"><span style="width:80%"></span></div>
                                        (0)
                                    </div>
                                    <div>4 stars
                                        <div class="track"><span style="width:60%"></span></div>
                                        (0)
                                    </div>
                                    <div>3 stars
                                        <div class="track"><span style="width:40%"></span></div>
                                        (0)
                                    </div>
                                    <div>2 stars
                                        <div class="track"><span style="width:20%"></span></div>
                                        (&lt;0)
                                    </div>
                                    <div>1 star
                                        <div class="track one-star"><span style="width:5%"></span></div>
                                        (0)
                                    </div>
                                </div>
                                <h3 class="heading3 mt30">Write a Review</h3>
                                <fieldset class="field field-rating srating"><input type="radio" id="star5"
                                                                                    name="rating" value="5"> <label
                                            class="full" for="star5" title="5 stars"></label> <input type="radio"
                                                                                                     id="star4"
                                                                                                     name="rating"
                                                                                                     value="4"> <label
                                            class="full" for="star4" title="4 stars"></label> <input type="radio"
                                                                                                     id="star3"
                                                                                                     name="rating"
                                                                                                     value="3"> <label
                                            class="full" for="star3" title="3 stars"></label> <input type="radio"
                                                                                                     id="star2"
                                                                                                     name="rating"
                                                                                                     value="2"> <label
                                            class="full" for="star2" title="2 stars"></label> <input type="radio"
                                                                                                     id="star1"
                                                                                                     name="rating"
                                                                                                     value="1"> <label
                                            class="full" for="star1" title="1 star"></label></fieldset>
                                <div class="form-group"><input type="text" name="name"
                                                               class="form-control field field-name" placeholder="Name">
                                </div>
                                <div class="form-group"><input type="text" name="email"
                                                               class="form-control field field-email"
                                                               placeholder="Email"></div>
                                <div class="form-group"><textarea rows="3" name="comment"
                                                                  class="form-control field field-comment"
                                                                  placeholder="Comments"></textarea></div>
                                <input type="hidden" name="product_id" value="999">
                                <p id="review_message"></p>
                                <button type="button" id="reviewbtn" class="btn btn-new form-control">continue</button>
                            </div>
                            <div class="col-sm-9 review-right">
                                <div class="rating-overall-desc">
                                    <div class="rating"><span style="width:80%"></span></div>
                                </div>
                                <br><h4>No reviews found!</h4></div>
                        </div>
                    </div>
                </div>
            </div>
            <section id="related-products" class="mt70 remove_class"><h2 class="heading3">related Products</h2>
                <ul class="products row">


                    <span id="related_product"></span>



                    </ul>

            </section> <!-- hotdeal products -->

        </div>
    </section>

    <!-- /.body-content -->
    <input type="hidden" id="related_product_id" name="product_id" value="<?php echo $product_id_related; ?>">






    <script>
        jQuery(document).ready(function () {


            var product_id = jQuery('#related_product_id').val();


            $.ajax({

                url: "<?php echo e(url('related/product')); ?>?product_id=" + product_id,
                method: "get",
                success: function (data) {

                    jQuery("#related_product").html(data.html);


                }
            });
        });

    </script>






<?php $__env->stopSection(); ?>

<?php echo $__env->make('website.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\SXampp\htdocs\bdshopping\resources\views/website/product.blade.php ENDPATH**/ ?>