<!DOCTYPE html>
<html>


<?php


$customer_id = Session::get('customer_id');


if (isset($page_title)) {
    $title = $page_title . '-' . get_option('site_title');
} else {

    $title = get_option('site_title');
}




?>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title><?=$title?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?=get_option('icon')?>">

    <meta name="title" content="<?php if (isset($seo_title)) {
        echo $seo_title;
    }?>"/>
    <meta name="keywords" content="<?php if (isset($seo_keywords)) {
        echo $seo_keywords;
    }?>"/>
    <meta name="description" content="<?php if (isset($seo_description)) {
        echo $seo_description;
    }?>"/>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="_base_url" content="{{ url('/') }}">

    <meta name="robots" content="index,follow"/>


    <link rel="canonical" href="{{url()->current()}}"/>
    <meta property="og:locale" content="EN"/>
    <meta property="og:url" content="{{url()->current()}}"/>
    <meta property="og:type" content="<?php if (isset($seo_description)) {
        echo $seo_description;
    }?>"/>
    <meta property="og:title" content="<?php if (isset($seo_title)) {
        echo $seo_title;
    }?>"/>
    <meta property="og:description" name="description" content="<?php if (isset($seo_description)) {
        echo $seo_description;
    }?>"/>
    <meta property="og:image" content="<?php if (isset($share_picture)) {
        echo $share_picture;
    } ?>"/>
    <meta property="og:site_name" content="<?php if (isset($seo_keywords)) {
        echo $seo_keywords;
    }?>"/>



    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,800italic,300italic,600italic,400,800,700,600,300"/>
    <link href="http://fonts.googleapis.com/css?family=Tahoma"/>
    <link rel="stylesheet" type="text/css"
          href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/font_end/')}}/css/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/font_end/')}}/css/flipclock.css"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/font_end/')}}/css/liquid-slider.css"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/font_end/')}}/css/flexslider.css"/>
    <script type="text/javascript" src="{{ asset('assets/font_end/')}}/js/html5shiv.js"></script>
    <script type="text/javascript" src="{{ asset('assets/font_end/')}}/js/respond.min.js"></script>
    <script type="text/javascript" src="{{ asset('assets/font_end/')}}/js/jquery-1.10.2.js"></script>
    <script type="text/javascript" src="{{ asset('assets/font_end/')}}/js/jquery-migrate.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/lightslider.css"/>
    <!--<link rel="stylesheet" type="text/css" href="https://www.dhakabaazar.com/css/jquery.countdown.css"/>-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/font_end/')}}/css/style.css"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/font_end/')}}/css/custom.css"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/font_end/')}}/css/owl.carousel.min.css"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/font_end/')}}/css/owl.theme.default.min.css "/>
    <!-- single product -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/font_end/')}}/css/jquery.bxslider.css"/>
    <script src="{{ asset('assets/font_end/')}}/js/jquery.bxslider.min.js"></script>
    <script>var ci_version = '3.0.3';</script>
    <script>var base_url = '{{url('/')}}/';</script> <!-- Facebook Pixel Code -->

    <meta name="csrf-token" content="{{ csrf_token() }}" />


<body class="<?php if(isset($class)){ echo  $class; } ?>">
<header>
    <div id="hpart">
        <div class="container">
            <div class="wel-text">Welcome to <span>Bdshopping zone.</span></div>
            <div class="pull-right">
                <div class="topnav mobile"><span class="glyphicon glyphicon-menu-hamburger"></span></div>
                <!-- edith by zia for trac order -->
                <div class="track_order"><a href="{{url('/')}}/trackorder"><span
                                class="glyphicon glyphicon-search"></span> Track Order</a></div>
                <!-- edith by zia for trac order end -->
                <ul class="ac-link clearfix">
                    <li><a href="{{url('/')}}"><span class="glyphicon glyphicon-home"></span>  Home</a>
                    </li>
                    <li><a href="{{url('/')}}/contact"><span class="glyphicon glyphicon-envelope"></span>
                            Complain</a></li>
                    <li><a href="{{url('/')}}/trackorder"><span
                                    class="glyphicon glyphicon-search"></span> Track Order</a></li>
                    <li><a href="{{url('/')}}/checkout"><span
                                    class="glyphicon glyphicon-shopping-cart"></span> Order Now</a></li>
                    <li class="dropdown"><a href="javascript:void(0)" data-toggle="dropdown" class="user-logs"><span
                                    class="glyphicon glyphicon-user"></span> Account</a></li>
                </ul>
            </div>
        </div>
    </div>
    <section id="hpart1">
        <div class="container">
            <div class="row">
                <div class="col-sm-3 logo-area">
                    <div class="logo"><a href="{{url('/')}}"> <img class="main-logo"
                                                                                   src="{{get_option('logo')}}"
                                                                                   alt="Dhaka Bazar"> </a></div>
                </div>
                <div class="col-sm-9">
                    <div class="row row5">
                        <div class="col-sm-5 others pull-right">
                            <div class="pull-right">
                                <div class="video-tour"><a
                                            href="https://www.youtube.com/channel/UC6hCfmCPjL7Vfj_pUdByNFA/featured?view_as=subscriber"><img
                                                src="https://www.dhakabaazar.com/images/video-tour.png"></a></div>
                                <div class="hotline"><img src="https://www.dhakabaazar.com/images/phone.gif" alt="#"/>
                                    <a href="tel: <?=get_option('phone')?>"><?=get_option('phone')?></a></div>
                                <div class="cartbtnn"><a href="javascript:void(0)" class="cart-button">
                                        <div class="items"><img class="icon-shopping-bag"
                                                                src="https://www.dhakabaazar.com/images/juri.png">
                                            <div style="position: absolute;
    text-align: center;
    width: 24px;
    height: 24px;
    background: #f00;
    border-radius: 50%;
    line-height: 25px;
    color: #fff;
    top: 0;
    right: 47px;" class="itemcount item_0"><a style="color:white" href="{{url('/')}}/cart"><span  class="itemno">
                                                      <?php
                                                    $items = \Cart::getContent();
                                                    $total = 0;
                                                    $quantity = 0;
                                                    foreach ($items as $row) {
                                                        $total = \Cart::getTotal();
                                                        $quantity = Cart::getContent()->count();
                                                    }
                                                    echo $quantity;
                                                    ?>

                                                </span>
                                                </a>
                                            </div>
                                        </div>
                                    </a></div>
                                <div class="wishlistbtn"><a href="{{url('/')}}/wishlist"> <img
                                                src="https://www.dhakabaazar.com/images/lyb.png"> </a></div>
                            </div>
                        </div>
                        <div class="col-sm-7 search-area">
                            <form action="#" method="get"><input type="search" name="q" id="search_query2"
                                                                 placeholder="Search for products...">
                                <button><span class="glyphicon glyphicon-search"></span></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


            <!---- mobile menu -->

            <?php
            use Jenssegers\Agent\Agent;

            $agent = new Agent();
            $mobile = $agent->isMobile();
            $tablet = $agent->isTablet();



            if($mobile == 1 or $tablet == 1) {
            ?>
            <div class="category-menu">
                <a href="javascript:void(0)" class="view-all-cats">
                    <span
                            class="glyphicon glyphicon-menu-hamburger cat_span_bar"></span>
                    <h5 class="Categories_heading">
                        Categories</h5>
                </a>
                <ul class="catnavul"><a href="javascript:void(0)" class="close_category_menu">
                        <button type="button" class="close" aria-label="Close"><span class="z_close_btn"
                                                                                     aria-hidden="true">&times;</span>
                        </button>
                    </a>
                    <div class="list_all">



                        <?php

                        $categories=DB::table('category')
                                ->select('category_id','category_title','category_name')
                                ->where('parent_id',0)->get();

                        if($categories){
                        foreach ($categories as $category){
                        $second_parent_id=$category->category_id;
                        $secondCategory=DB::table('category')
                                ->select('category_id','category_title','category_name')
                                ->where('parent_id',$second_parent_id)->get();

                        ?>


                        <li class="clothing-items">
                            <a href="{{url('/')}}/category/{{$category->category_name}}">

                                {{$category->category_title}} <p class="dropdown_indicator">
                                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span></p>
                            </a>

                            <?php
                            if($secondCategory){


                            ?>

                            <div class="dropdown-menu">
                                <ul class="parentcat">


                                    <?php foreach ($secondCategory as $second_category) {

                                    $third_parent_id=$second_category->category_id;

                                    $thirdCategory=DB::table('category')
                                            ->select('category_title','category_name')
                                            ->where('parent_id',$third_parent_id)->get();

                                    ?>



                                    <?php if($thirdCategory) { ?>
                                     <li class="three-pices"><a href="{{url('/')}}/category/{{$second_category->category_name}}">   {{$second_category->category_title}} </a>
                                        <ul class="childcat">

                                            <?php foreach($thirdCategory as $third_category) {?>
                                            <li class="latest-salwar-kameez"><a
                                                        href="{{url('/')}}/category/{{$third_category->category_name}}"> {{$third_category->category_title}} </a></li>

                                            <?php }?>

                                        </ul>
                                    </li>
                                        <?php } else { ?>


                                    <li class="groun"><a href="{{url('/')}}/category/{{$second_category->category_name}}"> {{$second_category->category_title}} </a></li>

                                    <?php } }?>


                                </ul>
                            </div>

                            <?php } ?>



                        </li>

                        <?php }}?>






                    </div>
                </ul>
            </div>

            <?php } ?>



        </div>
    </section>
</header>
<div class="stickybar"></div>

<section id="content" class="main desktop">
    <div class="container">
        <div class="row">

            <?php



            if($mobile != 1 or $tablet != 1) {


            ?>
            <div class="col-sm-12 z_menu_top">
                <div class="nav-category bn desktop">
                    <div class="nav-heading">
                        <span class="glyphicon glyphicon-menu-hamburger cat_span_bar"></span>
                        <h5
                                class="Categories_heading">Categories</h5>
                    </div>
                    <ul class="navul">


<?php

                        $categories=DB::table('category')
                                ->select('category_id','category_title','category_name')
                                ->where('parent_id',0)->paginate(12);

                            if($categories){
                            foreach ($categories as $category){
                            $second_parent_id=$category->category_id;
                            $secondCategory=DB::table('category')
                                    ->select('category_id','category_title','category_name')
                                    ->where('parent_id',$second_parent_id)->get();

        ?>

                        <li class="clothing-items">
                            <a href="{{url('/')}}/category/{{$category->category_name}}">
                                           {{$category->category_title}}
                            </a>

                            <?php
                            if($secondCategory){


                            ?>

                            <div class="dropdown-menu">
                                <ul class="parentcat">

<?php foreach ($secondCategory as $second_category) {

                                $third_parent_id=$second_category->category_id;

                                    $thirdCategory=DB::table('category')
                                            ->select('category_title','category_name')
                                            ->where('parent_id',$third_parent_id)->get();

                                    ?>



    <?php if($thirdCategory) { ?>

                                    <li class="three-pices"><a href="{{url('/')}}/category/{{$second_category->category_name}}"> {{$second_category->category_title}} </a>
                                        <ul class="childcat">

                                            <?php foreach($thirdCategory as $third_category) {?>

                                            <li class="latest-salwar-kameez"><a
                                                        href="{{url('/')}}/category/{{$third_category->category_name}}">{{$third_category->category_title}} </a></li>
                                            <?php } ?>

                                        </ul>
                                    </li>

    <?php } else { ?>

    <li class="groun"><a href="{{url('/')}}/category/{{$second_category->category_name}}"> {{$second_category->category_title}} </a>

    </li>
    <?php }?>


                                    <?php } ?>




                                </ul>
                            </div>
                            <?php } ?>

                        </li>

                        <?php }

    }
    ?>



                         </ul>



                </div>
            </div>

                <?php } ?>



        </div>
    </div>
</section>
