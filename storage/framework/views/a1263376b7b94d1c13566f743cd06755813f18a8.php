<?php $__env->startSection('mainContent'); ?>


    <span class="product_search"></span>

    <div class="breadcrumb" style="display:none"  >
        <div class="container-fluid">
            <div class="breadcrumb-inner">
                <ul class="list-inline list-unstyled">
                    <li><a href="<?php echo e(url('/')); ?>">Home</a></li>
                    <?php if(isset($category_name_first)) { ?>
                    <li><a href="<?php echo e(url('/category/')); ?>/<?php echo e($category_name_first); ?>" ><?php echo e($category_title_first); ?></a></li>
                    <?php } ?>
                    <?php if(isset($category_name_middle)) { ?>
                    <li><a href="<?php echo e(url('/category/')); ?>/<?php echo e($category_name_middle); ?>" ><?php echo e($category_title_middle); ?></a></li>
                    <?php } ?>
                    <li  class='active'><a href="<?php echo e(url('/category/')); ?>/<?php echo e($category_name_last); ?>" ><?php echo e($category_title_last); ?></a></li>

                </ul>
            </div>
            <!-- /.breadcrumb-inner -->
        </div>
        <!-- /.container -->
    </div>

    <div class="container remove_class">
        <div class="row row5 mt30">
            <div id="load_data">


                                            <span id="post-data">
                                                 <ul class="products row row5 mt30">
                                                     <div class="col-sm-12">
                                                  <?php echo $__env->make('website.category_ajax', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                                </div>
                                                 </ul>
                                            </span>


            </div>

        </div>
    </div>
    <input type="hidden"  id="category_name" name="category_name" value="<?php echo e($category_name); ?>">

    <script type="text/javascript">

        var page = 1;
        //jQuery('.ajax-load').show();
        jQuery(window).scroll(function() {


                page++;

                loadMoreData(page);



        });


        function loadMoreData(page){
   var category_name=$('#category_name').val();
            jQuery.ajax(

                {

                    url:"<?php echo e(url('/ajax_category')); ?>?page="+page+"&category_name="+category_name,

                    type: "get",

                    beforeSend: function()

                    {

                        //jQuery('.ajax-load').show();

                    }

                })

                .done(function(data)

                {
                // console.log(data.html)
                    if(data.html == " "){

                        jQuery('.ajax-load').html("No more records found");

                        return;

                    }

                    jQuery('.ajax-load').hide();

                    jQuery("#post-data").append(data.html);

                })

                .fail(function(jqXHR, ajaxOptions, thrownError)

                {

                   // alert('server not responding...');

                });

        }

    </script>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('website.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\SXampp\htdocs\bdshoppingzon\resources\views/website/category.blade.php ENDPATH**/ ?>