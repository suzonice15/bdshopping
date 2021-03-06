@extends('website.master')
@section('mainContent')


    <span class="product_search"></span>

    <div class="container-fluid remove_class" style="background-color: white;">

        <div class="row">
    <div class="col-sm-12 remove_class maincnt">
        <section class="banner-slider">
            <div class="innerbox">
                <div id="bannerSlider" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">

                        <?php $count=0;?>
                        @if($sliders)
                            @foreach($sliders as $slider)

                        <div class="item <?php if($count==0) { echo 'active';} else { echo '';}  ?> "><img src="{{ url('public/uploads/sliders')}}/{{$slider->homeslider_picture}}"
                                                      alt="{{$slider->homeslider_title}}"></div>




                                <?php ++$count?>

                            @endforeach
                        @endif



                            <ol class="carousel-indicators">
                                <?php $count=0;?>
                                @if($sliders)
                                    @foreach($sliders as $slider)

                                    <li data-target="#bannerSlider" data-slide-to="<?php echo $count;?>" class="<?php if($count==0) { echo 'active';}  ?> ">&nbsp;</li>

                                            <?php ++$count?>

                                        @endforeach
                                    @endif
                            </ol>



                    </div>
                </div>
            </div>
        </section> <!-- Zia Edith --> <!-- Zia Edith end -->
    </div>
        </div>
        </div>
    <div class="container-fluid remove_class" style="background-color: white;">
        <div class="row" style="margin-top: 50px;">


            <?php

            if($home_categories) {
                foreach ($home_categories as $category){
            ?>
            <div class="col-md-1 col-sm-3 col-xs-3"><a   href="{{url('/category/')}}/{{$category->category_name}}">
                    <img
                            class="img-responsive"
                            src="{{url('/public')}}/uploads/category/{{$category->medium_banner}}">
                </a>
                <p>{{$category->category_title}}</p>
                </div>

            <?php }

                } ?>



    </div>
    </div>


    <?php
    $home_cat = explode(",", get_option('home_cat_section'));
    //   $home_cat_section= array_key_first($home_cat_section);
    $home_cat_section = reset($home_cat);
     if($home_cat_section){
    //  $category_id=$category->category_id;
    $category_info = get_category_info($home_cat_section);


   if($category_info){
    $products= DB::table('product')
            ->select('product.product_id','product_title','product_name','discount_price','product_price','folder','feasured_image','sku')
            ->join('product_category_relation','product.product_id','=','product_category_relation.product_id')
            ->where('product_category_relation.category_id',$home_cat_section)->where('status','=',1)
            ->orderBy('modified_time','desc')->paginate(10);
    ?>
    <div class="container remove_class"
         style="background-color: white; margin-top: 23px; margin-bottom: 0px; padding-left: 27px; padding-right: 19px;">
        <div class="category-tabs" style="margin-top: 9px; border-bottom: 3px solid #244A04; margin-left: -14px;"><a
                    class="parent"
                    style="background-color:#244A04; padding: 4px 19px; color: white; margin: 22px -3px auto; margin-bottom: auto; margin-bottom: auto; height: 59px; margin-bottom: -29px; font-size: 16px; border-radius: 6px;"
                    href="{{ url('/') }}/category/{{ $category_info->category_name}}">{{ $category_info->category_title}}</a>
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
                                            href="{{url('/')}}/{{ $product->product_name }}"
                                            id="1148"> <img class="img-responsive " style="margin: 0 auto;padding:5px"
                                                            src="{{ url('/public/uploads') }}/{{ $product->folder }}/thumb/{{ $product->feasured_image }} "
                                                            title=" {{ $product->product_title }}">
                                    </a>
                                    <div class="pro-desc">
                                        <div class="pro-name"><a
                                                    href="{{url('/')}}/{{ $product->product_name }}">
                                                {{ $product->product_title }}</a></div>
                                        <div style="margin-bottom: -1px;"></div>
                                        <div class="clearfix">
                                            <div class="price bn">
                                                <?php
                                                if($product->discount_price){


                                                ?>
                                                <del>   @money($product->product_price)</del>

                                                <?php } ?>
                                                @money($sell_price)
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


    <?php } } ?>




    <span class="home_page_category"></span>


    <script>

        jQuery.ajax(
                {
                    url: "{{url('/home_page_category_ajax')}}",

                    type: "get",
                }).done(function (data) {
                    // console.log(data.html)
                    if (data.html == " ") {


                    }


                    jQuery(".home_page_category").html(data.html);

                    $('.owl-carousel').owlCarousel({
                        items: 6,
                        margin: 10,
                        nav: false,
                        dots: false,
                        autoplay: true,
                        slideBy: 6,
                        autoplayHoverPause: true,
                        rewind: true,
                        responsive: {
                            0: {
                                items: 3
                            },
                            760: {
                                items: 4
                            },
                            960: {
                                items: 7
                            },
                            1170: {
                                items: 7
                            }
                        }
                    });


                })

                .fail(function (jqXHR, ajaxOptions, thrownError) {



                });
    </script>



@endsection
